<?php

//form.php

?>

<form id="login" action="?action=log" method="post">
	<div id="loginBlock">
		<div id="lun"><!-- username -->
			<label for="logUsername">Email:</label>
			<input type="text" id="logUsername" name="logUsername" />
		</div><!-- username -->
		
		<div><!-- password -->
			<label for="logPassword">Password:</label>
			<input type="password" id="logPassword" name="logPassword" />
		</div><!-- password -->
	</div><!-- username -->
	
	<div id="linkBlock">
		<a href="#">Forgot password?</a>
		
		<a href="#"><button id="loginBtn">Register</button></a>					
		<a href="#"><button id="loginBtn">Login</button></a>
	</div><!-- linkblock -->
					
</form><!-- login -->

