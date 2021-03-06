<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
		initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome to Selina's Website Created with Bootstrap using JavaScript, PHP, HTML and CSS</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?
		family=Montserrat:300,400,500,600,700&display=swap" 
		rel="stylesheet">
</head>
<body>

	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container">
			<div class="col-12 text-right">
				<p><a href="tel:MyPhoneNumber">Contact Me</a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->

	<!-- Navigation -->
	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
				<a href="home" class="navbar-brand"><img src="img/Logo-FullNameTransparent.png" 
					alt="Logo" title="logo"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive">  
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="home" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="projects" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="resume" class="nav-link">Resume</a></li>
					<li class="nav-item"><a href="contact" class="nav-link">Contact Me</a></li>
				</ul>

			</div>
		</div>
	</nav>
	<!-- End Navigation -->


	<!-- Image Carousel -->

	<div id="carousel" class="carousel slide" data-ride="carousel"
		data-interval="6500">

		<!-- Carousel Content -->
		<div class="carousel-inner">

			<div class="carousel-item active">
				<img src="img/Programming.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-10 bg-custom d-none d-md-block py-3 px-0">
								<h1>Work Smarter,</h1>
								<h1>NOT Harder!</h1>
								<div class="border-top border-primary w-50 mx-auto my-3"></div>
								<h3 class="pb-3">Software & Web Development</h3>
								<a href="resume" class="btn btn-danger btn-lg mr-2">View Resume</a>
								<a href="projects" class="btn btn-primary btn-lg ml-2">View Projects</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/2.jpg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-end text-right">
							<div class="col-4 bg-custom d-none d-md-block py-3 px-0 pr-3">
								<p class="lead pb-3">A MOBILE FRIENDLY HTML & CSS WEBSITE DESIGN.</p>
								<a href="contact" class="btn btn-danger btn-lg">Contact Me</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-item">
				<img src="img/carousel/1.jpeg" class="d-block w-100" alt="...">
				<div class="carousel-caption">
					<div class="container">
						<div class="row justify-content-start text-left">
							<div class="col-6 bg-custom d-none d-md-block py-3 px-0 pl-3">
								<h3 class="pb-3">Built For Tablets</h3>
								<p class="lead">THE BEST WEBSITES CAN BE SEEN JUST AS WELL ON ALL DEVICES</p>
								<a href="contact" class="btn btn-primary btn-lg">Contact Me</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
			<!-- End Carousel Content -->
		
		<!-- Previous & Next Buttons -->
			<a href="#carousel" class="carousel-control-prev" role="button"
				data-slide="prev">
				<span class="fas fa-angle-left fa-3x"></span>
			</a>

			<a href="#carousel" class="carousel-control-next" role="button"
				data-slide="next">
				<span class="fas fa-angle-right fa-3x"></span>
			</a>
		<!-- End Previous & Next Buttons -->

	</div>
	<!-- End Image Carousel -->
	
	<!-- Main Page Heading -->
		<div class="col-12 text-center mt-5">
			<h1 class="text-dark pt-4">Built With Ease</h1>
			<div class="border-top border-primary w-25 mx-auto my-3"></div>
			<p class="lead">For all of the Champions in this World.</p>
		</div>


	<!-- Three Column Section -->
	<div class="container">
		<div class="row my-5">

			<div class="col-md-4 my-4">
				<img src="img/1.jpg" aly="" class="w-100">
				<h4 class="my-4">"Why Programming?"</h4>
				<p>It's simple....I love everything about programming 
					and I love working with others. I simply love what I do, 
					it's like gazing at the amazing beauty of the Rocky Mountains
					or watching the sunset over the ocean.
					<a href="about" class="btn btn-outline-dark btn-md">My Story</a>
				</p>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/2.jpg" aly="" class="w-100">
				<h4 class="my-4">"Exceptional Work"</h4>
				<p>In anything I do I strive to do my absolute best. It is my top
					priority to focus on the needs of the project and to meet deadlines.
					<a href="resume" class="btn btn-outline-dark btn-md">Resume</a>
				</p>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/3.jpg" aly="" class="w-100">
				<h4 class="my-4">"My Programming History"</h4>
				<p>Get to know what projects I've worked on. This website is 
					a project I had fun creating.
					<a href="projects" class="btn btn-outline-dark btn-md">Projects</a>
				</p>
			</div>

		</div>
	</div>
	<!-- End Three Column Section -->


	<!-- Emoji Navbar First -->
	<a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button"
		data-toggle="collapse"></a>

	<!-- Start Fixed Background IMG -->
	<div class="fixed-background">

		<div class="row text-light py-5">
			<div class="col-12 text-center">
				<h1>Advance to the Next Level</h1>
				<h3 class="py-4">..see what's on the other side.</h3>

				<button type="button" data-toggle="modal" data-target="#modal1" 
				class="btn btn-primary btn-lg mr-2">Blue Pill</button>

				<button type="button" data-toggle="modal" data-target="#modal2" 
				class="btn btn-danger btn-lg ml-2">Red Pill</button>
			</div>
		</div>

		<div class="fixed-wrap">
			<div class="fixed"></div>
		</div>
	</div>
	<!-- End Fixed Background IMG -->
 
	
	<!-- Emoji Navbar Second -->
	<a class="navbar bg-primary sticky-top emoji" href="#emoji" role="button"
	data-toggle="collapse"><i class="fas fa-upload"></i></a>

	<div class="collapse" id="emoji">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-3"><img src="img/emoji/panda.gif" alt="" 
					class="w-100"></div>
				<div class="col-sm-6 col-md-3"><img src="img/emoji/poo.gif" alt="" 
					class="w-100"></div>
				<div class="col-sm-6 col-md-3"><img src="img/emoji/unicorn.gif" alt="" class="w-100"></div>
				<div class="col-sm-6 col-md-3"><img src="img/emoji/chicken.gif" alt="" class="w-100"></div>
			</div>
		</div>
	</div>

	<!-- Modal Popup -->
	<div class="modal fade" id="modal1">
		<div class="modal-dialog">
			<img src="img/emoji/unicorn.gif" alt="" class="w-100">
		</div>

	</div>

	<div class="modal fade" id="modal2">
		<div class="modal-dialog">
			<img src="img/emoji/poo.gif" alt="" class="w-100">
		</div>
	</div>
		
	<!-- Start Two Column Section -->
	<div class="container my-5">
		<div class="row py-4">
			
			<div class="col-lg-4 mb-4 my-lg-auto">
				<h1 class="text-dark font-weight-bold mb-3">I've been expecting you!</h1>
				
				<p class="mb-4">I hope you like my website. I'm happy to speak
					with you and answer any questions you have concerning
					my site and any of the projects I've worked on thus far.</p>
				<a href="contact" target="_blank" class="btn
				 btn-outline-dark btn-lg">Contact Me</a>
			</div>

			<div class="col-lg-8">
				<img src="img/code.jpg" alt="" class="w-100">
			</div>

		</div>
	</div>
	<!-- End Two Column Section -->


	<!-- Start Jumbotron -->
	<div class="jumbotron py-5 mb-0">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-8 col-xl-9 my-auto">
					<h4>Looking for quality software and web developers?</h4>
				</div>

				<div class="col-md-5 col-lg-4 col-xl-3 pt-3 pt-md-0">
					<a href="contact" class="btn btn-primary btn-lg">Contact Me Today</a>
				</div>
			</div>
		</div>
	</div>

	<!-- End Jumbotron -->


	<!-- Start Footer -->
	<footer>
		<div class="container-fluid padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="img/Logo-Transparent-Bigger.png">
					<p>All about software and web development.</p>
					<hr class="light">
					<p>MyPhoneNumber</p>
					<p>MyEmail</p>
				</div>
				<div class="col-md-4 mt-5">
					<hr class="light">
					<h5>My Hours</h5>
					<hr class="light">
					<p>Monday to Friday: 9am - 5pm</p>
					<p>Saturday: By Appointmrnt</p>
					<p>Sunday: Closed</p>
					<ul class="social pt-3">
						<li><a href="https://www.linkedin.com/in/selinarothweiler/"
							target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://github.com/SelinaRothweiler"
							target="_blank"><i class="fab fa-github-square"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 mt-5">
					<hr class="light">
					<h5>Service Areas</h5>
					<hr class="light">
					<p class="pl-2 pr-2">Remote work covers the U.S.<br />
					Online video meetings and content
					sharing is readily available on several
					platforms; that run across mobile devices,
                    and desktops. A WiFi connection is all we need.<br />
                    We will accomodate all clients who wish to have 
                    a face-to-face meeting. During this 
                    health crisis we will take all safety precautions 
                    and abide by all safety procedures; to make sure the 
                    well being of everyone is safeguarded.
                    </p>			
				</div>
			</div>
		</div>
	</footer>

	<!-- End Footer -->


	<!-- Start Socket -->
	<div class="socket text-light text-center py-3">
		<p>&copy; <a href="https://SelinaRoth.com" target="_blank">SelinaRoth.com</a></p>
	</div>
	<!-- End Socket -->
	<!-- <div class="container my-5"></div> -->

	<!-- Script Source Files -->
	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
	<script src="js/all.min.js"></script>

	<!-- End Script Source Files -->
</body>
</html>
