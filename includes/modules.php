<?php
if(isset($_SESSION['username'])) {
?>
<div class="btn-group">
<button type="button" class="btn btn-primary" onclick="window.location.href='/includes/insert_entry.php'">Εισαγωγή Πελάτη</button></a>
<button type="button" class="btn btn-primary">Εισαγωγή Ραντεβού</button>
<button type="button" class="btn btn-primary">Εισαγωγή Άρθρου</button>
</div>
<?php }
?>