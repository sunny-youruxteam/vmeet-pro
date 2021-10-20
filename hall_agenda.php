<?php include("header.php") ?>
<?php include("Header-Menu.php") ?>
<div class="body_section hall_agenda_main">
	<div class="inner_top_section Coman_top Coman_bottom">
		<div class="bg_fix_img maps_img">
			<img src="img/agenda_img_bg.jpg" alt="" />
			<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/C0DPdy98e4c?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
			<div class="hall_videos_box">
				<video width="100%" height="100%"  autoplay="" id="VideosHide">
					<source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type="video/mp4">
					<source src="http://clips.vorwaerts-gmbh.de/VfE.webm" type="video/webm">
					<source src="http://clips.vorwaerts-gmbh.de/VfE.ogv" type="video/ogg">
						<param name="movie" value="player.swf">
						<param name="flashvars" value="autostart=true&amp;controlbar=over&amp;image=poster.jpg&amp;file=http://clips.vorwaerts-gmbh.de/VfE_flash.mp4">
						<img src="poster.jpg" width="640" height="360" alt="Big Buck Bunny" title="No video playback capabilities, please download the video below">
				</video>
			</div>
		</div>
		<div class="halls_agenda">
			<a href="#." class="btn blue_btn white_btn" data-mdb-toggle="modal" data-mdb-target="#Agenda">
				Agenda
			</a>
		</div>
		<div class="side_notes_sectin">
			<ul class="tabs_box_side_notes">
				<li><a href="#tabs2">Q&A</a></li>
				<li><a href="#tabs1">Notes</a></li>
			</ul>	
			<div class="content_sectin_side_notes">
				<div class="content_sectin_side_notes_inr" id="tabs1" >
					<div class="side_notes_scroll scroll_bar_box">
						<div class="notes_box_info d-flex align-items-end">
							<div class="notes_bottom_align ">
								<div class="down_notes_box">
									<div class="down_notes_box_inr d-flex align-items-start justify-content-between pb-10">
										<p>Vivamus amet pellentesque vulputate faucibus.</p>
										<div class="chatdown_notes_dropdown">
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"> 
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M14 6C14 7.10457 13.1046 8 12 8C10.8954 8 10 7.10457 10 6C10 4.89543 10.8954 4 12 4C13.1046 4 14 4.89543 14 6ZM14 12.2857C14 13.3903 13.1046 14.2857 12 14.2857C10.8954 14.2857 10 13.3903 10 12.2857C10 11.1811 10.8954 10.2857 12 10.2857C13.1046 10.2857 14 11.1811 14 12.2857ZM12 20.5714C13.1046 20.5714 14 19.676 14 18.5714C14 17.4669 13.1046 16.5714 12 16.5714C10.8954 16.5714 10 17.4669 10 18.5714C10 19.676 10.8954 20.5714 12 20.5714Z" fill="#C4C4C4"></path>
													</svg>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    	<li><a class="dropdown-item" href="#">Report</a></li>
											    	<li><a class="dropdown-item" href="#">Block</a></li>
											    	<li><a class="dropdown-item" href="#"><span>Delete</span></a></li>
												</ul>
											</div>
										</div>
									</div>	
									<div class="down_time_box d-flex align-items-center pr-30 justify-content-between">
										<small>11:20 AM</small>
									</div>
								</div>
								<div class="down_notes_box">
									<div class="down_notes_box_inr d-flex align-items-start justify-content-between pb-10">
										<p>Consequat, cras id facilisi feugiat enim, ac eget sed.</p>
										<div class="chatdown_notes_dropdown">
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"> 
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M14 6C14 7.10457 13.1046 8 12 8C10.8954 8 10 7.10457 10 6C10 4.89543 10.8954 4 12 4C13.1046 4 14 4.89543 14 6ZM14 12.2857C14 13.3903 13.1046 14.2857 12 14.2857C10.8954 14.2857 10 13.3903 10 12.2857C10 11.1811 10.8954 10.2857 12 10.2857C13.1046 10.2857 14 11.1811 14 12.2857ZM12 20.5714C13.1046 20.5714 14 19.676 14 18.5714C14 17.4669 13.1046 16.5714 12 16.5714C10.8954 16.5714 10 17.4669 10 18.5714C10 19.676 10.8954 20.5714 12 20.5714Z" fill="#C4C4C4"></path>
													</svg>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    	<li><a class="dropdown-item" href="#">Report</a></li>
											    	<li><a class="dropdown-item" href="#">Block</a></li>
											    	<li><a class="dropdown-item" href="#"><span>Delete</span></a></li>
												</ul>
											</div>
										</div>
									</div>	
									<div class="down_time_box d-flex align-items-center pr-30 justify-content-between">
										<small>11:20 AM</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="typing_msg_field">
	                    <div class="input_box input_type_msg">
	                    	<input type="text" placeholder="Jot down your notes">
	                    </div>
						<div class="send_img">
							<a href="#.">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
									<path d="M7.29199 14.6758V18.5408C7.29199 18.8108 7.46532 19.0499 7.72199 19.1349C7.78616 19.1558 7.85199 19.1658 7.91699 19.1658C8.11199 19.1658 8.30032 19.0741 8.42032 18.9108L10.6811 15.8341L7.29199 14.6758Z" fill="#4DD4F1"></path>
									<path d="M19.7375 0.115907C19.5459 -0.0199262 19.2942 -0.0382595 19.0859 0.0709072L0.33587 9.86258C0.114204 9.97841 -0.0166296 10.2151 0.00170373 10.4642C0.0208704 10.7142 0.186704 10.9276 0.422537 11.0084L5.63504 12.7901L16.7359 3.29841L8.14587 13.6476L16.8817 16.6334C16.9467 16.6551 17.015 16.6667 17.0834 16.6667C17.1967 16.6667 17.3092 16.6359 17.4084 16.5759C17.5667 16.4792 17.6742 16.3167 17.7017 16.1342L19.9934 0.717574C20.0275 0.484241 19.9292 0.252574 19.7375 0.115907Z" fill="#4DD4F1"></path>
									</g>
									<defs>
									<clipPath id="clip0">
									<rect width="20" height="20" fill="white"></rect>
									</clipPath>
									</defs>
								</svg>
							</a>
						</div>
                  </div>
				</div>
				<div class="content_sectin_side_notes_inr" id="tabs2">
					<div class="side_notes_scroll scroll_bar_box">
						<div class="notes_box_info">
							<div class="notes_bottom_align d-flex align-items-end">
								<div class="down_notes_box">
									<div class="down_notes_box_inr d-flex align-items-start justify-content-between pb-10">
										<p>Mauris dolor morbi amet, fermentum id varius euismod.</p>
										<div class="chatdown_notes_dropdown">
											<div class="dropdown">
												<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false"> 
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd" d="M14 6C14 7.10457 13.1046 8 12 8C10.8954 8 10 7.10457 10 6C10 4.89543 10.8954 4 12 4C13.1046 4 14 4.89543 14 6ZM14 12.2857C14 13.3903 13.1046 14.2857 12 14.2857C10.8954 14.2857 10 13.3903 10 12.2857C10 11.1811 10.8954 10.2857 12 10.2857C13.1046 10.2857 14 11.1811 14 12.2857ZM12 20.5714C13.1046 20.5714 14 19.676 14 18.5714C14 17.4669 13.1046 16.5714 12 16.5714C10.8954 16.5714 10 17.4669 10 18.5714C10 19.676 10.8954 20.5714 12 20.5714Z" fill="#C4C4C4"></path>
													</svg>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											    	<li><a class="dropdown-item" href="#">Report</a></li>
											    	<li><a class="dropdown-item" href="#">Block</a></li>
											    	<li><a class="dropdown-item" href="#"><span>Delete</span></a></li>
												</ul>
											</div>
										</div>
									</div>	
									<div class="down_time_box d-flex align-items-center justify-content-between pr-30">
										<span>John Anderson</span>
										<small>11:20 AM</small>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="typing_msg_field">
	                    <div class="input_box input_type_msg">
	                    	<input type="text" placeholder="Your question here">
	                    </div>
						<div class="send_img">
							<a href="#.">
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
									<path d="M7.29199 14.6758V18.5408C7.29199 18.8108 7.46532 19.0499 7.72199 19.1349C7.78616 19.1558 7.85199 19.1658 7.91699 19.1658C8.11199 19.1658 8.30032 19.0741 8.42032 18.9108L10.6811 15.8341L7.29199 14.6758Z" fill="#4DD4F1"></path>
									<path d="M19.7375 0.115907C19.5459 -0.0199262 19.2942 -0.0382595 19.0859 0.0709072L0.33587 9.86258C0.114204 9.97841 -0.0166296 10.2151 0.00170373 10.4642C0.0208704 10.7142 0.186704 10.9276 0.422537 11.0084L5.63504 12.7901L16.7359 3.29841L8.14587 13.6476L16.8817 16.6334C16.9467 16.6551 17.015 16.6667 17.0834 16.6667C17.1967 16.6667 17.3092 16.6359 17.4084 16.5759C17.5667 16.4792 17.6742 16.3167 17.7017 16.1342L19.9934 0.717574C20.0275 0.484241 19.9292 0.252574 19.7375 0.115907Z" fill="#4DD4F1"></path>
									</g>
									<defs>
									<clipPath id="clip0">
									<rect width="20" height="20" fill="white"></rect>
									</clipPath>
									</defs>
								</svg>
							</a>
						</div>
                  </div>
				</div>
			</div>
			<a href="#." class="Close_side_penal">
				<svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12 1L1 12M1 1L12 12" stroke="#656185" stroke-width="2"/>
				</svg>
			</a>
		</div>
	</div>	

