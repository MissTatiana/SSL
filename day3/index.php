<?php
//like the main controller - switch board, making call and tell you where to go
	
include('models/usersModel.php');
include('models/validationModel.php');

	
	//checking if there is anything attached to get
	if(empty($_GET['action'])) {
		 $action = 'home';
	}	
	else {
		$action = $_GET['action'];
	}
	
	
	if($action == 'home') {
		include('controllers/home.php');
		// $ctrl = new Home();
		// $ctrl->get($_GET);
	}
	else if ($action == 'expense') {
		include('controllers/expense.php');
		// $ctrl = new Expense();
		// $ctrl->get($_GET);
	}
	else if($action == 'login'){
		$user = new usersModel();
		$validate = new validationModel();
		
		$email = '';
		$password = '';
		
		if($_GET['logEmail']){
			$email = $_GET['logEmail'];
			echo $email;
		}	
		if($_GET['logPassword']){
			$password = $_GET['logPassword'];
			echo $password;
		}
		
		$value = $validate->checkLogin($email, $password);
		echo $value;
		
		if($value == true) {
			$rslt = $user->getUser($email, $password);
			var_dump($rslt);
			
			//redirect takes place here, possible conditional
			//look up php header() 
			
		}		
	}
	else if ($action == 'register') {
		$newUser = new usersModel();
		
		$email = '';
		$password = '';
		$firstName = '';
		$lastName = '';
		
		if($_GET['firstName']){
			$firstName = $_GET['firstName'];
			echo $firstName;
		}
		if($_GET['lastName']){
			$lastName = $_GET['lastName'];
			echo $lastName;
		}
		if($_GET['email']){
			$email = $_GET['email'];
			echo $email;
		}	
		if($_GET['password']){
			$password = $_GET['password'];
			echo $password;
		}
		else{
			echo 'no worky';
		}
		
		$result = $newUser->createUser($firstName, $lastName, $email, $password);
		var_dump($result);
		
		//this is still not working, sql is correct, shows its sending in url but not showing in db
		
	}
	else if ($action == 'services') {
		
	}

?>

