<?php

include('database.php');
$tableName = "logins";
$query = $pdo->prepare("SELECT fname
						FROM logins
						WHERE 

?>


<?php include '../view/header.php'; ?>
<main>
    <h1>All About Me!</h1>
	<br>
    <form action="." method="post" id="submit_allme">
        <input type="hidden" name="action" value="submit_allme_form">

        <label>Celebrity Name: </label>
		<input type="text" name="celebName" id="celebName" />
		<br>
		
		<label>Noun (Plural): </label>
		<input type="text" name="noun" id="noun"/>
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective" id="adjective" />
		<br>
		
		<label>Animal: </label>
		<input type="text" name="animal" id="animal" />
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective2" id="adjective2" />
		<br>
		
		<label>Food: </label>
		<input type="text" name="food" id="food" />
	    <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Submit" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>