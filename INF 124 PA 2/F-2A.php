<?php
try {
	require_once "pdo.php";
	$sql = "SELECT Designation, Name, Role, Manufacturer, Origin, Price, Crew, Length, Wingspan, Max_Speed, Paragraph_1, Paragraph_2, Armament, True_Price FROM `Planes` WHERE Designation = 'F-2A'";
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
		$True_Price = $row['True_Price'];
		
	} 
	} 
catch(PDOException $e) 
	{ 
	echo 'Connection failed: ' . $e->getMessage();
 	}
?>
<?php 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $Designation?> "<?php echo $Name?>"</title>

</head>
<style>
h1 {
	text-align: center;
	float: center;
	margin: 0;


}
.button {
	background-color: #008CBA;
    border: none;
    color: white;
    float: left;
    padding: 15px 32px;
    text-align: left;
    text-decoration: none;
    font-size: 17px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<body>
	<a href="NewFile1.php" class = "button">Back to Store</a></button>
	<h1 style="font-size:300%;text-align:center;"><?php echo $Designation?> "<?php echo $Name?>"</h1>
	<p style="font-size:200%;text-align:left;"> <img src="Pictures/F-2A.jpg" alt="F-2A" style="float:right;margin:0px 100px;width:615.2px;height:460.4px;">
	Name: <?php echo $Designation?> "<?php echo $Name?>"<br>
	Role: <?php echo $Role?><br>
	Manufacturer: <?php echo $Manufacturer?><br>
	National Origin: <?php echo $Origin?><br>
	Unit Cost: <?php echo $Price?><br>
	<br>
	<strong>General Characteristics</strong><br>
	Crew: <?php echo $Crew?><br>
	Length: <?php echo $Length?> meters<br>
	Wingspan: <?php echo $Wingspan?> meters<br>
	Maximum Speed: Mach <?php echo $Max_Speed?><br>
	<br>
	</p>
	
	<p style="font-size:150%;">
	<br>
	<?php echo $Paragraph_1?>   
	<br>
	<br>
	<?php echo $Paragraph_2?>
	<br>
	<br>
	Armament: <?php echo $Armament?>
	</p>
	
<!-- ORDER FORM SECTION  -->
	<br><br>
	<h1 align=center>Order Form</h1>
	<form action="order_c.php" method="post" onclick="return validation()">
	<!-- <input type="hidden" id="product" name = "product" value = "F-15"> -->
	<input type="hidden" id="product" name="item_name" value="<?php echo htmlspecialchars($Designation); ?>">
	<br>
	<input type="hidden" id="price" name="price" value="<?php echo htmlspecialchars($True_Price); ?>">
	<input type="hidden" id="mfgr" name="mfgr" value="<?php echo htmlspecialchars($Manufacturer); ?>">
	<br><br>
	<b>Number of Planes Order: </b>
	<input type="number" id="quantity" name = "quantity" onfocus="javascript:ajax_post()">
	<p style="color:red" id="alarmQuantity"></p>
	<br>
	<!-- FREQUENT BOURGHT TOGETHER SECTION -->
	<hr><h2 style="color:red">Frequently Bought Together</h2>
	<div id="SimilarItems"></div>
	<br><hr>
	<!-- END FREQUENTLY BOUGHT TOGETHER -->
	<b>First Name: </b>
	<input type="text" id="firstname" name = "fname">
	<p style="color:red" id="alarmFN"></p>
	<br>
	<b>Last Name: </b>
	<input type="text" id="lastname" name = "lname">
	<p style="color:red" id="alarmLN"></p>
	<br>
	<b>Email Address: </b>
	<input type="text" id="email" name = "email">
	<p style="color:red" id="alarmEM"></p>
	<br>
	<b>Phone Number (10 digit numbers only): </b>
	<input type='tel' id="phone" name = "phone">
	<p style="color:red" id="alarmPH"></p>
	<br>
	<b>SHIPPING INFORMATION</b>
	<br><br>
	<b>Address: </b>
	<input type='text' id="street" name = "address" size="50">
	<p style="color:red" id="alarmAD"></p>
	<br>
	<b>Zip Code (enter to lookup city and state)</b>
	<input type='text' id="zipcode" name = "zip" size = "5" onblur="javascript:ajax_city()">
	<p style="color:red" id="alarmZIP"></p>
	<br>
	<b>City: </b>
	<input type='text' id="city" name = "city" size = "50">
	<p style="color:red" id="alarmCT"></p>
	<br>
	<b>State: </b>
	<input type='text' id="state" name = "state" size = "20">
	<p style="color:red" id="alarmST"></p>
	<br>
	
	<b>Shipping Method: </b>
	<select id="shipping" name = "ship">
		<option value="Delivery (Assembled)">Delivery (Assembled)</option>
		<option value="Delivery (Economy)">Delivery (Economy)</option>
		<option value="Rebase (Concierge)">Rebase (Concierge)</option>
		<option value="Rebase (Personal)">Rebase (Personal)</option>
	</select>
	<br><br>
	<b>CREDIT CARD INFORMATION</b>
	<br><br>
	<b>Card Type</b>
	<select id="cardtype" name = "cardtype">
		<option value="Visa">VISA</option>
		<option value="MasterCard">MasterCard</option>
		<option value="Amex">American Express</option>
		<option value="Discover">Discover</option>
	</select>
	<br><br>
	
	<b>Card number (16 digits no spaces): </b>
	<input type='text' id='cardnumber' name = "card" size = "16">
	<p style="color:red" id="alarmCC"></p>
	<br>
	<input type="submit" value="Buy Now">
	<!-- <button type="submit" onclick="return validation()">Submit</button> -->
	<br>
	</form>
<script language="JavaScript" type="text/javascript">
function ajax_post(){
	// Create the XMLHttpRequest
	var hr = new XMLHttpRequest();
	// Setup the variables to send to the php
	var url = "find_my_planes.php";
	var mf = document.getElementById("mfgr").value;
	var vars = "maker="+mf;
	hr.open("POST", url, true); // true = async
	// Setup the header
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// Access the event for the XMLHttpRequest
	hr.onreadystatechange = function(){
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			document.getElementById("SimilarItems").innerHTML = return_data;
		}
	}
	// Send data to PHP
	hr.send(vars);
	document.getElementById("SimilarItems").innerHTML = "Searching for similar items...";
}
</script>

