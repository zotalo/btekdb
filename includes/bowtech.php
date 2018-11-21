<?php 
session_start();
include "datalogin.php";
if(isset($_SESSION['username'])) {
	$PageTitle="Bowtech Πληροφορίες";
	include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}


?>
	<div class="content">
	<div class="bowtech_info">
	<div id="article1">
	<?php
	$info = mysqli_query ($conn, "SELECT * FROM articles") or die(mysqli_error()); 
 while ($row = mysqli_fetch_assoc($info)){
	$ArID = $row['Article_ID'];
	$ArTitle = $row['Article_Title'];
	$ArPrev = $row['Article_Preview'];
	$ArFull = $row ['Article_Full'];
	/*echo "<form class='print'>
<input type='button' value='Εκτύπωση' onClick='window.print()'>
</form>";*/
	/*echo "<div class='BowInfo'>";
	echo "Άρθρο $ArID : $ArTitle";
	echo "</div>";
	echo "<div class='Info'>";
	echo "<div>$ArFull</div>";
	echo "</div>";*/
	echo "<details class='BowInfo'>";
	echo "<summary>$ArTitle $ArPrev</summary>";
	echo "<div>$ArFull</div>";
	echo "</details>";
 }?>
	</div>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>