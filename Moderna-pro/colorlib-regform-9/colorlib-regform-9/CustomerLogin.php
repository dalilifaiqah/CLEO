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
                <form action=/MasterCLEO/Moderna-pro/CustomerDB.php method="POST" id="signup-form" class="signup-form">
                    <h2>Log In </h2>
                    <p class="desc">Log into an existing account in <span>CLEO</span></p>
                    <div class="form-group">
                        <!--<input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>-->
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Password" minlength = "6" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <!--<div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>-->
                    <div class="form-group">
                        <a href="FPasswordCust.php" style="color: saddlebrown;">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="login" id="submit" class="form-submit submit" value="Log In"/>
                        <a href="signupin.php" class="submit-link submit">Sign Up</a>
                    </div>
                    <div class="form-group">
                        <a href="../../Guesthomepage.php" class="submit-link submit"> Back to website </a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>