<?php
//print_r($_POST)
include "include/config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $pass=md5($_POST['pass']);
    $cpass=md5($_POST['cpass']);
    if($pass==$cpass)
    {
        $sqlAdmin="insert into admin (name,userId,email,phone,pass) values('$name','$user','$email','$mobile','$pass')";
        echo $sqlAdmin;
        $add=mysqli_query($conn,$sqlAdmin);
        if($add)
        {
            echo"<script>alert('Admin Registerd')</script>";
            header('Location:index.php');
        }
        else
        {
            echo"<script>alert('Admin not Registerd')</script>";
        }
    }
}
?>