<?php 
if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $id = $_GET['id'];}
 $infoid = mysqli_query($conn, "SELECT Epitheto, Onoma FROM customers WHERE Customer_Id=$id") or die(mysql_error());
 $infodate = mysqli_query($conn, "SELECT Imerominia FROM calendar inner join therapy on calendar.Date_ID = therapy.Imerominia_ID inner join customers on customers.Customer_Id = calendar.Customer_Id where calendar.Customer_Id=$id") or die(mysql_error()); 
 while ($row = mysqli_fetch_assoc($infoid)){
	$Lastname = $row['Epitheto'];
	$Firstname = $row['Onoma'];
 }
echo "<div class='Title'>";
echo "<div>$Lastname $Firstname</div>";
echo "</div>";
echo '<span class="edit"><a href="edit.php?id=' . $id . '">Επεξεργασία</a></span>';
$query = mysqli_query($conn, "select * from customers where Customer_Id=$id");
?>
<div class='Info_Title'>Στοιχεία Επικοινωνίας</div>
<table class="table table-hover">
	<tr class="">
		<th>Επίθετο</th>
		<th>Όνομα</th>
		<th>Διεύθυνση</th>
		<th>Τηλέφωνο</th>
		<th>Κινητό Τηλ.</th>
		<th>Email</th>
		<th>Σημειώσεις</th>
		<th>Ποσό</th>
	</tr>
	<?php
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>" .$row['Epitheto']."</td>";
			echo "<td>" .$row['Onoma']."</td>";
			echo "<td>" .$row['Dieuthinsi']."</td>";
			echo "<td>" .$row['Tilefono_Stath']."</td>";
			echo "<td>" .$row['Tilefono_Kin']."</td>";
			echo "<td>" .$row['Email']."</td>";
			echo "<td>" .$row['Simiosis']."</td>";
			echo "<td>" .$row['Poso']."</td>";
			echo "</tr>";
		}
	?>
</table>
<?php 
if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $id = $_GET['id'];}
$query = mysqli_query($conn, "select * from istoriko where Customer_Id=$id");
?>
<div class='Info_Title'>Ιστορικό Πελάτη</div>
<table class="table table-hover">
	<tr class="">
		<th>Ηλικία</th>
		<th>Εργασία</th>
		<th>Δραστηριότητες</th>
		<th>Παρούσα Κατάσταση</th>
		<th>Rate</th>
		<th>Προηγούμενες Θεραπείες</th>
		<th>Φαρμακευτική Αγωγή</th>
	</tr>

	<?php
		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>" .$row['Ilikia']."</td>";
			echo "<td>" .$row['Ergasia']."</td>";
			echo "<td>" .$row['Drastiriotites']."</td>";
			echo "<td>" .$row['Parousa_Katastasi']."</td>";
			echo "<td>" .$row['Rate']."</td>";
			echo "<td>" .$row['Proigoumenes_Therapies']."</td>";
			echo "<td>" .$row['Farmakeutiki_Agogi']."</td>";
			echo "</tr>";
		}
	?>
</table>