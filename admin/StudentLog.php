<?php
//print_r($_POST);
include "include/config.php";
if(isset($_POST['en'])&& isset($_POST['pass']))
{
    $enNo=$_POST['en'];
    $pass=$_POST['pass'];
    $getStuinfo="select * from students where enrollement='$enNo'";
    $result=mysqli_query($conn,$getStuinfo);
    if(mysqli_num_rows($result)>0)
    {
        while($stu=mysqli_fetch_assoc($result))
        {
            $dob=$stu['dob'];
            $id=$stu['id'];
            // echo $dob;
            // echo $pass;
            if($dob==$pass)
            {
                header("Location:../studentInfo.php?id=$id");
            }

        }

    }
    else
    {
        echo "
        <script>
        alert('Invalid enrollement and DOB');
        window.location.href='../stuLog.php';
            </script>
        ";
    }

}
?>