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
					<?php
						require_once('./config.php');
						$month = date('n', time());
						$year = date('Y', time());
						$current_semester;
						if($month < 6){
							$current_semester = 'Spring ' . $year;
						}
						else{
							$current_semester = 'Fall ' . $year;
						}
					?>
					<div id="stripe-button-container">
						<script type="text/javascript">
							$(document).ready(function(){
								$("#fake-stripe-button").on('click',function(){
									$(".stripe-button-el").click();
								});
							});
						</script>
						<br />
						<br />
						<input type="button" value="Pay Dues" id="fake-stripe-button" />
						
						<div style="display:none;">
							<form action="process_dues.php" method="post">
								<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
									data-key="<?php echo $stripe['publishable_key']; ?>"
									data-description="Dues for <?php echo($current_semester); ?>"
									data-amount="1000"
									data-locale="auto">
								</script>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
