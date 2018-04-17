<?php 
echo "<b>Other products from " . $_POST['maker'] . "</b><br><br>";
$manuf = $_POST['maker'];
try {
	require_once "pdo.php";
	$sql = "SELECT Designation, Name, Role, Manufacturer, Origin, Price, Crew, Length, Wingspan, Max_Speed, Paragraph_1, Paragraph_2, Armament FROM `Planes` WHERE Manufacturer = '$manuf'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Role = $row['Role'];
		$Manufacturer = $row['Manufacturer'];
		$Origin = $row['Origin'];
		$Price = $row['Price'];
		$Crew = $row['Crew'];
		$Length = $row['Length'];
		$Wingspan = $row['Wingspan'];
		$Max_Speed = $row['Max_Speed'];
		$Paragraph_1 = $row['Paragraph_1'];
		$Paragraph_2 = $row['Paragraph_2'];
		$Armament = $row['Armament'];
		echo '<a href=' . $Designation . '.php>' . $Designation . '</a> Role: ' . $Role . ' ('. $Price . ')<br>';
		//echo "<b>Plane Name: " . $Designation . " Price: " . $Price . "</b><br>";
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