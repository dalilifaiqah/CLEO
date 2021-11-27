<?php
session_start();
if (isset($_POST['signup'])) {
    signup($_POST['signup']);
}else if(isset($_POST['login'])) {
    login($_POST['login']);
}else if(isset($_POST['logout'])) {
    logout($_POST['logout']);
}    
?>

<?php
    function signup()
    {
        //1.connect to mysql
        $servername = "localhost";
        $username = "ourcleoc_cleoadmin";
        $password = "Cleo_12345_";
        $dbname = "ourcleoc_cleo";
        $con2 = new mysqli($servername, $username, $password, $dbname);

        if (!$con2){
            echo "error";
        }else{
        //2.construct sql statement
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql = "INSERT INTO admin (name,email,password)
                values('$name','$email','$password')";
                if ($con2 ->query($sql) ==true) {
                     echo "Sign up successfully";
                     header("Location: /colorlib-regform-9/colorlib-regform-9/CustomerLogin.php");
                }else{
                    echo "error";
                }            
        }
    }
    function login(){
        $servername = "localhost";
        $username = "ourcleoc_cleoadmin";
        $password = "Cleo_12345_";
        $dbname = "ourcleoc_cleo";
        $sql2 = new mysqli($servername, $username, $password, $dbname);
        $email = $sql2->real_escape_string($_POST['email']);
        $password = $sql2->real_escape_string($_POST['password']);
        $result2 = $sql2->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password' ");
        $count2 = mysqli_num_rows($result2);
        if($count2 == 1){
            //$row = $result->fetch_assoc();
            $_SESSION['email'] = $email;
            header("Location: /2_admin_pages_here/startbootstrap-sb-admin-2-gh-pages/dashboard.php");
        }else{
            echo '<br>Login failed';
        }
    }
    function logout(){
        session_destroy();
        header("Location:4logout.html");
    }
?>