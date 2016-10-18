<?php
	require_once('./config.php');
	
	$token  = $_POST['stripeToken'];
	
	$customer = \Stripe\Customer::create(array(
		'email' => 'customer@example.com',
		'source' => $token
	));
	
	$charge = \Stripe\Charge::create(array(
		'customer' => $customer->id,
		'amount' => 1000,
		'currency' => 'usd'
	));
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>Pay Dues | Association for Computing Machinery UTSA</title>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- content here! -->
					Payment Successful
					<br />
					<br />
					Thank you!
				</div>
			</div>
		</div>
	</body>
</html>
