<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/datalogin.php';
if(isset($_SESSION['username'])){
	echo "<nav class='navbar navbar-default'><div class='container-fluid'>"; 
	echo "<div class='navbar-header'>
      <a class='navbar-brand' href='/index.php'>Βαση Δεδομενων Πελατων Bowtech</a>
    </div>";
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/navigation.php';
echo "</div></nav>"; 
}
?>