<?php include("header.php") ?>
<?php include("Header-Menu.php") ?>
	<div class="body_section">
		<div class="bg_fix_img maps_img">
			<img src="img/lobby_bg_img.jpg" alt="" />
		</div>
		<?php include("bottom-fix-menu.php") ?>
	</div>
	<div class="lobby-width-popup-videos">
		<div class="videos_box" id="VideosHide">
			<video width="640" height="360" controls="" autoplay="">
				<source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
				<source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
				<source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg">
					<param name="movie" value="player.swf">
					<param name="flashvars" value="autostart=true&amp;controlbar=over&amp;image=poster.jpg&amp;file=http://clips.vorwaerts-gmbh.de/VfE_flash.mp4">
					<img src="poster.jpg" width="640" height="360" alt="Big Buck Bunny" title="No video playback capabilities, please download the video below">
				</object>
			</video>
			<div class="lobby_videos_btn">
				<a href="lobby.php" onclick="javascript:introJs().start();"  class="blue_btn" >Proceed to Lobby</a>
			</div>
		</div>
	</div>
<?php include("footer.php") ?>