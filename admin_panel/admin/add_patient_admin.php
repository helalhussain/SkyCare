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
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">Sky Care</div>
            <div class="list-group list-group-flush my-3">
                <a href="add_admin.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-user-plus me-2"></i>Add</a>
                        <a href="doctors_list_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list me-2"></i>Doctors List</a>
                        <a href="patients_list_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                                class="fas fa-list me-2"></i>Patients List</a>
              <!--   <a href="requests_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                    <h2 class="fs-2 m-0">Admin Dashboard</h2>
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
                <div class="row g-3 my-2">
                    
            <!--=================================================================================================
            =                  Contact Section Starts here                       =
            ==================================================================================================-->
            
            <section style="margin-top: 50px;">
           
                

  <div class="page-wrapper">


<!--=================================================================================================
=                  Contact Section Starts here                       =
==================================================================================================-->

  <?php
    if(isset($_POST['reg'])){
  $name = $_POST['name'];

  $email = $_POST['email'];

  $blood = $_POST['blood'];
  $blood_null = $_POST['blood'];

  $gender = $_POST['gender'];
  $gender_null = $_POST['gender'];

  $city = $_POST['city'];
  $city_null = $_POST['city'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $age = $_POST['age'];
  $age_null = $_POST['age'];
      
  }else{
    
  $name = "";
  $age ="Age";
  $age_null = "";
  $email ="";
  $blood = "Blood group";
  $blood_null = "";

  $gender = "Gender";
  $city = "City";
  $city_null = "";
  $gender_null = "";
  $password = "";
  $confirm_password = "";
  $phone_no = "";
  $address = "";
  





  }

  

  ?>

<section style="margin-top: 50px;">
  <div class="container-fluid" style="max-width: 800px">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3 style="text-align: center;">Add <span>Patient</span></h3>
          </div>
          <form name="contact_form" class="default-form contact-form" action="" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" value="<?php echo $name; ?>" type="text" name="name" placeholder="Name" required>
                   <span class="_name_error"style="color:red;font-size:14px;"> </span>
                </div>

                <div class="form-group">
                  <input class="form-control" value="<?php echo $email; ?>" type="email" name="email" placeholder="Email" required>
                   <span class="email_error"style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <input class="form-control" type="number"value="<?php echo $phone; ?>" name="phone" placeholder="Phone" required>
                   <span class="phone_error"style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <select class="form-control" name="age" placeholder="Blood Group" required>
                    <option value="<?php echo $age_null; ?>"><?php echo $age; ?> </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                    <option value="7"> 7 </option>
                    <option value="8"> 8 </option>
                    <option value="9"> 9 </option>
                    <option value="10"> 10 </option>
                    <option value="11"> 11 </option>
                    <option value="12"> 12 </option>
                    <option value="13"> 13 </option>
                    <option value="14"> 14 </option>
                    <option value="15"> 15 </option>
                    <option value="16"> 16 </option>
                    <option value="17"> 17 </option>
                    <option value="18"> 18 </option>
                  </select>
                   <span class="age_error"style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <select class="form-control" name="blood" placeholder="Blood Group" required>
                    <option value=" <?php echo $blood_null; ?>"> <?php echo $blood; ?></option>
                    <option value="A+ ( A Positive )"> A+ ( A Positive ) </option>
                    <option value="A- ( A Negative ) "> A- ( A Negative ) </option>
                    <option value="B+ ( B Positive )"> B+ ( B Positive ) </option>
                    <option value="B- ( B Negative )"> B- ( B Negative ) </option>
                    <option value="AB+ ( AB Positive )"> AB+ ( AB Positive ) </option>
                    <option value="AB- ( AB Negative )"> AB- ( AB Negative ) </option>
                    <option value="O+ ( O Positive )"> O+ ( O Positive ) </option>
                    <option value="O- ( O Negative )"> O- ( O Negative ) </option>
                  </select>
                   <span class="blood_error"style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <select class="form-control" name="gender" placeholder="Gender" required>
                    <option value="<?php echo $gender_null; ?>"><?php echo $gender; ?> </option>
                    <option value="Male"> Male </option>
                    <option value="Female "> Female </option>
                    <option value="Other"> Other </option>
                  </select>
                   <span class="gender_error"style="color:red;font-size:14px;"> </span>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" value="<?php echo $address; ?> " name="address" placeholder="Address ...." required> <?php echo $address; ?></textarea>
                </div>
                <div class="form-group">
                  <select class="form-control" name="city" placeholder="Blood Group" required>
                    <option value="<?php echo $city_null; ?>" > <?php echo $city; ?> </option>
                    <option value="Dhaka"> Dhaka </option>
                    <option value="Chittagong"> Chittagong </option>
                    <option value="Khulna"> Khulna </option>
                    <option value="Rajshahi"> Rajshahi </option>
                    <option value="Sylhet">Sylhet </option>
                    <option value="Comilla"> Comilla </option>
                    <option value="Barisal"> Barisal </option>

                  </select>
                   <span class="city_error"style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" value="<?php echo $password; ?>" name="password" placeholder="Password" required>
                   <span class="password_error" style="color:red;font-size:14px;"> </span>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" value="<?php echo $confirm_password; ?>" name="confirm_password" placeholder="Confirm Password" required>
                </div>
                 <span class="confirm_password_error" style="color:red;font-size:14px;"> </span>
              </div>
              <div class="col-md-12">
                <div class="form-group text-center">
                  <button type="submit" name="reg"  class="btn-style-one">SIGN UP</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<?php 
include('db.php');


if(isset($_POST['reg'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  $phone = $_POST['phone'];
  $age = $_POST['age'];
  $blood = $_POST['blood'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $city = $_POST['city'];



   $querys ="SELECT * FROM patient WHERE email='$email'";
       $datas =mysqli_query($conn,$querys);
       $tot =mysqli_num_rows($datas);
       $totals =mysqli_fetch_assoc($datas);
       

 if($email != $email){
   echo "<script>$('.email_error').html('Your email is available');</script>";
 }
elseif(strlen($name) < 2 || strlen($name) > 14){
          echo "<script>$('.name_error').html('First name must be 2 to 14 digits');</script>";
         }

elseif(strlen($password) < 5 || strlen($password) > 20) {
          echo "<script>$('.password_error').html('Password must be 5 to 20 digits');</script>";
           }
  elseif(strlen($confirm_password) < 5 || strlen($confirm_password) > 20) {
          echo "<script>$('.confirm_password_error').html('Password must be 5 to 20 digits');</script>";
           }
  elseif($password != $confirm_password){
          echo "<script>$('.password_error').html('Password are not equel');</script>";
          echo "<script>$('.confirm_password_error').html('Password are not equel');</script>";
              
          }
 elseif(strlen($phone)!=11){
    echo "<script>$('.phone_error').html('Phone number must be 11 digits');</script>";
         }
  elseif(!preg_match("/^[0]\d{10}$/",$phone)){
    echo "<script>$('.phone_error').html('Number is  invalid');</script>";
         }


 elseif(strlen($address) < 3 || strlen($address) > 50){
    echo "<script>$('.address_error').html('Last name must be 3 to 50 digits');</script>";
         }

else{

        $sql = "INSERT INTO patient VALUES(NULL,'$name','$email','$password','$phone','$age','$blood','$gender','$address','$city')";
        $query = mysqli_query($conn,$sql);
        echo '<script>alert("Patient Added")</script>'; 
        if($query){
          ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/SkyCare/admin_panel/admin/patients_list_admin.php">

          <?php
        }else{
          echo "<script>$('.email_error').html('Your email is available');</script>";
        }
        

      }
      


}





 ?>





  
<!--------------------------------- Contact Section Ends here -------------------------------->


</div>
<!--End pagewrapper-->

                
            </section>   
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