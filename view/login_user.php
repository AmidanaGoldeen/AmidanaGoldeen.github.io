<?php /*
require_once ('../model/database.php');
require_once ('../model/session.php');
if($query = $db->prepare("SELECT * FROM logins WHERE userID = :userID")){
	$query->bindParam(":userID", $_POST['userID']);
	$query->execute();
	$row->fetch(PDO::FETCH_ASSOC);
	if($row){
		if(password_verify($password, $row['password'])){
			$_SESSION['userID'] = $row['userID'];
			$_SESSION['user'] = $row;
			
			header("Location: ../select_form.php");
			exit;
		} else {
			echo "Error... Password is not valid! Try Again!<br><br>";
			include ('../login_user');
			}
		} else {
			echo "Error... No User exists with User ID!";
			exit;
		}
}*/

?>
<?php include '../view/header.php'; ?>
<main>
    <h1>Login to Account</h1>
    <aside>
        <!-- display a list of categories -->
        <h2>Enter Credentials:</h2>
    </aside>
    <form action="." method="post" id="selection_form">
        <input type="hidden" name="action" value="user_login">
            <tr>
                <label>Username: </label>
				<input type ="text" name="userID"/>
				<br> <br>
                <label>Password: </label>   
				<input type ="text" name="password"/>
				<br> <br>
				
				<label>&nbsp;</label>
				<input type="submit" value="Login" />
				<br><br>
		</form>
		<a href="../madlibs">Test a MadLib!</a>
		<br>
		<a href="index.php?action=register_new">New? Register Here!</a>
</main>
<?php include '../view/footer.php'; ?>