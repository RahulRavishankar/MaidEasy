<?php

$hostname="localhost";
$user="root";
$pass="";
$database="MaidEasy";

$username=$_POST["username"];  
$password=$_POST["passwd"]; 

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

//Compare username and Password
$sql="SELECT * FROM Account_details WHERE Username='$username' AND Password='$password' ";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result);
if($row['Username']==$username && $row['Password']==$password)
if(mysqli_query($connect,$sql))
{
	echo 'Login Successful';
}
else{
    echo 'Login Failed';
}
//header("Location:login.html");

// closing connection
mysqli_close($connect);
?>
