<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Café Bangkok</title>
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.php">
	<link rel="stylesheet" href="css/fixed.css">
</head>

<body data-spy="scroll" data-target="#navbarResponsive">

<!--- Start Home Section -->
<div id="home">

<!-- Navigation -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="index.php"><img src="img/cafebangkok.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#menu">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
		</div>
	</nav>





<!--- Start Image Slider -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
		</ol>
		<div class"carousel-inner" role="listbox">
			<!--- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(img/glass.png);">
				<div class="carousel-caption text-center">
					<h1>Café Bangkok</h1>
					<h3>A fine dining restaurant</h3>
					<a class="btn btn-outline-light btn-lg" href="#menu">Menu</a>
				</div>
			</div>
			<!--- Slide 2 -->
			<div class="carousel-item" style="background-image: url(img/room.png);">
			</div>
			<!--- Slide 3 -->
			<div class="carousel-item" style="background-image: url(img/bar.png);">
			</div>
			<!--- End Carousel Inner -->

			<!--- Prev and Next buttons -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div>
	</div>
</div>
<!--- End Home Section -->

<!--- Start Menu Section -->
<div id="menu" class="offset">

	<div class="col-12 narrow text-center">
		<h1>Summertime Madness</h1>
		<p class="lead">To celebrate the lovely summer, we're currently offering a 20% discount to all reservations between 10am to 4pm.</p>
		<a class="btn btn-secondary btn-md" href="form.html" target="_blank">Reserve Now!</a>
	</div>


	<!--- Jumbotron -->
	<div class="jumbotron container-fluid">
			<div class="col-12 text-center">
				<h3 class="heading">Menu</h3>
				<div class="heading-underline"></div>
			</div>

		<div class="row no-padding">

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/1.png"></a>
					<img src="img/menu/1.png">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/2.png"></a>
					<img src="img/menu/2.png">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/3.png"></a>
					<img src="img/menu/3.png">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/4.png"></a>
					<img src="img/menu/4.png">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/5.png"></a>
					<img src="img/menu/5.png">
				</div>
			</div>

			<div class="col-sm-4">
				<div class="menu">
				<a href="img/menu/6.png"></a>
					<img src="img/menu/6.png">
				</div>
			</div>

			<div class="narrow text-center">
				<div class="col-12">
					<p class="lead">Come by for an exclusive fine dining experience</p>
			</div>

		</div>	<!--- End Row -->
	</div>	<!--- End Jumbotron -->

</div>	<!--- End Menu Section -->

<!--- Start About Section -->
<div id="about" class="offset">

	<div class="col-12 text-center">
		<h3 class="heading">About</h3>
		<div class="heading-underline"></div>
	</div>

<div class="row padding">

	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/team/team1.png">
			<div class="card-body">
				<h4>Head Chef Luigi</h4>
				<p>"Is leading an exception kitchen staff with over 50 years combined fine dining experience. Always striving to provide our guests with an unforgettable experience."</p>

			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/team/team2.png">
			<div class="card-body">
				<h4>Manager Mario Russo</h4>
				<p>"Has carried on the family tradition of fine dining restaurants for over 4 generations, with great focus on customer service and exceptional product quality."</p>

			</div>
		</div>
	</div>

</div> <!--- End of Row -->

</div>
<!--- End About Section -->

<!--- Start Contact Section -->
<div id="contact" class="offset">

<footer>
<div class="row justify-content-center">

	<div class="col-md-5 text-center">
		<img src="img/cafebangkok.png">
		<p>For reservations, special events or delivery please contact us through phone or email.</p>
		<strong>Contact Info</strong>
		<p>(+66) 88 48 3788<br>email@cafebangkok.com</p>

		<a href="" target="_blank"><i class="fab fa-facebook-square"></i></a>
		<a href="" target="_blank"><i class="fab fa-twitter-square"></i></a>
		<a href="" target="_blank"><i class="fab fa-instagram"></i></a>
	</div>

	<hr class="socket">
	&copy; COSC 4120 Loui Englyst

</div> <!--- End of Row -->
</footer>

</div>
<!--- End Contact Section -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
