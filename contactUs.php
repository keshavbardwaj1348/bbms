<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

    <div class="container">]
        <div class=" text-center text-danger mt-5 ">
            <h1>Contact Us</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container">
                            <form id="contact-form" role="form">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_name">FirstName *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_lastname">Lastname *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">                                                </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_need">Please specify your need *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your Issue--</option>
                                                <option>Request Invoice for order</option>
                                                <option>Request order status</option>
                                                <option>Haven't received cashback yet</option>
                                                <option>Other</option>
                                            </select> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>                                                </div>
                                        </div>
                                        <div class="col-md-12"> <input type="submit" class="btn btn-danger btn-send pt-2 btn-block " value="Send Message"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->
        </div>
    </div>

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