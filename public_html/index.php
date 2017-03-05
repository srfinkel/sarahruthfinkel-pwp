<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

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
		<link rel="stylesheet" href="styles/styles.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Roboto+Slab:100" rel="stylesheet">

		<!-- Swipebox CSS -->
		<link rel="stylesheet" href="src/css/swipebox.css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>

<!--		<!-- Swipebox custom jQuery-->
<!--		<script src="lib/jquery-2.1.0.min.js"></script>-->
<!--		<script src="src/js/jquery.swipebox.js"></script>-->

		<!-- Navigation custom js-->
		<script src="js/script.js"></script>

		<title>Sarah Ruth Finkel</title>
	</head>
	<body>
		<header>
			<div class="container-fluid topImg">
				<div class="row">
					<div class="embed-responsive embed-responsive-16by9">
						<!-- Add media queries to both medium and 992px width -->
						<video src="video/sample-vid.webm" type="video/webm" autoplay muted loop
						</video>
					</div>
					<!-- put a fixed height on the video for mobile screen, split the difference at the md inside a media query put another fixed height one nav bar but just flip out the class. custom js file but in jQuery syntax. -->
					<nav class="navbar navbar-default">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
<!--								<a class="navbar-brand" href="#bio">SARU</a>-->
<!--							</div>-->

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="#name"><button type="button" class="btn btn-link">About</button></a></li>
									<li><a href="#gallery"><button type="button" class="btn btn-link">Portfolio</button></a></li>
<!--									<li class="dropdown">-->
<!--										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--											aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--										<ul class="dropdown-menu">-->
<!--											<li><a href="#">Action</a></li>-->
<!--											<li><a href="#">Another action</a></li>-->
<!--											<li><a href="#">Something else here</a></li>-->
<!--											<li role="separator" class="divider"></li>-->
<!--											<li><a href="#">Separated link</a></li>-->
<!--											<li role="separator" class="divider"></li>-->
<!--											<li><a href="#">One more separated link</a></li>-->
<!--										</ul>-->
<!--									</li>-->
								</ul>
								<form class="navbar-form navbar-left">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Send Me Your Email">
									</div>
									<button type="submit" class="btn btn-default">Email Me</button>
								</form>
								<ul class="nav navbar-nav navbar-right">
									<li><a href="https://twitter.com/sarahruthfinkel"><i class="fa fa-twitter fa-lg" aria-hidden="true" target="_blank"></i></a></li>
<!--									<li class="dropdown">-->
<!--										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"-->
<!--											aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--										<ul class="dropdown-menu">-->
<!--											<li><a href="#">Action</a></li>-->
<!--											<li><a href="#">Another action</a></li>-->
<!--											<li><a href="#">Something else here</a></li>-->
<!--											<li role="separator" class="divider"></li>-->
<!--											<li><a href="#">Separated link</a></li>-->
<!--										</ul>-->
<!--									</li>-->
								</ul>
<!--								<nav class="navbar navbar-default navbar-fixed-bottom">-->
<!--									<div class="container-fluid">-->
<!--										<a href="https://twitter.com/sarahruthfinkel"><i class="fa fa-twitter fa-lg" aria-hidden="true" target="_blank"></i></a>-->
<!--									</div>-->
<!--								</nav>-->
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
		</header>
		<main>
			<div class="container" id="name">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<h1>Sarah Ruth Finkel</h1><h3>web development & media arts</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-3">
						<p class="quote">
							<em>"There is a vitality, a life force, an energy, a quickening that is translated through you into action, and because there is only one of you in all of time, this expression is unique. And if you block it, it will never exist through any other medium and it will be lost. The world will not have it." </em><br>–Martha Graham, dancer and choreographer</p>
					</div>
					<div class="col-xs-12 col-md-9" id="bio">
						<p>Originally from Chicago, Sarah Ruth has been a professional graphic designer for 16 years. Her clients have included the ABQ BioPark, La Casa Norte, Chicago Reporter, Alien Arts Recording Studio and The Black Star Project. As an environmental justice activist, Sarah Ruth wrote a column, Metropolimón, for Extra Bilingual Newspaper discussing environmental concerns in Chicago’s latino neighborhoods. As an educator, she has partnered with community organizations, such as PERRO (Pilsen Environmental Rights and Reform Organization) and Elevarte, teaching skills in mud stenciling, seed saving and art in activism. In 2011, Sarah Ruth co-curated the exhibition <em>Everyone Matters</em>, at the National Museum of Puerto Rican Arts and Culture that told stories of resilience and positive life choices by Humboldt Park neighborhood residents. In 2014, Sarah Ruth performed with Circa PINTIG in their production of <em>Scent of Home: Short Stories by Bienvenido Santos</em> and was a bilingual song leader in the Opera-Matic community performance Moon on the Lagoon. Sarah Ruth continues her studio art practice in ceramics, is an avid community gardener, and holds a BFA from Syracuse University. Sarah Ruth runs Soda Fire Media, a business specializing in custom artwork in digital and ceramic media.</p>
					</div>
				</div>
			</div>
			<div class="container" id="gallery">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0 col-md-9 col-md-offset-3">
						<div class="row">
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
							<div class="col-xs-4 col-xs-offset-0 col-md-4"><a href="images/port-lg-eib1.jpg" class="swipebox" title="Managed Squarespace Site for Eileen & the In-Betweens"><img src="images/port-sm-eib1.jpg" class="thumbnail" alt="portfolio-image"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</body>
</html>