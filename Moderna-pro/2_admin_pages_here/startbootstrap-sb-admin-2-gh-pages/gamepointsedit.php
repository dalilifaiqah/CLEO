<?php

if(isset($_POST['gamepointsedit'])) {
    gamepointsedit($_POST['gamepointsedit']);
}

?>

<?php 

function gamepointsedit()
{
  $servername = "localhost";
  $username = "ourcleoc_cleoadmin";
  $password = "ourcleoc_cleoadmin";
  $dbname = "ourcleoc_cleo";
    
    $con2 = new mysqli($servername, $username, $password, $dbname);
    
    if(!$con2){
      echo "Error";
    }else{
    
      $id = $_POST['id'];
      $newname = $_POST['name'];
      $newaddby = $_POST['addby'];
      $newtag = $_POST['tag'];
     
      $sql = "UPDATE gamepointdb SET name = '$_POST[name]', addby = '$_POST[addby]', tag = '$_POST[tag]' WHERE id = '$_POST[id]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: 2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/gamepoints-product-list.php");
            }else{
                echo '<br>Update failed';
            }
    
}

?>