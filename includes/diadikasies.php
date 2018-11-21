<?php 
session_start();
if(isset($_SESSION['username'])) {
	$PageTitle="Bowtech Διαδικασίες";
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}

?>
	<div class="content">
	<div class="calendar_table">
	<h2 class="h2imer">Διαδικασίες Bowtech</h2>
		<?php include 'diadikasies_table.php'; ?>
		</div>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>