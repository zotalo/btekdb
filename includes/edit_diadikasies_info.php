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
   $info = mysqli_query ($conn, "SELECT * FROM bowtech_therapy where Bowtech_ID=$id") or die(mysqli_error());
   $row = mysqli_fetch_array($info);
   $BowInfo = $row['Info'];
    echo "<form id='insert_entry_form' action='' method='post'>
  <input type='hidden' name='Bow_ID' value=$id/>
  <div>
  <p><strong>ID:</strong>$id</p>
  <div class='form_format'><span class='in_name'>Σημειώσεις: </span>
  <textarea name='Info' 
   />$BowInfo</textarea></div><br>
   <div class='submit_button'><input type='submit' name='submit' value='Submit'></div>
    </div>
 </form>";
    if ($_POST){
if (isset($_POST['Info'])){
	$info = mysqli_real_escape_string($conn, $_POST['Info']);
}
else {
	$info = $row['Info'];
}

 mysqli_query($conn, "UPDATE bowtech_therapy SET Info='$info' WHERE Bowtech_ID='$id'")
 or die(mysqli_error()); 
header("Location: diadikasies_info.php?id=$id");
 }
   
   }
 echo "</section>";
include ('footer.php');
?>