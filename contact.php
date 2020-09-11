<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
		initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Contact Selina for Software and Web Development Services</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- Bootstrap 4.5 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="css/contact.css">
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
				<p><a href="tel:+16093770520">Contact Me</a></p>
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
					<li class="nav-item"><a href="home" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="projects" class="nav-link">Projects</a></li>
					<li class="nav-item"><a href="resume" class="nav-link">Resume</a></li>					
					<li class="nav-item"><a href="contact" class="nav-link active">Contact Me</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End Navigation -->
	
	<!-- Contact Form -->
	<section id="contact-section">

		<div class = "container">
			<h2>Contact Me</h2>
			<p>Use the contact form below and I will respond promptly.</p>
			<div class="contactForm">					
				<form action="send-mail" method="POST" onsubmit="return submitUserForm();" enctype="multipart/form-data">
					<!-- ReCAPTCHA -->
					<script src="https://www.google.com/recaptcha/api.js?onload=recaptchaRender" async defer></script>
					
					<input name="name_first" type="text" placeholder="First Name: " required>
					<input name="name_last" type="text" placeholder="Last Name: " required>
					<input name="phone" type="tel" placeholder="Phone Number: " required>
					<input name="email" type="email" placeholder="Email Address: " required>
					<input name="subject" type="text" placeholder="Subject: " required>
					<textarea name="message" id="message" placeholder="Message " rows="5" required></textarea>
					<div class="g-recaptcha" data-sitekey="6Le-O8MZAAAAAG7LaBAqNsoMTd9977CTtBsamdT2" data-callback="verifyCaptcha"></div>
					<div id="g-recaptcha-error"></div>
					<button type="submit" value="submit" class="submit">Send Message</button>
				</form>

				
				<script>
				/* Google Recaptcha Submit and Verify */
								 
				function submitUserForm() {
					var response = grecaptcha.getResponse();
					if(response.length == 0) {
						document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
						return false;
					}
					else
					return true;
				}
				
				function verifyCaptcha() {
					document.getElementById('g-recaptcha-error').innerHTML = '';
				}
				</script>
			</div>
		</div>
	</section>

	<!-- Map -->
	<!--<section>
		<div class="container-fluid">

			<iframe src="https://www.google.com/maps/embed?
			pb=!1m18!1m12!1m3!1d225470.77384459626!2d-82.45428045!3d27.
			99448255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
			1!3m3!1m2!1s0x88c2b782b3b9d1e1%3A0xa75f1389af96b463!2sTampa%2C%20FL
			!5e0!3m2!1sen!2sus!4v1597113035566!5m2!1sen!2sus" 
			width="100%" height="300px" frameborder="0" style="border:0"></iframe>"

		</div>
	</section>-->

	<!-- Start Jumbotron -->
    <div class="jumbotron py-5 mb-0">
        <div class="container">
            <div class="row justify-content-center">
				<p align="center" class="text-dark">"Success is not final, failure is not final:<br />it is the COURAGE TO CONTINUE THAT COUNTS.<br />Winston Churchill</p>
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
					<p>(609) 377-0520</p>
					<p>Selina@SelinaRoth.com</p>
				</div>
				<div class="col-md-4 mt-5">
					<hr class="light">
					<h5>My Hours</h5>
					<hr class="light">
					<p>Monday to Friday: 9am - 5pm</p>
					<p>Saturday: By Appointment</p>
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

	
	<!-- Script Source Files -->
	<!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Font Awesome -->
    <script src="js/all.min.js"></script>
	
</body>
</html>