<?php/*
session_start();

if(!isset($_SESSION['userID']) || $_SESSION['userID'] !== true){
	header ("Location: ../view/login_user.php");
	exit;
}*/
?>

<?php include '../view/header.php'; ?>
<main>
    <h1>Select a MyMadLib!</h1>
    
	<a href="../madlibs/index.php?action=vacation">Vacation Mode!</a>
	<br><br>
	<a href="../madlibs/index.php?action=breakup">The Big Break-Up</a>
	<br><br>
	<a href="../madlibs/index.php?action=allme">All About Me!</a>
	<br><br>
	<a href="../madlibs/index.php?action=phpclass">The PHP Class</a>
	<br><br>

	
</main>
<?php include '../view/footer.php'; ?>