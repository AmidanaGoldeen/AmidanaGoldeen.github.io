<?php include '../view/header.php'; ?>
<main>
    <h1>Try a MadLib!</h1>
	<p1>My day at the zoo...</p1>
	<br>
    <form action="." method="post" id="submit_test">
        <input type="hidden" name="action" value="submit_test_form">

        <label>Adjective: </label>
		<input type="text" name="adjective" id="adjective" />
		<br>
		
		<label>Animal: </label>
		<input type="text" name="animal" />
		<br>
		
		<label>Verb Ending in -ing: </label>
		<input type="text" name="verb" />
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective2" />
		<br>
		
		<label>Verb Ending in -ing: </label>
		<input type="text" name="verb2" />
		<br>
		
		<label>Animal: </label>
		<input type="text" name="animal2" />
	    <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Submit" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>