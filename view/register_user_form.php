<?php include '../view/header.php'; ?>
<main>
    <h1>Registeration</h1>
    <form action="." method="post" id="register_user_form">
        <input type="hidden" name="action" value="register_user">

        <label>First Name: </label>
		<input type="text" name="fname" />
		<br>
		
		<label>Last Name: </label>
		<input type="text" name="lname" />
		<br>
		
		<label>User ID (8 Numbers): </label>
		<input type="text" name="userID" />
		<br>
		
		<label>Password: </label>
		<input type="text" name="password" />
        <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Register" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>