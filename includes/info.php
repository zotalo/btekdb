<?php
session_start();
include('header.php');
if(isset($_SESSION['username'])) {
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /index.php' );
		die ("You are not logged in");
	}

include('customers.php');
include ('calendar_table_pelati.php');
include('info_pelaton.php');
echo "</section>";
include ('footer.php');
?>