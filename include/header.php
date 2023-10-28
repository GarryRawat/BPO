<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!---main css------>
    <link rel="stylesheet" href="CSS/style.css">
    <!---icon css links --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0-2/css/all.min.css" integrity="sha512-uNOFYDWi8Y7/BN/9S2QDx/BVTEvSwdrZ53NHLgt+fDTdyQeOwmBpHrLrxOT3TQn78H0QKJWLvD7hsDOZ9Gk45A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!----Home page carousel slider card --CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!----Home page ---->

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>

<body>
    <div class="py-md-2 p-lg-2 bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-12 px-md-0 py-2">
                    <p class="fs-6 text-white  mb-0 address-header"><i class="bi bi-building"></i>Garhwali Colony,Lane.No-7d,6-No Puliya
                        Dehradun-248001</p>
                </div>
                <div class="col-md-5 col-12 px-md-0 text-end d-flex justify-content-between justify-content-lg-end">
                    <div class="px-lg-3">
                        <span class="text-white mb-0 email-header"><i class="far fa-envelope fa-beat text-primary"></i>&emsp; alrvinfotech001@gmail.com</span>
                    </div>
                    <div>
                        <span class="text-white mb-0 ph-header"><i class="fas fa-phone-volume fa-beat text-primary"></i>&emsp; +91-9548215556</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="Images/alrvlogo.png" width="200" height="70" alt="" style="mix-blend-mode: multiply;">
                </a>
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse nav_menu" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item m-0 dropdown">
                            <a class="nav-link" href="about.php">About us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Team
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="ManagementTeam.php">Management Team</a></li>
                                <li><a class="dropdown-item" href="Recruiting.php">Recruiting</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solutuion.php">Our Solutions</a>
                        </li>
                        <!--   <li class="nav-item">
                            <a class="nav-link" href="practices.php">Our Practies</a>
                        </li>--->
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="life at.php">Life at ALRV</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav flex-row">
                        <!-- Icons -->
                        <li>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                We Are Hiring
                            </button>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pe-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title fs-3" id="exampleModalLabel">Apply</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    FULL NAME
                                    <input type="text" class="form-control" placeholder="Full NAME" style="height: 50px;">
                                </div>

                                <div class="col-lg-6 col-12">
                                    EMAIL
                                    <input type="email" class="form-control" placeholder="Email" style="height: 50px;">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-12">
                                    CONTACT NUMBER
                                    <input type="number" class="form-control" placeholder="Contact Number" style="height: 50px;">
                                </div>

                                <div class="col-lg-6 col-12">
                                    ALTERNATE PHONE
                                    <input type="number" class="form-control" placeholder="Alternative Phone" style="height: 50px;">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-12">
                                    QUALIFICATION
                                    <input type="text" class="form-control" placeholder="Qualification" style="height: 50px;">
                                </div>

                                <div class="col-lg-6 col-12">
                                    EXPERIENCE
                                    <select class="form-select" aria-label="Default select example" style="height: 50px;">
                                        <option selected>Select Experience</option>
                                        <option value="1">Fresher</option>
                                        <option value="2">Experienced</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-12">
                                    AADHAR NUMBER
                                    <input type="number" class="form-control" placeholder="Aadhar Number" style="height: 50px;">
                                </div>

                                <div class="col-lg-6 col-12">
                                    PAN NUMBER
                                    <input type="text" class="form-control" placeholder="Pan Number" style="height: 50px;">
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6 col-12">
                                    SOURCE
                                    <textarea class="form-control" placeholder="E.g. classified,google,naukri,radio,linkedin etc" style="height: 90px;"></textarea>
                                </div>

                                <div class="col-lg-6 col-12">
                                    ADDRESS
                                    <textarea class="form-control" placeholder="Address" style="height: 90px;"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-outline-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>