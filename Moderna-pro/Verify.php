<?php
if (isset($_GET['vkey'])){
    //Process the vkey
    $vkey = $_GET['vkey'];

    $servername = "localhost";
    $username = "ourcleoc_cleoadmin";
    $password = "ourcleoc_cleoadmin";
    $dbname = "ourcleoc_cleo";
    
    $con = new mysqli($servername, $username, $password, $dbname);

    $resultSet = $con->query("SELECT verified, vkey FROM customer WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");

    if ($resultSet->num_rows == 1) {
        //validate the email address
        $update = $con->query("UPDATE customer SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");

        if($update){
            header("Location:/customer%20email%20verification/Emailsuccessful.html");
        }else{
            echo $mysqli->error;
        }

    }else{
        echo "Error, This email address has been used or invalid. Please try other email address.";
    }
    
}else{
    die();
}


?>