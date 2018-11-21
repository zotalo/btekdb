<?php
ob_start();
include ('header.php');
session_start();
if(isset($_SESSION['username'])) {
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}
if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
 $id = $_GET['id']; 
 $edit = mysqli_query($conn, "SELECT * FROM customers WHERE Customer_ID=$id") or die(mysqli_error());
 $edist = mysqli_query($conn, "SELECT * FROM istoriko WHERE Customer_ID=$id") or die(mysqli_error());
 
 $row = mysqli_fetch_array($edit);
 $rowist = mysqli_fetch_array($edist);
 
 $lastname = $row['Epitheto'];
 $firstname = $row['Onoma'];
 $dieuthinsi = $row['Dieuthinsi'];
 $stathero = $row['Tilefono_Stath'];
 $kinito = $row['Tilefono_Kin'];
 $email = $row['Email'];
 $simiosis = $row['Simiosis'];
 $poso = $row['Poso'];
 
 $ilikia = $rowist['Ilikia'];
 $ergasia = $rowist['Ergasia'];
 $drastiriotites = $rowist['Drastiriotites'];
 $parkat = $rowist['Parousa_Katastasi'];
 $rate = $rowist['Rate'];
 $prothe = $rowist['Proigoumenes_Therapies'];
 $farmag = $rowist['Farmakeutiki_Agogi'];
 
 echo "<form id='insert_entry_form' action='' method='post'>
  <input type='hidden' name='Customer_Id' value=$id/>
  <div>
  <p><strong>ID:</strong>$id</p>
  <div class='form-group'><label class='control-label'>Επίθετο: </label><input type='text' placeholder='$row[Epitheto]' name='Epitheto' value='$lastname' /></div>
  <div class='form-group'><label class='control-label'>Όνομα: </label><input type='text' placeholder='$row[Onoma]' name='Onoma' value='$firstname' /></div>
  <div class='form-group'><label class='control-label'>Διεύθυνση: </label><input type='text' placeholder='$row[Dieuthinsi]' name='Dieuthinsi' value='$dieuthinsi' /></div>
  <div class='form-group'><label class='control-label'>Σταθερό Τηλ.: </label><input type='tel' placeholder='$row[Tilefono_Stath]' name='Tilefono_Stath' value='$stathero' /></div>
  <div class='form-group'><label class='control-label'>Κινητό Τηλ.: </label><input type='tel' placeholder='$row[Tilefono_Kin]' name='Tilefono_Kin' value='$kinito' /></div>
  <div class='form-group'><label class='control-label'>Email: </label><input type='email' placeholder='$row[Email]' name='Email' value='$email' /></div>
  <div class='form-group'><label class='control-label'>Σημειώσεις: </label><input type='text' placeholder='$row[Simiosis]' name='Simiosis' value='$simiosis' /></div>
  <div class='form-group'><label class='control-label'>Ποσό: </label><input type='text' placeholder='$row[Poso]' name='Poso' value='$poso' /></div>
  <div class='form-group'><label class='control-label'>Ηλικία: </label><input type='number' placeholder='$rowist[Ilikia]' name='Ilikia' value='$ilikia' /></div>
  <div class='form-group'><label class='control-label'>Εργασία: </label><input type='text' placeholder='$rowist[Ergasia]' name='Ergasia' value='$ergasia' /></div>
  <div class='form-group'><label class='control-label'>Δραστηριότητες: </label><input type='text' placeholder='$rowist[Drastiriotites]' name='Drastiriotites' value='$drastiriotites' /></div>
  <div class='form-group'><label class='control-label'>Παρούσα Κατάσταση: </label><input type='text' placeholder='$rowist[Parousa_Katastasi]' name='Parousa_Katastasi' value='$parkat' /></div>
  <div class='form-group'><label class='control-label'>Rate: </label><input type='number' placeholder='$rowist[Rate]' name='Rate' value='$rate' /></div>
  <div class='form-group'><label class='control-label'>Προηγούμενες Θεραπείες: </label><input type='text' placeholder='$rowist[Proigoumenes_Therapies]' name='Proigoumenes_Therapies' value='$prothe' /></div>
  <div class='form-group'><label class='control-label'>Φαρμακευτική Αγωγή: </label><input type='text' placeholder='$rowist[Farmakeutiki_Agogi]' name='Farmakeutiki_Agogi' value='$farmag' /></div>
 <div class='submit_button'><input type='submit' name='submit' value='Submit'></div>
 </div>
 </form>";
