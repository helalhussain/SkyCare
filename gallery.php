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
=           		 Header Top                   =
==================================================================================================-->

<div class="header-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="top-left text-center text-md-left">
          <h6>Opening Hours : Saturday to Tuesday - 8am to 10pm</h6>
        </div>
      </div>
      <div class="col-md-6">
        <div class="top-right text-center text-md-right">
          <ul class="social-links">
            <li>
              <a href="#" aria-label="facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#" aria-label="twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#" aria-label="google-plus">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li>
              <a href="#" aria-label="instagram">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#" aria-label="pinterest">
                <i class="fab fa-pinterest-p"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-------------------------- header top Ends here --------------------------------->


<!--=================================================================================================
=           		 Header Upper                   =
==================================================================================================-->

<section class="header-uper">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-4 col-lg-3">
        <div class="logo">
          <a href="index.php">
            <img loading="lazy" class="img-fluid" src="images/logo.png" alt="logo">
          </a>
        </div>
      </div>
      <div class="col-xl-8 col-lg-9">
        <div class="right-side">
          <ul class="contact-info pl-0 mb-4 mb-md-0">
            <li class="item text-left">
              <div class="icon-box">
                <i class="far fa-envelope"></i>
              </div>
              <strong>Email</strong>
              <br>
              <a href="#">
                <span>support@skycare.com</span>
              </a>
            </li>
            <li class="item text-left">
              <div class="icon-box">
                <i class="fas fa-phone"></i>
              </div>
              <strong>Call Now</strong>
              <br>
              <span>0170*******</span>
            </li>
          </ul>
          <div class="link-btn text-center text-lg-right">

            <button class="btn-style-one" id="open-modal"> Sign in </button>

              <div class="modal__container" id="modal-container">
                <div class="modal__content">
                    <div class="modal__close close-modal" title="Close">
                        <i class='bx bx-x' style="color: #FFF; background: #48bdc5;"></i>
                    </div>

                    <img src="modal/img/login icon.png" alt="" class="modal__img">

                    <h1 class="modal__title"> Sign in Options </h1>

                    <div style="margin-bottom: 1.5rem">
                    <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Patient </button>
                    <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Doctor </button>
                    <button class="btn-style-one modal__button-width" style="margin-bottom: 0.5rem "> Admin </button>
                    </div>
                    
                    <span class="close-modal" style="color: black; margin-top: 0.5rem; cursor: pointer;"> Close </span>
                  </div>
              </div>


            <a href="registration.php" class="btn-style-one"> Sign up </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-----------------Header Upper Ends here --------------------->



<!--=================================================================================================
=            Nevbar             =
==================================================================================================-->

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarLinks">
      <ul class="navbar-nav">
        <li class="nav-item @@home">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item @@service">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item @@team">
          <a class="nav-link" href="doctors.php">DOCTORS</a>
        </li>
        <li class="nav-item @@appointment">
          <a class="nav-link" href="appointment.php">Appointment</a>
        </li>
        <li class="nav-item @@blog">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item @@contact">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!------------------ Navbar Ends here ------------------------>

<!--=================================================================================================
          =            Page Title Section Starts here             =
==================================================================================================-->

<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>gallery</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>gallery</li>
            </ul>
        </div>
    </div>
</section>
<!------------------ Page Title Section Ends here ------------------------->


<!--=================================================================================================
          =           Video Gallery Section Starts here             =
==================================================================================================-->

<section class="video-gallery">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Collected Media
            <span>of Our Hospital</span>
          </h3>
          <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
            <br>iews. Iterative approaches to corporate strategy...</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="video-gallery-item">
          <div class="image-holder">
            <img loading="lazy" src="images/gallery/video-background-1.jpg" class="img-fluid" alt="video-gallery">
            <a data-fancybox href="https://youtu.be/KWlLSFmolJg"><i class="fa fa-play"></i></a>
          </div>
          <h3>Video Title</h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="video-gallery-item">
          <div class="image-holder">
            <img loading="lazy" src="images/gallery/video-background-2.jpg" class="img-fluid" alt="video-gallery">
            <a data-fancybox href="https://youtu.be/KWlLSFmolJg">
              <i class="fa fa-play"></i>
            </a>
          </div>
          <h3>Video Title</h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="video-gallery-item">
          <div class="image-holder">
            <img loading="lazy" src="images/gallery/video-background-3.jpg" class="img-fluid" alt="video-gallery">
            <a data-fancybox href="https://youtu.be/KWlLSFmolJg">
              <i class="fa fa-play"></i>
            </a>
          </div>
          <h3>Video Title</h3>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="video-gallery-item">
          <div class="image-holder">
            <img loading="lazy" src="images/gallery/video-background-4.jpg" class="img-fluid" alt="video-gallery">
            <a data-fancybox href="https://youtu.be/KWlLSFmolJg">
              <i class="fa fa-play"></i>
            </a>
          </div>
          <h3>Video Title</h3>
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================================================================================
          =            Gallery Section Starts here             =
==================================================================================================-->

<section class="gallery bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h3>Collected Shots
            <span>of Our Hospital</span>
          </h3>
          <br>
          <br>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-01.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-01.jpg"></a>
          <h3>Facility 01</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-02.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-02.jpg"></a>
          <h3>Facility 02</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-03.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-03.jpg"></a>
          <h3>Facility 03</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-04.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-04.jpg"></a>
          <h3>Facility 04</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-05.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-05.jpg"></a>
          <h3>Facility 05</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-06.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-06.jpg"></a>
          <h3>Facility 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-07.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-07.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div><div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-08.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-08.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div><div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-09.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-09.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div><div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-10.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-10.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div><div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-11.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-11.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
      </div><div class="col-lg-4 col-md-6">
        <div class="gallery-item">
          <img loading="lazy" src="images/gallery/gallery-12.jpg" class="img-fluid" alt="gallery-image">
          <a data-fancybox="images" href="images/gallery/gallery-12.jpg"></a>
          <h3>Photo 06</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p>
        </div>
    </div>
  </div>
</section>
<!------------------ Gallery Section Ends here ------------------------->

<!--=================================================================================================
=            Footer Section Starts here             =
==================================================================================================-->

<footer class="footer-distributed">

	<div class="footer-left">

		<h3><img src="images/logo.png" alt="logo"></h3>

	</div>

	<div class="footer-center">

		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>Amborkhana Point</span> Sylhet , Bangladesh </p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+88017********</p>
		</div>

		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@skycare.com">support@skycare.com</a></p>
		</div>

	</div>

	<div class="footer-right">

		<p class="footer-company-about">
			<span>About the company</span>
			Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
		</p>

		<div class="footer-icons">

			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-linkedin"></i></a>
			<a href="#"><i class="fab fa-github"></i></a>

		</div>

	</div>

</footer>

<div class="footer-bottom">
  <div class="container clearfix">
    <div class="copyright-text">
      <p>Designed & Developed By " Masudur Rahman , Arifa Khatun Chowdhury</p>
    </div>
    <ul class="footer-bottom-link">
      <li>
        <a href="index.php">Home</a>
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
      <li>
        <a href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</div>

<!----------------- Footer section Ends here ---------------->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>



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