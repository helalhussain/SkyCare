<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title> SkyCare </title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="SkyCare">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="SkyCare">
  <meta name="generator" content="SkyCare">
  
  <!--  Plugins Needed for the Project  -->
  <!-- bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animation/animate.min.css">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.css">

  <!--  Modal  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

  
  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">


</head>


<body>
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
  <div class="container" style="max-width: 800px">
    <div class="row">
      <div class="col-lg-12 order-1 order-lg-0">
        <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
          <div class="section-title">
            <h3 style="text-align: center;">Create Your <span>Account</span></h3>
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


 elseif(strlen($address) < 3 || strlen($address) > 250){
    echo "<script>$('.address_error').html('Last name must be 3 to 250 digits');</script>";
         }

else{

        $sql = "INSERT INTO patient VALUES(NULL,'$name','$email','$password','$phone','$age','$blood','$gender','$address','$city')";
        $query = mysqli_query($conn,$sql);
        
        if($query){
          echo '<script>alert("Account  Create Success")</script>'; 
          ?>
            <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/SkyCare/patient_login.php">

          <?php
        }else{
          echo "<script>$('.email_error').html('Your email is available');</script>";
        }
        

      }
      


}





 ?>







  <span Class="d-flex justify-content-center"> If you already have an account , 
    <a id="open-modal"  style="color: #48bdc5;" > &nbsp;Sign in here </a></span>
 
    <div class="modal__container" id="modal-container">
      <div class="modal__content">
          <div class="modal__close close-modal" title="Close">
              <i class='bx bx-x' style="color: #FFF; background: #48bdc5;"></i>
          </div>

          <img src="modal/img/login icon.png" alt="" class="modal__img">

          <h1 class="modal__title"> Sign in Options </h1>

          <div style="margin-bottom: 1.5rem">
          <a href="patient_login.php">
            <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Patient </button>
          </a>
          <a href="doctor_login.php">
            <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Doctor </button>
          </a>
          <a href="admin_login.php">
            <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Admin </button>
          </a>
          </div>
          
          <span class="close-modal" style="color: black; margin-top: 0.5rem; cursor: pointer;"> Close </span>
        </div>
    </div>

    <br>
  <a Class="d-flex justify-content-center" style="color: #48bdc5; margin-bottom: 50px;" href="index.php">back to home</a>
  
<!--------------------------------- Contact Section Ends here -------------------------------->


</div>
<!--End pagewrapper-->


<!--=================================================================================================
=                    JavaScript Links                      =
==================================================================================================-->

<!-- jquery -->
<script src="plugins/jquery.min.js"></script>
<!-- bootstrap -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>

<!-- jquery-ui -->
<script src="plugins/jquery-ui/jquery-ui.js" defer></script>

<!-- script js -->
<script src="js/script.js"></script>

</body>

</html>
