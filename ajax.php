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
        $sql="INSERT INTO `requests`(`Name`, `House`, `Work_Type`, `Time`, `Pay`)
        VALUES ('$name','$houseno','$worktype','$time','$pay') ";
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
        {?> 
            <div id="">
            <p>
                Name: <?php echo $row['Name']; ?><br>
                House No.:<?php echo $row['House']; ?> <br>
                WorkType: <?php echo $row['Work_Type']; ?> <br>
                Time: <?php echo $row['Time']; ?> <br>
                Willing to Pay: &#x20B9; <?php echo $row['Pay']; ?> 
            </p>
            </div>
        <?php
        }
        exit();

    }
?>