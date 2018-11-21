<?php 
$query = mysqli_query($conn, "SELECT * FROM bowtech_therapy");
?>
<table class="table table-hover">
	<tr class="">
		<td>ID</td>
		<td>Όνομα Θεραπείας</td>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo '<td><a href="diadikasies_info.php?id=' . $row['Bowtech_ID'] . '">'.$row['Bowtech_ID'].'</a></td>';
			echo '<td><a href="diadikasies_info.php?id=' . $row['Bowtech_ID'] . '">'.$row['Bowtech_Name'].'</a></td>';
			echo "</tr>";
		}
	?>
</table>