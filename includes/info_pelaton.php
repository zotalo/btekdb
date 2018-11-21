<?php
if (isset($_GET['id']) && is_numeric($_GET['id']))
 {
	include ('datalogin.php');
 $id = $_GET['id'];
echo "<div class='Info_Title'>";
echo "<div>Ιστορικό Θεραπειών</div>";
echo "</div>";
 $info = mysqli_query ($conn, "SELECT Imerominia, Date_ID, therapy.Customer_ID FROM calendar
 inner join therapy on calendar.Date_ID = therapy.Imerominia_ID 
 inner join customers on customers.Customer_Id = calendar.Customer_Id 
 inner join bowtech_therapy on therapy.Bowtech_Procedure = bowtech_therapy.Bowtech_ID
 where therapy.Customer_Id=$id 
 order by Imerominia ASC") or die(mysqli_error());
    $previous_date = "";   
	echo "<ol class=''>";
 while ($row = mysqli_fetch_assoc($info)){
	$dateset=$row['Imerominia'];
	$date = DateTime::createFromFormat('Y-m-d', $dateset);
	$formatdate = $date->format('d-m-Y');
	if($formatdate != $previous_date){
		 echo"<li class=''>";
		echo '<a href="info_pelaton_therapy.php?id=' . $row['Date_ID'].'&uid='.$row['Customer_ID'] . '">' .$formatdate.'</a>';
		echo "</li>";
		$previous_date=$formatdate;
	}
 }echo "</ol>";}?>