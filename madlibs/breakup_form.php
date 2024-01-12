<?php include '../view/header.php'; ?>
<main>
    <h1>The Big Break-Up</h1>
    <form action="." method="post" id="submit_break">
        <input type="hidden" name="action" value="submit_break_form">

        <label>Name: </label>
		<input type="text" name="name" id="name" />
		<br>
		
		<label>Place: </label>
		<input type="text" name="place" id="place" />
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective" id="adjective"/>
		<br>
		
		<label>Animal: </label>
		<input type="text" name="animal" id="animal"/>
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective2" id="adjective2" />
		<br>
		
		<label>Noun: </label>
		<input type="text" name="noun" id="noun"/>
		<br>
		
		<label>Place: </label>
		<input type="text" name="place2" id="place2" />
		<br>
		
		<label>Animal: </label>
		<input type="text" name="animal2" id="animal2" />
	    <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Submit" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>