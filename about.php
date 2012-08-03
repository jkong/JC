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
	<?php
	include_once('inc/navbar.inc.html');
	?>
		
		<div class="container">
			<!-- Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<h1>Hello, World!</h1>
				<p>
					Welcome to Jobcoll! Our job search website is unique customized to for college students.
					<br>
					We hope to help students work on jobcolls (short tasks) that fits within their busy schedules.
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
					We will require that students register using a .edu e-mail account.
					This process allows students to easily register with our website and begin working.
					In addition, .edu accounts provides security for the party providing the job, as registered members will be required to post accurate information that holds them liable(name, address, etc.).
					<br>
					<br>
					Any company or organization may register to post jobs on our website.
					We envision most jobs that are posted being done by students in the local area.
					<br>
					<br>
					Rather than posting only long-term jobs that require students to commit regular, substantial amounts of time,
					Jobcoll/Timmit will focuse on projects that are less time consuming and which may be finished in a very brief time period
					(directing a youtube video, DJ-ing, getting groceries, etc. ).
					<br>
					<a class="btn btn-primary btn-large" href="javascript: void(0);"
					onclick="document.getElementById('learn more').style.display ='inline',
					document.getElementById('thinking').style.display ='none';"> Less &raquo;</a>
				</p>
			</div>
			<hr>
			<footer>
				<p>
					&copy; Jobcoll 2012
				</p>
			</footer>
		</div>
		<!-- /container -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
