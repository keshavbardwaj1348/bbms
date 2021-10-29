<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Yourself</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- External CSS -->
    <link rel="stylesheet" href="../bbms/css/style.css" />
    <link rel="stylesheet" href="../bbms/css/login.css">

</head>

<body>

    <!-- Nav Bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger py-0">
        <a class="navbar-brand" href="index.php">
                    Blood4Life
                </a>
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
                    <a class="nav-link" href="login.php" id="login" target="">Login</a>
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
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Nav Bar -->

    <!-- Registration form -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <form autocomplete="on">
                    <div class="form-group">
                        <label for="formGroupExampleInput1">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput1" placeholder="Enter Name" maxlength="25" required autofocus style="text-transform: capitalize;">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Date of Birth</label>
                        <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput3">Blood Group</label>
                        <select class="form-control" name="formGroupExampleInput3" id="formGroupExampleInput3">
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
                    <div class="form-group">
                        <label for="formGroupExampleInput4">Weight</label>
                        <input type="number" class="form-control" id="formGroupExampleInput4" placeholder="Enter Weight(in kg)" required>
                    </div>
                    <span class="mr-3">Gender</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput5">Street</label>
                        <input type="text" class="form-control" id="formGroupExampleInput5" placeholder="Enter street" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput6">Area</label>
                        <input type="text" class="form-control" id="formGroupExampleInput6" placeholder="Enter area" required>
                    </div>
                </form>
            </div>
            <div class="col-md-5 offset-md-1 mt-3 mt-md-0">
                <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput7">City</label>
                        <input type="text" class="form-control" id="formGroupExampleInput7" placeholder="Enter City" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput8">Pincode</label>
                        <input type="text" class="form-control" id="formGroupExampleInput8" placeholder="Enter pincode" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput9">Mobile</label>
                        <input type="text" class="form-control" id="formGroupExampleInput9" placeholder="Enter mobile number" maxlength="10" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput10">E-mail</label>
                        <input type="email" class="form-control" id="formGroupExampleInput10" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput5">Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput5" placeholder="Create Password" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput6">Confirm Password</label>
                        <input type="password" class="form-control" id="formGroupExampleInput6" placeholder="Re-inter password" required>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Registration form -->

    <!-- Register Button -->

    <div class="container text-center mb-sm-4">
        <button type="button" onclick="alert('Registration Successful')" class="btn btn-success">Register</button>
    </div>

    <!-- Register Button -->

    <div class="container text-center mb-sm-4">
        <p>Already have an account? <a href="login.php">Sign in</a></p>
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
    <!-- Optional JavaScript -->

</body>

</html>