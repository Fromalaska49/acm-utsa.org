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
					<div>
					</div>
					<div class="row" style="padding-top:100px;">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-7" style="font-size:24px;">
							We think it's awesome to have snacks at meetings. Random prizes, travel reimbursements, and other benefits provided for ACM members are all paid for by dues. We believe that it's important to give back to members, so we take every opportunity to make ACM awesome.
						</div>
						<div class="col-sm-1">
						</div>
						<div class="col-sm-3" style="padding-top:60px;text-align:center;">
							<input type="button" value="Pay Dues" id="fake-stripe-button" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
