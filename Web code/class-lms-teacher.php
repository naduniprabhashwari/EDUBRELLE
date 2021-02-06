<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Class</title>
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
		.folder{
			color:black;
		}
		.folder:hover{
			color:#00B050;
		}
		#arrow{
			color:#00B050;
			font-size:20px;
		}
		#arrow:hover{
			color:black;
		}
		th{
			font-size:18px;
		}
		
		th{
			text-align:left;
			padding: 10px 0 5px 10px;
		}
		td{
			text-align:left;
			padding: 10px 0 5px 13px;
		}
		</style>
		<script>
function myFunction() {
  var x = document.getElementById("funcDiv");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
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
                            <a href="mainPageteacher.html" class="nav-item nav-link">Home</a>
                            <a href="create-class.php" class="nav-item nav-link">Create Classes</a>
                            <a href="my-classes-teacher.php" class="nav-item nav-link">My Classes</a>
                            <a href="my-account-teacher.php" class="nav-item nav-link">My Account</a>
                            <a href="lms-teacher.php" class="nav-item nav-link">LMS</a>
                            <a href="contact-teacher.html" class="nav-item nav-link">Contact Us</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto">
                            <a href="main.html" class="dropdown-item" >Login</a>
                            <a href="my-account-teacher.php" class="dropdown-item">Change Details</a>
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
                            <a href="index.html">
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
				<p><br>
				<p><a href="lms-teacher.php">LMS</a> / Class Name</p>
            </div>
        </div>
        <!-- Bottom Bar End -->
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-sticky-note"></i>Notes</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#tasks" role="tab"><i class="fa fa-tasks"></i>Tasks</a>
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#announcment" role="tab"><i class="fa fa-bullhorn"></i>Announcements</a>
                                                        
                            
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            
                            <div class="tab-pane fade show active" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
							<div style="display:inline-flex">
								<a href="#" style="margin:5px;"><button class="btn"><i class="fa fa-plus"></i> New Folder</button></a>
								<a href="#" style="margin:5px;background-color:transparent"><button class="btn"><i class="fa fa-plus"></i> New Document</button></a>
							</div>
                                <!-- Product List Start -->
									<h4>Notes</h4><p>
									<div class="container-fluid">
												<div class="row">
												<div class="container-fluid" style="background-color:#87CEFA;display:inline-flex;align-items:center;align-content:center;padding:20px 10px 10px 10px;border-radius:5px">
													<div class="section-header" >
											<h4>Folder 1</h4>
										</div>
										
										<i onclick="myFunction()" class="fa fa-ellipsis-h" id="arrow" style="margin-left:730px;"></i>
										</div>
													
											</div>
									
								</div>
								<div id="funcDiv" style="display:none">
								<div class="container-fluid" >
												<div class="row">
												<div class="container-fluid" style="background-color:#ccffff;display:inline-flex;padding:14px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;height:50px">
													<form method="get" action="files/file1.docx">
														<a href="files/file1.docx" target="_blank" download><p class="folder">Document 1</p></a>
													</form>
											</div>
											<div class="container-fluid" style="background-color:#ccffff;display:inline-flex;padding:14px;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;height:50px">
														
													<form method="get" action="files/file2.pdf">
														<a href="files/file2.pdf" target="_blank" download><p class="folder">Document 2</p></a>
													</form>													
											</div>
									
								</div>
                            </div>
							</div><p>
							<div class="container-fluid">
												<div class="row">
											<div class="container-fluid" style="background-color:#ccffff;display:inline-flex;padding:14px;border-radius: 5px;height:50px">
													<form method="get" action="files/file2.pdf">
														<a href="files/file2.pdf" target="_blank" download><p class="folder">Document</p></a>
													</form>
											</div>
													
											</div>
									
								</div>
							</div>
                            <div class="tab-pane fade" id="tasks" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Tasks</h4>
                               <p>Tasks : 1</p>
								<hr style="height:2px;border-width:0;color:#87CEFA;background-color:#87CEFA">
								<table width="100%" >
								<tr>
									<th>Task name</th>
									<th>Due Date</th>
									<th>Staus</th>
									<th>Marks</th>
								</tr>
								<tr >
									<td><form method="get" action="files/file2.pdf">
										<a href="files/file2.pdf" target="_blank" download><p class="folder" style="text-decoration:underline;">Task 1</p></a>
									</form></td>
									<td>00/00/0000</td>
									<td>To do</td>
									<td>0%</td>
								</tr>
								</table>	
                            </div>
							<div class="tab-pane fade" id="announcment" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Announcements</h4>
                                <p>
                                    0 announcements
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
