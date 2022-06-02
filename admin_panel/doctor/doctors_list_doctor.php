
<?php
session_start();
include("db.php");

error_reporting(0);

 $email =$_SESSION['email'];
 if($email==true)
 {

 }else{
   header('location:../../doctor_login.php');
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
                <a href="doctors_list_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-list me-2"></i>Doctors Lsit</a>
                <a href="patients_list_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-list me-2"></i>Patients Lsit</a>
              
                <a href="profile_doctor.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Doctor Dashboard / Doctors List</h2>
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
                                      <div class="col-sm-8"><h2><b> Doctors </b> List </h2></div>
                                      <div class="col-sm-4">
                                                  <div class="wrap">
                                        <form method="GET">
                                              <div class="search">
                                               <input type="text" name="search" class="search"value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" placeholder="What are you looking for?">
                                               <button type="submit" name="sear" class="searchButton">
                                                 <i class="fa fa-search"></i>
                                              </button>
                                            </div>
                                        </form>
                                         </div>

                                      </div>
                                  </div>
                              </div>
                                                                         <table class="table table-striped table-hover table-bordered">
                                  <thead>
                                      <tr class="table-dark">
                                          <th>#</th>
                                          <th>Image</th>
                                           <th>Name</th>
                                          <th>Specialist</th>
                                          <th>Address</th>
                                          <th>Phone</th>
                                          <th>Gender</th>
                                          <th>Actions</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                    <?php 
                                    

                                    if(isset($_GET['sear']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM doctor WHERE CONCAT(specialist,address) LIKE '%$filtervalues%' ORDER BY id DESC";

                                      $query_run = mysqli_query($conn, $query);


                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                     ?>

                           <tr>
                                          <td><?php echo $items['id']; ?></td>

                                          <td><img src="../admin/<?php echo $items['image']; ?>" style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                          <td><?php echo $items['name']; ?></td>
                                          <td><?php echo $items['specialist']; ?></td>
                                          <td><?php echo $items['address']; ?></td>
                                          <td><?php echo $items['phone']; ?></td>
                                <td><?php echo $items['gender']; ?></td>
                                         <td>
                                        <?php echo "<a  href='view_doctor_pf_doctor.php?id=$items[id]' class='view' title='View' data-toggle='tooltip' style='display: inline-block; margin: 0 14px'><i style='font-size: 30px;' class='far fa-eye'></i></a>"; ?>
                                       
                                          </td>
                                      </tr> 

                                    <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>




                               <?php 
                       
                                $doctor_query ="SELECT * FROM doctor";
                                 $data =mysqli_query($conn,$doctor_query);
                                while($doctor_list =mysqli_fetch_assoc($data)){?>

                                
                                      <tr>
                                          <td><?php echo $doctor_list['id']; ?></td>

                                          <td><img src="../admin/<?php echo $doctor_list['image']; ?>" style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                          <td><?php echo $doctor_list['name']; ?></td>
                                          <td><?php echo $doctor_list['specialist']; ?></td>
                                          <td><?php echo $doctor_list['address']; ?></td>
                                          <td><?php echo $doctor_list['phone']; ?></td>
                                            <td><?php echo $doctor_list['gender']; ?></td>
                                         <td>
                                        <?php echo "<a  href='view_doctor_pf_doctor.php?id=$doctor_list[id]' class='view' title='View' data-toggle='tooltip' style='display: inline-block; margin: 0 14px'><i style='font-size: 30px;' class='far fa-eye'></i></a>"; ?>

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
    
    <script src="../../plugins/jquery.min.js"></script>
    <script src="../../plugins/popper.js-1.16.1/dist/popper.min.js"></script>
    <script src="../../plugins/bootstrap/bootstrap_5.bundle.min.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };

        function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }

        
    </script>

    
</body>

</html>