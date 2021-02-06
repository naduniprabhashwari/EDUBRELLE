<?php
session_start();

	if(isset($_POST['stu']))
{
    extract($_POST);
    include 'php/connection.php';
              // require('php/connection.php');

              

				//Assigning POST values to variables.
				
				$name = $_POST['name'];
				$adno = $_POST['adno'];
				$email = $_POST['email'];
				$adline1 = $_POST['adline1'];
				$tel = $_POST['tel'];
				$grade = $_POST['grade'];
				$town = $_POST['town'];
				$medium = $_POST['medium'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$Repassword = $_POST['Repassword'];
				
				// if($_POST['adline2'] <> null){
					// $adline2 = $_POST['adline2'];
				// }else{
					// $adline2 = "-";
				// }
				$massage = "Nothing";
				$nextpage = 1;
				
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <meta charset="utf-8">
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
                            <a href="teacherIndex.php" class="nav-item nav-link">Teacher Login</a>
                        </div>
                        
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End --> 
		<?php
		if (strlen($password) >= 8){
		if ($password == $Repassword) {
					$result = mysqli_query($conn,"SELECT student_id FROM student WHERE username = '$username' and password = '$password'");
					$count = mysqli_num_rows($result);
					if($count <> 1){
						//CHECK FOR THE RECORD FROM TABLE
						$query = "INSERT INTO student (grade, medium, Name, email, contact_number, address_no, address_line1, address_line2, town, username, password) VALUES ('$grade','$medium','$name','$email','$tel','$adno','$adline1','$adline2','$town','$username','$password')";

						// $result = mysqli_query($conn, $query);
						// $count = mysqli_num_rows($result);
						
						// $row  = mysqli_fetch_array($result);
						if(mysqli_query($conn, $query)){
							$massage = "Data added successfully";
							$nextpage = 1;
						}
						else{
						
						$massage = "Data adding failed";
						$nextpage = 2;
						}
					}else{
						$massage = "Username and passwords are used before.";
						$nextpage = 2;
					}
			  }else{
				  $massage = "Password should match with the re-entered password";
				  $nextpage = 2;
		}
		}else{
			$massage = "Password should consist at least 8 charaters";
			$nextpage = 2;
		}
		?>
<div class="login-box">
    <center>
  <h1 style="font-size: 40px;height: 160px;color:red;"><center>Registering data</center></h1>
  <div class="type">
      <?php
			echo "<h3>$massage</h3>";
	  ?>
  </div>
  <div class="type">
  <?php 
	if($nextpage == 1){
		echo "<a href = 'studentIndex.php'><input type='button' class='btn' value='Student Login' style='font-size: 40px;margin: 20px 0 40px;'></a>";
	}else{
		echo "<a href = 'studentRegister.php'><input type='button' class='btn' value='Student Register' style='font-size: 40px;margin: 20px 0 40px;'></a>";
	}
	?>
  </div>
    </center>
</div>
      
</body>
</html>
