<?php
include "include/header.php";
include "admin/include/config.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sqlStu="select * from students where id='$id'";
    $result =mysqli_query($conn,$sqlStu);
    $student=mysqli_fetch_assoc($result);
   // print_r($student);
}
?>
<main>
<div class="container mt-4">
    <h1>Student Details</h1>
    <div class="card mb-4">
        <div class="card-header">
            <h2><?php echo $student['name']?>  <a href="admin/idcard.php?id=<?php echo $student['id']?>" class="btn btn-success float-end">Id Card</a> </h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                   
                        <img src="admin/image/<?php echo $student['image']?>" alt="Profile Photo" class="img-fluid rounded">
                   
                </div>
                <div class="col-md-8">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="row">Student ID</th>
                                <td><?php echo $student['id']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Course</th>
                                <td><?php echo $student['course']?></td>
                            </tr>
                            <tr>
                                <th scope="row">School</th>
                                <td>Balaji Academy Gorakhpur</td>
                            </tr>
                            <tr>
                                <th scope="row">Date Of Birth</th>
                                <td><?php echo $student['dob']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Gender</th>
                                <td><?php echo $student['gender']?></td>
                                </tr>

                            <tr>
                                <th scope="row">Parents' Names</th>
                                <td><?php echo $student['fname']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Parents' Contact Details</th>
                                <td><?php echo $student['phone']?></td>
                            </tr>
                            <tr>
                                <th scope="row">Address</th>
                                <td><?php echo $student['address']?></td>
                            </tr>
                           
                         
                            <tr>
                                <th scope="row">Enrollement Number</th>
                                <td><?php echo $student['enrollement']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
</div>
</main>
<?php
include "include/footer.php"
?>