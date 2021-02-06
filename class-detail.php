<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Class Details</title>
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
		/* These styles are applied by default.
		   They will also override the hover
		   style for all stars to the right
		   of the currently hovered star. */
		   
			.rate i, .rate i:hover ~ i {
				-webkit-text-stroke: 2px #00B050;
			  color: transparent;
			  text-shadow: none;
			  transition: color 100ms;
			  /* This will remove the delay when
				 moving the cursor left or right
				 within the set of stars. */
			  transition-delay: 0;
			}

			/* This is the style that will be
			   applied to all stars and then
			   subsequently removed from the stars
			   to the right of the one being
			   hovered. */
			.rate:hover i {
			  color: #00B050;
			  
			}
			.rate i.active,
			.rate i:hover:{
				color: #00b050;
			}

			/* Make the effect apply one star at a
			   time. Limiting the selector to when
			   .rate is hovered removes the effect
			   without delay when cursor leaves
			   the .rate area. */
			.rate:hover i:nth-child(2) {
			  transition-delay: 20ms;
			}

			.rate:hover i:nth-child(3) {
			  transition-delay: 60ms;
			}

			.rate:hover i:nth-child(4) {
			  transition-delay: 90ms;
			}

			.rate:hover i:nth-child(5) {
			  transition-delay: 120ms;
			}

			/* Miscellaneous styles. */
			.rate i {
			  cursor: pointer;
			  font-style: normal;
			}
		</style>
		<script>
		$(function() {
    $("div.rate> i").on("click", function(e) {
    
    // remove all active classes first, needed if user clicks multiple times
    $(this).closest('div').find('.active').removeClass('active');

    $(e.target).parentsUntil("div").addClass('active'); // all elements up from the clicked one excluding self
    $(e.target).addClass('active');  // the element user has clicked on


        var numStars = $(e.target).parentsUntil("div").length+1;
        $('.show-result').text(numStars + (numStars == 1 ? " star" : " stars!"));
    });
		});
		</script>
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
                            <a href="index.html" class="nav-item nav-link">Home</a>
                            <a href="classes.php" class="nav-item nav-link">Classes</a>
                            <a href="my-classes.php" class="nav-item nav-link">My Classes</a>
                            <a href="my-account.php" class="nav-item nav-link">My Account</a>
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
		<!--style="background-image:url('img/classbanner.jpg');background-repeat: no-repeat;background-size: cover;background-position: center;height:500px"-->
        <div class="bottom-bar" >
            <div class="container-fluid" >
                <div class="row align-items-center" >
                    <div class="col-md-3" >
                        <div class="logo" style="background-color:rgba(255,255,255,0.7);padding:5px">
                            <a href="index.html">
                                <table><tr>
                                    <td>
                                        <img src="img/logo.png"></td>
                                    <td>
                                    <h1>EDUBRELLA</h1><h3>ACADEMY</h3></td></tr></table>
                                
                            </a>
                        </div>
                    </div>
					<div class="col-md-3" >
                        <h1 style="color:#00B050">Class Name</h1>
                    </div>
                    
                    
                </div>
				<p><br>
				<p><a href="classes.php">Classes</a> / Class Name</p>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Product Detail Start -->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8" >
					<div style="display:inline-flex">
                        <div class="product-detail-top" style="width:600px;padding:0;">
                            
                                
                                <div class="col-md-7" >
                                    <div class="product-content" style="margin:20px 0 20px 15px;padding:40px 0 0 20px;width:350px" >
                                        <div class="title"><h2>Class Name</h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4>Subject:</h4>
                                            <p>#</p>
                                        </div>
											<div class="price">
                                            <h4>Year:</h4>
                                            <p>#</p>
                                        </div>
										<div class="price">
                                            <h4>Teacher:</h4>
                                            <p style="text-decoration:underline"><a href="#">#</a></p>
                                        </div>
											<div class="price">
                                            <h4>Days:</h4>
                                            <p>#</p>
                                        </div>
											<div class="price">
                                            <h4>Location:</h4>
                                            <p>123/1, city, town</p>
                                        </div>
										<div class="price">
                                            <h4>Fee</h4>
                                            <p>Rs. 0000.00</p>
                                        </div>
                                        <!--<div class="quantity">
                                            <h4>Days</h4>
                                            <div class="qty">
                                                <p>#</p>
												</div>
                                        </div>-->
										<div class="p-size">
                                            <h4>Grades:</h4>
                                            
                                                <button type="button" class="btn" name="grade"style="font-weight:bold;color: white;font-size: 17px">Grade</button>
                                                <button type="button" class="btn" name="grade" style="font-weight:bold;color: white;font-size: 17px">Grade</button>
                                            
                                        </div>
                                        <div class="p-size">
                                            <h4>Days:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn" name="day"style="font-weight:bold;color: white;font-size: 17px">Day1<br>#am - #am</button>
                                                <button type="button" class="btn" name="day" style="font-weight:bold;color: white;font-size: 17px">Day2<br>#am - #am</button>
                                            </div> 
                                        </div>
                                        <div class="p-color">
                                            <h4>Medium:</h4>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn" name="medium" style="font-weight:bold;color: white;font-size: 17px">English</button>
                                                <button type="button" class="btn" name="medium"style="font-weight:bold;color: white;font-size: 17px">Sinhala</button>
                                                <button type="button" class="btn" name="medium" style="font-weight:bold;color: white;font-size: 17px" disabled><del>Tamil</del></button>
                                            </div> 
                                        </div>
                                        <div class="action">
                                            <a class="btn" href="my-classes.php"><i class="fa fa-book"></i>Attend Now</a>
											<p><br><br></p>
								
                                        </div>
                                    </div>
                            </div>
                        </div>
                        
                        <div class="row product-detail-bottom" style="background-color:transparent">
                            <div class="col-lg-12" style="background-color:transparent;">
                                <ul class="nav nav-pills nav-justified" style="width:790px;margin-left:10px;">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Reviews (1)</a>
                                    </li>
                                </ul>

                                <div class="tab-content" style="width:790px;margin-left:10px;height:655px">
                                    <div id="description" class="container tab-pane active">
                                        <h4>Class Description</h4>
                                        <p>
                                             Class Details
                                        </p>
                                    </div>
                                    <!--<div id="specification" class="container tab-pane fade">
                                        <h4></h4>
                                        <ul>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Lorem ipsum dolor sit amet</li>
                                        </ul>
                                    </div>-->
                                    <div id="reviews" class="container tab-pane fade">
									<div class="reviews-submit">
                                            <h3>Give your Review:</h3>
                                            <div class="ratting">
											<div class="rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i></div>
                                            </div>
                                            <div class="row form">
                                                <div class="col-sm-6">
                                                    <input type="text" placeholder="Name">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="email" placeholder="Email">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea placeholder="Review"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button>Submit</button>
                                                </div>
                                            </div>
                                        </div>
										<hr style="height:2px;border-width:0;color:#87CEFA;background-color:#87CEFA">
                                        <div class="reviews-submitted">
                                            <div class="reviewer"><h5>Reviewer's name - <span style="font-size:19px">Date</span></h6></div>
                                            <div class="ratting" style="font-size:15px">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <p style="font-size:15px">
                                                Reviewer's review about the class.
                                            </p>
											
                                        </div>
										
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
                        
                        <div class="product" style="width:1400px">
                            <div class="section-header">
                                <h1>Related Classes</h1>
                            </div>

                            <div class="row align-items-center product-slider product-slider-3">
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Side Bar Start 
                    <div class="col-lg-4 sidebar">
                        <div class="sidebar-widget widget-slider">
						<h2 class="title">Related Classes</h2>
                            <div class="sidebar-slider normal-slider">
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Class name</a>
                                    </div>
                                    <div class="product-image">
                                        <a href="class-detail.php">
                                            <div class="class-middle-details" style="background: #00b050;text-align: center; color: white; height: 150px">
                                                <p>Grade : #<br>Subject : #<br>Instructor : #<br>Date : #<br>Time : #</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product Detail End -->
        
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

