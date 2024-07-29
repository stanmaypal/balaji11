<?php
include "include/header.php"
?>
<main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">

<div class="card-header">

<hr />
    <h3 class="text-center font-weight-light my-4">Student Login</h3></div>
                                    <div class="card-body">
                                        
                                        <form method="post"  action="admin/StudentLog.php">
                                            
<div class="form-floating mb-3">
<input class="form-control" name="en" type="text" placeholder="name@example.com" required/>
<label for="inputEmail">Enrollment No</label>
</div>
                                            

<div class="form-floating mb-3">
<input class="form-control" name="pass" type="date" placeholder="Password" required />
<label for="inputPassword">DOB</label>
</div>


<div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<button class="btn btn-primary" name="login" value="login" type="submit">Login</button>
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