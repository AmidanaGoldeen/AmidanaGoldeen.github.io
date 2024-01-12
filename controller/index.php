<?php
require ('../model/database.php');
require ('../model/modify.php');
require_once ('../model/session.php');

$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input (INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'login_user';
	}
}

if ($action == 'login_user') {
	include ('../view/login_user.php');
}

else if ($action == 'register_new'){
	include ('../view/register_user_form.php');
}

else if($action == 'register_user'){
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
	$userID = filter_input(INPUT_POST, 'userID');
	$password = filter_input(INPUT_POST, 'password');
	if ($fname == NULL || $lname == NULL || $userID == NULL || $password == NULL){
		$error = "Invalid user register input data! Check all fields and try again!";
		echo $error;
		echo '<br><br>';
		include ('../view/register_user_form.php');
	} else {
		checkRegister($fname, $lname, $userID, $password);
		echo "User sucessfully registered! Please log in to continue.<br><br>";
		include ('../view/login_user.php');
	}
}

else if ($action == 'user_login'){
	$userID = filter_input(INPUT_POST, 'userID');
	$password = filter_input(INPUT_POST, 'password');
	if($userID == NULL || $password == NULL){
		echo "ERROR! You must enter a userID / password!<br><br>";
		include('../view/login_user.php');
	}else{
		//loginUser($userID, $password);
		include ('../view/select_form.php');
}
}

?>