<?php 
if ($_POST) {
	include 'datalogin.php';
	$ilikia = $_POST['Ilikia'];
	$ergasia = $_POST['Ergasia'];
	$drastiriotites = $_POST['Drastiriotites'];
	$parkat = $_POST['Parousa_Katastasi'];
	$rate = $_POST['Rate'];
	$prother = $_POST['Proigoumenes_Therapies'];
	$farmag = $_POST['Farmakeutiki_Agogi'];
	
$sql = "INSERT INTO `istoriko` (`Istoriko_ID`, `Customer_ID`,
`Ilikia`, `Ergasia`, `Drastiriotites`, `Parousa_Katastasi`, 
`Rate`, `Proigoumenes_Therapies`, `Farmakeutiki_Agogi`)
VALUES
(NULL, NULL, '$ilikia', '$ergasia', '$drastiriotites', '$parkat', '$rate', 
'$prother', '$farmag')
where Customer_ID=$id";

if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "Success";
header("Location: /includes/info.php");
exit;
mysql_close($conn);
 }
?>