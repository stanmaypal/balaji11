<?php
session_start();
//print_r($_POST);
include "include/config.php";
if(isset($_POST['email'])&& isset($_POST['pass']))
{
$user=$_POST['email'];
$pass=md5($_POST['pass']);

$getAll="select * from admin where email='$user'";
$result=mysqli_query($conn,$getAll);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        $cpass= $row['pass'];
        if($pass==$cpass)
        {
           $_SESSION['name']=$row['name'];
           $_SESSION['id']=$row['id'];
           //echo $_SESSION['name'];
           //echo $_SESSION['id'];
            header('Location:dashboard.php');
        }
        else
        {
            echo "<script>alert('Data not found')</script>"; 
        }
    }

}
else
{
    echo "<script>alert('Data not found')</script>";
}
}
?>