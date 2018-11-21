<?php
include "datalogin.php";
$result = mysql_query("SELECT * FROM Customers",$conn);
$sidemenus = array();
while ($sidemenu = mysql_fetch_object($result)) {
    $sidemenus[] = $sidemenu;
}
?>