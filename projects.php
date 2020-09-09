<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, 
		initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Selina's Software and Web Development Projects</title>
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
				<p><a href="tel:+6093770520">Contact Me</a></p>
			</div>
		</div>
	</div>
	<!-- End Top Bar -->


	<!-- Navigation -->
	<nav class="navbar bg-light navbar-light navbar-expand-lg">
		<div class="container">
				<a href="index.php" class="navbar-brand"><img src="img/Logo-FullNameTransparent.png" 
					alt="Logo" title="logo"></a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarResponsive">  
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
					<li class="nav-item"><a href="projects.php" class="nav-link active">Projects</a></li>
					<li class="nav-item"><a href="resume.php" class="nav-link">Resume</a></li>					
					<li class="nav-item"><a href="contact.php" class="nav-link">Contact Me</a></li>
				</ul>

			</div>
		</div>
	</nav>
	<!-- End Navigation -->

	<!-- Main Page Heading -->

	<div class="col-12 text-center mt-5">
		<h1 class="text-dark pt-4">Some of My Projects</h1>
		<div class="border-top border-primary w-25 mx-auto my-3"></div>
		<p class="lead semi_bold">For the love of coding!!</p>
	</div>


	<div class="container">
		<div class="row my-5">

			<div class="col-md-4 my-4">
				<img src="img/Database2.png" aly="" class="w-100">
				<h4 class="text-center my-4">CRUD Database Website</h4>
				<p align="center" class="text-dark">C# | ASP.NET Core MVC <br /> SQL | HTML | CSS<br />JavaScript | Visual Studio<br /></p>
					<p align="justify-left"> •	The app takes advantage of dependency injection by using an IoC container to handle the newing up of objects.<br />
					•	Used a MySQL database on the backend for data storage.<br />
					•	Created a ProductRepository model with CRUD methods for inserting new products, displaying products, updating products, and deleting products.<br />
					•	The ProductController links the models to the views and calls the correct views to display depending on the user’s interaction.
					
				</p>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/Database.png" aly="" class="w-100">
				<h4 class="text-center my-4">Best Buy CRUD Database Console | Visual Studio </h4>
				<p align="center" class="text-dark">SQL | C# | .NET Core</p><br />
					<p align="justify-left"> •	The BestBuy database simulates an inventory management system and employee sales records.<br />
						•	Implemented a repository pattern to isolate the data access logic and business logic in order to allow for a more loosely coupled approach to data access from a sample BestBuy database.<br />
						•	Demonstrated CRUD operations through a console user interface.
					</p>	
			</div>

			<div class="col-md-4 my-4">
				<img src="img/Programming-API-JSON.png" aly="" class="w-100">
				<h4 class="text-center my-4">KanyeREST</h4>
				<p align="center" class="text-dark">C# | JSON | API<br />.NET Core | Visual Studio</p><br />
					<p align="justify-left"> •	This program will simulate a conversation between Kanye West and Ron Swanson through API calls.<br />
						•	Using the Newtonsoft.JSON NuGet package the program will make a call to the Kanye URL and parse the JSON object into a string called kanyeQuote.<br />
						•	The application makes a call to the Ron Swanson API and parses the JSON Array into a string called swansonQuote.<br />
						•	The program will “chat” using a loop to simulate the two talking back and forth until the loop finishes execution.
					</p>	
			</div>

			<div class="col-md-4 my-4">
				<img src="img/C-Sharp-SQL.png" aly="" class="w-100">
				<h4 class="text-center my-4">Tacobell Geolocator</h4>
				<p align="center" class="text-dark">C# | .NET Core | SQL | xUnit</p><br />
					<p align="justify-left"> •	Uses a CSV file or a SQL database to populate an IEnumerable<'Tacobell> called locations.<br />
						•	Test-Driven Development using xUnit ensures that invalid or missing data is handled correctly.<br />
						•	If the data is out of bounds or cannot be parsed, then the parse method returns null.<br />
						•	Finally, utilizing the Geolocator NuGet package, the program will calculate the two farthest Tacobells.<br />
					</p>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/Programming7.png" aly="" class="w-100">
				<h4 class="text-center my-4">Website Development</h4>
				<p align="center" class="text-dark">HTML5 | CSS3 | PHP | JavaScript<br />JQuery | API | Bootstrap 4.5 | VS Code</p>
					<p align="justify-left">•	Built a complete responsive Bootstrap website layout.<br />
						•	Built a top-bar above out menu, a navigation menu using the Bootstrap framework with the navbar component.<br />
						•	Added my own custom styling to the framework.<br />
						•	Created my own logo using Microsoft Word.<br />
						•	Custom Bootstrap Carousel Image Slider, a fixed background image section with a modal pop-up HTML, and layout various width and columned sections.<br />
						•	Emoji Navbar Collapse<br />
						•	Two Column & Bootstrap Jumbotron Sections<br />
						•	Footer & Socket HTML & CSS<br />			
						•	Responsive Media Query CSS<br />
						•	Image gallery set as black and white photos to full color upon hover.<br />
						•	Contact Form in HTML/CSS/PHP/JavaScript with email validation, Google Recaptcha, and form submission that utilizes an API and the if else statement.
				</p>
			</div>

			<div class="col-md-4 my-4">
				<img src="img/C-Sharp-CafeteriaOrdering.png" aly="" class="w-100">
				<h4 class="text-center my-4">Cafeteria Ordering</h4>
				<p align="center" class="text-dark">C# | VS Code | Windows Form Application | .NET Framework</p>
					<p align="justify-left"> •  Business application for efficient ordering that takes user input.<br />
						•	Radio buttons and text boxes were used in the Windows Form<br />
						•	All numerical results are converted to currency utilizing the .ToString() method.<br />
						•	Set the modifier public for the user selections and math calculation variables and utilized the double data type.<br />
						•	Used a private modifier to set prices per variable, declared and stored them in C# code.<br />
						•	Upon user selection the code will add the base price, surcharges for extra items, calculate the sub-total, 
						calculate sales tax, add the sub-total to sales tax and produce the Grand Total.<br />
						•	Initialized calculated variables per price, surcharge and quantity to zero for clearing out the form upon user request or after purchase; by adding code to clear 
						all ckecked items by making them = to false; setting variables back to zero for numerical items and utilized the null string of "" for text boxes.
					</p>
			</div>
		</div>
	</div>

	<!-- Start Jumbotron -->
    <div class="jumbotron py-5 mb-0">
        <div class="container">
            <div class="row justify-content-center">
                <a href="contact.php" class="btn btn-primary btn-lg">Contact Me Today</a>
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


    <!-- jQuery -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap 4.5 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Font Awesome -->
    <script src="js/all.min.js"></script>
    <!-- Lightbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

    </script>
    <!-- End Script Source Files -->

</body>
</html>