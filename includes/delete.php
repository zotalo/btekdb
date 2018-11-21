<?php

 include "datalogin.php";
 
 if (isset($_GET['id']) && is_numeric($_GET['id']))
 {

 $id = $_GET['id'];
 

 $result = mysqli_query($conn, "DELETE FROM customers WHERE Customer_Id=$id")
 or die(mysqli_error()); 
 $result = mysqli_query($conn, "DELETE FROM istoriko WHERE Customer_Id=$id") or die(mysqli_error());

 
 // redirect back to the view page
 header("Location: pelatologio.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 header("Location: pelatologio.php");
 }
 
?>