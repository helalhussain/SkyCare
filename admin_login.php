<?php 
session_start();
include("db.php");

error_reporting(0);

$email =$_SESSION['email'];
if($email==true)
{
  header('location:admin_panel/admin/profile_admin.php');
}else{
  
}
// $query ="SELECT * FROM user WHERE user_email='$email'";
// $data =mysqli_query($conn,$query);
// $result = mysqli_fetch_assoc($data);
// include("header.php");
?>



<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title> SkyCare / Admin </title>

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

<section class="signin-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 order-1 order-lg-0">
          <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
            <div class="section-title">
              <h3 style="text-align: center;">Sign In as <span>Admin</span></h3>
            </div>
            <form name="contact_form" class="default-form contact-form" action="" method="post">
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                  </div>
  
                  <div class="form-group">
                      <input class="form-control" type="password" name="password" placeholder="Password" required>
                  </div>
  
                  <button type="submit" name="login" class="btn-style-one">sign in</button>
                  <br>
                  <br>
                  <br>
                  <a Class="d-flex justify-content-center" style="color: #48bdc5;" href="index.php">back to home</a>
                  
                </div>
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--------------------------------- Contact Section Ends here -------------------------------->


</div>
<!--End pagewrapper-->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php 



include("db.php");
error_reporting(0);
session_start();


if(isset($_POST['login'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  
      $query ="SELECT * FROM admin WHERE email='$email' &&  password='$password'";
      $data =mysqli_query($conn,$query);
      $total =mysqli_num_rows($data);
          
      if($total==1)
      { 
        $_SESSION['email']=$email;
        header("location:admin_panel/admin/profile_admin.php");  


      }
      else{
        
        echo '<script>alert("User name or Password Incorrect")</script>';
      }
    
    
  }

  
?>
<!--------------------------------- Contact Section Ends here -------------------------------->




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
