<!DOCTYPE html>
<?php 
try {
	require_once "pdo.php";
	} 
catch(PDOException $e) 
	{ 
	echo 'Connection failed: ' . $e->getMessage();
 	}
?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Project MOBIUS</title>
</head>
<style>
	.tabs {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
	}

.tabs a {
	float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  }
	
.tabs a:hover {
	background-color: #c4eFe9;
	color: black;
	}

.tabs a.active {
	background-color: #008CBA;
	color: white;
	}
	
	
	table, th, td{border: 1px solid olive; border-collapse: collapse;}
	p.normal{font-style: normal;} 
	h1{font-size: 36px; text-align: center}
	h2{font-size: 20px; text-align: center}
	h3{font-size: 14px; text-align: center} 
	p {font-size: 14px; text-aligh: left;}
	.button1{
		background-color: #F44336; border: none; color: white; padding: 7px 16px;
		text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
		margin: 4px 2px; cursor: pointer;}
	.button2{
		background-color: #008CBA; border: none; color: white; padding: 7px 50px;
		text-align: center; text-decoration: none; display: inline-block; font-size: 16px;
		cursor: pointer;}
	img:hover{transform: scale(1.75);} img{transition: transform .25s ease;}
	table, th, td {border: 1px solid silver;}
</style>
<body>

<h1 style="text-indent: 0.5em;">Project MOBIUS</h1>

<div class="tabs">
	<a class="active" href="NewFile1.php">For Sale</a>
	<a href="About.php">About</a>
	<a href="Founders.php">Founders</a>
	<a href="Shipping.php">Payment/Shipping</a>
</div>
<br>
<h1 style="text-align:left">Multirole</h1>
<table><col width="40"><col width="192"><col width="192"><col width="192"><col width="192"><col width="192"><col width="192"><col width="192">
<tr>
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-16C'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td align=center></td>
	<td style="vertical-align:top">
		<a href="F-16C.php">
		<img src="Pictures/F-16C.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>   
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-16C.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-2A'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="F-2A.php">
		<img src="Pictures/F-2A.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>
	<br>
	Starting at:<br>  <h2><?php echo $Price?></h2>
	<h2><a href="F-2A.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F/A-18E'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="F-18E.php">
		<img src="Pictures/F-18G.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>   
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-18E.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-35A'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="F-35A.php">
		<img src="Pictures/F-35A.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>
	<br>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-35A.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-35B'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="F-35B.php">
		<img src="Pictures/F-35B.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-35B.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	
</tr>
</table>

<br>
<h1 style="text-align:left">Fighter</h1>
<table><col width="40"><col width="192"><col width="192"><col width="192"><col width="192"><col width="192">

<tr>
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-14D'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td align=center></td>
	<td style="vertical-align:top">
		<a href="F-14D.php">
		<img src="Pictures/F-14D.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-14D.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'F-22A'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="F-22.php">
		<img src="Pictures/F-22.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>   
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="F-22.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-27'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="Su-27.php">
		<img src="Pictures/Su-27.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>   
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-27.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-35'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="Su-35.php">
		<img src="Pictures/Su-35.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-35.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'T-50'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="T-50.php">
		<img src="Pictures/T-50.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>

	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>
	<br>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="T-50.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
</tr>
</table>


<br>
<h1 style="text-align:left">Attack</h1>
<table><col width="40"><col width="192"><col width="192"><col width="192">
<tr>

	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'A-10'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td align=center></td>
	<td style="vertical-align:top">
		<a href="A-10.php">
		<img src="Pictures/A-10.jpg" alt="HTML5 Icon" style="width:192px;heigh:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	Starting at:<br>  <h2><?php echo $Price?></h2>
	<h2><a href="A-10.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-25'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="Su-25.php">
		<img src="Pictures/SU-25.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-25.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-34'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="Su-34.php">
		<img src="Pictures/Su-34.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-34.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	
</tr>

</table>

<br>
<h1 style="text-align:left">AWACS</h1>
<table><col width="40"><col width="192"><col width="192">
<tr>
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'E-2C'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td align=center></td>
	<td style="vertical-align:top">
		<a href="E-2C.php">
		<img src="Pictures/E-2.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="E-2C.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'E-3'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="E-3.php">
		<img src="Pictures/E-3.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="E-3.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
</tr>

</table>
<br>


<h1 style="text-align:left">Technology Demonstrator</h1>
<table><col width="40"><col width="192"><col width="192">
<tr>

	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-37'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td align=center></td>
	<td style="vertical-align:top">
		<a href="Su-37.php">
		<img src="Pictures/Su-37.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>
	Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-37.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
	
	<?php
	$sql = "SELECT Designation, Name, Manufacturer, Short_Role, Blurb, Price, Equip_1, Equip_2, Equip_3, Equip_4  FROM `Planes` WHERE Designation = 'Su-47'";
	foreach ($conn->query($sql) as $row){
		$Designation = $row['Designation'];
		$Name = $row['Name'];
		$Short_Role = $row['Short_Role'];
		$Manufacturer = $row['Manufacturer'];
		$Blurb = $row['Blurb'];
		$Price = $row['Price'];
		$Equip_1 = $row['Equip_1'];
		$Equip_2 = $row['Equip_2'];
		$Equip_3 = $row['Equip_3'];
		$Equip_4 = $row['Equip_4'];
	} 
	?>
	<td style="vertical-align:top">
		<a href="Su-47.php">
		<img src="Pictures/Su-47.jpg" alt="HTML5 Icon" style="width:192px; height:127px;"></a><br>
	<br>
	<h3 style="color:orange"><?php echo $Designation?> "<?php echo $Name?>"</h3>
	<p>
	<b>Manufacturer:</b> <?php echo $Manufacturer?>
	<br>
	<br>
	<b>Role:</b> <?php echo $Short_Role?>
	<br>
	<br>
	<?php echo $Blurb?>
	</p>
	<br>Starting at:<br> <h2><?php echo $Price?></h2>
	<h2><a href="Su-47.php"
		class="button2">Learn more</a></h2>
		Equipment Included:
	<ul style="list-style-type:square">
		<li><?php echo $Equip_1?></li>
		<li><?php echo $Equip_2?></li>
		<li><?php echo $Equip_3?></li>
		<li><?php echo $Equip_4?></li>
	</ul><br>
	</td>
	
</tr>

</table>
</body>
</html>
<?php 
$conn = null;
?>