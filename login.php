<?php

session_start();
require_once("connectdatabase.php");


if(isset($_POST["username"]) && isset($_POST["password"])){
  
  if($_POST["username"] == $username && $_POST["password"] == $password){

    $_SESSION["loginSuccess"] = true;


    header("Location: http://localhost/reservationdisplay.php");


  }else{
    $_SESSION["loginSuccess"] = false;
  }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Transparent Login Form with Bootstrap 4</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="style.php">
</head>
<body>

	<body class="loginpage">
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">

				<div class="col-12 user-img">
					<img src="img/face.png">
				</div>

				<form class="col-12" action="" method="post">
					<div class="form-group">
						<input name="username" type="text" class="form-control" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<input name="password" type="password" class="form-control" placeholder="Enter Password">
					</div>
					<button type="submit" class="loginbtn"><i class="fas fa-sign-in-alt"></i>Login</button>
				</form>

				<div class="col-12 forgot">
					<a href="#">Forgot Password?</a>
				</div>

			</div>	<!--- End of Modal Content -->
		</div>
	</div>





</body>
</html>
