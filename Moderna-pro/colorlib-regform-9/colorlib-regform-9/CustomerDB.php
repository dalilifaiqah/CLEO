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
        $username = "cleocustomer";
        $password = "customer"; 
        $dbname = "cleo";
        $con = new mysqli($servername, $username, $password, $dbname);

        if (!$con){echo"error";} else
        {//2.construct sql statement
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "INSERT INTO customer(name,email,password)
                values('$name','$email','$password')";
        }

        //3.run insert query
        if(!mysqli_query($con,$sql))
            {
                echo mysqli_error($con);
            }
            else
                header("Location: CustomerLogin.php");
        }
    }
    function login()
    {
        $servername = "localhost"; 
        $username = "cleocustomer";
        $password = "customer"; 
        $dbname = "cleo";
        $con = new mysqli($servername, $username, $password, $dbname);

        $email=$_POST['email'];
        $password = $_POST['password'];

    if(!$con){
        echo mysqli_error();
    }else{
        echo '<br>connected';
        $sql = "select * from customer WHERE email = '$email' AND password = '$password'";
        $qry = mysqli_query($con,$sql);
        $count = mysqli_num_rows($qry);

        if($count == 1){
            header("Location:/MasterCLEO/Moderna-pro/Guesthomepage.php");
        }else{
            echo '<br>Login failed';
        }
    }
    }
?>