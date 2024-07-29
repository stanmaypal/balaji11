<?php
// print_r($_POST);
// print_r($_FILES);
include "include/config.php";
if(isset($_POST))
{
    $name=$_POST['name'];
    $fa=$_POST['father'];
    $ma=$_POST['mother'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $course=$_POST['course'];
    $phone=$_POST['phone'];
    $tenth=$_POST['tenth_percentage'];
    $twelth=$_POST['twelfth_percentage'];
    $ad=$_POST['aadhaar'];
    $address=$_POST['address'];
    $regDate=$_POST['registration_date'];
    $img=$_FILES['photo']['name'];
    $imgtemp=$_FILES['photo']['tmp_name'];


    $enroll='BJAG'.date('mhis');
    echo $enroll;

    if(move_uploaded_file($imgtemp,'image/'.$img))
    {
        $insertStu="
        insert into students (`name`, `fname`, `mname`, `dob`, `gender`, `email`, `course`, `phone`, `tenth`, `twelth`, `adhar`, `address`, `regDate`, `enrollement`,`image`) values('$name','$fa','$ma','$dob','$gender','$email','$course','$phone','$tenth','$twelth','$ad','$address','$regDate','$enroll','$img')
        ";
        if(mysqli_query($conn,$insertStu))
        {
            echo "
            <script>
            alert('Student Register Successful');
            window.location.href='dashboard.php'
            </script>
            ";  
        }
        else
        {
            echo "
            <script>
            alert('Student Register Failled');
            window.location.href='dashboard.php'
            </script>
            "; 
        }

    }
    else{
        echo "
        <script>
        alert('Upload Image Failled');
        window.location.href='dashboard.php'
        </script>
        ";  
    }

}
?>