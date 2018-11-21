<?php
session_start();
	$uaid = $_SESSION['userid'];
	$daid = $_SESSION['dateid'];
 include('datalogin.php');
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {

 $id = $_GET['id'];
 

 $result = mysqli_query($conn, "DELETE FROM therapy WHERE Post_ID=$id")
 or die(mysql_error()); 

 
 // redirect back to the view page
 header("Location: info_pelaton_therapy.php?id=$daid&uid=$uaid");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: info_pelaton_therapy.php?id=$daid&uid=$uaid");
 }
 
?>