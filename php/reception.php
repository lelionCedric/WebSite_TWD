<?php



$login = isset($_POST['login']) ? $_POST['login'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";


require('validation.php');

if(empty($dataErrors)) {
	require('succesView.php');
}else {
	require('errorView.php');	
}
?>