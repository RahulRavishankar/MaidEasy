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
        {   echo '<tr>'; 
                echo '<td>'.$row['Name'].'</td>';
                echo '<td>'.$row['House'].'</td>';
                echo '<td>'.$row['Work_Type'].'</td>'; 
                echo '<td>'.$row['Time'].'</td>'; 
                echo '<td>&#x20B9;'.$row['Pay'].'</td>'; 
                echo '<td>'.$row['Status'].'</td>'; 
                echo '<td><input type="button" onclick="alert(`Accepted`);"  value="Accept"/></td>'; 
            echo '</tr>'; 
        }
        exit();

    }
?>