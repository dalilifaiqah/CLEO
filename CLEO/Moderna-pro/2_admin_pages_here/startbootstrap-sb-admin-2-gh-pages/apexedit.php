<?php

if(isset($_POST['apexedit'])) {
    apexedit($_POST['apexedit']);
}

?>

<?php 

function apexedit()
{
        $servername = "localhost";
        $username = "ourcleoc_cleoadmin";
        $password = "Cleo_12345_";
        $dbname = "ourcleoc_cleo";
    
    $con2 = new mysqli($servername, $username, $password, $dbname);
    
    if(!$con2){
      echo "Error";
    }else{
    
      $id = $_POST['id'];
      $newname = $_POST['name'];
      $newaddby = $_POST['addby'];
      $newtag = $_POST['tag'];
     
      $sql = "UPDATE apexdb SET name = '$_POST[name]', addby = '$_POST[addby]', tag = '$_POST[tag]' WHERE id = '$_POST[id]'";
    }
    
    if ($con2->query($sql) === TRUE){
      header("Location: /2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/apexlegends-product-list.php");
            }else{
                echo '<br>Update failed';
            }
    
}

?>