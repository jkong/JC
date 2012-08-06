<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>About us</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="About Jobcoll">
		<meta name="author" content="Tommy">
		<!-- Le styles -->
		<link href="stylesheets/bootstrap.css" rel="stylesheet">
		<link href="stylesheets/bootstrap-responsive.css" rel="stylesheet">
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<?php
				include_once ('inc/navbar.inc.html');
				?>
			</div>
			<!-- Main hero unit for a primary marketing message or call to action -->
			<div class="container">
				<div id="body">
					<div class="hero-unit">
						<h1>Hello, World!</h1>
						<p>
							Welcome to Jobcoll! Our job search website is made for college students.
							<br>
							We hope to find short tasks for students that fit within their busy schedules.
						</p>
						<p>
							<a id = "learn more" class="btn btn-primary btn-large" href="javascript: void(0);"
							onclick="document.getElementById('learn more').style.display ='none',
							document.getElementById('thinking').style.display ='block';"> Learn more &raquo;</a>
						</p>
						<p id="thinking" style="display: none">
							<strong>About Us!</strong>
							<br>
							Jobcoll is developing a website to find jobs for college students.
							Our job search website is unique in both the types of jobs that are posted and the market that is being targeted.
							We are targeting a niche group, College students, who will work on short-term jobs/gigs/tasks.
							<br>
							<a class="btn btn-primary btn-large" href="javascript: void(0);"
							onclick="document.getElementById('learn more').style.display ='inline',
							document.getElementById('thinking').style.display ='none';"> Less &raquo;</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div id= "footer">
			<?php
			include_once ('inc/footer.inc.html');
			?>
		</div>
		<!-- /container -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
