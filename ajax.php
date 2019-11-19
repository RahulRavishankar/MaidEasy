<?php
    session_start();
    include('request.php');
    //save data to php
    if(isset($_POST["clicked-submit"])){
        $name=$_POST["Name"];
        $houseno=$_POST["House"];
        $worktype=$_POST["WorkType"];
        $time=$_POST["Time"];
        $pay=$_POST["Pay"];

        
        //Insert Values
        $sql="INSERT INTO `requests`(`Name`, `House`, `Work_Type`, `Time`, `Pay`,`Status`)
        VALUES ('$name','$houseno','$worktype','$time','$pay','') ";
        if(mysqli_query($connect,$sql))
        {
            echo '<script>console.log("Data added successfully!");</script>';
        }
        exit();
    }
    //display form database
    if(isset($_POST["display"])){
        $result=mysqli_query($connect,"SELECT * FROM requests"); 
        while($row=mysqli_fetch_array($result))
        { ?> 
            <div>
            <p>
                Name: <?php echo $row['Name']?><span style="color: transparent;">abcd</span>
                HouseNo.:<?php echo $row['House']; ?> <span style="color: transparent;">abcd</span>
                Task: <?php echo $row['Work_Type']; ?><span style="color: transparent;">abcd</span>
                Time: <?php echo $row['Time']; ?> <span style="color: transparent;">abcd</span>
                Payment: &#x20B9; <?php echo $row['Pay']; ?><span style="color: transparent;">abcd</span> 
                Status:<?php echo $row['Status']; ?>
                <input type="button" value="Accept" onclick="accept()"/>
            </p>
            </div>
            <script>
            function accept()
            {
                //update values in database
                <?php 

                    $sql="UPDATE `requests` SET `Status`='Accepted by'.strval(?) WHERE Name=? AND House=? AND Work_Type=? AND Time=?";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([$_SESSION['Username'], $row['Name'],$row['House'],$row['Work_Type'],$row['Time'],]);
                    if(mysqli_query($connect,$sql))
                    {
                        echo '<script>console.log("Accepted successfully!");</script>';
                    }
                 ?>
            }
            </script>
        <?php 
        }
        exit();

    }
?>