<?php

if(isset($_POST['login'])) {
    login($_POST['login']);
}
?>

<?php
    function login(){
        $servername = "localhost"; 
        $username = "admin1";
        $password = "admin1"; 
        $dbname = "cleo";
        $con = new mysqli($servername, $username, $password, $dbname);

        if (!$con){
            echo "error";
        }else{

        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $sql->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password' ");
        $count = mysqli_num_rows($result);

        if($count2 == 1){
            //$row = $result->fetch_assoc();
            header("Location: Guesthomepage.php");
        }else{
            echo '<br>Login failed';
        }
        }
    }
?>