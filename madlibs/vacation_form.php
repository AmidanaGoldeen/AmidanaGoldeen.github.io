<?php include '../view/header.php'; ?>
<main>
    <h1>Vacation Mode!</h1>
	<br>
    <form action="." method="post" id="submit_vacation">
        <input type="hidden" name="action" value="submit_vacation_form">

        <label>Place: </label>
		<input type="text" name="place" id="place" />
		<br>
		
		<label>Verb Ending in -ing: </label>
		<input type="text" name="verb" id="verb" />
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective" id="adjective" />
		<br>
		
		<label>Adjective: </label>
		<input type="text" name="adjective2" id="adjective2" />
		<br>
		
		<label>Food: </label>
		<input type="text" name="food" id="food"/>
		<br>
		
		<label>Place: </label>
		<input type="text" name="place2" id="place2" />
		<br>
		
		<label>Body Part: </label>
		<input type="text" name="bodyPart" id="bodyPart"/>
		<br>
		
		<label>Thing (Plural): </label>
		<input type="text" name="thing" id="thing"/>
	    <br><br>
		
		<label>&nbsp;</label>
		<input type="submit" value="Submit" />
		<br>
		
    </form>

</main>
<?php include '../view/footer.php'; ?>