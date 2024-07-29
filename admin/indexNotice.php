<?php
include "include/header.php";
include "include/config.php";
function getCourse($conn)
{
    $getCourse1="select * from notices ";
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
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
            <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach($course as $cl) {?>
                <tr>
                    <td><?php echo $cl['id'] ?></td>
                    <td><?php echo $cl['title'] ?></td>
                    <td><?php echo $cl['notice_masg'] ?></td>
                    <td><?php echo $cl['create_date'] ?></td>

                    <td>
                        <?php
                        if($cl['stutus']==0)
                        {?>
                            <a href="notceAct.php?id=<?php echo $cl['id']  ?>" class="btn btn-success">Dective</a>
                            <?php
                        }
                        else
                        {?>
              
                 <a  href="notceAct.php?id=<?php echo $cl['id']  ?>" class="btn btn-danger">Active</a>
                 <?php  
                        }
                        ?>
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