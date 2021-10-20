<?php include("header.php") ?>
<?php include("Header-Menu.php") ?>
<div class="body_section">
	<div class="inner_top_section Coman_top">
		<div class="bg_fix_img maps_img">
			<img src="img/lobby_bg_img.jpg" alt="" />
		</div>
		<!-- <div class="main_notification_main_screen d-flex justify-content-end">
			<div class="notification_box_small">
				<div class="main_notification_box_inr">
					<h5>Broadcast Message</h5>
					<p>Session “Keynote” is going to start in 45mins.</p>
					<a href="#." class="main_notification_close">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
						</svg>
					</a>
					<div class="btn_box btn">
						<a href="#.">Confirm</a>
						<a href="#.">Cancel</a>
					</div>
				</div>
				<div class="main_notification_box_inr">
					<h5>Broadcast Message</h5>
					<p>Tincidunt iaculis vestibulum nullam bibendum ullamcorper pulvinar tincidunt eget. Porta ut id etiam facilisi enim, et, id.</p>
					<a href="#." class="main_notification_close">
						<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
						</svg>
					</a>
				</div>
			</div>
		</div> -->
		<!-- <div class="wrapper" style="background: #fff; padd">
			<div class="process_bar_box">
				<div class="process_inr_box">
					<h3>Great <small>3 Votes</small></h3>
					<div class="progress-bar">
						<div class="bar" data-size="60">
							<span class="perc"></span>
						</div>
					</div>
				</div>
				<div class="process_inr_box">
					<h3>Satisfactory <small>3 Votes</small></h3>
					<div class="progress-bar">
						<div class="bar" data-size="50">
							<span class="perc"></span>
						</div>
					</div>
				</div>
				<div class="process_inr_box">
					<h3>Poor <small>3 Votes</small></h3>
					<div class="progress-bar">
						<div class="bar" data-size="55">
							<span class="perc"></span>
						</div>
					</div>
				</div>
			</div>
		</div>	 -->
	</div>	

<?php include("bottom-fix-menu.php") ?>
</div>
<div class="lobby-width-popup-videos">
	<div class="videos_box" >
		<video width="640" height="360" controls="" autoplay="" id="VideosHide">
			<source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
			<source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
			<source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg">
				<param name="movie" value="player.swf">
				<param name="flashvars" value="autostart=true&amp;controlbar=over&amp;image=poster.jpg&amp;file=http://clips.vorwaerts-gmbh.de/VfE_flash.mp4">
				<img src="poster.jpg" width="640" height="360" alt="Big Buck Bunny" title="No video playback capabilities, please download the video below">
			
		</video>
		<div class="lobby_videos_btn">
			<a href="javascript:void(0)" id="Videos_hide" onclick="javascript:introJs().start();" class="blue_btn">Proceed to Lobby</a>
		</div>
	</div>
</div>
<?php include("footer.php") ?>