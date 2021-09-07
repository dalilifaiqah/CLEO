<?php
if (isset($_POST['signup'])) {
    signup($_POST['signup']);
}else if(isset($_POST['login'])) {
    login($_POST['login']);
}
?>

<?php
    function signup()
    {
    
        //1.connect to mysql
        
        $servername = "localhost"; 
        $username = "admin1";
        $password = "admin1"; 
        $dbname = "cleo";
        $con = new mysqli($servername, $username, $password, $dbname);

        if (!$con){
            echo "error";
        }else{
            
        //2.construct sql statement
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "INSERT INTO customer(name,email,password)
                values('$name','$email','$password')";

                if ($con ->query($sql) ==true) {
                     echo "Sign up successfully";
                     header("Location: /MasterCLEO/Moderna-pro/colorlib-regform-9/colorlib-regform-9/CustomerLogin.php");
                }else{
                    echo "error";
                }

                
        }
    }

    function login(){
        $servername = "localhost"; 
        $username = "admin1";
        $password = "admin1"; 
        $dbname = "cleo";
        $sql = new mysqli($servername, $username, $password, $dbname);

        $email = $sql->real_escape_string($_POST['email']);
        $password = $sql->real_escape_string($_POST['password']);

        $result = $sql->query("SELECT * FROM customer WHERE email = '$email' AND password = '$password' ");
        $count = mysqli_num_rows($result);

        if($count == 1){
            //$row = $result->fetch_assoc();
            header("Location: Guesthomepage.php");
        }else{
            echo '<br>Login failed';
        }
    }
?>