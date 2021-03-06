@import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
@import url('https://fonts.googleapis.com/css?family=Roboto');
<?php Header ("Content-type: text/css; charset=utf-8");?> 


body {
	overflov-x: hidden;
	font-family: 'Lato', sans-serif;
	color: #505962;
}

.offset:before {
	height: 3.8rem;
	margin-top: -3.8rem;
	content: "";
	display: block;
}

/*--- navbar --*/

.navbar {
	text-transform: uppercase;
	font-weight:700;
	font-size: .9rem;
	letter-spacing: .1rem;
	background: rgba(0, 0, 0, .6)!important;
}
.navbar-brand img {
	height: 2rem;
}

.navbar-nav li {
	padding-right: .7rem;
}
.navbar-dark .navbar-nav .nav-link {
	color: white;
	padding-top: .8rem;
}
.navbar-dark .navbar-nav .nav-link.active,
.navbar-dark .navbar-nav .nav-link:hover {
	color: #1ebba3;
}

/*--- Slider --*/
.carousel-item {
	height: 100vh;
}

.carousel-caption {
	position: absolute;
	top: 38%;
	text-transform: uppercase;
	width: 100%;
	right: 0;
	left: 0;
}

.carousel-caption h1 {
	font-size: 3.8rem;
	font-weight: 700;
	letter-spacing: .3rem;
	text-shadow: .1rem .1rem .8rem black;
	padding-bottom: 1rem;
}

.carousel-caption h3 {
	font-size: 2rem;
	text-shadow: .1rem .1rem .5rem black;
	padding-bottom: 1.6rem;
}

.btn-lg {
	border-width medium;
	border-radius: 0;
	font-size: 1.1rem;
}

/*============= COURSE SECTION =============*/

.narrow {
  width: 75%;
  margin: 0 auto;
  padding-top: 2rem;
}
.btn-md {
  border-width: medium;
  border-radius: 0;
  padding: .6rem 1.1rem;
  text-transform: uppercase;
  margin: 1rem;
}
.btn-secondary {
  border-width: medium;
  border-radius: 0;
  padding: .6rem 1.2rem;
  font-size: 1.2rem;
  text-transform: uppercase;
  margin: 1rem;
  border-color: #1EBBA3;
  background-color: #1EBBA3;
  color: white;
}
.btn-secondary:hover,
.btn-secondary:focus {
  border-color: #189582;
  background-color: #189582;
  color: white;
}

/*--- Menu --*/
.jumbotron {
	border-radius: 0;
	padding: 3rem 0 2rem;
	margin-bottom: 0;
}
h3.heading {
	font-size: 1.9rem;
	font-weight: 700;
	text-transform: uppercase;
	padding-bottom: 1.9rem;
}

.heading-underline {
	width: 3rem;
	height: .2rem;
	background-color: #1ebba3;
	margin: 0 auto 2rem;
}

/*--- Menu Pictures ---*/

.menu img {
	max-width: 100%;
}
.row.no-padding [class*=col-] {
	padding: 0;
}

/*--- Contact --*/

footer {
	background-color: #40474e;
	color: white;
	padding: 2rem 0 3rem;
	margin-top: 1rem;
}

footer img {
	height: 3rem;
	margin: 1.5rem 0;
}

footer a {
	color: white;
}

footer svg.svg-inline--fa {
	font-size: 1.6rem;
	margin: 1.2rem .5rem 0 0;
}

footer svg.svg-inline--fa:hover {
	color: #1ebba3;
}
hr.socket {
	border-top: .2rem solid #666b71;
	width: 100%;
}

/*--- Media Queries --*/

@media (max-width: 767px) {
	.carousel-caption h1 {
		font-size: 2.3rem;
		letter-spacing: .15rem;
		padding-bottom: .5rem;
	}

	.carousel-caption h3 {
		font-size: 1.2rem;
		padding-bottom: 1.2rem;
	}
	.btn-lg {
		font-size: 1rem;
	}
	.narrow h1 {
		font-size: 1.5rem;
	}
	p.lead {
		font-size: 1rem;
	}
}

/*--- Login Page --*/

.loginpage {
	font-family: 'Roboto', sans-serif;
	background: url(img/mountain.jpg) no-repeat center center fixed;
}

.main-section {
	margin: 0 auro;
	margin-top: 130px;
	padding: 0;
}

.modal-content {
	background-color: #3b4652;
	opacity: .95;
	padding: 0 18px;
	box-shadow: 0px 0px 3px #848484;
}
.user-img {
	margin-top: -50px;
	margin-bottom: 35px;
}

.user-img img {
	height: 100px;
	width: 100px;
	border-radius: 5px;
	box-shadow: 0px 0px 2px #3b4652;
}
.form-group {
	margin-bottom: 25px;
}
.form-group input {
	height: 42px;
	border-radius: 5px;
	border: 0;
	font-size: 18px;
	padding-left: 54px;
}
.form-group::before {
	font-family: 'Font Awesome\ 5 free';
	content: "\f007";
	position: absolute;
	font-size: 22px;
	color: #555e60;
	left: 28px;
	padding-top: 4px;
}

.form-group:last-of-type::before {
	content: "\f023";
}
button {
	width: 40%;
	margin: 5px 0 25px;
}
.loginbtn {
	background-color: #27c2a5;
	color: #fff;
	font-size: 19px;
	padding: 7px 14px;
	border-radius: 5px;
	border: #27c2a5;
	border-bottom: 4px solid #219882;
}
.loginbtn:hover, .loginbtn:focus {
	background-color: #25a890!important;
	border-bottom: 4px solid #25a890;
}
.svg-inline--fa {
	font-size: 20px;
	margin-right: 7px;
}
.forgot {
	padding: 5px 0 25px;
}
.forgot a {
	color: #c2fbfe;
}

/*============ BOOTSTRAP BREAK POINTS:

Extra small (xs) devices (portrait phones, less than 576px)
No media query since this is the default in Bootstrap

Small (sm) devices (landscape phones, 576px and up)
@media (min-width: 576px) { ... }

Medium (md) devices (tablets, 768px and up)
@media (min-width: 768px) { ... }

Large (lg) devices (desktops, 992px and up)
@media (min-width: 992px) { ... }

Extra (xl) large devices (large desktops, 1200px and up)
@media (min-width: 1200px) { ... }

=============*/