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
        <li class="nav-item active">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <li class="nav-item @@gallery">
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
            <h1>service</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>service</li>
            </ul>
        </div>
    </div>
</section>
<!------------------ Page Title Section Ends here ------------------------->

<!--=================================================================================================
          =            Service Overview and Accordion Section Starts here             =
==================================================================================================-->

<section class="service-overview section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="content-block">
          <h2>Our Madical <br>Equipment's & Services</h2>
          <p> To face all the cretical madical problems and fight with all kinds of diseases we are using modarn equipment's like ( X-Ray Machine, BMD Machine, MRI Machine 1.5T, OPG Machine, CT Scan Machine VCT-500, ECG Machine, OT light, OT table . )
          </p>
          <ul>
            <li><i class="fas fa-caret-right"></i>Covid-19 Isolation Unit</li>
            <li><i class="fas fa-caret-right"></i>ICU, CCU, HDU</li>
            <li><i class="fas fa-caret-right"></i>SkyCare Neurology, Physiotherapy, Dialysis</li>
            <li><i class="fas fa-caret-right"></i>Critical Care Unit, ENT Care, Gyne and Obs. Care</li>
          </ul>
          <a href="appointment.php" class="btn btn-style-one">Appoint</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="accordion-section">
  <div class="accordion-holder">
    <div class="accordion" id="accordionGroup" role="tablist" aria-multiselectable="true">
      <div class="card">
        <div class="card-header" role="tab" id="headingOne">
          <h4 class="card-title">
            <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              We Have Excellent Services 
            </a>
          </h4>
        </div>
        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionGroup">
          <div class="card-body">
            Clinical excellence must be the priority for any health care service provider. SkyCare ensures the best healthcare service comprise of professional (medical) service excellence with outstanding personal service. 
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingTwo">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo"
              aria-expanded="false" aria-controls="collapseTwo">
              Qualified Doctors 
            </a>
          </h4>
        </div>
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionGroup">
          <div class="card-body">
            SkyCare aims to provide the highest possible level of care by the qualified consultants from India, Singapore, USA, UK & quality hospitals in the Middle East. Even the nurses & technicians are also proficiently trained from Bangladesh, Australia, UK, India and The Philippines.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" role="tab" id="headingThree">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseThree"
              aria-expanded="false" aria-controls="collapseThree">
              Emergency Departments 
            </a>
          </h4>
        </div>
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordionGroup">
          <div class="card-body">
            <li><strong>For appointment, emergency, billing & information :</strong> 10616</li>
            <li><strong>Land phone :</strong> +88 05 8188877</li>
            <li><strong>Mobile no. :</strong> +88 001711111111</li>
            <li><strong>24-hour emergency & ambulance service :</strong> +88 01711111111</li>
            <li><a href="mailto:support@skycare.com" style="color: #48bdc5;"><strong>Email : </strong>support@skycare.com</a></li>
            
          </div>
        </div>
      </div>


      <div class="card">
        <div class="card-header" role="tab" id="headingFour">
          <h4 class="card-title">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapseFour"
              aria-expanded="false" aria-controls="collapseFour">
              Great Infrastructure  
            </a>
          </h4>
        </div>
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordionGroup">
          <div class="card-body">
            SkyCare has 3 buildings on both sides of the Panthapath Main Road, connected by an over bridge. The hospital with more than 6 lac square feet of space is situated in the central region of Dhaka city, capital of Bangladesh.
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
</div>
    </div>
  </div>
</section>
<!------------------ Service Overview and Accordion Section ENDs here ------------------------->

<!--=================================================================================================
          =            Service-Box Section Starts here             =
==================================================================================================-->

<div class="section-title text-center section">
  <h3>Our
    <span>Services</span>
  </h3>
