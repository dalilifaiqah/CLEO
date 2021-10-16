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
      $newaddress = $_POST['address'];
     
      $sql = "UPDATE admin SET name = '$_POST[name]', address = '$_POST[address]' WHERE email = '$_POST[email]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: /MasterCLEO/Moderna-pro/2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/3viewprofile.php");
            }else{
                echo '<br>Update failed';
            }
    
}

?>