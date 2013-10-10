<?php 

//this is the body page
//inside views because this is a view

foreach($data as $par) {
	echo '<br>';
	echo $par['date'].'<br>';
	echo $par['itemName'].'<br>'; //product name id and desc are the cols in YOUR table
	echo $par['itemDesc'].'<br>';
	echo $par['type'].'<br>';
	echo $par['amount'];
	echo '<a href="?action=delete"> delete</a>';
	echo '<a href="?action=updateform&prid='.$par['itemName'].'""> update</a>';
	
	echo '<br>____________</br>';
}

?>