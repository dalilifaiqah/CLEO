<?php

if(isset($_POST['customereditprofile'])) {
    customereditprofile($_POST['customereditprofile']);
}

?>

<?php 

function customereditprofile()
{
    $servername = "localhost";
    $username = "admin1";
    $password = "admin1";
    $dbname = "cleo";
    
    $con2 = new mysqli($servername, $username, $password, $dbname);
    
    if(!$con2){
      echo "Error";
    }else{
    
      $email = $_POST['email'];
      $newname = $_POST['name'];
      $newpfp = $_POST['profilepicture'];
      $newpassword = $_POST['password'];
     
      $sql = "UPDATE customer SET name = '$_POST[name]', profilepicture = '$_POST[profilepicture]', password = '$_POST[password]' WHERE email = '$_POST[email]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: /MasterCLEO/Moderna-pro/3viewprofile.php");
            }else{
                echo '<br>Update failed';
            }
    
}

?>