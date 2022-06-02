
<?php
session_start();
include("db.php");

error_reporting(0);

 $email =$_SESSION['email'];
 if($email==true)
 {

 }else{
   header('location:../../admin_login.php');
 }

  $email = $_SESSION['email'];

  $sql="select * from doctor where email='$email'";
  $data =mysqli_query($conn,$sql);
  $result = mysqli_fetch_assoc($data);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../plugins/bootstrap/bootstrap_5.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/admin_panel_style.css" />
    <title>SkyCare Deshboard / Doctor</title>
</head>

<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=" me-2"></i>Sky Care</div>
            <div class="list-group list-group-flush my-3">
              <a href="add_patient_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
              class="fas fa-user-plus me-2"></i>Add Patient</a>
               <a href="my_appointments_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-list me-2"></i>My Appointments</a>
              <a href="doctors_list_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-list me-2"></i>Doctors Lsit</a>
              <a href="patients_list_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                      class="fas fa-list me-2"></i>Patients Lsit</a>
                
                <a href="profile_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-user-shield me-2"></i>Profile</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color: #474343;"></i>
                    <h2 class="fs-2 m-0">Doctor Dashboard / Profile</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>User
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                

                <div class="container">
                    <div class="main-body">
                    
                          
                    
                          <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                              <div class="card">
                                <div class="card-body">
                                  <div class="d-flex flex-column align-items-center text-center">
                                    <img src="../../<?php echo $result['image']; ?>" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                      <h4><?php echo $result['name']; ?></h4>
                                      <p class="text-secondary mb-1"><?php echo $result['specialist']; ?></p>
                                      <p class="text-muted font-size-sm"><?php echo $result['address']; ?></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col-md-8">
                              <div class="card mb-3">
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                     <?php echo $result['name']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <?php echo $result['email']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <?php echo $result['phone']; ?>
                                    </div>
                                  </div>
                                     <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <?php echo $result['age']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <?php echo $result['gender']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                      <?php echo $result['address']; ?>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <a href="edit_profile_doctor.php">
                                        <?php echo "<a  href='edit_profile_doctor.php?id=$result[id]' class='btn-style-one' style='' title='Edit'>Edit</a>"; ?>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                
                            </div>
                          </div>
                
                        </div>
                    </div> 

                

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="../../plugins/bootstrap/bootstrap_5.bundle.min.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>