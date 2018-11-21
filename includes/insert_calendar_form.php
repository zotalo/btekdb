<div class="well">
		<?php echo "<form id='calendar-form' action='/includes/insert_calendar.php' method='post'>
			<input type='date' placeholder='Ημερομηνία' name='Imerominia'/>
			<input type='time' placeholder='Ώρα' name='Ora'/>
			<select name='onomateponimo'><option value=''>Επίθετο - Όνομα</option>";
			
			$sql= ('SELECT * FROM customers order by Epitheto');
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)){
				$epitheto = $row[Epitheto];
				$onoma = $row[Onoma];
				echo "<option value='".$epitheto."_".htmlentities($onoma)."'>".$row[Epitheto]." - ".$row[Onoma]."</option>";	
		}
	echo "</select>";
		echo "<input type='submit' name='submit'/>
		</form>" ; ?>
</div>