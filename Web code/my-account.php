<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EDUBRELLA - MY ACCOUNT</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="mainPage.html" class="nav-item nav-link">Home</a>
                            <a href="classes.php" class="nav-item nav-link">Classes</a>
                            <a href="my-classes.php" class="nav-item nav-link">My Classes</a>
                            <a href="my-account.php" class="nav-item nav-link active">My Account</a>
                            <a href="lms.php" class="nav-item nav-link">LMS</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <a href="main.html" class="dropdown-item" >Login</a>
                            <a href="my-account.php" class="dropdown-item">Change Details</a>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->       
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="mainPage.html">
                                <table><tr>
                                    <td>
                                        <img src="img/logo.png"></td>
                                    <td>
                                    <h1>EDUBRELLA</h1><h3>ACADEMY</h3></td></tr></table>
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i>Account Details</a>
                            <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-book"></i>Classes</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Payment Method</a>
                                                        
                            <a class="nav-link" href="index.html"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Number">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Contact Number">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Line 1">
                                    </div>
                                    <div class="col-md-6">
                                        <Select class="form-control" type="text" placeholder="Medium">
                                            <Option value = "English" SELECTED>English</Option>
                                            <Option value = "Sinhala" >Sinhala</Option>
                                            <Option value = "Tamil">Tamil</Option>
                                        </Select>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Line 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="number" value = "1" max="13" min="1">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Town">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Update Account</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Name</th>
                                                <th>Date</th>
                                                <th>Subject</th>
                                                <th>Grade</th>
                                                <th>Teacher</th>
                                                <th>Fee(Rs.)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>Monday 6pm-8pm</td>
                                                <td>Sub</td>
                                                <td>#</td>
                                                <td>MR.</td>
                                                <td>0000.00</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Name</td>
                                                <td>Monday 6pm-8pm</td>
                                                <td>Sub</td>
                                                <td>#</td>
                                                <td>MR.</td>
                                                <td>0000.00</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Payment Method</h4>
                                <p>
                                    Used payment methods
                                </p> 
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
       <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <table><tr>
                                    <td>
                                        <img src="img/logo.png"></td>
                                    <td>
                                    <h1 style="color: #00b050">EDUBRELLA</h1><h3  style="color: #00b050">ACADEMY</h3></td></tr></table>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i> 57 Ramakrishna Rd, Colombo 06</p>
                                <p><i class="fa fa-envelope"></i>tharushi.20201235@iit.ac.lk</p>
                                <p><i class="fa fa-phone"></i>+9471-0699-664</p>
                            </div>
                        </div>
                    </div>
                    
<!--
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Follow Us</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
-->

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Company Info</h2>
                            <ul>
                                <li><a href="contact.html">About Us</a></li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>We Accept:</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
             
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
