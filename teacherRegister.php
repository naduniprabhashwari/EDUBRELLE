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
        <div class="login-box">
            <center>
                <h1><center>Teacher Registeration</center></h1>
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
                    <input type="text" placeholder="Address Number" name="adno" required="required">
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
                    <input type="text" placeholder="Contact Number" maxlength="10" name="tel" required="required">
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
                  <input type="checkbox" name="medium" value="english" required="required">English
                  <span class="checkmark"></span>Medium
                </label>
                <label class="container">
                  <input type="checkbox" name="medium" value="sinhala" required="required">Sinhala Medium
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium" value="tamil" required="required">Tamil Medium
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
                    <input type="text" placeholder="UserName" required="required">
                    </div>
                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Password" max="8" required="required">
                    <label style="color: gray;font-size: 13px">* Minimum 8 characters *</label>
                    </div>
                <div class="textbox">
                    <i class="fa fa-lock"></i>
                    <input type="password" placeholder="Re-Enter Password" max="8" required="required">
                    </div>
                        
        </fieldset>

                <a href="teacherRegister2.php">
                    <input type="button" class="btn" value="Next">
                </a>
                <div class="register">
                    <h3><a href="teacherIndex.php" >Log in</a></h3>  
                </div>
            </center>
        </div>     
</body>
</html>
