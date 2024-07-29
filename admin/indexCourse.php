<?php
include "include/header.php";
include "include/config.php";
function getCourse($conn)
{
    $getCourse1="select * from Course";
    $course=[];
    $result=mysqli_query($conn,$getCourse1);
    while($row=mysqli_fetch_assoc($result))
    {
        $course[]=$row;
    }
    return $course;
}

$course=getCourse($conn)


?>
<main>
<div class="container-fluid px-4">
    <h1 class="mt-4">Class</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active">Class</li>
    </ol>
    
    <div class="card-header">   
        <i class="fas fa-table me-1"></i>
        Registerd Class
    </div>

        <table id="datatablesSimple" class="table table-bordered">
            <thead>
                <tr>
                    <th>Class ID</th>
             
                    <th>Class Name</th>
                    <th>Description</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Class ID</th>
                    <th>Class Name</th>
                    <th>Description</th>

                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($course as $cl) {?>
                <tr>
                    <td><?php echo $cl['id'] ?></td>
                    <td><?php echo $cl['name'] ?></td>
                    <td><?php echo $cl['description'] ?></td>

                    <td>
                        <!-- Add action buttons if needed -->
                        <a href="UpdateCourse.php?id=<?php echo $cl['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <form action="deleteCourse.php?id=<?php echo $cl['id'] ?>" method="POST" style="display:inline;">
                          
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this Course?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php }?>
           </tbody>
            </tbody>
        </table>
    </div>

</main>
<?php
include "include/footer.php"

?>