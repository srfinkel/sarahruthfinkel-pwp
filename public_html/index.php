<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<!-- Bootstrap Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
				crossorigin="anonymous"/>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
				crossorigin="anonymous"/>

		<!-- Font Awesome -->
		<script src="https://use.fontawesome.com/b90f91aa23.js"></script>

		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="css/styles.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto+Slab:100" rel="stylesheet">

		<!-- FancyBox 3 CSS  -->
		<link rel="stylesheet" href="css/jquery.fancybox.min.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- jQuery Form, Validate, Additional Methods -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js" type="text/javascript"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

		<!--jQuery FancyBox 3 -->
		<script src="js/jquery.fancybox.min.js" type="text/javascript"></script>

		<!-- Navigation custom js-->
		<script src="js/script.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<title>Sarah Ruth Finkel</title>
	</head>
	<body>
		<header id="page-top">
			<!--	Video container		-->
			<div class="container-fluid">
			<div class="row">
				<div class="embed-responsive embed-responsive-16by9">
					<!-- Add media queries to both medium and 992px width -->
					<video src="video/sample-vid.webm" type="video/webm" autoplay muted loop
					</video>
					<img id="wheel" src="images/sarahruthfinkel-ceramics.jpg" onerror="standby()">
				</div>
			</div>
		</div>

			<!--	Navigation 		-->
			<nav class="navbar navbar-fixed-top navbar-transparent" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<i class="fa fa-bars fa-sm" aria-hidden="true"></i>
