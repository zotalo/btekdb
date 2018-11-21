<?php 
session_start();
	if ($_POST) {
		include 'datalogin.php';
		$uid = $_SESSION['userid'];
		$did = $_SESSION['dateid'];
		$sql=("SELECT * FROM calendar WHERE Date_ID='$did' AND Customer_ID='$uid'");
		$bowcat = mysqli_real_escape_string($conn, $_POST['category']);
		$bowsim = mysqli_real_escape_string($conn, $_POST['simiosis']);
		$query_bid = mysqli_query($conn, "SELECT Bowtech_ID FROM bowtech_therapy  
		WHERE Bowtech_Name='$bowcat'");
		$row = mysqli_fetch_assoc($query_bid);
		$bid = $row['Bowtech_ID'];
		echo $bid;
		echo $uid;
		echo $did;
		echo $bowsim;
		echo $bowcat;
		
		
	$sql = "INSERT INTO `therapy` (`Post_ID`, `Customer_ID`, `Imerominia_ID`, `Bowtech_Procedure`, `Simiosis_Therapy`)
VALUES
(NULL,  '$uid', '$did', '$bid', '$bowsim')";
if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysqli_error());
  }
echo "Success";
	header("Location: /includes/info_pelaton_therapy.php?id=$did&uid=$uid");
exit;
mysqli_close($conn);

	}
	
	else { echo 'error on post';}
?>