</div>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/services/service-one.jpg" alt="service-image">
      </div>
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3>Laboratory</h3>
            </div>
            <div class="text">
              <h6> We have Ultra-modern Laboratory </h6>
              <p style="text-align: justify;"> Infrastructure-wise, our hospital stands out with all modern and hi-tech medical equipment and instruments. The ultra-modern Central Laboratory, with integrated laboratory solutions, supports round-the-clock and error-free patient diagnosis with 100% accuracy and perfection in carrying out all patient investigations. </p>
              <p style="text-align: justify;">We have a well-equipped and self sufficient pathological lab which meets the diagnosis needs of pathology patients. We have a Sysmex Hematology Analyzer from USA, Olympus Microscope from USA and Johnson & Johnson from USA. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3>ICU</h3>
            </div>
            <div class="text">
              <h6>Intensive Care Unit (ICU) </h6>
              <p style="text-align: justify;"> SkyCare features the most modern Intensive Care Unit for patients in need of critical care, close monitoring, and supervision. Our ICU is fully equipped with the most advanced, hi-tech, modern equipment and patient monitoring systems. Reliability, quality, and service with care and compassion are at the heart of our operations and we aim to ensure normalcy in bodily and organ functions for our valued patients. </p>
              <p style="text-align: justify;"> Every human life is worth preserving and as such, our Hospital is committed to providing patients an environment that makes them feel safe, confident and assured, while working hard towards their full recovery. The ICU is monitored round-the-clock by the most qualified and experienced doctors who will treat and care for every human life with the utmost dignity. </p>
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/services/icu.jpg" alt="service-image">
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/services/ot.jpg" alt="service-image">
      </div>
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3>OT</h3>
            </div>
            <div class="text">
              <h6>Modular Operation theater</h6>
              <p style="text-align: justify;">We have a spacious Operation Theater complex which comprises of five modular operation theaters, with a total floor space of up to 11,000 sq. ft. There are separate Post-Operative Wards for males and females. We also boast of having the most ultra-modernanaesthetic work station. We have OT tables from Brazil, all OT lighting has been sourced from Canada and anaesthesia workstation from Germany.</p>
              <p style="text-align: justify;">(Ultra-modern Emergency OT, Orthopedic OT, General OT, GyNAe OT, Special & Neuro OT)
                In order to provide our patients with the best treatment, we have taken the initiative to invest in the latest and most advanced OT technology. We have sourced our equipment from the most reputable global suppliers such as Philips (Netherlands) and DV Lab (USA) with full back-up service to ensure 24/7 reliability in the services that we provide.</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3>MRI</h3>
            </div>
            <div class="text">
              <h6> Magnetic Resonance Imaging (MRI) </h6>
              <p style="text-align: justify;"> MRI is used to a great extent in modern hospitals and clinics for medical diagnosis, staging of disease and follow-up without exposing the body to ionizing radiation. It is painless and does not involve X-ray radiation. The images and resolution produced by MRI are extremely detailed and can detect tiny changes of structures within the body.
              Our Radiology and Imaging Department Consist of the world’s latest models from USA (Ingenia 3.0T) 3 Tesla MRI (World class Philips 3 Tesla MRI ) which have revolutionized the medical imaging world. </p>
              <p style="text-align: justify;"> Our Hospital is at the forefront of clinical excellence and features advanced technology and applications to generate the productivity required to meet today’s healthcare challenges with theIngenia 3.0T. Through dStream, Ingenia delivers premium image quality with digital clarity and speed and with iPatient, it provides patient-centric imaging, from patient set-up to image result.  </p>
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/services/mri.jpg" alt="service-image">
      </div>
    </div>
  </div>
