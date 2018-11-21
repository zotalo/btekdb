<?php 
if ($_POST) {
	include 'datalogin.php';
	$epitheto = mysqli_real_escape_string($conn, $_POST['Epitheto']);
	$onoma = mysqli_real_escape_string($conn, $_POST['Onoma']);
	$dieuthinsi = mysqli_real_escape_string($conn, $_POST['Dieuthinsi']);
	$til_stath = mysqli_real_escape_string($conn, $_POST['Tilefono_Stath']);
	$til_kin = mysqli_real_escape_string($conn, $_POST['Tilefono_Kin']);
	$email = mysqli_real_escape_string($conn, $_POST['Email']);
	$simiosis = mysqli_real_escape_string($conn, $_POST['Simiosis']);
	$poso = mysqli_real_escape_string($conn, $_POST['Poso']);
	
	$ilikia = mysqli_real_escape_string($conn, $_POST['Ilikia']);
	$ergasia = mysqli_real_escape_string($conn, $_POST['Ergasia']);
	$drastiriotites = mysqli_real_escape_string($conn, $_POST['Drastiriotites']);
	$parkat = mysqli_real_escape_string($conn, $_POST['Parousa_Katastasi']);
	$rate = mysqli_real_escape_string($conn, $_POST['Rate']);
	$prothe = mysqli_real_escape_string($conn, $_POST['Proigoumenes_Therapies']);
	$farmag = mysqli_real_escape_string($conn, $_POST['Farmakeutiki_Agogi']);
	
$sql = "INSERT INTO `customers` (`Customer_ID`, `Epitheto`, `Onoma`, `Dieuthinsi`, `Tilefono_Stath`, `Tilefono_Kin`, `Email`, `Simiosis`, `poso`) 
VALUES
(NULL, '$epitheto', '$onoma', '$dieuthinsi', '$til_stath', '$til_kin', '$email', '$simiosis', '$poso')";
if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysqli_error());
  }
$cuid = ("SELECT Customer_ID FROM customers WHERE Epitheto='$epitheto' AND Onoma='$onoma'") or die(mysqli_error());
$sqlid = mysqli_query($conn, $cuid);
while ($row = mysqli_fetch_assoc($sqlid)){
$idrow = $row['Customer_ID'];}
	$sqlist = "INSERT INTO `istoriko` (`Customer_ID`, `Ilikia`, `Ergasia`, `Drastiriotites`, `Parousa_Katastasi`, `Rate`, `Proigoumenes_Therapies`, `Farmakeutiki_Agogi`)
	VALUES 
	('$idrow', '$ilikia', '$ergasia', '$drastiriotites', '$parkat', '$rate', '$prothe', '$farmag')";


if (!mysqli_query($conn, $sqlist))
  {
  die('Error: ' . mysqli_error());
  }
echo "Success";
header("Location: /includes/pelatologio.php");
exit;
}
?>