</div>



<div class="modal Menu_popup agenda_popup fade" id="Agenda" tabindex="-1" aria-labelledby="AgendaLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal_speakers_popup agenda_popup_box">
		<div class="modal-content">
			<div class="popup_header agenda_header">
				<div class="popup_head_inr d-flex align-items-center justify-content-between">
					<div class="title all_caps">
						Agenda
					</div>
					<div class="popup_right_head d-flex justify-content-end align-items-center">
						<div class="popup_filter_box">
							<a href="#." id="FilterOpen" class="btn_filter"> 
								<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M17 5L3 5" stroke="#BEC5D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M15 10H5" stroke="#BEC5D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M12 15L8 15" stroke="#BEC5D8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</a>
							<div class="filter_open_box">
								<div class="filter_top_bar d-flex align-items-center justify-content-between">
									<div class="all_caps pb-0">
										Filters
									</div>
									<small>Clear All</small>	
								</div>
								<div class="agenda-category-box">
									<div class="all_caps pb-10">
										Category A
									</div>
									<div class="content_filter_check_box">
										<div class="input_check_box">
							      			<input type="checkbox" id="agenda-Auto-Approve-1">
											<label for="agenda-Auto-Approve-1">Product A</label>
							      		</div>
							      		<div class="input_check_box">
							      			<input type="checkbox" id="agenda-Auto-Approve-2">
											<label for="agenda-Auto-Approve-2">Product B</label>
							      		</div>
									</div>
								</div>
								<div class="agenda-category-box">
									<div class="all_caps pb-10">
										Category B
									</div>
									<div class="content_filter_check_box">
										<div class="input_check_box">
							      			<input type="checkbox" id="agenda-Auto-Approve-1-B">
											<label for="agenda-Auto-Approve-1-B">Product A</label>
							      		</div>
							      		<div class="input_check_box">
							      			<input type="checkbox" id="agenda-Auto-Approve-2-B">
											<label for="agenda-Auto-Approve-2-B">Product B</label>
							      		</div>
									</div>
								</div>
								<div class="filter_close_box_btn d-flex justify-content-end align-items-center">
									<a href="#." class="blue_border_btn small_padding_btn_border border_none" id="Close_Filter">Cancel</a>
									<a href="#." class="blue_btn small_padding_btn">Apply</a>
								</div>
							</div>							
						</div>
						<div class="input_box select_box ml-10">
							<select>
								<option value="Conference Hall">Conference Hall</option>
								<option value="Exhibition Zone">Exhibition Zone</option>
								<option value="Meeting Zone">Meeting Zone</option>
								<option value="Speakers Zone">Speakers Zone</option>
								<option value="Boardroom Lounge">Boardroom Lounge</option>
							</select>
						</div>
						<a href="#." class="ml-20" data-mdb-dismiss="modal" aria-label="Close">
							<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
							</svg>
						</a>
					</div>
				</div>
				<div class="participants_tabs_box hall_agenda_tabs_box">
					<ul class="tabs_nav_box nav p-0 d-flex" id="ex1" role="tablist">
					    <li class="nav-item" role="presentation">
							<a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#day-1" role="tab" aria-controls="Suggested" aria-selected="true">
								Day 1
								<small>02/12/2020</small>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#day-2" role="tab" aria-controls="All" aria-selected="false">
								Day 2
								<small>03/12/2020</small>
							</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#day-3" role="tab" aria-controls="day-3" aria-selected="false">
								Day 3
								<small>04/12/2020</small>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="participants_content hall_agenda_table tab-content" id="ex1-content">
				
				<div class="tab-pane fade show active" id="day-1" role="tabpanel" aria-labelledby="ex1-tab-1">
					<div class="hall_agenda_table_otr">
						<div class="hall_agenda_table_inr scroll_bar_box">
							<div class="top_hall_agenda_title">
								<div class="table_col">Topic</div>
								<div class="table_col">Speakers</div>
								<div class="table_col">Venue</div>
								<div class="table_col">Time</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/test_img.jpg" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<div class="hall_agenda_btn_table">
											<a href="#." class="blue_border_btn">Watch Now</a>
											<a href="#." class="icon_btn_blur blue_btn">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M452,40h-24V0h-40v40H124V0H84v40H60C26.916,40,0,66.916,0,100v352c0,33.084,26.916,60,60,60h392    c33.084,0,60-26.916,60-60V100C512,66.916,485.084,40,452,40z M472,452c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20V188    h432V452z M472,148H40v-48c0-11.028,8.972-20,20-20h24v40h40V80h264v40h40V80h24c11.028,0,20,8.972,20,20V148z"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="396" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="396" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
												</svg>
											</a>
											<a href="#." class="icon_btn_blur blue_btn">
												<svg height="20px" viewBox="0 -10 511.98685 511" width="20px" xmlns="http://www.w3.org/2000/svg">
													<path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#000"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<span class="online_pofile_box active">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle opacity="0.2" cx="7" cy="7" r="7" fill="#51D73B"/>
												<circle cx="7" cy="7" r="3" fill="#37BC21"/>
											</svg>
										</span>
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<div class="hall_agenda_btn_table">
											<a href="#." class="blue_border_btn">Join Now</a>
											<a href="#." class="icon_btn_blur blue_btn">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M452,40h-24V0h-40v40H124V0H84v40H60C26.916,40,0,66.916,0,100v352c0,33.084,26.916,60,60,60h392    c33.084,0,60-26.916,60-60V100C512,66.916,485.084,40,452,40z M472,452c0,11.028-8.972,20-20,20H60c-11.028,0-20-8.972-20-20V188    h432V452z M472,148H40v-48c0-11.028,8.972-20,20-20h24v40h40V80h264v40h40V80h24c11.028,0,20,8.972,20,20V148z"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="396" y="230" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="76" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="156" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="236" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="316" y="390" width="40" height="40"/>
														</g>
													</g>
													<g>
														<g>
															<rect x="396" y="310" width="40" height="40"/>
														</g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													</svg>
											</a>
											<a href="#." class="icon_btn_blur blue_btn">
												<svg height="20px" viewBox="0 -10 511.98685 511" width="20px" xmlns="http://www.w3.org/2000/svg">
													<path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#000"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="day-2" role="tabpanel" aria-labelledby="ex1-tab-2">
					<div class="hall_agenda_table_otr">
						<div class="hall_agenda_table_inr scroll_bar_box">
							<div class="top_hall_agenda_title">
								<div class="table_col">Topic</div>
								<div class="table_col">Speakers</div>
								<div class="table_col">Venue</div>
								<div class="table_col">Time</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<span class="online_pofile_box active">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle opacity="0.2" cx="7" cy="7" r="7" fill="#51D73B"/>
												<circle cx="7" cy="7" r="3" fill="#37BC21"/>
											</svg>
										</span>
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_btn">Join</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="day-3" role="tabpanel" aria-labelledby="ex1-tab-3">
					<div class="hall_agenda_table_otr">
						<div class="hall_agenda_table_inr scroll_bar_box">
							<div class="top_hall_agenda_title">
								<div class="table_col">Topic</div>
								<div class="table_col">Speakers</div>
								<div class="table_col">Venue</div>
								<div class="table_col">Time</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<span class="online_pofile_box active">
											<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle opacity="0.2" cx="7" cy="7" r="7" fill="#51D73B"/>
												<circle cx="7" cy="7" r="3" fill="#37BC21"/>
											</svg>
										</span>
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_btn">Join</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="hall_agenda_table_content">
								<div class="hall_agenda_table_content_box">
									<div class="table_col hall_agenda_details_name">
										<h4>Turpis ut egestas</h4>
										<div class="text_boxturpis">
											<a href="#." class="open_accoudiuon">
												Keynote
												<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13 1L7 7L0.999999 1" stroke="#DB604B" stroke-width="1.5"/>
												</svg>
											</a>
										</div>
									</div>
									<div class="table_col speakers_pofile_box">
										<div class="speakers_box_info">
											<a href="#." class="speakers_box_info_col d-flex align-items-center ">
												<span><img src="img/speakers_pofile_box1.png" alt=""></span>
												<span><img src="img/speakers_pofile_box2.png" alt=""></span>
												<span><img src="img/speakers_pofile_box3.png" alt=""></span>
												<small>+1</small>
												<div class="speakers_open_pofile">
													<h4>SPEAKERS</h4>
													<div class="speakers_open_pofile_box d-flex flex-wrap justify-content-between">
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile1.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile2.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile3.png" alt="">
														</div>
														<div class="speakers_open_pofile_box_inr">
															<img src="img/speakers_open_pofile4.png" alt="">
														</div>
														<div class="open_speakers_pofile_list_details">
																<div class="list_pofile_box d-flex align-items-start">
																	<div class="list_pofile_img">
																		<img src="img/list_pofile_img1.png" alt="">
																	</div>
																	<div class="list_pofile_text">
																		<h4>Guy Hawkins</h4>
																		<small>Sr. Partner Systems,</small>
																		<small>Dell Systmes</small>
																	</div>
																	<div class="Close_pofile_details_open">
																		<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M11 1L1 11M1 1L11 11" stroke="#656185" stroke-width="1.5"/>
																		</svg>
																	</div>
																</div>
																<div class="more_speakers_img d-flex align-items-center flex-wrap">
																	<div class="more_speakers_title">
																		MORE SPEAKERS
																	</div>	
																	<span><img src="img/speakers_open_pofile3.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile4.png" alt=""></span>
																	<span><img src="img/speakers_open_pofile2.png" alt=""></span>
																</div>
															</div>
													</div>
												</div>
											</a>
										</div>
									</div>
									<div class="table_col conferene_zone_stage_box">
										<div class="stage_box d-flex align-items-center">
											<span class="mr-10">
												<img src="img/stage1.png" alt="">
											</span>
											Stage 1
										</div>
										<h4>Conference Hall</h4>
									</div>
									<div class="table_col time_box">
										<span>10:00 am  -  11:00am</span>
									</div>
									<div class="table_col join_btn">
										<a href="#." class="blue_border_btn">Watch Now</a>
									</div>
									<div class="hall_list_content">
										<ul>
											<li>The Compounded Disruption impacting all Industries, Business and Organizations</li>
											<li>The role of Artificial Intelligence and Data Science in navigating these disruptive timess</li>
											<li>The need of transformational paradigm shift to maximize value</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<?php include("bottom-fix-menu.php") ?>
<?php include("footer.php") ?>