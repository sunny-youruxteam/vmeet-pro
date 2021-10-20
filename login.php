<?php include("header.php") ?>
	<div class="main_landing_page login_page">
		<div class="landing_page d-flex justify-content-between align-items-stretch">
			<div class="landing_left">
				<div class="sps_logo">
					<img src="img/spsLogo.svg" alt="">
				</div>
				<div class="messe_frankfurt">
					<img src="img/messe_frankfurt.png" alt="">
				</div>
			</div>
			<div class="landing_right">
				<div class="landing_login_details_box">
					<div class="landing_logo text-center">
						<img src="img/landing_logo.svg" alt="">
					</div>
					<div class="landing_text_box secound">
						<div class="login_title">
							<h3>Login</h3>
							<div class="secondary">
								<h4>for participants</h4>
							</div>
						</div>
						<div class="input_box passcode">
							<label>Passcode</label>
							<input type="text">
						</div>
						<div class="secondary">
							<p>By accessing the virtual booths I’m aware my information will be shared with the respective partner(s). ODSC and Partners may use my contact data 
							to keep me informed of products, services and offerings by email/phone.</p>
						</div>
						<div class="login_check_box">
							<div class="input_check_box">
				      			<input type="checkbox" id="Auto-Approve-1">
				      			<label for="Auto-Approve-1">I have read and accept the <a href="#.">Privacy Policy</a></label>
				      		</div>
				      		<div class="input_check_box">
				      			<input type="checkbox" id="Auto-Approve-2">
				      			<label for="Auto-Approve-2">I have read and accept the <a href="#."> Code of Conduct</a></label>
				      		</div>
						</div>
						<div class="login_page_btn">
							<a href="FlyIn-Video.php" class="blue_btn BtnWidth">Login</a>
						</div>				
						<div class="small_pera_login text-center">
							<p>Are you a exhibitor? To access exhibitor admin panel, <a href="#."> Go here.</a> </p>
						</div>
					</div>
				</div>
				<div class="login_power_box d-flex align-items-center justify-content-between">
					<div class="logo_power_inr_box d-flex justify-content-center align-items-center">
						<span>Powered by</span>
						<img src="img/vmeets-logo-power.png" alt="">
					</div>
					<p>©<?php echo date("Y"); ?> Vmeets™. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
<?php include("footer.php") ?>