if ($_POST){
if (isset($_POST['Epitheto'])){
	$lastname = mysqli_real_escape_string($conn, $_POST['Epitheto']);
}
else {
	$lastname = $row['Epitheto'];
}
if (isset($_POST['Onoma'])){
 $firstname = mysqli_real_escape_string($conn, $_POST['Onoma']);
}
else {
	$firstname = $row['Onoma'];
}
if (isset($_POST['Dieuthinsi'])){
 $dieuthinsi = mysqli_real_escape_string($conn, $_POST['Dieuthinsi']);
}
else {
	$dieuthinsi = $row['Dieuthinsi'];
}
if (isset($_POST['Tilefono_Stath'])){
 $stathero = mysqli_real_escape_string($conn, $_POST['Tilefono_Stath']);
}
else {
	$stathero = $row['Tilefono_Stath'];
}
 if (isset($_POST['Tilefono_Kin'])){
 $kinito = mysqli_real_escape_string($conn, $_POST['Tilefono_Kin']);
 }
 else {
	 $kinito = $row['Tilefono_Kin'];
 }
 if (isset($_POST['Email'])){
 $email = mysqli_real_escape_string($conn, $_POST['Email']);
 }
 else {
	 $email = $row['Email'];
 }
 if (isset($_POST['Simiosis'])){
 $simiosis = mysqli_real_escape_string($conn, $_POST['Simiosis']);
 }
 else {
	 $simiosis = $row['Simiosis'];
 }
 if (isset($_POST['Poso'])){
 $poso = mysqli_real_escape_string($conn, $_POST['Poso']);
 }
 else {
	 $simiosis = $row['Poso'];
 }
 if (isset($_POST['Ilikia'])){
 $ilikia = mysqli_real_escape_string($conn, $_POST['Ilikia']);
 }
 else {
	 $ilikia = $rowist['Ilikia'];
 }
 if (isset($_POST['Ergasia'])){
 $ergasia = mysqli_real_escape_string($conn, $_POST['Ergasia']);
 }
 else {
	 $ergasia = $rowist['Ergasia'];
 }
 if (isset($_POST['Drastiriotites'])){
 $drastiriotites = mysqli_real_escape_string($conn, $_POST['Drastiriotites']);
 }
 else {
	 $drastiriotites = $rowist['Drastiriotites'];
 }
 if (isset($_POST['Parousa_Katastasi'])){
 $parkat = mysqli_real_escape_string($conn, $_POST['Parousa_Katastasi']);
 }
 else {
	 $parkat = $rowist['Parousa_Katastasi'];
 }
 if (isset($_POST['Rate'])){
 $rate = mysqli_real_escape_string($conn, $_POST['Rate']);
 }
 else {
	 $rate = $rowist['Rate'];
 }
 if (isset($_POST['Proigoumenes_Therapies'])){
 $prothe = mysqli_real_escape_string($conn, $_POST['Proigoumenes_Therapies']);
 }
 else {
	 $prothe = $rowist['Proigoumenes_Therapies'];
 }
 if (isset($_POST['Farmakeutiki_Agogi'])){
 $farmag = mysqli_real_escape_string($conn, $_POST['Farmakeutiki_Agogi']);
 }
 else {
	 $farmag = $rowist['Farmakeutiki_Agogi'];
 }
 // save the data to the database
 mysqli_query($conn, "UPDATE customers SET Epitheto='$lastname', Onoma='$firstname', Dieuthinsi='$dieuthinsi', Tilefono_Stath='$stathero', 
Tilefono_Kin='$kinito', Email='$email', Simiosis='$simiosis', Poso='$poso' WHERE Customer_ID='$id'")
 or die(mysqli_error());
 mysqli_query($conn, "UPDATE istoriko SET Ilikia='$ilikia', Ergasia='$ergasia', Drastiriotites='$drastiriotites', Parousa_Katastasi='$parkat', 
 Rate='$rate', Proigoumenes_Therapies='$prothe', Farmakeutiki_Agogi='$farmag' WHERE Customer_ID='$id'")
 or die(mysqli_error());
 // once saved, redirect back to the view page
exit(header("Location: pelatologio.php"));
}}
ob_flush();
?>