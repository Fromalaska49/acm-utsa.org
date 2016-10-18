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
	
	echo('<h1>Successfully charged $10.00!</h1>');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			require('head-includes.php');
		?>
        <title>Pay Dues | Association for Computing Machinery UTSA</title>
	</head>
	<body>
		<?php
			require('menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- content here! -->
				</div>
			</div>
		</div>
	</body>
</html>
