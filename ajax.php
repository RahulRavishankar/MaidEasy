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
        { 
            if($row["Status"] != "Accepted")
            {
                echo "Name: " . $row["Name"] . "<br>";
                echo "House: " . $row["House"]. "<br>";
                echo "Work: " . $row["Work_Type"]. "<br>";
                echo "Time: " . $row["Time"]. "<br>";
                echo "Pay: Rs. " . $row["Pay"]. "<br>";
                echo "<br>";
                echo " <input type=\"button\" value=\"Accept\"/>";
                echo "<br>";
            }
        }
    }
?>
