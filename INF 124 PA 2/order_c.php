<?php
require_once "pdo.php";
		?>

		
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Order Confirmation</title>
</head>
<h1 style="text-indent: 0.5em; text-align:center;">Project MOBIUS</h1>
<p>
<b style="font-size:200%;text-align:center;">Order Details:</b>
<br>
<form action="order_p.php" method="post">
<input type="hidden" id="product" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
<input type="hidden" id="product" name="quantity" value="<?php echo htmlspecialchars($_POST['quantity']); ?>">
<input type="hidden" id="product" name="fname" value="<?php echo htmlspecialchars($_POST['fname']); ?>">
<input type="hidden" id="product" name="lname" value="<?php echo htmlspecialchars($_POST['lname']); ?>">
<input type="hidden" id="product" name="phone" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
<input type="hidden" id="product" name="address" value="<?php echo htmlspecialchars($_POST['address']); ?>">
<input type="hidden" id="product" name="city" value="<?php echo htmlspecialchars($_POST['city']); ?>">
<input type="hidden" id="product" name="state" value="<?php echo htmlspecialchars($_POST['state']); ?>">
<input type="hidden" id="product" name="zip" value="<?php echo htmlspecialchars($_POST['zip']); ?>">
<input type="hidden" id="product" name="ship" value="<?php echo htmlspecialchars($_POST['ship']); ?>">
<input type="hidden" id="product" name="cardtype" value="<?php echo htmlspecialchars($_POST['cardtype']); ?>">
<input type="hidden" id="product" name="card" value="<?php echo htmlspecialchars($_POST['card']); ?>">
<input type="hidden" id="product" name="item_name" value="<?php echo htmlspecialchars($_POST['item_name']); ?>">
<input type="hidden" id="product" name="price" value="<?php echo htmlspecialchars($_POST['price']); ?>">
Thank you, <?php echo htmlspecialchars($_POST['fname']); ?> <?php echo htmlspecialchars($_POST['lname']); ?>
<p>You have ordered (x<?php echo htmlspecialchars($_POST['quantity']); ?>) <?php echo htmlspecialchars($_POST['item_name']); ?></p> 
Your total is <?php echo (htmlspecialchars($_POST['quantity']) * htmlspecialchars($_POST['price']))?>.
<br>
Your order will be delivered to <?php echo htmlspecialchars($_POST['address']); ?> in <?php echo htmlspecialchars($_POST['city']); ?>, <?php echo htmlspecialchars($_POST['state']); ?>.
<br>
Shipping Method: <?php echo htmlspecialchars($_POST['ship']); ?>*
<br>
<br>
Do you wish to proceed?
<br>
<br>
<input type="submit" value="Confirm Order">
<br>
<br>
*Should the given delivery address be deemed unsuitable for the chosen delivery method, Mobius 1 himself will land the plane(s) at the given address. Please note that Project MOBIUS is not liable for any damages that may occur from landing jet aircraft at the given address nor is Project MOBIUS responsible if the customer is unable to take off from the given address. For guaranteed customer satisfaction, choose a delivery address with a wide open space such as an airport or your neighbor's backyard.
<?php
$conn = null;
?>
		
		
		
