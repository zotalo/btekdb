<?php
session_start();
include ('header.php');
if(isset($_SESSION['username'])) {
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href=' logout_parse.php'> Αποσύνδεση</a>";
	}
	else {
		header( 'refresh: 1; /bowtech/index.php' );
		die ("You are not logged in");
	}
if (isset($_GET['id']) && is_numeric($_GET['id'])){
			if (isset($_GET['uid']) && is_numeric($_GET['uid'])) {
 

 // get id value
  $id = $_GET['id'];
  $uid = $_GET['uid'];


$info = mysqli_query
 ($conn, "SELECT Imerominia, Post_ID, Bowtech_Name, Bowtech_ID, Simiosis_Therapy 
 FROM calendar 
 inner join therapy on calendar.Date_ID = therapy.Imerominia_ID 
 inner join customers on customers.Customer_Id = calendar.Customer_Id 
 inner join bowtech_therapy on therapy.Bowtech_Procedure = bowtech_therapy.Bowtech_ID
 where therapy.Customer_Id=$uid AND therapy.Imerominia_ID=$id
 order by Imerominia DESC") or die(mysqli_error()); 

 $dateid = mysqli_query ($conn, "SELECT Imerominia FROM calendar where Date_ID=$id");
 $rowdate = mysqli_fetch_assoc($dateid);
 $datepost = $rowdate['Imerominia'];
 $datetoformat = DateTime::createFromFormat('Y-m-d', $datepost);
$postdate = $datetoformat->format('d-m-Y');
 echo "<div class='Title'>";
 echo "<h3>$postdate - $uid</h3>";
 echo "</div>";
 echo "<div id='therapy-form'>";
 include ('insert_therapy_form.php');
 echo "</div>";
 echo "<div class='Title'>";
echo "<h3>Διαδικασίες Τρέχουσας Θεραπείας</h3>";
echo "</div>";
echo "<div class='posts'>";
    $previous_date = "";   
		$count=1;
 while ($row = mysqli_fetch_assoc($info)){
	$Post_ID = $row['Post_ID'];
	$Therapy = $row['Bowtech_Name'];
	$Info = $row['Simiosis_Therapy'];
echo "<ul class=''>";
echo "<li class=''>";
echo '<div class="PostidInfo">'.$count. ') <span><a href="edit_therapy_entry.php?id=' . $row['Post_ID'] . '" style="color:white">Επεξεργασία</a> -
 <a href="delete_therapy_entry.php?id=' . $row['Post_ID'] . '" style="color:white">Διαγραφή</a></span></div><br>';
echo '<div class="Therapy"><a style="color:black" href="diadikasies_info.php?id=' . $row['Bowtech_ID'] . '">'. $Therapy .'</a></div><br>';
echo "<div class='TherapyInfo'>$Info </div>";
echo "</li>";
echo "</ul>";
$count++;	 
}
			}
}
echo "</div>";
echo "</section>";
include ('footer.php');
 
 ?>