<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="../bbms/css/style.css" />
    <link rel="stylesheet" href="../bbms/css/login.css">
    <title>Blood4Life</title>
</head>

<body>

    <!-- Nav Bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger  py-0">
        <a class="navbar-brand" href="index.php">Blood4Life</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register_form.php">Register</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="login.php" target="_self" id="login">Login</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="search_donor.php">Search Donor</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Donate</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Nav Bar -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../bbms/image/carousel2_1.jpg" alt="First slide" height="640" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../bbms/image/carousel2.jpg" alt="Second slide" height="640" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../bbms/image/carousel3_1.jpg" alt="Third slide" height="640" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container-fluid">
        <div class="row mt-5 mb-5 border-0 benifit">
            <div class="col-md-12">
                <p class="text-center display-4 font-weight-bold text-danger">
                    Learn About Blood Donation
                </p>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 px-0 donate-blood">
                <img src="../bbms/image/donate-blood.png" style="width: 100%; height: 100%;" alt="">
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Compatible Blood Type Donors</th>
                        </tr>
                    </thead>
                    <thead>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Donate Blood To</th>
                        <th scope="col">Received Blood From</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">A+</th>
                            <td>A+ AB+</td>
                            <td>A+ A- O+ O-</td>

                        </tr>
                        <tr>
                            <th scope="row">O+</th>
                            <td>O+ A+ B+ AB+</td>
                            <td>O+ O-</td>

                        </tr>
                        <tr>
                            <th scope="row">B+</th>
                            <td>B+ AB+</td>
                            <td>B+ B- O+ O-</td>
                        </tr>
                        <tr>
                            <th scope="row">AB+</th>
                            <td>AB+</td>
                            <td>Everyone</td>
                        </tr>
                        <tr>
                            <th scope="row">A-</th>
                            <td>A+ A- AB+ AB-</td>
                            <td>A- O-</td>
                        </tr>
                        <tr>
                            <th scope="row">O-</th>
                            <td>Everyone</td>
                            <td>O-</td>
                        </tr>
                        <tr>
                            <th scope="row">B-</th>
                            <td>B+ B- AB+ AB-</td>
                            <td>B- O-</td>
                        </tr>
                        <tr>
                            <th scope="row">AB-</th>
                            <td>AB+ AB-</td>
                            <td>AB- A- B- O-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row mt-5 mb-5 border-0 benifit">
            <div class="col-md-12">
                <p class="text-center display-4 font-weight-bold text-danger">
                    Benifits of Donating Blood
                </p>
            </div>
            <div class="row benifits-point p-5">
                <div class="col-md-6 mt-5">
                    <ul>
                        <li>Stimulates Blood Cell Production</li>
                        <li>
                            Blood Donation helps to reduce risk of heart attack and cancer
                        </li>
                        <li>Donation of blood, burns calories & helps in weight loss</li>
                        <li>Blood donation helps to maintain healthy liver</li>
                        <li>Prevents Hemochromatosis and helps to maintain iron level</li>
                        <li>By donating blood you can save someone's life</li>
                        <li>It helps you to complete your social responsibilities</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="../bbms/image/blood-benifits.jpeg" style="width: 90%; height: 80%;" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5 benifit border-0 ">
            <div class="col-md-12 ">
                <p class="text-center display-4 font-weight-bold text-danger ">World Blood Donors Day</p>
            </div>
            <div class="row benifits-point p-5 ">
                <div class="col-md-6">
                    <p class="pl-5 pr-5 pt-5">
                        World Blood Donor Day takes place on 14 June each year. The aim is to raise global awareness of the need for safe blood and blood products for transfusion and of the critical contribution voluntary, unpaid blood donors make to national health systems.
                        The day also provides an opportunity to call to action to governments and national health authorities to provide adequate resources and put into place systems and infrastructures to increase the collection of blood from voluntary,
                        non-remunerated blood donors.
                    </p>
                </div>
                <div class="col-md-6 pl-5">
                    <img src="../bbms/image/donar-day.jpg" style="width: 80%; height: 70%;" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color bg-secondary text-white lighten-3 pt-4 ">
        <div class="container-fluid text-center text-md-left footer-self mt-0 ">
            <div class="row ">
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1 ">
                    <h5 class="font-weight-bold mb-4 ">Blood4Life</h5>
                    <p>
                        An independent humanitarian organisation dedicated to protecting human life and dignity, relieving human suffering and responding to emergencies.
                    </p>
                </div>

                <hr class="clearfix w-100 d-md-none " />

                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1 ">
                    <h5 class="font-weight-bold text-uppercase mb-4 ">About</h5>

                    <ul class="list-unstyled ">
                        <li>
                            <p>
                                <a class="text-white " href="#! ">Cookies</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a class="text-white " href="#! ">Privacy</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a class="text-white " href="#! ">Terms & Condition</a>
                            </p>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none " />

                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1 ">
                    <h5 class="font-weight-bold text-uppercase mb-4 ">Contact Us</h5>

                    <ul class="list-unstyled ">
                        <li>
                            <p><i class="fa fa-envelope mr-3 "></i>Blood4Life@gmail.com</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone mr-3 "></i>+91 8846645857</p>
                        </li>
                        <li>
                            <p><i class="fa fa-print mr-3 "></i>+91 7679089736</p>
                        </li>
                    </ul>
                </div>

                <hr class="clearfix w-100 d-md-none " />
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4 ">
                    <h5 class="font-weight-bold text-uppercase mb-4 ">Follow Us</h5>
                    <ul class="list-unstyled ">
                        <li>
                            <a type="button " class="btn-floating btn-fb ">
                                <i class="fa fa-facebook-f fa-2x "></i>
                            </a>
                        </li>
                        <li>
                            <a type="button " class="btn-floating btn-tw mt-2 ">
                                <i class="fa fa-twitter fa-2x "></i>
                            </a>
                        </li>
                        <li>
                            <a type="button " class="btn-floating btn-gplus mt-2 ">
                                <i class="fa fa-google-plus-square fa-2x "></i>
                            </a>
                        </li>
                        <li>
                            <a type="button " class="btn-floating btn-dribbble mt-2 ">
                                <i class="fa fa-dribbble fa-2x "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-copyright text-center py-3 ">
            © 2020 Copyright:
            <a class="text-white " href="# "> Blood4Life.com</a>
        </div>>
    </footer>

    <!-- Footer -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
</body>

</html>