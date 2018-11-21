<?php
session_start();


	$PageTitle="Bowtech DataBase";
	include "includes/header.php";
?>
	<div class="content">
	<div class="login">
	<?php	include 'includes/login.php'; ?>
	</div>
	<div class="logo">
	<img src="images/logo_bowtech.png" alt="logo"></div>
	<div class="modules">
	<?php include 'includes/modules.php'; ?>
	</div></div>
	</section>

<?php include_once('includes/footer.php');?>