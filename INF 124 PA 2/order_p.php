<?php
require_once "pdo.php";

if (isset($_POST['email']) &&
		isset($_POST['quantity']) &&
		isset($_POST['fname']) &&
		isset($_POST['lname']) &&
		isset($_POST['phone']) &&
		isset($_POST['address']) &&
		isset($_POST['city']) &&
		isset($_POST['state']) &&
		isset($_POST['zip']) &&
		isset($_POST['ship']) &&
		isset($_POST['cardtype']) &&
		isset($_POST['card']) &&
		isset($_POST['item_name']) &&
		isset($_POST['price']))
{
	$sql = "INSERT INTO `Order` VALUES (:email, :quantity, :fname, :lname, :phone, :address, :city, :state, :zip, :ship, :cardtype, :card, :item_name, :price)";
	$stmt = $conn->prepare($sql);
	$stmt->execute(array(
			':email'=>$_POST['email'],
			':quantity'=>$_POST['quantity'],
			':fname'=>$_POST['fname'],
			':lname'=>$_POST['lname'],
			':phone'=>$_POST['phone'],
			':address'=>$_POST['address'],
			':city'=>$_POST['city'],
			':state'=>$_POST['state'],
			':zip'=>$_POST['zip'],
			':ship'=>$_POST['ship'],
			':cardtype'=>$_POST['cardtype'],
			':card'=>$_POST['card'],
			':item_name'=>$_POST['item_name'],
			':price'=>($_POST['quantity'] * $_POST['price'])));
};
		?>

		
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Order Confirmed</title>
</head>
<style>
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
<h1 style="text-indent: 0.5em; text-align:center;">Project MOBIUS</h1>
<p>
<b style="font-size:200%;text-align:center;">Order Details:</b>
<br>
<br>
Thank you, <?php echo $_POST['fname']?> <?php echo $_POST['lname']?>
<p>(x<?php echo $_POST['quantity']?>) <?php echo $_POST['item_name']?></p> 
<p>Your total is <?php echo ($_POST['quantity'] * $_POST['price'])?>.
<br>
Your order will be delivered to <?php echo htmlspecialchars($_POST['address']); ?> in <?php echo htmlspecialchars($_POST['city']); ?>, <?php echo htmlspecialchars($_POST['state']); ?>.
<br>
Shipping Method: <?php echo htmlspecialchars($_POST['ship']); ?>
<br>
<br>
Thank you for shopping at Project MOBIUS. A sales representative will contact you shortly with delivery details.
<br>
<br>

<i style="font-size: 150%>">"Aces even challenge the true sky."</i>
<br>
<br>
<a href="NewFile1.php" class = "button">Back to Store</a></button>
<?php
$conn = null;
?>
		
		
		