<script language="JavaScript" type="text/javascript">
function ajax_city(){
	/* if (document.getElementById("zipcode").value == "") {
		document.getElementById("city").value = "";
		document.getElementById("state").value = "";
	} */
	document.getElementById("city").value = "";
	document.getElementById("state").value = "";
	// Create the XMLHttpRequest
	var hr = new XMLHttpRequest();
	// Setup the variables to send to the php
	var url = "find_my_city.php";
	var zipcode = document.getElementById("zipcode").value;
	var vars = "zip="+zipcode;
	hr.open("POST", url, true); // initiate the php call async
	// Set up the header
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// Access the event for XMLHttpRequest
	hr.onreadystatechange = function(){
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText;
			var cityField = document.getElementById("city").value;
			var stateField = document.getElementById("state").value;
			if(return_data == "" && cityField == "" && zipcode != "") // if nothing coming back and no city entered
				document.getElementById("city").value = "Not Found"; // then let user know
			if(return_data == "" && stateField == "" && zipcode != "") // if nothing coming back and no state entered
				document.getElementById("state").value = "Not Found"; // then let user know
			if (return_data != ""){
				var split_data = return_data.split("/");
				if(document.getElementById("city").value == "")
					document.getElementById("city").value = split_data[0];
				if(document.getElementById("state").value == "")
					document.getElementById("state").value = split_data[1];
			}
		} // end if(hr.readyState)
	} // end function()
	// Send data to PHP
	hr.send(vars);
	if (document.getElementById("city").value == "")
		document.getElementById("city").innerHTML = "Looking up...";
	if (document.getElementById("state").value == "")
		document.getElementById("state").innerHTML = "Looking up...";
}
</script>


