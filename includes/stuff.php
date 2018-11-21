<?php 
$result = mysql_query("SELECT * FROM customers");

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("ID: %s  Επίθετο %s Όνομα: %s Διεύθυνση: %s Τηλέφωνο: %s Κινητό Τηλέφωνο: %s Email: %s Σημειώσεις: %s \n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7]);  
}

mysql_free_result($result);
?>






<?php 
$PageTitle="Demo Pelatologio";
include($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php');
?>

  <!--Arbitrary HTML Tags-->



	<div class="content">
	<div class="customer_table">
	<?php include 'customers_table.php'; ?>
	</div>
	</div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php');
?>