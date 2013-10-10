<?php
//controller (index)
//include "models/view.php";

class viewModel {
	
	//method available to everything
	//public function __construct() {
		
	//}
	
	public function getView($myfile='', $data=array()) {
		include $myfile;
	}	
	
}

?>