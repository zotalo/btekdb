<?php 
$query = mysqli_query($conn, "select * from customers order by Epitheto");
?>
<table class="table table-hover">
	<tr class="">
		<!--<td>ID</td>-->
		<td>Επίθετο</td>
		<td>Όνομα</td>
		<td>Επεξεργασία</td>
		<td>Διαγραφή</td>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			//echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">' .$row['Customer_ID'].'</a></td>';
			echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">' .$row['Epitheto'].'</a></td>';
			echo '<td><a href="info.php?id=' . $row['Customer_ID'] . '">' .$row['Onoma'].'</a></td>';
			echo '<td><a href="edit.php?id=' . $row['Customer_ID'] . '">Επεξεργασία</a></td>';
			echo "<td><a href=\"delete.php?id=" . $row['Customer_ID'] . "\" onClick=\"return confirm('Πρόκειται να διαγράψετε μία εγγραφή, ΟΚ;')\">Διαγραφή</a></td>";
			echo "</tr>";
		}
	?>
</table>