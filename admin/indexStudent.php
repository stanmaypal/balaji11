<?php
include "include/header.php";
include "include/config.php";
function getStudent($conn)
{
$getAll="SELECT students.id,students.name,students.enrollement,course.name  FROM students INNER JOIN course on  students.course=course.id;";
$students=[];
$result=mysqli_query($conn,$getAll);
while($stu=mysqli_fetch_assoc($result))
{
    $students[]=$stu;
}
return $students;

}
$students=getStudent($conn);
//print_r($students);
?>
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Student</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Student</li>
    </ol>
    
    <div class="card-header">   
        <i class="fas fa-table me-1"></i>
        Registerd Students
    </div>

        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Enrollment</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
            <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Enrollment</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
               <?php foreach ($students as $sl) {?>
                <tr>
                    <td><?php echo $sl['id']?></td>
                    <td><?php echo $sl['name']?></td>
                    <td><?php echo $sl['name']?></td>
                    <td><?php echo $sl['enrollement']?></td>
<td>

<a href="viewStudent.php?id=<?php echo $sl['id']?>" class="btn btn-warning">View</a>
<a href="editStudent.php?id=<?php echo $sl['id']?>" class="btn btn-info">Edit</a>
<form action="deleteStudent.php?id=<?php echo $sl['id']?>" method="post">
    <button class="btn btn-danger"onclick="confirm('Are You Sure ??')">Delete</button>
</form>

</td>
                </tr>
                
                
                <?php
                }?>
           </tbody>
            </tbody>
        </table>
    </div>

</main>
<?php
include "include/footer.php"

?>