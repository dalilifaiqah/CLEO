<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/icon1.png">
    <title>CLEO Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form action="../../CustomerDB.php" method="POST" id="signup-form" class="signup-form">
                    <h2>Sign up </h2>
                    <p class="desc" style="margin-bottom: 20px;">Create a new account for <span>CLEO</span></p>
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
                    <div class="form-group">
                        <input type="submit" name="signup" id="signup" class="form-submit submit" value="Sign up"/>
                    </div>
                    <div class="form-group">
                        <a href="CustomerLogin.php" style="color: #422a24;">Already have an account? Log In here!</a>
                    </div>
                    <div class="form-group" >
                        <p>By clicking Sign Up, you agree to our <a href="https://www.freeprivacypolicy.com/live/02e3012e-de66-4b6a-a831-8de595a84496"> Terms and Conditions</a> 
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