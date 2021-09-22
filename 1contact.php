<?php

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "cleo";

$con2 = new mysqli($servername, $username, $password, $dbname);

if(!$con2){
  echo "Error";
}else{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contactus(name, email, subject, message) 
                VALUES ('$name','$email','$subject','$message')";
}

  if ($con2->query($sql) === TRUE){
        //echo "<h2>Thanks, your request has been submitted!</h2>";
        header("Location:/MasterCLEO/Moderna-pro/1successfulfeedback.html");
  }

?>