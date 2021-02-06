<?php

    $url='localhost';
    $username='root';
    $password='';
    $conn=mysqli_connect($url,$username,$password,"edubrella");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
// global $connection;

// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "edubrella";

// $connection = mysqli_connect($host, $username, $password, $dbname);

//Check connection
// if (mysqli_connect_errno()) {
    // echo "<script>alert('connection error')</script>";
// }
?>
