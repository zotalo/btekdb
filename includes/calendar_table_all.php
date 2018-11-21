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
echo '<div class="cur-date">';
echo date('d-m-Y H:i'); 
echo '</div>';
echo '<div class="calendar_table">';
echo '<h2 class="h2imer">Ημερολόγιο - Ραντεβού</h2>';
$query = mysqli_query($conn, "SELECT customers.Customer_ID, Date_ID, Epitheto, Onoma, Imerominia, Ora FROM calendar
inner join customers on customers.Customer_ID=calendar.Customer_ID order by Imerominia DESC, Ora DESC");
?>
<table class="table table-hover">
	<tr class="">
		<td>Ημερομηνία</td>
		<td>Ώρα</td>
		<td>Επίθετο</td>
		<td>Όνομα</td>
		<td>Διαγραφή</td>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			$dateset=$row['Imerominia'];
			$date = DateTime::createFromFormat('Y-m-d', $dateset);
			$formatdate = $date->format('d-m-Y');
			echo "<tr>";
			echo '<td><a href="info_pelaton_therapy.php?id=' . $row['Date_ID'].'&uid='.$row['Customer_ID'] . '">' .$formatdate.'</a></td>';
			echo '<td><a href="info_pelaton_therapy.php?id=' . $row['Date_ID'].'&uid='.$row['Customer_ID'] . '">' .$row['Ora'].'</a></td>';
			echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">' .$row['Epitheto']. '</a></td>';
			echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">' .$row['Onoma']. '</a></td>';
			echo '<td><a href="delete_cal_entry.php?id=' . $row['Date_ID'] . '">Διαγραφή</a></td>';
			echo "</tr>";
		}
	?>
</table>
</div>
	</div>
	
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>