<script>
function validation(){
	var quantity, fname, lname, phone, text, goodphone, address, email, goodEmail,
	city, state, zip, goodzip, ship, cardtype, card, goodcard, subject, body;
	// Get the value of the input fields
	quantity = document.getElementById("quantity").value;
	fname = document.getElementById("firstname").value;
	lname = document.getElementById("lastname").value;
	phone = document.getElementById("phone").value;
	address = document.getElementById("street").value;
	city = document.getElementById("city").value;
	state = document.getElementById("state").value;
	zip = document.getElementById("zipcode").value;
	ship = document.getElementById("shipping").value;
	cardtype = document.getElementById("cardtype").value;
	card = document.getElementById("cardnumber").value;
	email = document.getElementById('email').value;
	goodPhone = phone.match(/^[0-9]{10}$/);
	goodzip = zip.match(/^[0-9]{5}$/);
	goodcard = card.match(/^[0-9]{16}$/);
	goodEmail = email.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/);
	
	if (quantity <= 0 || quantity == ""){ // Validating the Quantity field.
		document.getElementById("alarmQuantity").innerHTML = 'Please enter the quantity of the order';
		return false;}
	else {
		document.getElementById('alarmQuantity').innerHTML = '';}

	if (fname == ""){ // Validating the First Name field
		document.getElementById("alarmFN").innerHTML = 'Please enter a first name';
		return false;}
	else {
		document.getElementById('alarmFN').innerHTML = '';}

	if (lname == ""){ // Validating the Last Name field
		document.getElementById("alarmLN").innerHTML = 'Please enter a last name';
		return false;}
	else {
		document.getElementById('alarmLN').innerHTML = '';}

	if (email == "") { // Validating email address field for missing data
		document.getElementById('alarmEM').innerHTML = 'Please enter an email address';
		return false;}
	else if (email != "" && !goodEmail) { // Validating incorrect email format
		document.getElementById('alarmEM').innerHTML = 'Please use a correct email format (e.g., john.doe@chump.com)';
		return false;}
	else {
		document.getElementById('alarmEM').innerHTML = '';}

	if (phone == ""){ // Validating phone number field for missing data
		document.getElementById("alarmPH").innerHTML = 'Please enter a phone number';
		return false;}
	else if (phone != "" && phone.length != 10){ // Validating phone number length (US phone only)
		document.getElementById('alarmPH').innerHTML = 'Please use 10 digit number only';
		return false;}
	else if (phone != "" && !goodPhone){ // Validating numbers only
		document.getElementById('alarmPH').innerHTML = 'Invalid phone number. Please use 10 digit number only';
		return false;}
	else {
		document.getElementById('alarmPH').innerHTML = '';}

	if (address == ""){ // Validating address field
		document.getElementById("alarmAD").innerHTML = 'Please enter a shipping address';
		return false;}
	else {
		document.getElementById('alarmAD').innerHTML = '';}
	
	if (city == ""){ // Validating city field
		document.getElementById("alarmCT").innerHTML = 'Please enter a city';
		return false;}
	else {
		document.getElementById('alarmCT').innerHTML = '';}

	if (state == ""){ // Validating State field
		document.getElementById("alarmST").innerHTML = 'Please enter a state';
		return false;}
	else {
		document.getElementById('alarmST').innerHTML = '';}

	if (zip == ''){ // Validating missing zip code field
		document.getElementById('alarmZIP').innerHTML = 'Please enter a zip code';
		return false;}
	if (zip.length != 5 || !goodzip){ // Validating Zip Code field
		document.getElementById("alarmZIP").innerHTML = 'Invalid zip code. Please check and enter again';
		return false;}
	else {
		document.getElementById('alarmZIP').innerHTML = '';}

	if (card == ''){ // Validating missing credit card field
		document.getElementById('alarmCC').innerHTML = 'Please enter a credit card number';
		return false;}
	else if (card.length !=16 || !goodcard){ // Validating credit card number format
		document.getElementById("alarmCC").innerHTML = 'Invalid credit card number. Please check and enter again';
		return false;}
	else {
		document.getElementById('alarmCC').innerHTML = '';}

	return true;
}
</script>
</body>
</html>
<?php  
$conn = null;
?>
