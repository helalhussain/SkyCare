

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
         
                <a href="my_appointments_patient.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
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
                    <h2 class="fs-2 m-0">Patient Dashboard / Requests</h2>
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

        <div class="row my-5">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2><b> Appoinment </b> Requests </h2></div>
                                <div class="col-sm-4">
                                    <div class="search-box">
                                        <i class="fas fa-search"></i>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr class="table-dark">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>City</i></th>
                                    <th>Pin Code</th>
                                    <th>Country</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Thomas Hardy</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Portland</td>
                                    <td>97219</td>
                                    <td>USA</td>
                                    <td>
                                    <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Maria Anders</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Berlin</td>
                                    <td>12209</td>
                                    <td>Germany</td>
                                    <td>
                                    <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Fran Wilson</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Madrid</td>
                                    <td>28023</td>
                                    <td>Spain</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                        <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Dominique Perrier</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Paris</td>
                                    <td>75016</td>
                                    <td>France</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                        <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Martin Blank</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Turin</td>
                                    <td>10100</td>
                                    <td>Italy</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr>        
                                <tr>
                                    <td>5</td>
                                    <td>Martin Blank</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Turin</td>
                                    <td>10100</td>
                                    <td>Italy</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr> 
                                <tr>
                                    <td>5</td>
                                    <td>Martin Blank</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Turin</td>
                                    <td>10100</td>
                                    <td>Italy</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr> 
                                <tr>
                                    <td>5</td>
                                    <td>Martin Blank</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Turin</td>
                                    <td>10100</td>
                                    <td>Italy</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr> 
                                <tr>
                                    <td>5</td>
                                    <td>Martin Blank</td>
                                    <td><img src='../../images/blog/comment pf.jpg' style="height:40px!important;width: 40px!important; border:1px solid black; border-radius:50%;"></td>
                                    <td>Turin</td>
                                    <td>10100</td>
                                    <td>Italy</td>
                                    <td>
                                        <a href="#" class="accept" title="View" data-toggle="tooltip" style="display: inline-block; margin: 0 14px"><i style="font-size: 30px;" class="far fa-check-circle"></i></a>
                                    <a href="#" class="reject" title="Edit" data-toggle="tooltip" style="display: inline-block; margin: 0 5px"><i style="font-size: 30px;" class="far fa-times-circle"></i></a>
                                    </td>
                                </tr> 
                            </tbody>
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

        
    </script>

    
</body>

</html>