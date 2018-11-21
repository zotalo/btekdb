<?php 
session_start();
if(isset($_SESSION['username'])) {
	$PageTitle="Bowtech Πελατολόγιο";
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}

?>
	<div class="content">
	<section id="insert_form">
		<button type="button" class="btn-block btn btn-primary" onclick="window.location.href='insert_entry.php'">Εισαγωγή Νέας Καταχώρησης</button>
		<?php //include 'insert_customer.php'; ?>
	</section>
	<div class="calendar_table">
	<h2 id="pinakas">Πίνακας Πελατών</h2>
	<?php include 'customers_table.php'; ?>
	</div>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>