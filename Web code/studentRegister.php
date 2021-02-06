<?php
 global $link ;
function register(){
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
				global $nextpage ;
				$nextpage = 1;
				


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
							echo "<script>alert('Data added successfully');</script>";
							
							$massage = "Data added successfully";
							$nextpage = 1;
						}
						else{
						
						echo "<script>alert('Data adding failed');</script>";
						$nextpage = 2;
						}
					}else{
						echo "<script>alert('Username and passwords are used before');</script>";
						$nextpage = 2;
					}
			  }else{
				  echo "<script>alert('Password should match with the re-entered password');</script>";
				  $nextpage = 2;
		}
		}else{
			echo "<script>alert('Password should consist at least 8 charaters');</script>";
			$nextpage = 2;
}
global $link;
if($nextpage ==1){$link = "studentIndex.php";}else{$link = "studentRegister.php";}
				
}}		
register();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        
        <title>EDUBRELLE - Teacher Registeration</title>
		<link rel="icon" href="img/logo.png">
        
        <link rel="stylesheet" href="register.css">
        
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
              font-size: 20px;
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
              border-radius: 50%;
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
        <script>
        function alertshow() {
          alert("Data added successfully");
        }
        </script>
    </head>
    <body>
        <form method="POST" >
        <div class="login-box" style="margin-top: 50px;">
            <center>
                <h1><center>Student Registeration</center></h1>
                <table align="center"><center>
                    <tr>
                <td>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Name" name="name" required="required">
                    </div>
                    </td>
                    <td>
                <div class="textbox">
                    <i class="fa fa-address-book"></i>
                    <input type="text" placeholder="Address Number" name = "adno" required="required">
                    </div>
                        </td></tr>
                <tr>
                <td>
                <div class="textbox">
                    <i class="fa fa-envelope"></i>
                    <input type="text" placeholder="Email" name="email" required="required">
                    </div>
                    </td>
                    <td>
                <div class="textbox">
                    <i class="fa fa-address-book"></i>
                    <input type="text" placeholder="Address line 1" name="adline1" required="required">
                    </div>
                        </td></tr>
                <tr>
                <td>
                <div class="textbox">
                    <i class="fa fa-phone"></i>
                    <input type="text" placeholder="Contact Number" name="tel" required="required" maxlength=10>
                    </div>
                    </td>
                    <td>
                <div class="textbox">
                    <i class="fa fa-address-book"></i>
                    <input type="text" placeholder="Address line 2" name="adline2">
                    </div>
                        </td></tr>
                <tr>
                <td>
                <div class="textbox">
                    <i class="fa fa-graduation-cap"></i>
                    <input type="number" placeholder="Grade" max="13" min="1" name="grade" required="required">
                    </div>
                    </td>
                    <td>
                <div class="textbox">
                    <i class="fa fa-address-book"></i>
                    <input type="text" placeholder="Town" name="town" required="required">
                    </div>
                        </td></tr>
                <tr id="radio">
                <td colspan="2">
                <label class="container">
                  <input type="radio" name="medium" value="english" required="required" >English
                  <span class="checkmark"></span>Medium
                </label>
                <label class="container">
                  <input type="radio" name="medium" value="sinhala" required="required">Sinhala Medium
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="radio" name="medium" value="tamil" required="required">Tamil Medium
                  <span class="checkmark"></span>
                </label>
                    </td>
                    <td>
                    </td></tr></center>
                    
                </table>
                <fieldset>
                    <legend>Sequrity Details</legend>
                <div class="textbox">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="UserName" name="username" required="required">
                    </div>
                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" min="8" name="password" maxlength="15" required="required">
                    <label style="color: gray;font-size: 13px">* Minimum 8 characters *</label>
                    </div>
                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Re-Enter Password" min="8" maxlength="15" name="Repassword" required="required">
                    </div>
                        
        </fieldset>
					<a href="<?php echo $link; ?>">
						<input type="submit" class="btn" value="Register" name="stu">
						</a>
                    </form>
                <div class="register">
                    <h3><a href="studentIndex.php" >Log in</a></h3>  
                </div>
            </center>
        </div>     
</body>
</html>
