
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
$get_edit_id= $_GET['id'];

    $edit_query="select * from patient where id='$get_edit_id'";
    $edit_run =mysqli_query($conn,$edit_query);
   $edit_profile = mysqli_fetch_assoc($edit_run);


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
                <a href="profile_patient.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                    <h2 class="fs-2 m-0">Patient Dashboard / Edit Profile</h2>
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
                                    <img src="../../images/blog/comment pf.jpg" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                      <h4><?php echo $edit_profile['name']; ?></h4>
                                      <p class="text-secondary mb-1">Full Stack Developer</p>
                                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="col-md-8">
                              <div class="card mb-3">
                                <div class="card-body">
                              <form method="POST">
                              
                                <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="name" value="<?php echo $edit_profile['name']; ?>" placeholder="Name" required>
                                    </div>
                                    </div>
                                  </div>

                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="phone" value="<?php echo $edit_profile['phone']; ?>" placeholder="Phone" required>
                                    </div>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Age</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <div class="form-group">
                                    <input class="form-control" type="number" name="age" value="<?php echo $edit_profile['age']; ?>" placeholder="Age" required>
                                    </div>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-3">
                                      <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                    <div class="form-group">
                                    <input class="form-control" type="text" name="address" value="<?php echo $edit_profile['address']; ?>" placeholder="Address" required>
                                    </div>
                                    </div>
                                  </div>
         
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <button class="btn-style-one" name="edit_prof" >Save</button>
                                    </div>
                                  </div>
                               
                              </form>

                             <form method="POST">
                                <hr>
                                  <div class="form-group">
                                    <input class="form-control" type="password" name="current_password" placeholder="Current Password" required>
                                  </div>
                                  <span class="current_password_error" style="color:red;font-size:14px;"> </span>
                                  <br>
                                  <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="password" placeholder="New Password" required>
                                        </div><span class="password_error" style="color:red;font-size:14px;"> </span>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
                                        </div>
                                          <span class="confirm_password_error" style="color:red;font-size:14px;"> </span>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="row">
                                    <div class="col-sm-12">
                                      <button class="btn-style-one"  type="submit" name="change">Save</button>
                                    </div>
                                  </div>
                              </form>
   </div>
                                </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php 


if(isset($_POST['change'])){

   $get_edit_id= $_GET['id'];


  $current_password = $_POST['current_password'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  $pass_query="select * from patient where id='$get_edit_id'";
  $pass_run =mysqli_query($conn,$pass_query);
  $pass_profile = mysqli_fetch_assoc($pass_run);

   if($current_password== $pass_profile['password']){
    if($password != $confirm_password){

        echo "<script>$('.password_error').html('Password are not equel');</script>";
         echo "<script>$('.confirm_password_error').html('Password are not equel');</script>";
    }else{
        $pass_edit_query ="UPDATE patient SET password='$password'  WHERE id='$get_edit_id'";
       echo '<script>alert("Password Edit Success")</script>'; 
      
       $pass_edit_sql = mysqli_query($conn,$pass_edit_query);
        if($pass_edit_sql){
        ?>
         <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/patient/profile_patient.php">

        <?php
      }else{

      }
    }


   }else{
    echo "<script>$('.current_password_error').html('Incorrect Password');</script>";
   }


  

}




 ?>
                              
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
<?php 


if(isset($_POST['edit_prof'])){

  $name = $_POST['name'];

  $get_edit_id= $_GET['id'];

  $age = $_POST['age'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];




  $edit_query ="UPDATE patient SET name='$name', phone='$phone', age='$age', address='$address'  WHERE id='$get_edit_id'";
  echo '<script>alert("Account Edit Success")</script>'; 

            $edit_sql = mysqli_query($conn,$edit_query);
        if($edit_sql){
        ?>
          <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/skycare/admin_panel/patient/profile_patient.php">

        <?php
      }else{

      }
  

}




 ?>
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