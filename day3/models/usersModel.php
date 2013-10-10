<?php

class usersModel {
	function getExpenses() {
		$db = new PDO('mysql:hostname=localhost; dbname=ssl1310', 'root', 'root');
		$st = $db->prepare('select * from expense_tbl');
		
		$st->execute();
		
		$object = $st->fetchAll();
		
		return $object; 
		//returning everything from the expense table
	}
	
	function createExpense($date, $itemName, $itemDesc, $type, $amount) {
		$db = new PDO('mysql:hostname=localhost; dbname=ssl1310', 'root', 'root');
		
		$sql = 'insert into expense_tbl(date, itemName, itemDesc, type, amount)
				values(:date, :itemName, :itemDesc, :type, :amount)';
		
		$st = $db->prepare($sql);
		
		$st->execute(array(':date'=>$date, ':itemName'=>$itemName, ':itemDesc'=>$itemDesc, ':type'=>$type, ':amount'=>$amount));
		
		$object = $st->fetchAll();
		
		return $object;
		
		//need to add this action to the controller for expense, run through a validation and check to see if
		//it made it to the database, and somehow get the page to refresh
	}
	
	function createUser($firstName, $lastName, $email, $password){
		$db = new PDO('mysql:hostname=localhost; dbname=ssl1310', 'root', 'root');
		
		$sql = 'insert into user_tbl(firstName, lastName, userEmail, userPass)
				values(:firstName, :lastName, :email, :password)';
		
		$st = $db->prepare($sql);
		
		$st->execute(array(':firstName'=>$firstName, ':lastName'=>$lastName, ':email'=>$email, ':password'=>$password));
		//to check the confirming password, preg match function the password variable against each other
		
		$object = $st->fetchAll();
		
		return $object;
		//same this has getUser but all the variables need to changes and you need to insert into db
	}
	
	function getUser($email, $password){
		$db = new PDO('mysql:hostname=localhost; dbname=ssl1310', 'root', 'root');
		
		$sql = 'select * from user_tbl where userEmail = :email and userPass = :password';
		
		$st = $db->prepare($sql);
		
		$st->execute(array(':email'=>$email, ':password'=>$password));
		
		$object = $st->fetchAll();
		
		return $object;
	}
	
	
	
	function update($userEmail='',$userPass='',$uid=0){
		$db = new PDO('mysql:hostname=localhost; dbname=ssl1310', 'root', 'root');
		echo $uid;
		echo $userEmail;
		echo $userPass;
		$sql = 'update users_tbl set
				userEmail = :userEmail,
				userPass = :userPass
				where userId = :uid';
		$statement = $db->prepare($sql);
		$statement->execute(array(':userEmail'=>$userEmail, ':userPass'=>$userPass, ':uid'=> $uid));
	}
}

?>