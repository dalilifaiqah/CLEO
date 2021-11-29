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
        $con = new mysqli($servername, $username, $password, $dbname);
        if (!$con){
            echo "error";
        }else{
        //2.construct sql statement
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $vkey = md5(time() . $name);
        $sql = "INSERT INTO customer(name,email,password,vkey)
        values('$name','$email','$password','$vkey')";
        }
        
            if ($con->query($sql) === TRUE) {
                $to = $email;
                $subject = "Verify Your Email Address";
                $headers = "From: info.cleosheesh@gmail.com\r\n";
                $headers .= "MIME-Version : 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $message = "<a href='http://Verify.php?vkey=$vkey'>Click Here To Verify Your Email Address</a>";

                mail($to, $subject, $message, $headers);

               
                     echo "Sign up successfully";
                     header("Location: colorlib-regform-9/colorlib-regform-9/CustomerLogin.php");
                }else{
                    echo "error";
                }
       
    }

    function login(){
        $servername = "localhost";
        $username = "ourcleoc_cleoadmin";
        $password = "Cleo_12345_";
        $dbname = "ourcleoc_cleo";
        $sql = new mysqli($servername, $username, $password, $dbname);
        $email = $sql->real_escape_string($_POST['email']);
        $password = $sql->real_escape_string($_POST['password']);
        $resultSet = $sql->query("SELECT * FROM customer WHERE email = '$email' AND password = '$password' LIMIT 1 ");
        if ($resultSet->num_rows != 0) {
            //Process login
            $row = $resultSet->fetch_assoc();
            $verified = $row['verified'];
            $email = $row['email'];
            $_SESSION['email'] = $email;
    
            if ($verified == 1) { 
                header("Location:Customerhomepage.php");
                           
            } else {
                header("Location:/customer%20email%20verification/Emailnotverified.html");
            }
            
        } else {
            //Invalid login
            header("Location: 4loginfail.html");
        }
    }
    function logout(){
        session_destroy();
        header("Location:4logout.html");
    }
?>