<?php
    $dbhost = "localhost";
    $dbuser = "evaki";
    $dbpass = "4ei2qTrXjzmhF5ebVlY1";
    $dbname = "bowtech";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//mysqli_query($conn, "SET CHARACTER SET 'utf8'");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
	mysqli_set_charset($conn, "utf8");
?>