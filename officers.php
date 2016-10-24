<!DOCTYPE html>
<html>
	<head>
		<?php
			require('common/head-includes.php');
		?>
        <title>
        	Officers | Association for Computing Machinery UTSA
        </title>
        <style type="text/css">
        	.officer-card {
        		width: 200px;
        		height: 270px;
        		/*box-shadow: 0px 1px 15px -7px;*/
        		border-radius: 5px;
        		display: inline-block;
        		margin: 25px 25px 50px 25px;
        		text-align: center;
        	}
        	.officer-card-photo-container {
        		width: 200px;
        		height: 200px;
        		overflow: hidden;
        	}
        	.officer-card-photo {
        		width: 200px;
        		height: 200px;
        		border-radius: 1000px;
        	}
        	.officer-card-name {
        		padding: 0px;
        		margin: 5px;
        	}
        	.officer-card-title {
        		padding: 0px;
        		margin: 15px;
        	}
        	.officer-card-email {
        		padding: 0px;
        		margin: 5px;
        	}
        	#officer-cards-container {
        		text-align: center;
        	}
        </style>
	</head>
	<body>
		<?php
			require('common/menu.php');
		?>
		<div id="content" class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- content here! -->
					<div id="officer-cards-container">
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								President
							</h3>
							<h4 class="officer-card-name">
								Shane Becker
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									utsa.acm@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Vice President
							</h3>
							<h4 class="officer-card-name">
								Nishant Grover
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Secretary
							</h3>
							<h4 class="officer-card-name">
								Andrew Hutton
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Treasurer
							</h3>
							<h4 class="officer-card-name">
								Jason Blig
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/bennett.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Public Relations Chair
							</h3>
							<h4 class="officer-card-name">
								Andrew Bennett
							</h3>
							<a href="mailto:abennett0322@gmail.com">
								<p class="officer-card-email">
									abennett0322@gmail.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Social Events Chair
							</h3>
							<h4 class="officer-card-name">
								Diego Romero
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Media Chair
							</h3>
							<h4 class="officer-card-name">
								Andrew Sanetra
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Projects Chair
							</h3>
							<h4 class="officer-card-name">
								Chris Doege
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<!-- <div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div>
						<div class="officer-card">
							<div class="officer-card-photo-container">
								<img src="images/officer_photos/default-pimg.jpg" class="officer-card-photo" />
							</div>
							<h3 class="officer-card-title">
								Officer
							</h3>
							<h4 class="officer-card-name">
								First Last
							</h3>
							<a href="mailto:utsa.acm@gmail.com">
								<p class="officer-card-email">
									user@example.com
								</p>
							</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<?php
			require('common/footer.php');
		?>
	</body>
</html>
