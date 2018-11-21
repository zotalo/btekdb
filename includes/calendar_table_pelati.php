<?php if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
	 echo "<div class='Info_Title'>";
echo "<div>Ημερολόγιο Θεραπειών</div>";
echo "</div>";
	include ('datalogin.php');
 $id = $_GET['id'];
$query = mysqli_query($conn, "SELECT customers.Customer_ID, Date_ID, Epitheto, Onoma, Imerominia, Ora FROM calendar
inner join customers on customers.Customer_ID=calendar.Customer_ID WHERE customers.Customer_ID=$id order by Imerominia DESC, Ora DESC") 
or die(mysqli_error());
 }?>
<table class="table table-hover">
	<tr class="">
		<td>Ημερομηνία</td>
		<td>Ώρα</td>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			$dateset=$row['Imerominia'];
			$date = DateTime::createFromFormat('Y-m-d', $dateset);
			$formatdate = $date->format('d-m-Y');
			echo "<tr>";
			echo '<td><a href="info_pelaton_therapy.php?id=' . $row['Date_ID'].'&uid='.$row['Customer_ID'] . '">' .$formatdate.'</a></td>';
			echo '<td><a href="info_pelaton_therapy.php?id=' . $row['Date_ID'].'&uid='.$row['Customer_ID'] . '">' .$row['Ora'].'</a></td>';
			echo "</tr>";
		}
 ?>
</table>