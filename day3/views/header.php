<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Tatiana Kerick</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
	
<body>
<div class="wrap">
			
	<div id="header">
		<img src="images/purpleOctopus.png" />
		
		<div id="topBtns">
			
			<p id="loginStatus"></p>
			
			<!-- I would like to put something here for the sucessful log in thing "hide" so it stops moving my content -->
			<form id="login" action="?action=login" method="get"><!-- done bu get to see whats going on in url -->
				<div id="loginBlock">
					<div id="lun"><!-- email -->
						<label for="logEmail">Email:</label>
						<input type="text" id="logEmail" name="logEmail" />
					</div><!-- email -->
					
					<div><!-- password -->
						<label for="logPassword">Password:</label>
						<input type="password" id="logPassword" name="logPassword" />
					</div><!-- password -->
				</div><!-- username -->
				
				<div id="linkBlock">
					<a href="#">Forgot password?</a>
					
					<a href="#"><button id="loginBtn">Register</button></a>					
					<a href="#"><button id="loginBtn" type="submit">Login</button></a>
				</div><!-- linkblock -->
								
			</form><!-- login -->

					
		</div><!-- topBtns -->
		<br />
		
		<div id="navigation">
			<ul id="nav">
				<li><a href="?action=home">Home</a></li>
				<li><a href="?action=expense">Expense Manager</a></li>
				<li><a href="#">Services</a></li>
			</ul><!-- nav -->
		</div><!-- navigation -->
		
		
	</div><!-- header -->