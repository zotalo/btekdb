<?php 
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
 include('header.php');
echo "<div class='Title'>";
echo "<h3>Διαδικασίες Θεραπείας Bowtech</h3>";
echo "</div>";
$info = mysqli_query ($conn, "SELECT * FROM bowtech_therapy where Bowtech_ID=$id") or die(mysqli_error()); 
 while ($row = mysqli_fetch_assoc($info)){
	$BowID = $row['Bowtech_ID'];
	$BowName = $row['Bowtech_Name'];
	$BowInfo = $row['Info'];
	/*echo "<form class='print'>
<input type='button' value='Εκτύπωση' onClick='window.print()'>
</form>";*/
	echo "<div class='BowInfo'>";
	echo "$BowID : $BowName  ";
	echo "<a href=edit_diadikasies_info.php?id=$id><span>Επεξεργασία</span></a>";
	echo "</div>";
	echo "<div class='Info'>";
	echo "<div>$BowInfo</div>";
	echo "</div>";
 }
 }
 echo "</section>";
include ('footer.php');
?>