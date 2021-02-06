
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	
    <title>EDUBRELLA - Teacher Login</title>
      <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link rel="icon" href="img/logo.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
                            <a href="main.html" class="nav-item nav-link">Login</a>
                            <a href="studentIndex.php" class="nav-item nav-link">Student Login</a>
                            <a href="teacherIndex.php" class="nav-item nav-link active">Teacher Login</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
		
      <form method="post" action="loginphp.php" enctype="multipart/form-data">
      <div class="login-box" >
          <center>
              <h1 style="height: 80px;"><center>Teacher Login</center></h1>
              <div class="textbox">
                  <i class="fas fa-user"></i>
                  <input type="text" placeholder="Username" name="username" required="required">
				  
              </div>
              <div class="textbox">
                  <i class="fas fa-lock"></i>
                  <input type="password" placeholder="Password" name="password" required="required">
              </div>
              <a href="mainPageteacher.html">
                        <input type="submit" class="btn" value="Sign in" name="tea">
						
						</a>
              <p></p>
              <div class="register">
                  <h3>Are you a new user? <a href="teacherRegister.php" >Sign Up</a></h3>  
              </div>
              
          </center>
      </div>
      </form>
	  
    </body>
</html>