</section><section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/services/service-five.jpg" alt="service-image">
      </div>
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3> Ambulacne </h3>
            </div>
            <div class="text">
              <h6> Emergency Ambulance Service 24/7 </h6>
              <p style="text-align: justify"> Having a medical emergency can be a very frightening and critical experience. Our Hospital recognizes this and has equipped its Emergency Response Unit with ambulances that can be dispatched immediately following an emergency call. We aim to reduce as much as possible the response waiting time and we move with speed to ensure that our patients’ lives are preserved and that treatment can begin immediately upon arrival at the scene. </p>
              <p style="text-align: justify;"> Al Haramain Hospital’s ambulances are fully equipped with the best and most advanced mobile emergency care equipment and our Emergency Services are available round-the-clock, with dispatch units manned by the best, highly trained, qualified and experienced paramedics and Emergency Medical Personnel. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3> More Than 250 Beds </h3>
            </div>
            <div class="text">
              <h6> We have Ultra-modern Laboratory </h6>
              <p style="text-align: justify;"> SkyCare Hospital Pvt. Ltd. is a hospital designed to provide quality health care services to the people of Sylhet in particular, and people of the division and beyond in general.</p>
              <p style="text-align: justify;"> Presently it is a 250 Bed hospital, with an expansion plan to increase it to 500 beds. </p>
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/gallery/bed.jpg" alt="service-image">
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/gallery/services.jpg" alt="service-image">
      </div>
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3>24/7 Services </h3>
            </div>
            <div class="text">
              <h6> We have Ultra-modern Laboratory </h6>
              <p style="text-align: justify;"> The Hospital provides round-the-clock emergency and hospitalization services, with a facility that is fully equipped and managed by a dedicated team of qualified emergency medical care professionals. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3> Care Units </h3>
            </div>
            <div class="text">
              <h6> Care Units  </h6>
              <p style="text-align: justify;"> The Hospital provides extensive care services to  their patients in different care units by the most experienced & specialized doctors and nursing staff. Care Units are ICU, HDU, CCU, PCCU, NICU, & PICU CARE. </p>
            </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/gallery/care_unit.png" alt="service-image">
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container service-box">
    <div class="row">
      <div class="col-lg-6">
        <img loading="lazy" class="img-fluid" src="images/gallery/ct_scan.jpg" alt="service-image">
      </div>
      <div class="col-lg-6">
        <div class="contents">
          <div class="section-title">
            <h3> CT Scan </h3>
            </div>
            <div class="text">
              <h6> Computerized Tomography Scan  </h6>
              <p style="text-align: justify;"> A Computerized Tomography (CT) scan uses X-rays to produce detailed pictures of parts of your body and the structures inside your body. CT has revolutionized medicine by allowing doctors to see diseases that were previously detectable only by surgery or at autopsy. CT is non-invasive, safe, and well-tolerated. It provides a highly detailed look at many different parts of the body. </p>
              <p style="text-align: justify;"> We have the most modern technology from Philips USA (Premium 256 slice iCT) which is the latest inclusion in the Bangladesh imaging arena. New realities call for new ways of working. Our doctors are dedicated to fulfilling the diagnostic promise of CT imaging in ways that were never thought possible. This has been made possible by means of Philips Computed Tomography. We are advancing patient care with innovations in CT, product design, radiation dose management, image quality and advanced clinical applications. </p>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!------------------ Service-Box Section Ends here ------------------------->

<!--=================================================================================================
=                Service Section Starts here                  =
==================================================================================================-->

<section class="service-section bg-gray section">
  <div class="container">
    <div class="section-title text-center">
      <h3>Provided
        <span>Services</span>
      </h3>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="items-container">
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/ot.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6> Modular Operation Theatre </h6>
                </a>
                <p> Most modern well well equipped Modular Operation theater Covering total 10,500 sq.ft </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/care_unit.png" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6> Care Units </h6>
                </a>
                <p> We provides extensive care services to  their patients in different care units .. </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/services.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6> 24/7 Services </h6>
                </a>
                <p>The Hospital provides round-the-clock emergency and hospitalization services, ..</p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/bed.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6> More than 250 Beds </h6>
                </a>
                <p> We have it is a 250 Bed in our hospital, with an expansion plan to increase it to 500 beds . </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/diagnostic.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6>Diagnostic</h6>
                </a>
                <p>24/7 Diagnostic services consist of the most modern  Pathological lab, 3 Tesla MRI, ..</p>
              </div>
            </div>
          </div>
          
          <div class="item">
            <div class="inner-box">
              <div class="img_holder">
                <a href="service.php">
                  <img loading="lazy" src="images/gallery/dialysis.jpg" alt="images" class="img-fluid">
                </a>
              </div>
              <div class="image-content text-center">
                <span>Better Service At Low Cost</span>
                <a href="service.php">
                  <h6>Dialysis Unit</h6>
                </a>
                <p>Our Dialysis Unit provides excellent care to patients 24/7, requiring dialysis treatment</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!------------ Service Section Ends here --------->

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
