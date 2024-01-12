<?php include '../view/header.php'; ?>
<main>
    <h1>The Big Break-Up<h1>
    <form action="." method="post" id="loginHPage">
        <input type="hidden" name="action" value="loginHPage">

        <p>Dear
		<?php echo $_POST['name'];?>,<br>
		Remember yesterday, when we went to the <?php echo $_POST['place'];?>? And you saw you ex and kissed them?!?!?
		</p>
		<p>You stabbed me in the back and stomped all over my heart. Obviously, your <?php echo $_POST['adjective'];?>
		face isn't meant for me.</p>
		<p>The photo I have of you with the <?php echo $_POST['animal'];?>? You can keep it. </p>
		<p>The <?php echo $_POST['adjective2'];?><?php echo $_POST['noun'];?> you gave me when we visited the 
			<?php echo $_POST['place2'];?> last year? You can keep it.</p>
		<p>Our pet <?php echo $_POST['animal2'];?>? Sorry, she is MINE.</p><br>
		This is goodbye...
		
		
    </form>

</main>
<?php include '../view/footer.php'; ?>