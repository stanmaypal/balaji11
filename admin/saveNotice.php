<?php
include "include/config.php";
if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $msg=$_POST['msg'];
    $date=date('Y-m-d');
   // echo $date;
    $st=0;
    $inserNtc="insert into notices (title,create_date,notice_masg,stutus)values('$title','$date','$msg','$st')" ;
    //echo $inserNtc;
    if(mysqli_query($conn,$inserNtc))
    {
        echo "
        <script>
        alert('Notice Create Successfully');
        window.location.href='dashboard.php';
        </script>
        ";
    }
    else{
            echo "
            <script>
            alert('Notice Create Failled');
            window.location.href='createNotice.php';
            </script>
            ";
    }
}
?>