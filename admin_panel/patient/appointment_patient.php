
<?php 
session_start();
include("db.php");

error_reporting(0);

$email =$_SESSION['email'];
if($email==true)
{

}else{
  header('location:../../patient_login.php');
}

  $email = $_SESSION['email'];

    $sql="select * from patient where email='$email'";
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
    <title>SkyCare Deshboard / Patient</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=" me-2"></i>Sky Care</div>
            <div class="list-group list-group-flush my-3">
                <a href="doctors_list_patient.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-list me-2"></i>Doctors List</a>
                <a href="my_appointments_patient.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-inbox me-2"></i>My Appointments</a>
                <a href="profile_patient.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-shield me-2"></i>Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color: #474343;"></i>
                    <h2 class="fs-2 m-0">Patient Dashboard</h2>
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
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    
            <!--=================================================================================================
            =                  Contact Section Starts here                       =
            ==================================================================================================-->
            <?php 
    $get_doctor_id = $_GET['id'];

 ?>
     
            
            <section style="margin-top: 50px;">
                <div class="container" style="max-width: 1000px">
                <div class="row" style="max-width: 950px">
                    <div class="col-lg-12 order-1 order-lg-0">
                    <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
                        <div class="section-title">
                        <h3 style="text-align: center;"><span> Add </span> Appointment </h3>
                        </div>
                        <form name="contact_form" class="default-form contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                  <select class="form-control" name="time" required>
                                    <option >Time : </option>
                                    <option value="Morning(9 AM - 12 PM)">Morning (9 AM - 12 AM)</option>
                                    <option value="Evening (1 PM - 6 PM)">Evening (1 PM - 6 PM)</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input class="form-control" type="date" name="date" placeholder="Date" required id="datepicker" >
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <textarea class="form-control" name="details" placeholder="Problem Details" required></textarea>
                                </div>
                                <div class="form-group text-center">
                                  <button type="submit" name="appoint" class="btn-style-one">Add</button>
                                </div>
                              </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <?php 
                if(isset($_POST['appoint'])){
                    $time=$_POST['time'];
                    $date=$_POST['date'];
                    $detail=$_POST['details'];
                    $doctor_id = $get_doctor_id;
                    $patient_id= $result['id'];
                    $accept = "accept";
                    $def="0";

     $apoinment = "INSERT INTO apoinment VALUES(NULL,'$def','$def','$def','$def','$patient_id','$doctor_id','$date','$time','$detail','$accept')";
        $apoint_query = mysqli_query($conn,$apoinment);
            if($apoint_query){
          ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/SkyCare/admin_panel/patient/my_appointments_patient.php">

          <?php
        }else{
          echo "not";
        }

                }

             ?>
            <!--------------------------------- Contact Section Ends here -------------------------------->
                    
                    
                </div>

                

            </div>

        </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    
    <script src="../../plugins/jquery.min.js"></script>
    <script src="../../plugins/popper.js-1.16.1/dist/popper.min.js"></script>
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