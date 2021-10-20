<?php include("header.php") ?>
<?php include("Header-Menu.php") ?>

<div class="my_account">
	<div class="my_acount_banner">
		<div class="wrapper account_wrapper">
			<h2>My Account</h2>
			<div class="participants_tabs_box account_tabs_box hall_agenda_tabs_box">
				<ul class="tabs_nav_box nav p-0 d-flex" id="ex1" role="tablist">
				    <li class="nav-item" role="presentation">
						<a class="nav-link active" id="Basic1" data-mdb-toggle="tab" href="#Basic" role="tab" aria-controls="Basic1" aria-selected="true">
							Basic Information
						</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="Basic2" data-mdb-toggle="tab" href="#Match" role="tab" aria-controls="Basic2" aria-selected="false">
							Match Making
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="my_account_content tab-content" id="ex1-content">
		<div class="tab-pane fade show active" id="Basic" role="tabpanel" aria-labelledby="Basic1">
			<div class="account_form_box">
				<div class="row">
					<div class="my_account_pofile col-12">
						<div class="my_account_pofile_img pofile_upload_box">
							<div class="fav_icon_upload_preview_box">
								<div class="fav_icon_upload_preview_img" id="fav_icon_upload_image_preview" style="background:url(img/account_pofile_img.png)no-repeat center;">
								</div>
								<span class="fav_icon_upload_text">
									<input type="file" id="fav_icon_image_upload" accept=".png, .jpg, .jpeg"> 
									<strong>
										<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M18.3515 1.41888C17.1532 0.220642 15.2106 0.220642 14.0123 1.41888L1.8483 13.5829C1.76494 13.6663 1.70474 13.7696 1.67332 13.8831L0.0737083 19.658C0.00792354 19.8948 0.0747736 20.1484 0.248424 20.3223C0.422341 20.4959 0.675892 20.5628 0.912663 20.4973L6.6876 18.8974C6.80106 18.866 6.9044 18.8058 6.98776 18.7224L19.1515 6.55808C20.3479 5.35904 20.3479 3.41799 19.1515 2.21895L18.3515 1.41888ZM3.33391 14.0261L13.2892 4.07051L16.4999 7.28118L6.54432 17.2368L3.33391 14.0261ZM2.69258 15.313L5.25765 17.8784L1.70954 18.8614L2.69258 15.313ZM18.1874 5.59395L17.4643 6.31705L14.2534 3.10612L14.9767 2.38302C15.6423 1.71744 16.7215 1.71744 17.3871 2.38302L18.1874 3.18309C18.8519 3.84946 18.8519 4.92785 18.1874 5.59395V5.59395Z" fill="white">
											</path>
										</svg>
									</strong>
								</span>
							</div>
						</div>
			      	</div>
					<div class="col-12 input_box">
						<label>Full Name</label>
						<input type="text">
					</div>
					<div class="col-12 input_box">
						<label>Email</label>
						<input type="email">
					</div>
					<div class="input_box input_phone_number col-12">
			      		<label for="">Phone Number</label>
			      		<div class="input_phone_number_country  d-flex justify-content-start flex-wrap align-items-center">
						  	<select class="input-block-level" id="countrycode" name="countryCode">
								<option data-countryCode="AF" value="93">&#x1F1E6&#x1F1EB Afghanistan (+93)</option>
								<option data-countryCode="AL" value="355">&#x1F1E6&#x1F1FD Albania (+355)</option>
								<option data-countryCode="DZ" value="213">&#x1F1E9&#x1F1FF Algeria (+213)</option>
								<option data-countryCode="AD" value="376">&#x1F1E6&#x1F1E9 Andorra (+376)</option>
								<option data-countryCode="AO" value="244">&#x1F1E6&#x1F1F4 Angola (+244)</option>
								<option data-countryCode="AI" value="1264">&#x1F1E6&#x1F1EE Anguilla (+1264)</option>
								<option data-countryCode="AG" value="1268">&#x1F1E6&#x1F1EC Antigua &amp; Barbuda (+1268)</option>
								<option data-countryCode="AR" value="54">&#x1F1E6&#x1F1F7 Argentina (+54)</option>
								<option data-countryCode="AM" value="374">&#x1F1E6&#x1F1F2 Armenia (+374)</option>
								<option data-countryCode="AW" value="297">&#x1F1E6&#x1F1FC Aruba (+297)</option>
								<option data-countryCode="AC" value="247">&#x1F1E6&#x1F1E8 Ascension Island (+247)</option>
								<option data-countryCode="AU" value="61">&#x1F1E6&#x1F1FA Australia (+61)</option>
								<option data-countryCode="AT" value="43">&#x1F1E6&#x1F1F9 Austria (+43)</option>
								<option data-countryCode="AZ" value="994">&#x1F1E6&#x1F1FF Azerbaijan (+994)</option>
								<option data-countryCode="BS" value="1242">&#x1F1E7&#x1F1F8 Bahamas (+1242)</option>
								<option data-countryCode="BH" value="973">&#x1F1E7&#x1F1ED Bahrain (+973)</option>
								<option data-countryCode="BD" value="880">&#x1F1E7&#x1F1E9 Bangladesh (+880)</option>
								<option data-countryCode="BB" value="1246">&#x1F1E7&#x1F1E7 Barbados (+1246)</option>
								<option data-countryCode="BY" value="375">&#x1F1E7&#x1F1FE Belarus (+375)</option>
								<option data-countryCode="BE" value="32">&#x1F1E7&#x1F1EA Belgium (+32)</option>
								<option data-countryCode="BZ" value="501">&#x1F1E7&#x1F1FF Belize (+501)</option>
								<option data-countryCode="BJ" value="229">&#x1F1E7&#x1F1EF Benin (+229)</option>
								<option data-countryCode="BM" value="1441">&#x1F1E7&#x1F1F2 Bermuda (+1441)</option>
								<option data-countryCode="BT" value="975">&#x1F1E7&#x1F1F9 Bhutan (+975)</option>
								<option data-countryCode="BO" value="591">&#x1F1E7&#x1F1F4 Bolivia (+591)</option>
								<option data-countryCode="BQ" value="599">&#x1F1E7&#x1F1F6 Bonaire, Saba and Sint Eustatius (+599)</option>
								<option data-countryCode="BA" value="387">&#x1F1E7&#x1F1E6 Bosnia Herzegovina (+387)</option>
								<option data-countryCode="BW" value="267">&#x1F1E7&#x1F1FC Botswana (+267)</option>
								<option data-countryCode="BR" value="55">&#x1F1E7&#x1F1F7 Brazil (+55)</option>
								<option data-countryCode="IO" value="246">&#x1F1EE&#x1F1F4 British Indian Ocean Territory (+246)</option>
								<option data-countryCode="BN" value="673">&#x1F1E7&#x1F1F3 Brunei (+673)</option>
								<option data-countryCode="BG" value="359">&#x1F1E7&#x1F1EC Bulgaria (+359)</option>
								<option data-countryCode="BF" value="226">&#x1F1E7&#x1F1EB Burkina Faso (+226)</option>
								<option data-countryCode="BI" value="257">&#x1F1E7&#x1F1EE Burundi (+257)</option>
								<option data-countryCode="KH" value="855">&#x1F1F0&#x1F1ED Cambodia (+855)</option>
								<option data-countryCode="CM" value="237">&#x1F1E8&#x1F1F2 Cameroon (+237)</option>
								<option data-countryCode="CA" value="1">&#x1F1E8&#x1F1E6 Canada (+1)</option>
								<option data-countryCode="CV" value="238">&#x1F1E8&#x1F1FB Cape Verde Islands (+238)</option>
								<option data-countryCode="KY" value="1345">&#x1F1F0&#x1F1FE Cayman Islands (+1345)</option>
								<option data-countryCode="CF" value="236">&#x1F1E8&#x1F1EB Central African Republic (+236)</option>
								<option data-countryCode="TD" value="235">&#x1F1F9&#x1F1E9 Chad (+235)</option>
								<option data-countryCode="CL" value="56">&#x1F1E8&#x1F1F1 Chile (+56)</option>
								<option data-countryCode="CN" value="86">&#x1F1E8&#x1F1F3 China (+86)</option>
								<option data-countryCode="CO" value="57">&#x1F1E8&#x1F1F4 Colombia (+57)</option>
								<option data-countryCode="KM" value="269">&#x1F1F0&#x1F1F2 Comoros (+269)</option>
								<option data-countryCode="CG" value="242">&#x1F1E8&#x1F1EC Congo (+242)</option>
								<option data-countryCode="CD" value="243">&#x1F1E8&#x1F1E9 Congo, Democratic Republic of the (+243)</option>
								<option data-countryCode="CK" value="682">&#x1F1E8&#x1F1F0 Cook Islands (+682)</option>
								<option data-countryCode="CR" value="506">&#x1F1E8&#x1F1F7 Costa Rica (+506)</option>
								<option data-countryCode="HR" value="385">&#x1F1ED&#x1F1F7 Croatia (+385)</option>
								<option data-countryCode="CU" value="53">&#x1F1E8&#x1F1FA Cuba (+53)</option>
								<option data-countryCode="CW" value="5999">&#x1F1E8&#x1F1FC Curaçao (+5999)</option>
								<option data-countryCode="CY" value="357">&#x1F1E8&#x1F1FE Cyprus (+357)</option>
								<option data-countryCode="CZ" value="420">&#x1F1E8&#x1F1FF Czech Republic (+420)</option>
								<option data-countryCode="DK" value="45">&#x1F1E9&#x1F1F0 Denmark (+45)</option>
								<option data-countryCode="DJ" value="253">&#x1F1E9&#x1F1EF Djibouti (+253)</option>
								<option data-countryCode="DM" value="1767">&#x1F1E9&#x1F1F2 Dominica (+1767)</option>
								<option data-countryCode="DO" value="1809">&#x1F1E9&#x1F1F4 Dominican Republic (+1809)</option>
								<option data-countryCode="TL" value="670">&#x1F1F9&#x1F1F1 East Timor (+670)</option>
								<option data-countryCode="EC" value="593">&#x1F1EA&#x1F1E8 Ecuador (+593)</option>
								<option data-countryCode="EG" value="20">&#x1F1EA&#x1F1EC Egypt (+20)</option>
								<option data-countryCode="SV" value="503">&#x1F1F8&#x1F1FB El Salvador (+503)</option>
								<option data-countryCode="GQ" value="240">&#x1F1EC&#x1F1F6 Equatorial Guinea (+240)</option>
								<option data-countryCode="ER" value="291">&#x1F1EA&#x1F1F7 Eritrea (+291)</option>
								<option data-countryCode="EE" value="372">&#x1F1EA&#x1F1EA Estonia (+372)</option>
								<option data-countryCode="SZ" value="268">&#x1F1F8&#x1F1FF Eswatini (+268)</option>
								<option data-countryCode="ET" value="251">&#x1F1EA&#x1F1F9 Ethiopia (+251)</option>
								<option data-countryCode="FK" value="500">&#x1F1EB&#x1F1F0 Falkland Islands (+500)</option>
								<option data-countryCode="FO" value="298">&#x1F1EB&#x1F1F4 Faroe Islands (+298)</option>
								<option data-countryCode="FJ" value="679">&#x1F1EB&#x1F1EF Fiji (+679)</option>
								<option data-countryCode="FI" value="358">&#x1F1EB&#x1F1EE Finland (+358)</option>
								<option data-countryCode="FR" value="33">&#x1F1EB&#x1F1F7 France (+33)</option>
								<option data-countryCode="GF" value="594">&#x1F1EC&#x1F1EB French Guiana (+594)</option>
								<option data-countryCode="PF" value="689">&#x1F1F5&#x1F1EB French Polynesia (+689)</option>
								<option data-countryCode="GA" value="241">&#x1F1EC&#x1F1E6 Gabon (+241)</option>
								<option data-countryCode="GM" value="220">&#x1F1EC&#x1F1F2 Gambia (+220)</option>
								<option data-countryCode="GE" value="995">&#x1F1EC&#x1F1EA Georgia (+995)</option>
								<option data-countryCode="DE" value="49">&#x1F1E9&#x1F1EA Germany (+49)</option>
								<option data-countryCode="GH" value="233">&#x1F1EC&#x1F1ED Ghana (+233)</option>
								<option data-countryCode="GI" value="350">&#x1F1EC&#x1F1EE Gibraltar (+350)</option>
								<option data-countryCode="GR" value="30">&#x1F1EC&#x1F1F7 Greece (+30)</option>
								<option data-countryCode="GL" value="299">&#x1F1EC&#x1F1F1 Greenland (+299)</option>
								<option data-countryCode="GD" value="1473">&#x1F1EC&#x1F1E9 Grenada (+1473)</option>
								<option data-countryCode="GP" value="590">&#x1F1EC&#x1F1F5 Guadeloupe (+590)</option>
								<option data-countryCode="GU" value="1671">&#x1F1EC&#x1F1FA Guam (+1671)</option>
								<option data-countryCode="GT" value="502">&#x1F1EC&#x1F1F9 Guatemala (+502)</option>
								<option data-countryCode="GN" value="224">&#x1F1EC&#x1F1F3 Guinea (+224)</option>
								<option data-countryCode="GW" value="245">&#x1F1EC&#x1F1FC Guinea - Bissau (+245)</option>
								<option data-countryCode="GY" value="592">&#x1F1EC&#x1F1FE Guyana (+592)</option>
								<option data-countryCode="HT" value="509">&#x1F1ED&#x1F1F9 Haiti (+509)</option>
								<option data-countryCode="HN" value="504">&#x1F1ED&#x1F1F3 Honduras (+504)</option>
								<option data-countryCode="HK" value="852">&#x1F1ED&#x1F1F0 Hong Kong (+852)</option>
								<option data-countryCode="HU" value="36">&#x1F1ED&#x1F1FA Hungary (+36)</option>
								<option data-countryCode="IS" value="354">&#x1F1EE&#x1F1F8 Iceland (+354)</option>
								<option data-countryCode="IN" value="91">&#x1F1EE&#x1F1F3 India (+91)</option>
								<option data-countryCode="ID" value="62">&#x1F1EE&#x1F1E9 Indonesia (+62)</option>
								<option data-countryCode="IR" value="98">&#x1F1EE&#x1F1F7 Iran (+98)</option>
								<option data-countryCode="IQ" value="964">&#x1F1EE&#x1F1F6 Iraq (+964)</option>
								<option data-countryCode="IE" value="353">&#x1F1EE&#x1F1EA Ireland (+353)</option>
								<option data-countryCode="IL" value="972">&#x1F1EE&#x1F1F1 Israel (+972)</option>
								<option data-countryCode="IT" value="39">&#x1F1EE&#x1F1F9 Italy (+39)</option>
								<option data-countryCode="CI" value="225">&#x1F1E8&#x1F1EE Ivory Coast (+225)</option>
								<option data-countryCode="JM" value="1876">&#x1F1EF&#x1F1F2 Jamaica (+1876)</option>
								<option data-countryCode="JP" value="81">&#x1F1EF&#x1F1F5 Japan (+81)</option>
								<option data-countryCode="JO" value="962">&#x1F1EF&#x1F1F4 Jordan (+962)</option>
								<option data-countryCode="KZ" value="7">&#x1F1F0&#x1F1FF Kazakhstan (+7)</option>
								<option data-countryCode="KE" value="254">&#x1F1F0&#x1F1EA Kenya (+254)</option>
								<option data-countryCode="KI" value="686">&#x1F1F0&#x1F1EE Kiribati (+686)</option>
								<option data-countryCode="KP" value="850">&#x1F1F0&#x1F1F5 Korea, North (+850)</option>
								<option data-countryCode="KR" value="82">&#x1F1F0&#x1F1F7 Korea, South (+82)</option>
								<option data-countryCode="XK" value="383">&#x1F1FD&#x1F1F0 Kosovo (+383)</option>
								<option data-countryCode="KW" value="965">&#x1F1F0&#x1F1FC Kuwait (+965)</option>
								<option data-countryCode="KG" value="996">&#x1F1F0&#x1F1EC Kyrgyzstan (+996)</option>
								<option data-countryCode="LA" value="856">&#x1F1F1&#x1F1E6 Laos (+856)</option>
								<option data-countryCode="LV" value="371">&#x1F1F1&#x1F1FB Latvia (+371)</option>
								<option data-countryCode="LB" value="961">&#x1F1F1&#x1F1E7 Lebanon (+961)</option>
								<option data-countryCode="LS" value="266">&#x1F1F1&#x1F1F8 Lesotho (+266)</option>
								<option data-countryCode="LR" value="231">&#x1F1F1&#x1F1F7 Liberia (+231)</option>
								<option data-countryCode="LY" value="218">&#x1F1F1&#x1F1FE Libya (+218)</option>
								<option data-countryCode="LI" value="423">&#x1F1F1&#x1F1EE Liechtenstein (+423)</option>
								<option data-countryCode="LT" value="370">&#x1F1F1&#x1F1F9 Lithuania (+370)</option>
								<option data-countryCode="LU" value="352">&#x1F1F1&#x1F1FA Luxembourg (+352)</option>
								<option data-countryCode="MO" value="853">&#x1F1F2&#x1F1F4 Macao (+853)</option>
								<option data-countryCode="MK" value="389">&#x1F1F2&#x1F1F0 Macedonia (+389)</option>
								<option data-countryCode="MG" value="261">&#x1F1F2&#x1F1EC Madagascar (+261)</option>
								<option data-countryCode="MW" value="265">&#x1F1F2&#x1F1FC Malawi (+265)</option>
								<option data-countryCode="MY" value="60">&#x1F1F2&#x1F1FE Malaysia (+60)</option>
								<option data-countryCode="MV" value="960">&#x1F1F2&#x1F1FB Maldives (+960)</option>
								<option data-countryCode="ML" value="223">&#x1F1F2&#x1F1F1 Mali (+223)</option>
								<option data-countryCode="MT" value="356">&#x1F1F2&#x1F1F9 Malta (+356)</option>
								<option data-countryCode="MH" value="692">&#x1F1F2&#x1F1ED Marshall Islands (+692)</option>
								<option data-countryCode="MQ" value="596">&#x1F1F2&#x1F1F6 Martinique (+596)</option>
								<option data-countryCode="MR" value="222">&#x1F1F2&#x1F1F7 Mauritania (+222)</option>
								<option data-countryCode="MU" value="230">&#x1F1F2&#x1F1FA Mauritius (+230)</option>
								<option data-countryCode="YT" value="262">&#x1F1FE&#x1F1F9 Mayotte (+262)</option>
								<option data-countryCode="MX" value="52">&#x1F1F2&#x1F1FD Mexico (+52)</option>
								<option data-countryCode="FM" value="691">&#x1F1EB&#x1F1F2 Micronesia (+691)</option>
								<option data-countryCode="MD" value="373">&#x1F1F2&#x1F1E9 Moldova (+373)</option>
								<option data-countryCode="MC" value="377">&#x1F1F2&#x1F1E8 Monaco (+377)</option>
								<option data-countryCode="MN" value="976">&#x1F1F2&#x1F1F3 Mongolia (+976)</option>
								<option data-countryCode="ME" value="382">&#x1F1F2&#x1F1EA Montenegro (+382)</option>
								<option data-countryCode="MS" value="1664">&#x1F1F2&#x1F1F8 Montserrat (+1664)</option>
								<option data-countryCode="MA" value="212">&#x1F1F2&#x1F1E6 Morocco (+212)</option>
								<option data-countryCode="MZ" value="258">&#x1F1F2&#x1F1FF Mozambique (+258)</option>
								<option data-countryCode="MN" value="95">&#x1F1F2&#x1F1F2 Myanmar (+95)</option>
								<option data-countryCode="NA" value="264">&#x1F1F3&#x1F1E6 Namibia (+264)</option>
								<option data-countryCode="NR" value="674">&#x1F1F3&#x1F1F7 Nauru (+674)</option>
								<option data-countryCode="NP" value="977">&#x1F1F3&#x1F1F5 Nepal (+977)</option>
								<option data-countryCode="NL" value="31">&#x1F1F3&#x1F1F1 Netherlands (+31)</option>
								<option data-countryCode="NC" value="687">&#x1F1F3&#x1F1E8 New Caledonia (+687)</option>
								<option data-countryCode="NZ" value="64">&#x1F1F3&#x1F1FF New Zealand (+64)</option>
								<option data-countryCode="NI" value="505">&#x1F1F3&#x1F1EE Nicaragua (+505)</option>
								<option data-countryCode="NE" value="227">&#x1F1F3&#x1F1EA Niger (+227)</option>
								<option data-countryCode="NG" value="234">&#x1F1F3&#x1F1EC Nigeria (+234)</option>
								<option data-countryCode="NU" value="683">&#x1F1F3&#x1F1FA Niue (+683)</option>
								<option data-countryCode="NF" value="672">&#x1F1F3&#x1F1EB Norfolk Islands (+672)</option>
								<option data-countryCode="NP" value="1670">&#x1F1F2&#x1F1F5 Northern Mariana Islands (+1670)</option>
								<option data-countryCode="NO" value="47">&#x1F1F3&#x1F1F4 Norway (+47)</option>
								<option data-countryCode="OM" value="968">&#x1F1F4&#x1F1F2 Oman (+968)</option>
								<option data-countryCode="PK" value="92">&#x1F1F5&#x1F1F0 Pakistan (+92)</option>
								<option data-countryCode="PW" value="680">&#x1F1F5&#x1F1FC Palau (+680)</option>
								<option data-countryCode="PS" value="970">&#x1F1F5&#x1F1F8 Palestine (+970)</option>
								<option data-countryCode="PA" value="507">&#x1F1F5&#x1F1E6 Panama (+507)</option>
								<option data-countryCode="PG" value="675">&#x1F1F5&#x1F1EC Papua New Guinea (+675)</option>
								<option data-countryCode="PY" value="595">&#x1F1F5&#x1F1FE Paraguay (+595)</option>
								<option data-countryCode="PE" value="51">&#x1F1F5&#x1F1EA Peru (+51)</option>
								<option data-countryCode="PH" value="63">&#x1F1F5&#x1F1ED Philippines (+63)</option>
								<option data-countryCode="PL" value="48">&#x1F1F5&#x1F1F1 Poland (+48)</option>
								<option data-countryCode="PT" value="351">&#x1F1F5&#x1F1F9 Portugal (+351)</option>
								<option data-countryCode="PR" value="1787">&#x1F1F5&#x1F1F7 Puerto Rico (+1787)</option>
								<option data-countryCode="QA" value="974">&#x1F1F6&#x1F1E6 Qatar (+974)</option>
								<option data-countryCode="RE" value="262">&#x1F1F7&#x1F1EA Réunion (+262)</option>
								<option data-countryCode="RO" value="40">&#x1F1F7&#x1F1F4 Romania (+40)</option>
								<option data-countryCode="RU" value="7">&#x1F1F7&#x1F1FA Russia (+7)</option>
								<option data-countryCode="RW" value="250">&#x1F1F7&#x1F1FC Rwanda (+250)</option>
								<option data-countryCode="WS" value="685">&#x1F1FC&#x1F1F8 Samoa (+685)</option>
								<option data-countryCode="SM" value="378">&#x1F1F8&#x1F1F2 San Marino (+378)</option>
								<option data-countryCode="ST" value="239">&#x1F1F8&#x1F1F9 São Tomé &amp; Principe (+239)</option>
								<option data-countryCode="SA" value="966">&#x1F1F8&#x1F1E6 Saudi Arabia (+966)</option>
								<option data-countryCode="SN" value="221">&#x1F1F8&#x1F1F3 Senegal (+221)</option>
								<option data-countryCode="CS" value="381">&#x1F1F7&#x1F1F8 Serbia (+381)</option>
								<option data-countryCode="SC" value="248">&#x1F1F8&#x1F1E8 Seychelles (+248)</option>
								<option data-countryCode="SL" value="232">&#x1F1F8&#x1F1F1 Sierra Leone (+232)</option>
								<option data-countryCode="SG" value="65">&#x1F1F8&#x1F1EC Singapore (+65)</option>
								<option data-countryCode="SK" value="421">&#x1F1F8&#x1F1F0 Slovakia (+421)</option>
								<option data-countryCode="SI" value="386">&#x1F1F8&#x1F1EE Slovenia (+386)</option>
								<option data-countryCode="SB" value="677">&#x1F1F8&#x1F1E7 Solomon Islands (+677)</option>
								<option data-countryCode="SO" value="252">&#x1F1F8&#x1F1F4 Somalia (+252)</option>
								<option data-countryCode="ZA" value="27">&#x1F1FF&#x1F1E6 South Africa (+27)</option>
								<option data-countryCode="SS" value="211">&#x1F1F8&#x1F1F8 South Sudan (+211)</option>
								<option data-countryCode="ES" value="34">&#x1F1EA&#x1F1F8 Spain (+34)</option>
								<option data-countryCode="LK" value="94">&#x1F1F1&#x1F1F0 Sri Lanka (+94)</option>
								<option data-countryCode="SH" value="290">&#x1F1F8&#x1F1ED St. Helena (+290)</option>
								<option data-countryCode="KN" value="1869">&#x1F1F0&#x1F1F3 St. Kitts and Nevis (+1869)</option>
								<option data-countryCode="SC" value="1758">&#x1F1F1&#x1F1E8 St. Lucia (+1758)</option>
								<option data-countryCode="PM" value="508">&#x1F1F5&#x1F1F2 St. Pierre and Miquelon (+508)</option>
								<option data-countryCode="SD" value="249">&#x1F1F8&#x1F1E9 Sudan (+249)</option>
								<option data-countryCode="SR" value="597">&#x1F1F8&#x1F1F7 Suriname (+597)</option>
								<option data-countryCode="SE" value="46">&#x1F1F8&#x1F1EA Sweden (+46)</option>
								<option data-countryCode="CH" value="41">&#x1F1E8&#x1F1ED Switzerland (+41)</option>
								<option data-countryCode="SI" value="963">&#x1F1F8&#x1F1FE Syria (+963)</option>
								<option data-countryCode="TW" value="886">&#x1F1F9&#x1F1FC Taiwan (+886)</option>
								<option data-countryCode="TJ" value="992">&#x1F1F9&#x1F1EF Tajikstan (+992)</option>
								<option data-countryCode="TZ" value="255">&#x1F1F9&#x1F1FF Tanzania (+255)</option>
								<option data-countryCode="TH" value="66">&#x1F1F9&#x1F1ED Thailand (+66)</option>
								<option data-countryCode="TG" value="228">&#x1F1F9&#x1F1EC Togo (+228)</option>
								<option data-countryCode="TK" value="690">&#x1F1F9&#x1F1F0 Tokelau (+690)</option>
								<option data-countryCode="TO" value="676">&#x1F1F9&#x1F1F4 Tonga (+676)</option>
								<option data-countryCode="TT" value="1868">&#x1F1F9&#x1F1F9 Trinidad &amp; Tobago (+1868)</option>
								<option data-countryCode="TN" value="216">&#x1F1F9&#x1F1F3 Tunisia (+216)</option>
								<option data-countryCode="TR" value="90">&#x1F1F9&#x1F1F7 Turkey (+90)</option>
								<option data-countryCode="TM" value="993">&#x1F1F9&#x1F1F2 Turkmenistan (+993)</option>
								<option data-countryCode="TC" value="1649">&#x1F1F9&#x1F1E8 Turks &amp; Caicos Islands (+1649)</option>
								<option data-countryCode="TV" value="688">&#x1F1F9&#x1F1FB Tuvalu (+688)</option>
								<option data-countryCode="UG" value="256">&#x1F1FA&#x1F1EC Uganda (+256)</option>
								<option data-countryCode="UA" value="380">&#x1F1FA&#x1F1E6 Ukraine (+380)</option>
								<option data-countryCode="AE" value="971">&#x1F1E6&#x1F1EA United Arab Emirates (+971)</option>
								<option data-countryCode="GB" value="44">&#x1F1EC&#x1F1E7 United Kingdom (+44)</option>
								<option data-countryCode="US" value="1">&#x1F1FA&#x1F1F8 United States of America (+1)</option>
								<option data-countryCode="UY" value="598">&#x1F1FA&#x1F1FE Uruguay (+598)</option>
								<option data-countryCode="UZ" value="998">&#x1F1FA&#x1F1FF Uzbekistan (+998)</option>
								<option data-countryCode="VU" value="678">&#x1F1FB&#x1F1FA Vanuatu (+678)</option>
								<option data-countryCode="VA" value="39">&#x1F1FB&#x1F1E6 Vatican City (+39)</option>
								<option data-countryCode="VE" value="58">&#x1F1FB&#x1F1EA Venezuela (+58)</option>
								<option data-countryCode="VN" value="84">&#x1F1FB&#x1F1F3 Vietnam (+84)</option>
								<option data-countryCode="VG" value="1284">&#x1F1FB&#x1F1EC Virgin Islands - British (+1284)</option>
								<option data-countryCode="VI" value="1340">&#x1F1FB&#x1F1EE Virgin Islands - US (+1340)</option>
								<option data-countryCode="WF" value="681">&#x1F1FC&#x1F1EB Wallis &amp; Futuna (+681)</option>
								<option data-countryCode="EH" value="967">&#x1F1EA&#x1F1ED Western Sahara (+212)</option>
								<option data-countryCode="YE" value="967">&#x1F1FE&#x1F1EA Yemen (+967)</option>
								<option data-countryCode="ZM" value="260">&#x1F1FF&#x1F1F2 Zambia (+260)</option>
								<option data-countryCode="ZW" value="263">&#x1F1FF&#x1F1FC Zimbabwe (+263)</option>
							</select>
			      			<div class="input_phone_number_country_image d-flex align-items-center">
			      				<img src="img/select_arrow.svg" alt="">
			      			</div>
			      		</div>
			      		<input type="tel" id="phone" name="phone">
			      	</div>
					<div class="col-12 input_box">
						<label>Company</label>
						<input type="text">
					</div>
					<div class="col-12 input_box">
						<label>Designation</label>
						<input type="text">
					</div>
					<div class="col-12 gender_box">
						<div class="radio_btn d-flex align-items-center">
							<h4>Gender</h4>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" autocompleted="">
								<label class="form-check-label" for="flexRadioDefault1">Male</label>
							</div>     
							<div class="form-check">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" autocompleted="">
								<label class="form-check-label" for="flexRadioDefault2">Female </label>
							</div>
						</div>
					</div>
					<div class="col-12 input_box select_box">
						<label>Age</label>
						<select>
							<option selected="" value="Select">Select</option>
							<option selected="" value="10">10</option>
							<option selected="" value="20">20</option>
							<option selected="" value="30">30</option>
						</select>
					</div>
					<div class="address_box p-0">
						<div class="pl-15 pb-15">
							<h4>Address</h4>
						</div>	
						<div class="row m-0">
							<div class="col-12 input_box">
								<label>Address Line 1</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Address Line 2</label>
								<input type="text">
							</div>
							<div class="col-12 col-md-6 input_box">
								<label>City</label>
								<input type="text">
							</div>
							<div class="col-12 input_box  col-md-6">
								<div class="select_box">
									<label>Country</label>
									<select>
										<option selected="" value="Select Country">Select Country</option>
										<option selected="" value="1">1</option>
										<option selected="" value="2">2</option>
										<option selected="" value="3">3</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="address_box social_media_form p-0">
						<div class="pl-15 pb-15">
							<h4>Social Media</h4>
						</div>	
						<div class="row m-0">
							<div class="col-12 input_box">
								<label>LinkedIn</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Instragram</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Twitter</label>
								<input type="text">
							</div>
							<div class="col-12 input_box">
								<label>Facebook</label>
								<input type="text">
							</div>
						</div>
					</div>
					<div class="col-12">
						<a href="#." class="blue_btn mt-30" >
							Save Changes
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="Match" role="tabpanel" aria-labelledby="Basic2">
			<div class="account_form_box">
				<div class="custom_checkbox_list">
					<div class="title">
						<h3>Products and solutions I offer</h3>
					</div>
					<div class="input_check_box">
		      			<input type="checkbox" id="Auto-Approve-1">
		      			<label for="Auto-Approve-1">Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Auto-Approve-2">
		      			<label for="Auto-Approve-2">Construction</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Semi-Government">
		      			<label for="Semi-Government">Semi-Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Technology-Solution-Provider">
		      			<label for="Technology-Solution-Provider">Technology Solution Provider</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Tourism-Authority">
		      			<label for="Tourism-Authority">Tourism Authority</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Consultant">
		      			<label for="Consultant">Consultant</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Hotel">
		      			<label for="Hotel">Hotel Owner / Operator</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Industry-Association">
		      			<label for="Industry-Association">Industry Association</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Airline-Transportation">
		      			<label for="Airline-Transportation">Airline / Transportation</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Media">
		      			<label for="Media">Media</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Travel-Booking-Agent">
		      			<label for="Travel-Booking-Agent">Travel / Booking Agent</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="Other">
		      			<label for="Other">Other</label>
		      		</div>
				</div>
				<div class="custom_checkbox_list">
					<div class="title">
						<h3>Products and solutions I seek</h3>
					</div>
					<div class="input_check_box">
		      			<input type="checkbox" id="info_Auto-Approve-1">
		      			<label for="info_Auto-Approve-1">Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Auto-Approve-2">
		      			<label for="info_Auto-Approve-2">Construction</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Semi-Government">
		      			<label for="info_Semi-Government">Semi-Government</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Technology-Solution-Provider">
		      			<label for="info_Technology-Solution-Provider">Technology Solution Provider</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Tourism-Authority">
		      			<label for="info_Tourism-Authority">Tourism Authority</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Consultant">
		      			<label for="info_Consultant">Consultant</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Hotel">
		      			<label for="info_Hotel">Hotel Owner / Operator</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Industry-Association">
		      			<label for="info_Industry-Association">Industry Association</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Airline-Transportation">
		      			<label for="info_Airline-Transportation">Airline / Transportation</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Media">
		      			<label for="info_Media">Media</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Travel-Booking-Agent">
		      			<label for="info_Travel-Booking-Agent">Travel / Booking Agent</label>
		      		</div>
		      		<div class="input_check_box">
		      			<input type="checkbox" id="info_Other">
		      			<label for="info_Other">Other</label>
		      		</div>
				</div>
				<a href="#." class="blue_btn">
					Save Changes
				</a>
			</div>
		</div>

	</div>
</div>	
		
<?php include("footer.php") ?>