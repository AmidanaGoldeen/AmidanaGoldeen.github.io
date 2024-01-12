<?php

session_start();

if(isset($_SESSION["userID"]) && $_SESSION["userID"] === true){
	header("Location: select_form.php");
	exit;
}
?>