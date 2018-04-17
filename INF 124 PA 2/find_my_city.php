<?php 
// echo "<b>You are trying to look up city and state for zipcode " . $_POST['zip'] . "</b><br><br>";
$my_zip = $_POST['zip'];
try {
	require_once "pdo.php";
	$sql = "SELECT state, city FROM `zip_codes` WHERE zip = '$my_zip'";
	foreach ($conn->query($sql) as $row){
		$my_state = $row['state'];
		$my_city = $row['city'];
		echo $my_city . "/" . $my_state;
		
	}
}
catch(PDOException $e)
{
	echo 'Connection failed: ' . $e->getMessage();
}
?>
<?php 
$conn = null;
?>