<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Contact Information">
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
	include_once('inc/navbar.inc.html')
	?>
		<div class="container">
			<!-- Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<h1>Post a Job!</h1>
				<form class="well">
					<label>What's your name? </label>
					<input type="text" class="span3" placeholder="Last Name, First Name">
					<span class="help-block">Let us Help us contact you</span>
					<br> 
			<label>What kind of job are you posting?</label>
			<select name="menu" size="1">
			<option value="">Administrative
			<option value="">Athletic
			<option value="">Academic
			</select>
			<br>
			<label>Budget</label>  
			<input type="range" min="0" max="100" step="1" value="0"
			onchange="document.getElementById('display').innerHTML = this.value"> 	
			<span id="display">0</span>
			
						<label>Duration</label>  
			<input type="range" min="0" max="5" step="1" value="0"
			onchange="document.getElementById('display2').innerHTML = this.value"> 	
			<span id="display2">0</span>
			
						<label>Expertise Level</label>  
			<input type="range" min="0" max="5" step="1" value="0"
			onchange="document.getElementById('display3').innerHTML = this.value"> 	
			<span id="display3">0</span>
			
			            <label class="control-label" for="appendedPrependedInput">How much are you willing to pay?</label>
            <div class="controls">
              <div class="input-prepend input-append">
                <span class="add-on">$</span><input class="span2" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
              </div>
            </div>
            
                      <div class="control-group">
            <label class="control-label" for="inlineCheckboxes">Expertise Level</label>
            <div class="controls">
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox1" value="option1"> Novice
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox2" value="option2"> Intermediate
              </label>
              <label class="checkbox inline">
                <input type="checkbox" id="inlineCheckbox3" value="option3"> Expert
              </label>
            </div>
          </div>

			<label>Contract Photo</label>
			<input type="file" name="photo" accept="image/gif, image/jpeg, image/png">

			</select>
					          <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <button class="btn">Cancel</button>
          </div>
				</form>
			</div>
			<hr>
			<footer>
				<?php
			include_once ('inc/footer.inc.html');
			?>
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
