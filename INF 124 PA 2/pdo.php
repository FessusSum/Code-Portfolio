<?php
$servername = 'sylvester-mccoy-v3';
$username = 'inf124-db-037';
$password = 'Beanman96!'; 
$conn = new PDO('mysql:host=sylvester-mccoy-v3;dbname=inf124-db-037', $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		?>