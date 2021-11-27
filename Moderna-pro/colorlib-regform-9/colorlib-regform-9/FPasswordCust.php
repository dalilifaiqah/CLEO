<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon1.png">
    <title>CLEO</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form action=/colorlib-regform-9/colorlib-regform-9/ForgotPasswordCust.php method="POST" id="signup-form" class="signup-form" style="margin-bottom:23px;">
                    <h2>Forgot Password </h2>
                    <p class="desc">Change to a new password for your <span>CLEO account</span></p>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="New Password" minlength = "6" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <br><br>
                        <input type="submit" name="confirmpassword" id="submit" class="form-submit submit" style="width: 40%;" value="Confirm Password"/>
                    </div>
                    <div class="form-group" style="margin-bottom:28px">
                        <a href="CustomerLogin.php" class="submit-link submit"> Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>