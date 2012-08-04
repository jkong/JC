<?php
include "base.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title> Registration page </title>
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

		<?php
		include_once ('inc/navbar.inc.html');
		?>
		<div class="container">
			<div id="main">
				<?php
if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
    $password = md5(mysql_real_escape_string($_POST['password']));
    $email = mysql_real_escape_string($_POST['email']);
    
	 $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");
     
     if(mysql_num_rows($checkusername) == 1)
     {
     	echo "<h1>Error</h1>";
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";
     }
     else
     {
     	$registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");
        if($registerquery)
        {
        	echo "<h1>Success</h1>";
        	echo "<p>Your account was successfully created. Please <a href=\"index.php\">click here to login</a>.</p>";
        }
        else
        {
     		echo "<h1>Error</h1>";
        	echo "<p>Sorry, your registration failed. Please go back and try again.</p>";    
        }    	
     }
}
else
{

				?>

				<h1>Register</h1>

				<p>Please enter your details below to register.</p>

				<form method="post" action="register.php" name="registerform" id="registerform">
				<fieldset>
				<label for="username">Username:</label><input type="text" name="username" id="username" /><br />
				<label for="password">Password:</label><input type="password" name="password" id="password" /><br />
				<label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />
				<input type="submit" name="register" id="register" value="Register" />
				</fieldset>
				</form>

				<?php
				}
				?>
			</div>
		</div>
		<!--end of container-->
	</body>
</html>