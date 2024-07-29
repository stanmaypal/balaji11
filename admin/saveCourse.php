<?php
//print_r($_POST)
include "include/config.php";
if(isset($_POST['submit']))
{
$name=$_POST['course_name'];
$desc=$_POST['course_description'];
$insertCourse="insert into course(name,description) values('$name','$desc')";

if(mysqli_query($conn,$insertCourse))
{
    echo "
    <script>
    alert('Create Course Successfull');
    window.location.href='indexCourse.php'
    </script>
    ";
}
else{
    
    echo "
    <script>
    alert('Create Course Failled');
      window.location.href='createCourse.php'
    </script>
    ";
}
}
?>