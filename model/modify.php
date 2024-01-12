<?php
function checkRegister($fname, $lname, $userID, $password){
	global $db;
	if($query = $db->prepare('SELECT * FROM logins WHERE userID = :userID')){
	$query->bindParam(":userID", $_POST['userID']);
	$query->execute();
	$query->fetch(PDO::FETCH_ASSOC);
	$lol = 0;
	if($query->rowCount() > 0){
		echo 'Error. The userID is already registered!<br><br>';
		exit;
	} else {
		if (strlen($password) < 6) {
			echo 'Error. Password must be more than 6 characters!<br><br>';
			exit;
		} else {
			$lol = 1;
		}
	} if ($lol == 1) {
		register_user($fname, $lname, $userID, $password);
	}
}
}

function register_user($fname, $lname, $userID, $password){
	global $db;
	$query = 'INSERT INTO logins (fname, lname, userID, password) 
				VALUES (:fname, :lname, :userID, :password)';
	$statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':userID', $userID);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $statement->closeCursor();
}

 
?>