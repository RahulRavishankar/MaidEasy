<?php

$hostname="localhost";
$user="root";
$pass="";
$database="MaidEasy";

$username=$_POST["username"];  
$password=$_POST["passwd"]; 

session_start();

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

//Compare username and Password
$sql="SELECT * FROM `signup_table` WHERE Username='$username' AND Password='$password' ";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if($row['Username']==$username && $row['Password']==$password)
{
	echo '<script>alert("Login Successful");</script>';
	$_SESSION["Username"]=$username;
	$_SESSION["Password"]=$password;
	header("Location:index.php");
}
else{
	echo '<script>alert("Login Failed");</script>';
	header("Location:loginpage.php");
}

// closing connection
mysqli_close($connect);
?>
