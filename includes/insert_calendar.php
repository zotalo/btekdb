<?php 
if ($_POST) {
	include "datalogin.php";
	$imerominia = mysqli_real_escape_string($conn, $_POST['Imerominia']);
	$ora = mysqli_real_escape_string($conn, $_POST['Ora']);
	$value = mysqli_real_escape_string($conn, $_REQUEST['onomateponimo']);
	$explode = explode("_",$value,2);
	$epitheto = $explode[0];
	$onoma = $explode[1];
	$result = mysqli_query($conn, "SELECT Customer_ID FROM customers WHERE Epitheto='$epitheto' AND Onoma='$onoma'");
	while ($row = mysqli_fetch_assoc($result)){
	$idrow = $row['Customer_ID'];
	$sql = "INSERT INTO `calendar` (`Date_ID`, `Imerominia`, `Ora`, `Customer_ID`)
VALUES
(NULL,  '$imerominia', '$ora', '$idrow')";
	$query = mysqli_query($conn, $sql);
	if (!$query){
		die;
	}
/*if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysqli_error());
  }*/
header ('Location:  calendar.php');

}}
?>