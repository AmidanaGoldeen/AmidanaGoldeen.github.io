<?php include '../view/header.php'; ?>
<main>
    <h1>The PHP Class</h1>
	<br>
    <form action="." method="post" id="submit_phpclass">
        <input type="hidden" name="action" value="submit_phpclass_form">

        <label>Animal: </label>
		<input type="text" name="animal" id="animal" />
		<br>
		
		<label>Verb: </label>
		<input type="text" name="verb" id="verb"/>
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective" id="adjective"/>
		<br>
		
		<label>Clothing: </label>
		<input type="text" name="cloth" id="cloth"/>
		<br>
		
		<label>Website: </label>
		<input type="text" name="web" id="web"/>
	    <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Submit" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>