<?php

include('models/viewModel.php');

$view = new viewModel();
$users = new usersModel();

$view->getView('views/header.php');

$view->getView('views/contentExpense.php');

if($_GET['action'] == 'expense') {
	
	$data = $users->getExpenses();
	$view->getView('views/body.php', $data);
	
}


$view->getView('views/footer.php');

?>