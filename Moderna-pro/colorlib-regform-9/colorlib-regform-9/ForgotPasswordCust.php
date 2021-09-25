<?php

$servername = "localhost";
$username = "admin1";
$password = "admin1";
$dbname = "cleo";

$con3 = new mysqli($servername, $username, $password, $dbname);

if(!$con3){
  echo "Error";
}else{

  $email = $_POST['email'];
  $newpassword = $_POST['password'];
 

  $sql = "UPDATE customer SET password = '$_POST[password]' WHERE email = '$_POST[email]'";
}

if ($con3->query($sql) === TRUE){
  header("Location: /MasterCLEO/Moderna-pro/4forgotpasswordS.html");
        }else{
            echo '<br>Login failed';
        }

?>


