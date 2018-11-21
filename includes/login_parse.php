<?php

session_start();
include "datalogin.php";
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if ($username&&$password)
{


$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

$numrows = mysqli_num_rows($query);

if ($numrows!=0)
{
//Code to loging

while ($row = mysqli_fetch_assoc($query))
{

$dbusername = $row['username'];
$dbpassword = $row['password'];
$dbhash = $row['hash'];
$dbclass = $row['class'];

}

//Check to se if they match!

if($username==$dbusername) {
	if (password_verify($password, $dbhash))
{
echo "You're logged in! You'll be redirected to home page in 1 sec";
$_SESSION['username']=$dbusername;
$_SESSION['class']=$dbclass;
header('Location: /index.php' );
}}
else 
echo "Incorrect password!";
header( 'refresh: 1; /index.php' );

}
else
die("This user dont exist");
header( 'refresh: 1; /index.php' );

}

else
die ("Please enter username and password");
header( 'refresh: 1; /index.php' );
?>