<?php
session_start();

	$uaid = $_SESSION['userid'];
	$daid = $_SESSION['dateid'];
 include ('header.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {

 $id = $_GET['id'];
  $edit = mysqli_query($conn, "SELECT * FROM therapy WHERE Post_ID=$id") or die(mysqli_error());
  $row = mysqli_fetch_array($edit);
$simiosis = $row['Simiosis_Therapy'];



 echo "<form id='insert_entry_form' action='' method='post'>
  <input type='hidden' name='Post_ID' value=$id/>
  <div>
  <p><strong>ID:</strong>$id</p>
  <div class='form_format'><span class='in_name'>Σημειώσεις: </span>
  <textarea name='Simiosis_Therapy' 
   />$simiosis</textarea></div><br>
   <div class='submit_button'><input type='submit' name='submit' value='Submit'></div>
    </div>
 </form>";
 
 
 if ($_POST){
if (isset($_POST['Simiosis_Therapy'])){
	$simiosis = mysqli_real_escape_string($conn, $_POST['Simiosis_Therapy']);
}
else {
	$simiosis = $row['Simiosis_Therapy'];
}

 mysqli_query($conn, "UPDATE therapy SET Simiosis_Therapy='$simiosis' WHERE Post_ID='$id'")
 or die(mysqli_error()); 
header("Location: info_pelaton_therapy.php?id=$daid&uid=$uaid");
 }}
?>