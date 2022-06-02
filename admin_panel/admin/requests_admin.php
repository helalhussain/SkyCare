
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

  $sql="select * from admin";
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
    <title>SkyCare Deshboard / Admin</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=" me-2"></i>Sky Care</div>
            <div class="list-group list-group-flush my-3">
                <a href="add_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-user-plus me-2"></i>Add</a>
                        <a href="doctors_list_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list me-2"></i>Doctors List</a>
                        <a href="patients_list_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list me-2"></i>Patients List</a>
             <!--    <a href="requests_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-inbox me-2"></i>Requests</a> -->
                <a href="profile_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Admin Dashboard / Requests</h2>
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

        <div class="row my-5">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2><b> Appoinment </b> Requests </h2></div>
                                <div class="col-sm-4">
                                        <div class="wrap">
                                   
                                         </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Doctor</th>
                                     <th>Time</th>
                                      <th>Date</th>
                                      <th>Message</th>
                                       <th>User</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                        <?php 
                                include('db.php');
                                $appoint_query ="SELECT * FROM apoinment WHERE accept='accept'";
                                 $appoint_data =mysqli_query($conn,$appoint_query);
                                while($appoint_list =mysqli_fetch_assoc($appoint_data)){
                                        $doctor_id=$appoint_list['doctor_id'];
                                        $patient_id=$appoint_list['patient_id'];

                                $ap_patient_query ="SELECT * FROM patient WHERE id='$patient_id'";
                                 $ap_patient_data =mysqli_query($conn,$ap_patient_query);
                                $ap_patient_list =mysqli_fetch_assoc($ap_patient_data);

                                   $ap_doctor_query ="SELECT * FROM doctor WHERE id='$doctor_id'";
                                 $ap_doctor_data =mysqli_query($conn,$ap_doctor_query);
                                $ap_doctor_list =mysqli_fetch_assoc($ap_doctor_data);

                                        ?>
                                <tr>
                                    <td><?php echo $ap_patient_list['id']; ?></td>
                                  
                                   <!--  <td><img src='<?php echo $app_patient_list['image'] ?>' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td> -->
                                    <td><?php echo $ap_patient_list['name']; ?></td>

                                   <td><?php echo $ap_doctor_list['name']; ?></td>
                                   <td><?php echo $appoint_list['time']; ?></td>

                                    <td><?php echo $appoint_list['date']; ?></td>
                                    <td><?php echo $appoint_list['massage']; ?></td>

                                     <td class="text-primary font-weight-bold"><?php if($appoint_list['patient_id']!=0){ echo "User";}else{
                                            echo "Non user";
                                           } ?></td>
                                          
                                    <td>
                                   <?php  echo "<a href='appointment_accept.php?id=$appoint_list[id]' class='accept' onclick='return checkdelete()' title='Acceot' data-toggle='tooltip' style='display: inline-block; margin: 0 14px'><i style='font-size: 30px;' class='far fa-check-circle'></i></a>"; ?>

                                    <?php echo "<a href='delete_appoinment.php?id=$appoint_list[id]' class='reject' title='Delete' data-toggle='tooltip'  onclick='return checkdelete()'  style='display: inline-block; margin: 0 5px'><i style='font-size: 30px;' class='far fa-times-circle'></i></a>" ?>
                                    </td>
                                </tr>
                                 <?php }?>
                            </tbody>
                        </table>
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
        <script>
  function checkdelete(){
      return confirm('Are you sure ?');
  }
</script>

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