<?php 
if (!isset($_SESSION['username'])) {
	echo "<form id='login-form' action='/includes/login_parse.php' method='post'>
	<label>Username: </label>
<input id='username-text' type='text' name='username' />&nbsp;
<label>Password: </label>
<input id='password-text' type='password' name='password' />&nbsp;
<input id='login-submit' type='submit' name='submit' value='Σύνδεση' />
</form>" ;		
} else {
	echo "<p id='welcome'> Καλώς ήρθες: <i>".$_SESSION['username']."</i><a id='logout' href='includes/logout_parse.php'> Αποσύνδεση</a>";
	}
	?>