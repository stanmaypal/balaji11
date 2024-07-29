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
  <div id="layoutAuthentication">
  <div id="layoutAuthentication_content">
<main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                  
                                    <h3 class="text-center font-weight-light my-4">Student Registration</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="saveStudent.php" name="signup" onsubmit="return checkpass();" enctype="multipart/form-data"
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="photo" name="photo" type="file" accept="image/*" required />
                                            <label for="photo">Photo</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name" required />
                                            <label for="name">Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="father" name="father" type="text" placeholder="Enter your father's name" required />
                                            <label for="father">Father's Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="mother" name="mother" type="text" placeholder="Enter your mother's name" required />
                                            <label for="mother">Mother's Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="dob" name="dob" type="date" required />
                                            <label for="registration_date">DOB</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="gender" name="gender" required>
                                                <option value="" disabled selected>Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <label for="gender">Gender</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email" placeholder="yourname@example.com" required />
                                            <label for="email">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" id="course" name="course" required>
                                                <option value="" disabled selected>Select Course</option>
                                              
                                                <?php foreach($course as $class){?>
                                                
                                                    <option value="<?php echo $class['id']?>"><?php echo $class['name']?></option>
                                               
                                               <?php }?>
                                             
                                              
                                                <!-- Add more courses as needed -->
                                            </select>
                                            <label for="course">Course</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="phone" name="phone" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10" />
                                            <label for="phone">Phone</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="tenth_percentage" name="tenth_percentage" type="text" placeholder="10th Percentage" required pattern="\d+(\.\d{1,2})?" title="Numeric value with up to 2 decimal places" />
                                            <label for="tenth_percentage">10th Percentage</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="twelfth_percentage" name="twelfth_percentage" type="text" placeholder="12th Percentage" required pattern="\d+(\.\d{1,2})?" title="Numeric value with up to 2 decimal places" />
                                            <label for="twelfth_percentage">12th Percentage</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="aadhaar" name="aadhaar" type="text" placeholder="Aadhaar Number" required pattern="\d{12}" title="12 numeric characters only" maxlength="12" />
                                            <label for="aadhaar">Aadhaar Number</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="address" name="address" placeholder="Enter your address" required></textarea>
                                            <label for="address">Address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="registration_date" value="<?php echo date('Y-m-d'); ?>" name="registration_date" type="date" required readonly />
                                            <label for="registration_date">Registration Date</label>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <button type="submit" value="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            </div>
            </div>
<?php
include "include/footer.php"
?>