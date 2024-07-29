<?php
include "include/config.php";


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $getS="delete  from Students where id='$id'";
    if(mysqli_query($conn,$getS))
    {
        echo"
        <script>
        alert('Student Delete Successfully');
        window.location.href='indexStudent.php';
        </script>
        ";
    }
    else
    {
        echo"
        <script>
        alert('Student Delete Failled');
        window.location.href='indexStudent.php';
        </script>
        ";
    }
  
}
?>

