<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Donor</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="../bbms/css/style.css" />
    <link rel="stylesheet" href="../bbms/css/login.css">

    <script src="../bbms/js/project.js"></script>


</head>

<body onload="resetSelection()">


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


    <!-- Search Feild -->

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <p class="text-center display-4 text-danger">Search Blood</p>
            </div>
        </div>
        <div class="row pl-5 mb-5">
            <div class="col-sm-4 offset-sm-2">
                <form action="">
                    <div class="form-group">
                        <label for="EnterName">Name</label>
                        <input type="text" class="form-control" id="EnterName" placeholder="Enter Name" maxlength="25" required autofocus style="text-transform: capitalize;">
                    </div>
                    <div class="form-group">
                        <label for="selectBloodGroup">Blood Group</label>
                        <select class="form-control" name="selectBloodGroup" id="selectBloodGroup">
                                <option value="1">A+</option>
                                <option value="2">A-</option>
                                <option value="4">B+</option>
                                <option value="5">B-</option>
                                <option value="7">O+</option>
                                <option value="8">O-</option>
                                <option value="9">AB+</option>
                                <option value="10">AB-</option>
                            </select>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <form action="">
                    <div class="form-group">
                        <label for="StateSelect">Select State</label>
                        <select class="form-control" id="StateSelect" size="1" onchange="makeSubmenu(this.value)">
                            <option value="" disabled selected>Choose State</option>
                            <option>Bihar</option>
                            <option value="MadhyaPradesh">Madhya Pradesh</option>
                            <option>Maharashtra</option>
                            <option>Kerala</option>
                            <option value="UttarPradesh">Uttar Pradesh</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="citySelect">Select State</label>
                        <select class="form-control" id="citySelect" size="1">
                            <option value="" disabled selected>Choose City</option>
                            <option></option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <!-- Search Button -->

        <div class="container text-center mb-sm-4 mt-0">
            <button type="button" class="btn btn-success">Register</button>
        </div>

        <!-- Search Button -->

    </div>

    <!-- Search Feild -->


    <!-- Footer -->
    <footer class="page-footer footer1 font-small mdb-color bg-secondary text-white lighten-3 pt-4 ">
        <div class="container-fluid text-center text-md-left footer-self">
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