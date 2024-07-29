<?php
//print_r($_POST)
include "include/config.php";
if(isset($_POST['submit']))
{
$name=$_POST['course_name'];
$desc=$_POST['course_description'];
$id=$_POST['id'];

$updateCourse="update course set name='$name',description='$desc' where id='$id'";

if(mysqli_query($conn,$updateCourse))
{
    echo "
    <script>
    alert('Update Course Successfull');
    window.location.href='indexCourse.php'
    </script>
    ";
}
else{
    
    echo "
    <script>
    alert('Update Course Failled');
      window.location.href='UpdateCourse.php?id=$id'
    </script>
    ";
}
}
?>