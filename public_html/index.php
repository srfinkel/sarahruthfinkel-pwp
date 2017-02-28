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
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<link rel="stylesheet" href="styles/styles.css" type="text/css"/>

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

		<script src="lib/jquery-2.0.3.js"></script>
		<script src="src/js/jquery.swipebox.js"></script>

		<link rel="stylesheet" href="src/css/swipebox.css">

		<title>Sarah Ruth Finkel</title>
	</head>
	<body>
		<header>
			<div class="container-fluid">
				<div class="row">
					<div class="embed-responsive embed-responsive-16by9">
						<!-- Add media queries to both medium and 992px width -->
						<video src="video/sample-vid.webm" type="video/webm" autoplay muted loop
						</video>
					</div>
				</div>
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
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Sarah Ruth Finkel <span class="sr-only">(current)</span></a></li>
							<li><a href="#">Portfolio</a></li>
							<form class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			</div>
		</header>
		<main>
			<div class="container">
				<div class="row">
					<div class="row">
						<div class="col-md-12"></div>
					</div>
					<div class="col-md-3">
						<p class="serif">
							<em>"There is a vitality, a life force, an energy, a quickening that is translated through you into
								action, and because there is only one of you in all of time, this expression is unique. And if
								you block it, it will never exist through any other medium and it will be lost. The world will
								not have it." </em><br>–Martha Graham, dancer and choreographer
						</p>
					</div>
					<div class="col-md-9" id="bio">
						<p>Originally from Chicago, Sarah Ruth has been a professional graphic designer for 16 years. Her
							clients have included the ABQ BioPark, La Casa Norte, Chicago Reporter, Alien Arts Recording
							Studio and The Black Star Project. As an environmental justice activist, Sarah Ruth wrote a
							column, Metropolimón, for Extra Bilingual Newspaper discussing environmental concerns in
							Chicago’s latino neighborhoods. As an educator, she has partnered with community organizations,
							such as PERRO (Pilsen Environmental Rights and Reform Organization) and Elevarte, teaching
							skills in mud stenciling, seed saving and art in activism. In 2011, Sarah Ruth co-curated the
							exhibition <em>Everyone Matters</em>, at the National Museum of Puerto Rican Arts and Culture
							that told stories of resilience and positive life choices by Humboldt Park neighborhood
							residents. In 2014, Sarah Ruth performed with Circa PINTIG in their production of <em>Scent of
								Home: Short Stories by Bienvenido Santos</em> and was a bilingual song leader in the
							Opera-Matic community performance Moon on the Lagoon. Sarah Ruth continues her studio art
							practice in ceramics, is an avid community gardener, and holds a BFA from Syracuse University.
							She is the owner of Soda Fire Media providing custom web and graphic design.
						</p>
					</div>
				</div>
				<div class="row">
					<div><a href="big/"</div>
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
				</div>
				<div class="row">
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
					<div class="col-md-4"><img src="images/port-image-sample.jpg" class="img-thumbnail"/></div>
				</div>
			</div>
		</main>
	</body>


</html>