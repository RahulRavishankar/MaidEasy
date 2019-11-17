<?php
$hostname="localhost";
$user="root";
$pass="";
$database="MaidEasy";

/*$name=$_POST["Name"];  
$houseno=$_POST["HouseNo"];
$worktype=$_POST["WorkType"];
$time=$_POST["Time"];
$pay=$_POST["Pay"]; */

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
	echo "<script>console.log('Database selected');</script>";
}  

// closing connection
//mysqli_close($connect);

//header("Location:request.html");
?>