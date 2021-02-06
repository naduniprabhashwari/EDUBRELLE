<?php

session_start();
if(isset($_POST['tea']))
{
    extract($_POST);
    include 'php/connection.php';
              // require('php/connection.php');

              

				//Assigning POST values to variables.
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				if (($username <> null) and ($password <> null)){
				//CHECK FOR THE RECORD FROM TABLE
				$query = "SELECT teacher_id FROM teacher WHERE username = '$username' and password = '$password'";

				$result = mysqli_query($conn, $query);
				$count = mysqli_num_rows($result);
				
				$row  = mysqli_fetch_array($result);
				if(is_array($row)){
					echo "Login Credentials verified";
					echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
					header("Location: mainPageteacher.html"); 
				}
				else{
				echo "<script type='text/javascript' d>alert('Invalid Login Credentials')</script>";
				echo "Invalid Login Credentials";
				header("Location: teacherIndex.php");
				}
			  }else{
				  //echo "<script type='text/javascript'>alert('Empty username and password')</script>";
				  echo "Empty username and password";
			  }
}elseif(isset($_POST['stu'])){
	extract($_POST);
    include 'php/connection.php';
              // require('php/connection.php');

              

				//Assigning POST values to variables.
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				if (($username <> null) and ($password <> null)){
				//CHECK FOR THE RECORD FROM TABLE
				$query = "SELECT student_id FROM student WHERE username = '$username' and password = '$password'";

				$result = mysqli_query($conn, $query);
				$count = mysqli_num_rows($result);
				
				$row  = mysqli_fetch_array($result);
				if(is_array($row)){
					echo "Login Credentials verified";
					echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
					header("Location: mainPage.html"); 
				}
				else{
				echo "<script type='text/javascript' d>alert('Invalid Login Credentials')</script>";
				echo "Invalid Login Credentials";
				header("Location: studentIndex.php");
				}
			  }else{
				  //echo "<script type='text/javascript'>alert('Empty username and password')</script>";
				  echo "Empty username and password";
			  }
}

				  
    ?>