<form id="register" action="?action=register" method="post">
							
	<div id="names">
		<div id="first">
			<label for="firstName">*First Name:</label>
			<input type="text" id="firstName" name="firstName" />
		</div><!-- first -->
		<div id="last">
			<label for="lastName">*Last Name:</label>
			<input type="text" id="lastName" name="lastName"/>
		</div><!-- last -->
	</div><!-- names -->
	
	<div id="emailAdd">
		<label for="email">*Email Address:</label>
		<input type="email" id="email" name="email" />
	</div><!-- emailAdd -->
	
	<div id="emailConfirm">
		<label for="emailConf">*Confirm Email:</label>
		<input type="text" id="emailConf" name="emailConf" />
	</div><!-- userN -->
	
	<div id="passwords">
		<div id="pass">
			<label for="password">*Password:</label>
			<input type="password" id="password" name="password" />
		</div><!-- pass -->
		<div id="confirm">
			<label for="conf">*Confirm Password:</label>
			<input type="password" id="conf" name="conf" />
		</div><!-- confirm -->
	</div><!-- passwords -->
	
	<a href="#"><button>Submit</button></a>
	
</form><!-- register -->