<?php 
$query = mysqli_query($conn, "SELECT customers.Customer_ID, Date_ID, Epitheto, Onoma, Imerominia, Ora, RecordDateTime FROM calendar
inner join customers on customers.Customer_ID=calendar.Customer_ID WHERE DATE(Imerominia) >= DATE(NOW()) order by Imerominia DESC, Ora DESC");
?>
<table class="table table-hover">
	<tr class="">
		<td>Ημερομηνία</td>
		<td>Ώρα</td>
		<td>Επίθετο</td>
		<td>Όνομα</td>
		<td>Διαγραφή</td>
		<td>Ημ. Καταχώρησης</td>
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
			echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">'.$row['RecordDateTime'].'</a></td>';
			echo "</tr>";
		}
	?>
</table>