<?php include '../view/header.php'; ?>
<main>
    <h1>All About Me!<h1>
    <form action="." method="post" id="loginHPage">
        <input type="hidden" name="action" value="loginHPage">

        <p1>Hello!<br>My name is <?php echo $_POST['fname'];?>, but my friends call me <?php echo $_POST['celebName'];?> and I LOVE <?php echo $_POST['noun'];?>.
		<br>I have a(n) <?php echo $_POST['adjective'];?> <?php echo $_POST['animal'];?> as a pet, and I love her so.
		<br>My favorite food is <?php echo $_POST['adjective2'];?> <?php echo $_POST['food'];?>, you should try it!
		<br>Have a nice day!</p>
		
		
    </form>

</main>
<?php include '../view/footer.php'; ?>