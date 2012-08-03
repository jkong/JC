<?php
include "base.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> JobColl </title>
		<link rel="icon" type="image/png" href = "jobcoll.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Website to help students find jobs">
		<meta name="author" content="Tommy Pan Fang">
		<!-- Le styles -->
		<link href="stylesheets/bootstrap.css" rel="stylesheet">
		<link href="stylesheets/bootstrap-responsive.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="m.less">
		<script src="js/less.js" type="text/javascript"></script>
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="index.html">Jobcoll</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li>
								<a href="index.html">Home</a>
							</li>
							<li>
								<a href="about.html">About</a>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
							<li>
								<a href="jobform.html">Post!</a>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<!-- Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<div class="hero-unit clearfix">
					<div class="pull-left span5">
						<h1>JobColl</h1>
						<p>
							The Place for Busy Students with Empty Pockets.
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="register.php">Join now!</a>
						</p>
					</div>
					<div class="pull-right span4">
						<form class="well">
							<?php
							if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))
							{
							?>

							<h1>Member Area</h1>
							<p>
								Thanks for logging in! You are <b><?=$_SESSION['Username'] ?><
								b> and your email address is <b><?=$_SESSION['EmailAddress'] ?><
								/b>.
							</p>

							<ul>
								<li>
									<a href="logout.php">Logout.</a>
								</li>
							</ul>

							<?php
							}
							elseif(!empty($_POST['username']) && !empty($_POST['password']))
							{
							$username = mysql_real_escape_string($_POST['username']);
							$password = md5(mysql_real_escape_string($_POST['password']));

							$checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");

							if(mysql_num_rows($checklogin) == 1)
							{
							$row = mysql_fetch_array($checklogin);
							$email = $row['EmailAddress'];

							$_SESSION['Username'] = $username;
							$_SESSION['EmailAddress'] = $email;
							$_SESSION['LoggedIn'] = 1;

							echo "<h1>Success</h1>";
							echo "<p>We are now redirecting you to the member area.</p>";
							echo "<meta http-equiv='refresh' content='2;contact.html' />";
							}
							else
							{
							echo "<h1>Error</h1>";
							echo "<p>Sorry, your account could not be found. Please <a href=\"index.php\">click here to try again</a>.</p>";
							}
							}
							else
							{
							?>

							<h1>Member Login</h1>

							<p>Thanks for visiting! Please login below.</p>

							<form method="post" action="index.php" name="loginform" id="loginform">
							<fieldset>
							<label for="username">Username:</label><input type="text" name="username" id="username" class="span3"  placeholder="Type your username"/><br />
							<label for="password">Password:</label><input type="password" name="password" id="password" class="span3" placeholder="Type your password"/><br />
							<!--<input type="submit" name="login" id="login" value="Login" />-->
							<button type="submit" class="btn btn-primary btn-large" name="login" id="login" value="Login" >
							Log me in
							</button>
							</fieldset>
							</form>

							<?php
							}
							?>
					</div>
				</div>
				<p style="color: #0000A0">
					Welcome to Jobcoll! Our job search website is made for college students.
					<br>
					We hope to help students work on jobcolls (short tasks) that fit within their busy schedules.
				</p>
			</div>
			<br>
			<div class="row">
				<div class="span4">
					<div class="thumbnail">
						<img alt="" src="imgfolder/chances.jpg" width="370" height="180">
						<div class="caption">
							<h5>Thumbnail label</h5>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="about.html">Action</a><a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<div class="thumbnail">
						<img alt="" src="imgfolder/greatness.JPG" width="370" height = "180">
						<div class="caption">
							<h5>Thumbnail label</h5>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a><a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div>
				<div class="span4">
					<a class="thumbnail" href="imgfolder/road.jpg"> <img alt="" src="imgfolder/road.jpg"> </a>
				</div>
			</div>
		</div>
		<br>
		<h2>Website Completion:</h2>
		<div class="progress progress-striped">
			<div class="bar"
			style="width: 2.5%;"></div>
		</div>
		<hr>
		<footer>
			<p>
				&copy; Tommy Pan Fang and JobColl 2012
			</p>
		</footer>
		</div> <!-- /container -->
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/bootstrap.js"></script>
</body>
</html>