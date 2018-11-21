<?php 
 if (isset($_GET['id']) && is_numeric($_GET['id'])){
			if (isset($_GET['uid']) && is_numeric($_GET['uid'])) {
				$id = $_GET['id'];
				$uid = $_GET['uid'];
				$_SESSION['dateid'] = $id;
				$_SESSION['userid'] = $uid;
	echo "<form class='form-group' action='/includes/insert_therapy.php' method='post'>
		<div class='form_format'><label class='form-control'>Διαδικασία Bowtech: </label>
		<select class='form-control' name='category' required><option value=''>Διαδικασία Βowtech</option>";
		$sql= ('SELECT Bowtech_Name FROM bowtech_therapy');
		$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            echo "<OPTION VALUE='".$row[Bowtech_Name]."'>".$row[Bowtech_Name]."</OPTION>";
        }
echo "    </select></div></br>
		<div class='form_format'><span class='in_name'>Σημειώσεις Διαδικασίας: </span><textarea name='simiosis'></textarea></div><br>
		<div class='submit_button'><input type='submit' name='submit'/></div>
			</form>"; 
			}}
	?>