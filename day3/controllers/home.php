<?php 
//the handling of the variables for the home page
//where the user lands first
include('models/viewModel.php');
$view = new viewModel();



//conditional if result, php reroute to a different page

$view->getView('views/header.php');


$view->getView('views/content.php');



$view->getView('views/footer.php');

?>