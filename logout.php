<?php
session_start();
if(session_destroy())
{
    echo '<script>alert("Logged out Successfully");</script>';
    header("Location:maideasy.php");
}
?>