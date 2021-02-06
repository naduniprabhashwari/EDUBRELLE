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
		<style>
            /* The container */
            .container {
              display: inline-block;
              position: relative;
              padding-left: 35px;
                margin-top: 12px;
              margin-bottom: 12px;
                margin-right: 70px;
              cursor: pointer;
              font-size:17px;
                color: dimgrey;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }

            /* Hide the browser's default radio button */
            .container input {
              position: absolute;
              opacity: 0;
              cursor: pointer;
            }

            /* Create a custom radio button */
            .checkmark {
              position: absolute;
              top: 0;
              left: 0;
              height: 25px;
              width: 25px;
              background-color: #ffc000;
            }
            
            /* On mouse-over, add a grey background color */
            .container:hover input ~ .checkmark {
              background-color: #ccc;
            }

            /* When the radio button is checked, add a blue background */
            .container input:checked ~ .checkmark {
              background-color: #00b050;
            }

            /* Create the indicator (the dot/circle - hidden when not checked) */
            .checkmark:after {
              content: "";
              position: absolute;
              display: none;
            }

            /* Show the indicator (dot/circle) when checked */
            .container input:checked ~ .checkmark:after {
              display: block;
            }

            /* Style the indicator (dot/circle) */
            .container .checkmark:after {
                top: 9px;
                left: 9px;
                width: 8px;
                height: 8px;
                border-radius: 50%;
                background: white;
            }
            
        </style>
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
                            <a href="mainPageteacher.html" class="nav-item nav-link">Home</a>
                            <a href="create-class.php" class="nav-item nav-link active">Create Classes</a>
                            <a href="my-classes-teacher.php" class="nav-item nav-link">My Classes</a>
                            <a href="my-account-teacher.php" class="nav-item nav-link">My Account</a>
                            <a href="lms-teacher.php" class="nav-item nav-link">LMS</a>
                            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <a href="main.html" class="dropdown-item" >Login</a>
                            <a href="my-account-teacher.php" class="dropdown-item">Change Details</a>
                            
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
        <div class="my-account"  style="width:2000px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>New Class Details</h4>
                                <div class="row">
										<div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Class name">
                                    </div>
										<div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Number">
                                    </div>
                                    <div class="col-md-6">
                                        <Select class="form-control" type="text" placeholder="Medium">
                                            <Option value = "English" SELECTED>English</Option>
                                            <Option value = "Sinhala" >Sinhala</Option>
                                            <Option value = "Tamil">Tamil</Option>
                                        </Select>
                                    </div>                                 
                                    
											
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Line 1">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Time period">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Address Line 2">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Subject (type in capitals)">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Town">
                                    </div>
                                    
										<div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Fees">
                                    </div>
									<div class="col-md-6">
                                        <input class="form-control" type="number" placeholder="Year" min="2020">
                                    </div>
									<div class="col-md-6" >
									<fieldset style="display: inline-flex">
													<legend style="font-size:18px">Grades</legend>
														<label class="container" >
														  <input type="checkbox" name="1-5">1-5
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="6">6
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="7">7
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">8
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">9
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">10
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">11
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">12
														  <span class="checkmark"></span>
														</label>
														<label class="container">
														  <input type="checkbox" name="medium">13
														  <span class="checkmark"></span>
														</label>
														
																
												</fieldset>
                                        <fieldset style="display: inline-flex">
													<legend style="font-size:18px">Days</legend>
													<label class="container">
													  <input type="checkbox" name="Sunday">Sunday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Monday">Monday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Tuesday">Tuesday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Wednesday">Wednesday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Thursday">Thursday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Friday">Friday
													  <span class="checkmark"></span>
													</label>
													<label class="container">
													  <input type="checkbox" name="Saturday">Saturday
													  <span class="checkmark"></span>
													</label>															
											</fieldset>
                                    </div>
									<div class="textbox" style="border-bottom: 0">
										<textarea placeholder="Other Details" rows="5" cols="166"></textarea>
									</div>
                                    <div class="col-md-12">
                                        <button class="btn">Create Class</button>
                                        <br><br>
                                    </div>
                                </div>
                                <!--<h4>Password change</h4>
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
                                </div>-->
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
                                <li><a href="contact-teacher.html">About Us</a></li>
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
