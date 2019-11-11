<?php

$hostname="localhost";
$user="root";
$pass="";
$database="MaidEasy";

$username=$_POST["Name"];  
$password=$_POST["Password"];
$houseno=$_POST["Houseno"];
$helpername=$_POST["HelperName"];
$worktype=$_POST["WorkType"];
$timeslot=$_POST["TimeSlot"];
$communityname=$_POST["CommunityName"];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Connecting to the Server
try
{
	$connect=mysqli_connect($hostname,$user,$pass);
}catch(Exception $ex)
{ echo 'Sorry, Couldn\'t Connect'; }


//Selecting the database
if(mysqli_select_db($connect,$database))
{
	echo "<script>alert('Database selected');console.log('Database selected');</script>";
}  

//Insert Values
$sql="INSERT INTO `signup_table`(`Name`,`Password`, `House_no`, `Helper_name`, `WorkType`, `TimeSlot`, `Community_Name`) 
VALUES ('$username','$password','$houseno','$helpername','$worktype','$timeslot','$communityname') ";
if(mysqli_query($connect,$sql))
{
	echo '<script>console.log("Data added successfully!");</script>';
}
header("Location:login.html");

// closing connection
mysqli_close($connect);
?>
