<?php

 include('datalogin.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {

 $id = $_GET['id'];
 

 $result = mysqli_query($conn, "DELETE FROM calendar WHERE Date_ID=$id")
 or die(mysql_error()); 

 
 // redirect back to the view page
 header("Location: calendar.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: calendar.php");
 }
 
?>