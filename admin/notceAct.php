<?php
include "include/config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $selectN="select * from notices where id='$id'";
    $result=mysqli_query($conn,$selectN);
    $newN=mysqli_fetch_assoc($result);
    if($newN['stutus']==0)
    {
        $actNotice="update notices set stutus='1' where id='$id'";
    }
    else
    {
$actNotice="update notices set stutus='0' where id='$id'";
    }

  if(mysqli_query($conn,$actNotice))
    {
        echo "
        <script>
        alert('Notice Activated Successfully');
        window.location.href='indexNotice   .php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Notice Activated Failled');
        window.location.href='indexNotice.php';
        </script>
        ";
    }
}
?>