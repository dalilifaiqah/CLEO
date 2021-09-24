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
                    <h2>Sign up </h2>
                    <p class="desc">Create a new account for <span>CLEO</span></p>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" minlength = "6" required/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <!--<div class="form-group">
                        <input type="text" class="form-input" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password"/>
                        <span toggle="#confirmpassword" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>-->
                    <!--<div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>-->
                    <div class="form-group">
                        
                        <input type="submit" name="signup" id="signup" class="form-submit submit" value="Sign up"/>
                        
                        
                        <a href="CustomerLogin.php" class="submit-link submit">Log In</a>
                    </div>
                    <div class="form-group">
                        <!--<a href="../../Guesthomepage.php" class="submit-link submit">Back to website</a>-->
                        <p>By clicking Sign Up, you agree to our <a href="https://www.freeprivacypolicy.com/live/02e3012e-de66-4b6a-a831-8de595a84496"> Terms and Condition</a> 
                        and <a href="https://www.freeprivacypolicy.com/live/3629ced9-9e17-40cc-abbf-dfd879b204e8">Privacy Policy</a> . <p>
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