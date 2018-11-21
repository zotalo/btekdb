		<?php 
echo "<h1>Εισαγωγη Στοιχειων Νεου Πελατη</h1>";
echo "<div id='stixia-frm'><form class='form-horizontal' action='/includes/insert_customers.php' method='post'>
			<div class='form-group'><label class='control-label'>Επίθετο: </label><input type='text' class='form-control' placeholder='' name='Epitheto'/></div>
			<div class='form-group'><label class='control-label'>Όνομα: </label><input type='text' class='form-control' placeholder='' name='Onoma'/></div>
			<div class='form-group'><label class='control-label'>Διεύθυνση: </label><input type='text' class='form-control' placeholder='' name='Dieuthinsi'/></div>
			<div class='form-group'><label class='control-label'>Σταθερό: </label><input type='tel' class='form-control' placeholder='' name='Tilefono_Stath'/></div>
			<div class='form-group'><label class='control-label'>Κινητό: </label><input type='tel' class='form-control' placeholder='' name='Tilefono_Kin'/></div>
			<div class='form-group'><label class='control-label'>Email: </label><input type='email' class='form-control' placeholder='' name='Email'></div>
			<div class='form-group'><label class='control-label'>Σημειώσεις: </label><input type='text' class='form-control' placeholder='' name='Simiosis'/></div>
			<div class='form-group'><label class='control-label'>Ποσό: </label><input type='text' class='form-control' placeholder='' name='Poso'/></div>
			<div class='form-group'><label class='control-label'>Ηλικία: </label><input type='number' class='form-control' placeholder='' name='Ilikia'  /></div>
			<div class='form-group'><label class='control-label'>Εργασία: </label><input type='text' class='form-control' placeholder='' name='Ergasia'  /></div>
			<div class='form-group'><label class='control-label'>Δραστηριότητες: </label><input type='text' class='form-control' placeholder='' name='Drastiriotites'  /></div>
			<div class='form-group'><label class='control-label'>Παρούσα Κατάσταση: </label><input type='text' class='form-control' placeholder='' name='Parousa_Katastasi'  /></div>
			<div class='form-group'><label class='control-label'>Rate: </label><input type='number' class='form-control' placeholder='' min='1' max='10' value='1' name='Rate' oninput='this.form.amountInput.value=this.value' /></div>
			<div class='form-group'><label class='control-label'>Προηγούμενες Θεραπείες: </label><input type='text' class='form-control' placeholder='' name='Proigoumenes_Therapies'  /></div>
			<div class='form-group'><label class='control-label'>Φαρμακευτική Αγωγή: </label><input type='text' class='form-control' placeholder='' name='Farmakeutiki_Agogi'  /></div>
			<div class='submit_button'><input type='submit' class='form-control' name='submit'/></div>
		</form></div>" ; ?>