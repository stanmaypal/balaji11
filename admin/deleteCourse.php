<?php
include "include/config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $deleteCourse="delete from course where id='$id'";
    if(mysqli_query($conn,$deleteCourse))
    {
        echo "
        <script>
        alert(' Course Delete Successfull');
        window.location.href='indexCourse.php'
        </script>
        ";
    }
    else
    {

        echo "
    <script>
    alert(' Course Delete Failled');
    window.location.href='indexCourse.php'
    </script>
    ";
    }
}
?>