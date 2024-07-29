<?php
$server="localhost";
$user="root";
$pass="";
$db="balaji11";
$conn=mysqli_connect($server,$user,$pass,$db);
if(!$conn)
{
    die("<script>alert('Databse not Connect!!')</script>");
}
?>