<!--							<span class="icon-bar"></span>-->
<!--							<span class="icon-bar"></span>-->
<!--							<span class="icon-bar"></span>-->
						</button>
						<a class="navbar-brand" href="#page-top">Sarah Ruth Finkel</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#about">About <span class="sr-only">(current)</span></a></li>
							<li><a href="#portfolio">Portfolio</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-left">
							<li><a href="https://twitter.com/sarahruthfinkel" target="_blank"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
							<li><a href="https://www.linkedin.com/in/srfinkel" target="_blank"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a></li>
							<li><a href="https://github.com/srfinkel" target="_blank"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a></li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</header>
		<main>
			<div class="container" id="about">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<h1>Sarah Ruth Finkel</h1>
					</div>
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<h2>web developer & multi-media artist</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<p id="quote">
							<em>"There is a vitality, a life force, an energy, a quickening that is translated through you into action, and because there is only one of you in all of time, this expression is unique. And if you block it, it will never exist through any other medium and it will be lost. The world will not have it." </em><br>–Martha Graham, dancer and choreographer</p>
					</div>
					<div class="col-xs-12 col-md-9">
						<p id="bio">Originally from Chicago, Sarah Ruth has been a professional front-end web developer and graphic designer for 16 years. She has done graphic design for <a href="https://www.cabq.gov/culturalservices/biopark/camps-classes/teachers/outreach/biovan" target="_blank">ABQ BioPark</a>, <a href="http://www.lacasanorte.org/" target="_blank">La Casa Norte</a>, <a href="http://chicagoreporter.com/" target="_blank">Chicago Reporter</a>, Alien Arts Recording Studio and <a href="http://www.blackstarproject.org/" target="_blank">The Black Star Project</a>. Her front-end web development includes HTML5, CSS3, utilizing the platforms Joomla, Squarespace, WordPress and WiX. Some examples include: <a href="http://ccasantafe.org/" target="_blank">Center for Contemporary Arts Santa Fe</a>, <a href="http://www.eileenshaughnessy.com/" target="_blank">Eileen Shaughnessy</a>, <a href="http://ecotapatio.org/" target="_blank">Ecotapatío</a>. After 400+ hours of intensive Full Stack LAMP development, this current site was developed using Boostrap, JavaScript, jQuery, HTML5 and CSS3. Sarah Ruth and her team's capstone, ABQ-VAST, is an ongoing project created in PHP, MySQL, Angular 2 and utilizes the City of Albuquerque's Open Data Initiative. ABQ-VAST currently holds the record of processing the largest dataset in the history of CNM's Deep Dive Coding Bootcamp. Sarah Ruth continues her studio art practice in ceramics, is an avid community gardener, and holds a BFA from Syracuse University.
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<a href="images/SarahRFinkel.NM.TechResume.2017.pdf" target="_blank"<button type="button" class="btn btn-default btn-sm">Sarah Ruth's Resume</button></a>
					</div>
				</div>
			</div>
			<div class="container" id="portfolio">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<h1>Portfolio</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-md-3 col-md-offset-3"><a href="images/eileen-and-the-inbetweens.jpg" id="eib" class="thumbnail" data-fancybox="gallery" data-caption="Eileen & the In-Betweens (Squarespace, Bandcamp, Adobe Creative Suite, photography)"><img src="images/eileen-and-the-inbetweens.jpg" alt="eileen-and-the-in-betweens" class="image-responsive"></a>
					</div>
					<div class="col-xs-4 col-md-3"><a href="images/cca.jpg" id="cca" class="thumbnail" data-fancybox="gallery" data-caption="Center for Contemporary Arts Santa Fe (Adobe Creative Suite, Social Media)"><img src="images/cca.jpg" alt="cca" class="image-responsive"></a>
					</div>
					<div class="col-xs-4 col-md-3"><a href="images/cca-site.png" id="biopark" class="thumbnail" data-fancybox="gallery" data-caption="Center for Contemporary Arts Santa Fe (Joomla, eTapestry, Robly, Adobe Creative Suite)"><img src="images/cca-site.png" alt="cca-site" class="image-responsive"></a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4 col-md-3 col-md-offset-3"><a href="images/ecotapatio.png" id="eco" class="thumbnail" data-fancybox="gallery" data-caption="Ecotapatío (WordPress, Adobe Creative Suite)"><img src="images/ecotapatio.png" alt="ecotapatio" class="image-responsive"></a>
					</div>
					<div class="col-xs-4 col-md-3"><a href="images/los-jardines-institute.png" id="lji" class="thumbnail" data-fancybox="gallery" data-caption="Los Jardines Instute (WiX)"><img src="images/los-jardines-institute.png" alt="los-jardines-institute" class="image-responsive"></a>
					</div>
					<div class="col-xs-4 col-md-3"><a href="images/abq-biopark.jpg" id="biopark" class="thumbnail" data-fancybox="gallery" data-caption="ABQ BioPark (Adobe Creative Suite, illustration)"><img src="images/abq-biopark.jpg" alt="abq-biopark" class="image-responsive"></a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-6 col-md-offset-3">
						<h1>Hire Sarah Ruth</h1>
						<!--Begin Contact Form-->
						<form id="contact-form" action="php/mailer.php" method="post">
							<div class="form-group">
								<label for="name">Name <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<!--								<i class="fa fa-user" aria-hidden="true"></i>-->
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<!--								<i class="fa fa-envelope" aria-hidden="true"></i>-->
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<!--								<i class="fa fa-pencil" aria-hidden="true"></i>-->
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message <span class="text-danger">*</span></label>
								<div class="input-group">
									<div class="input-group-addon">
										<!--								<i class="fa fa-comment" aria-hidden="true"></i>-->
									</div>
									<textarea class="form-control" rows="5" id="message" name="message"
												 placeholder="Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6LdUGxgUAAAAAJgtgEm6iaXAJ7ArgRVGv0BXNC-E"></div>
							<button class="btn btn-default btn-xs" type="submit">Send</button>
							<button class="btn btn-default btn-xs" type="reset">Reset</button>
						</form>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="text-right">
						<a href="#page-top"<button type="button" class="btn btn-link"><i class="fa fa-arrow-circle-o-up fa-2x" aria-hidden="true"></i></button></a>
					</div>
				</div>
				<div class="row" id="bottom-footer">
					<div class="text-center">
						<a href="https://twitter.com/sarahruthfinkel" target="_blank"<button type="button" class="btn btn-link"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></button></a>
						<a href="https://www.linkedin.com/in/srfinkel" target="_blank"<button type="button" class="btn btn-link"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></button></a>
						<a href="https://github.com/srfinkel" target="_blank"<button type="button" class="btn btn-link"><i class="fa fa-github fa-lg" aria-hidden="true"></i></button></a>
					</div>
				</div>
				<div class="row">
					<div class="text-left">
						<p id="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> Sarah Ruth Finkel 2017</p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>