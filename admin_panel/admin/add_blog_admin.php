
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
          <!--       <a href="requests_admin.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                <div class="container" style="max-width: 1000px">
                <div class="row" style="max-width: 950px">
                    <div class="col-lg-12 order-1 order-lg-0">
                    <div class="contact-area style-two pl-0 pr-0 pr-lg-4">
                        <div class="section-title">
                        <h3 style="text-align: center;"><span> Add a new </span> Post </h3>
                        </div>
                        <form name="contact_form" class="default-form contact-form"  method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="blog_heading" placeholder="Blog Heading" required>
                            </div>
                            <div class="form-group">
                               <select class="form-control" name="blog_category" required>
                                <option value=""> Category </option>
                                <?php 
                                include('db.php');
                                $category_query ="SELECT * FROM category";
                                 $data =mysqli_query($conn,$category_query);
                                while($category =mysqli_fetch_assoc($data)){?>
                                <option value="<?php echo $category['category']; ?>"> <?php echo $category['category']; ?></option>
                                    
                               <?php }?>
                         
                                </select>
                            </div>
                            <div class="form-group">
                              <input type="file" name="uploadfile" class="form-control" placeholder="Add image" required>
                            </div>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="blog_details" placeholder="Write blog detail here . . . . . " required></textarea>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-group text-center">
                                <button type="submit" class="btn-style-one" name="blog" type="submit">Post</button>
                            </div>
                            </div>
                        </div>
                        </form>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <?php 
                        include("db.php");
                        if(isset($_POST['blog'])){
                            $blog_heading = $_POST['blog_heading'];
                            $blog_heading = $_POST['blog_category'];

                           $filename = $_FILES['uploadfile']['name']; 
                           $tempname =$_FILES['uploadfile']['tmp_name'];
                           $image ="image/".$filename;
                           move_uploaded_file($tempname,$image);

                            $blog_details= $_POST['blog_details'];

                             $blog_query = "INSERT INTO blog VALUE(NULL,'$blog_heading','$blog_heading','$image',' $blog_details')";
                                $category_query = mysqli_query($conn,$blog_query);
                                 echo '<script>alert("Blog added Successful")</script>';

                        }


                         ?>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            
            <!--------------------------------- Contact Section Ends here -------------------------------->
                    
                    
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