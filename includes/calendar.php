<?php 
session_start();
if(isset($_SESSION['username'])) {
	$PageTitle="Bowtech Ημερολόγιο";
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}

?>
	<div class="content">
	<?php
echo '<div class="cur-date well-sm well">';
echo date('d-m-Y H:i'); 
echo time();
echo '</div>';
?>
<script type="text/javascript">
    TIMESTAMP = <?php echo time(); ?> 000;
    offset = new Date().getTime()-TIMESTAMP;
    setInterval(function() {
        var now = new Date();
        now.setTime(now.getTime()-offset);
        // print out the time according to the variable `now`
    },1000);
</script>
	<?php include 'insert_calendar.php'; ?>
	<section id="insert_form">
		<?php include 'insert_calendar_form.php'; ?>
	</section>
	<div class="calendar-all">
	<button type="button" class="btn-block btn btn-primary" onclick="window.location.href='calendar_table_all.php'">Όλες οι καταχωρήσεις</button>
	</div>
	<div class="calendar_table">
	<h2 class="h2imer">Ημερολόγιο - Ραντεβού</h2>
	<?php include 'calendar_table.php'; ?>
	</div>
	
	</div>
	
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>