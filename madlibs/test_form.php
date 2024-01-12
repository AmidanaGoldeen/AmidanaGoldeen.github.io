<?php include '../view/header.php'; ?>
<main>
    <h1>My day at the zoo...</h1>
    <form action="." method="post" id="loginHPage">
        <input type="hidden" name="action" value="loginHPage">

        <p>I went to the Zoo today, and I saw a(n)
		<?php echo $_POST['adjective'];?>
		<?php echo $_POST['animal'];?>
		! It was
		<?php echo $_POST['verb'];?>
		on its
		<?php echo $_POST['adjective2'];?>
		rock! Then, a(n)
		<?php echo $_POST['animal2'];?>
		flew into its cage, and stole its food... What a day!</p>
		
		<a href="../controller">Try Others Now!</a>
    </form>

</main>
<?php include '../view/footer.php'; ?>