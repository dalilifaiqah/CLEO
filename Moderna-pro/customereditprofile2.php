<?php

if(isset($_POST['customereditprofile2'])) {
    customereditprofile2($_POST['customereditprofile2']);
}

?>

<?php 

function customereditprofile2()
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
      $newid = $_POST['id'];
      $newname = $_POST['name'];
      $newpfp = $_POST['profilepicture'];
      $newpassword = $_POST['password'];
     
      $sql = "UPDATE customer SET id = '$_POST[id]', name = '$_POST[name]', password = '$_POST[password]' WHERE email = '$_POST[email]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: /MasterCLEO/Moderna-pro/2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/customer-list-table.php");
            }else{
                echo '<br>Update failed';
            }
    
}

?>