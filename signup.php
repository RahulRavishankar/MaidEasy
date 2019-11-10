<?php

$hostname="localhost";
$user="root";
$password="";
$database="MaidEasy";

$username=$_POST["Name"];  
//$password=$_POST["passwd"];
$houseno=$_POST["Houseno"];
$helpername=$_POST["HelperName"];
$worktype=$_POST["WorkType"];
$timeslot=$_POST["TimeSlot"];
$communityname=$_POST["CommunityName"];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//Connecting to the Server
try
{
	$connect=mysqli_connect($hostname,$user,$password);
}catch(Exception $ex)
{ echo 'Sorry, Couldn\'t Connect'; }


//Selecting the database
if(mysqli_select_db($connect,$database))
{
	echo "<script>alert('Database selected');console.log('Database selected');</script>";
}  

//Insert Values
$sql="INSERT INTO `signup_table`(`Name`, `House_no`, `Helper_name`, `WorkType`, `TimeSlot`, `Community_Name`) 
VALUES ('$username','$houseno','$helpername','$worktype','$timeslot','$communityname') ";
if(mysqli_query($connect,$sql))
{
	//echo 'Data added successfully!';
}
header("Location:login.html");

// closing connection
mysqli_close($connect);
?>
