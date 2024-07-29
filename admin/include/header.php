<?php
include "logSystem.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
     <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboard.php">Admin Panel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                 &nbsp;
                </div>
            </form>
             <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-5 my-5 my-md-0" method="post" action="search-result.php">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search User by name , email and contact number" title="Search User by name , email and contact number" aria-describedby="btnNavbarSearch" name="searchkey" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit" ><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="change-password.php">Change Password</a></li>
                        <li><hr class="dropdown-divider" /><?php echo $_SESSION['name'] ?></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                 
                            <a class="nav-link" href="createCourse.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              Create Course
                            </a>
                            <a class="nav-link" href="IndexCourse.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              Manage Course
                            </a>
                            <a class="nav-link" href="regStu.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              New Student
                            </a>
                            <a class="nav-link" href="indexStudent.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              Manage Student
                            </a>
                            <a class="nav-link" href="createNotice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              Add Notice
                            </a>
                            <a class="nav-link" href="IndexNotice.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                              Manage Notice
                            </a>
 <a class="nav-link" href="bwdates-report-ds.php">
                                <div class="sb-nav-link-icon"><i class="fa fa-calendar"></i></div>
                                B/w Dates Report
                            </a>

                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Signout
                            </a>
                        </div>
                    </div>
                
                </nav>
            </div>  
                      <div id="layoutSidenav_content">