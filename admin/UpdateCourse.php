<?php
include "include/config.php";
include "include/header.php";
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $getSdata="select * from course where id ='$id'";
$result=mysqli_query($conn,$getSdata);
$course=mysqli_fetch_assoc($result);
}
?>
 <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                  
                                    <h3 class="text-center font-weight-light my-4">Create Course</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="saveUpdateCourse.php" name="create_course">
                                        <input type="text" hidden value="<?php echo $course['id']?>" name="id">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="course_name" value="<?php echo $course['name']?>" name="course_name" type="text" placeholder="Enter course name" required />
                                            <label for="course_name">Course Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="course_description" name="course_description" placeholder="Enter course description" required>
                                                <?php
                                                echo $course['description']
                                                ?>
                                            </textarea>
                                            <label for="course_description">Course Description</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block" value="submit" name="submit">Update Course</button></div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </main>
<?php
include "include/footer.php"
?>