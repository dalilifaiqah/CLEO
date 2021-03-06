<!doctype html>
<html lang="en">
  <head>
	<link rel="icon" href="/assets/img/icon1.png">
  	<title>CLEO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
	</head>
	<br>
	<body class="img js-fullheight" style="background-image: url(images/backgroundcleo1.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="/assets/img/icon1.png">
					<h2 class="heading-section">CLEO Admin</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Log In</h3>
				  
			<div class="signin-content">
				  <form action="../../AdminDB.php" method="POST" id="signin-form" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" name="email" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" name="password" class="form-control" placeholder="Password" minlength = "6" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button name="login" type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            </div>
	          </form>
	          <div class="social d-flex text-center">
	          	<a href="../../index.php" class="px-2 py-2 mr-md-1 rounded"> Back to Website</a>
	          </div>
		      </div>
				</div>
			</div>	
			</div>
		</div>
	</section>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>