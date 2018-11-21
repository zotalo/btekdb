<?
$info = mysql_query
 ("SELECT Imerominia FROM (SELECT Class_Name, Bowtech_Name, Info FROM calendar 
 inner join therapy on calendar.Date_ID = therapy.Imerominia_ID 
 inner join customers on customers.Customer_Id = calendar.Customer_Id 
 inner join bowtech_therapy on therapy.procedure = bowtech_therapy.Bowtech_ID
 inner join bowtech_classes on bowtech_therapy.Class_ID = bowtech_classes.Class_ID
 where therapy.Customer_Id=$id)
 order by Imerominia DESC") or die(mysql_error()); 
 while ($row = mysql_fetch_assoc($info)){
	$Imerominia = $row['Imerominia'];
	//$Post_ID = $row['Post_ID'];
	$Class = $row['Class_Name'];
	$Therapy = $row['Bowtech_Name'];
	$Info = $row['Info'];
	
echo "<ul class='PostInfo'>";
echo "<li class='ListInfo'>";
echo "<div class='DateInfo'>$Imerominia</div>";
//echo "<div class='PostidInfo'>$Post_ID</div><br>";
echo "<div class='Therapy'>$Class / $Therapy</div><br>";
echo "<div class='TherapyInfo'>$Info </div>";
echo "</li>";
echo "</ul>";
 }
 
 ?>