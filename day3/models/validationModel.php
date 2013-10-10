<?php 
	
	class validationModel {
		function checkLogin($email, $password) {
			
			$emailPat = '^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$';
			$passwordPat = '^[a-zA-Z]\w{3,14}$'; //The password's first character must be a letter 4-15 characters can use: letters, numbers, underscore
			
			$result = ''; 
									
			 if(!preg_match($emailPat, $email) || !preg_match($passwordPat, $password)) {
				$result = false;
				 echo "Invalid login";
				 return $result;
			}
			else{
				$result = true;
				 return $result;
				 echo "Login success";
			}
	
		} //checklogin
		
		//function checkRagister
		
	}
	
?>