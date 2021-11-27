<?php
if(isset($_POST['admineditprofile'])) {
    admineditprofile($_POST['admineditprofile']);
}

?>
<?php 
function admineditprofile()
{
  $servername = "localhost";
  $username = "ourcleoc_cleoadmin";
  $password = "Cleo_12345_";
  $dbname = "ourcleoc_cleo";
    $con2 = new mysqli($servername, $username, $password, $dbname);
    
    if(!$con2){
      echo "Error";
    }else{
    
      $email = $_POST['email'];
      $newname = $_POST['name'];
      $newmobile = $_POST['mobile'];
      $newaddress = $_POST['address'];
     
      $sql = "UPDATE admin SET name = '$_POST[name]', mobile = '$_POST[mobile]', address = '$_POST[address]' WHERE email = '$_POST[email]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: /2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/admin-profile.php");
            }else{
                echo '<br>Update failed';
            }
}
?>