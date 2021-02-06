<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>EDUBRELLE - Teacher Registeration</title>
		<link rel="icon" href="img/logo.png">
        <link rel="stylesheet" href="register.css">
        <script>
        function alertshow() {
          alert("Data added successfully");
        }
        </script>
        <style>
            /* The container */
            .container {
              display: inline-block;
              position: relative;
              padding-left: 35px;
                margin-top: 12px;
              margin-bottom: 12px;
                margin-right: 20px;
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
                <h1><center>Teacher Register</center></h1>
                <div class="textbox" style="border-bottom: 0">
                    <textarea placeholder="Qaulification and Experiance" rows="5" cols="81"></textarea>
                </div>
                <fieldset>
                <legend>Grades</legend>
                <label class="container">
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
                <fieldset>
                <legend>Subjects</legend>
                <label class="container">
                  <input type="checkbox" name="medium">Maths
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Science
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Sinhala
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">English
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Tamil
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">History
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Geography
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Commerse
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Accounting
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Biology
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Physics
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">ICT
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Economics
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Estern Music
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Western Music
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Art
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Dancing
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Statistics
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Chemestry
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Indian History
                  <span class="checkmark"></span>
                </label>
                <label class="container">
                  <input type="checkbox" name="medium">Europian History
                  <span class="checkmark"></span>
                </label>
                    
                
                <div class="textbox">
                    <i class="fa fa-book"></i>
                    <input type="text" placeholder="Other Subject....">
                    </div>
                
                        
        </fieldset>
<div>
                <a href="mainPageteacher.html"><!--onclick="alertshow()-->
                    <input type="button" class="btn" value="Register" >
                </a></div>
                <div class="register" style="display: inline-flex">
                    <h3><a href="teacherIndex.php" >Log in</a></h3>&nbsp;&nbsp;&nbsp;<h3><a href="teacherRegister.php" >Back</a></h3>					
                </div>
            </center>
        </div>     
</body>
</html>
