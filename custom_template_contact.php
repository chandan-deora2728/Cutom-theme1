<?php
// Template Name:Contact Us
?>
<?php
get_header();
?>
<section class="register" style="padding-top: 180px;">
				<div class="bkg">
					<div class="container">
						<div class="fleft w-50 text-center white">
							<label>NEXT DANCE COURSE</label>
							<h3>Available Now</h3>
							<div class="time">
								<div class="fleft w-25">
									<p>359</p>
									<span class="bk1">DAYS</span>
								</div>
								<div class="fleft w-25">
									<p>18</p>
									<span class="bk2">HOURS</span>
								</div>
								<div class="fleft w-25">
									<p>23</p>
									<span class="bk3">MIN</span>
								</div>
								<div class="fleft w-25">
									<p>0</p>
									<span class="bk4">SEC</span>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="fleft w-50">
							<div class="regform text-center">
								<div class="formhead">
									<span class="bk3 white">LAST 7 SEATS</span>
									<p>Register Now</p>
								</div>
								<form action="" method="post">
									<div class="fleft w-50">
										<input type="text" placeholder="Name" name="name" id="name"></input>
									</div>
									<div class="fleft w-50">
										<input type="text" placeholder="Surname" name="Surname" id="Surname"></input>
									</div>
									<div class="fleft w-50">
										<input type="email" placeholder="Email" name="Email" id="Email"></input>
									</div>
									<div class="fleft w-50">
										<input type="text" placeholder="Subject" name="Subject" id="Subject"></input>
									</div>
									<div class="clear">
										<textarea type="text" placeholder="Message" name="message" id="message"></textarea>
										<div id="e1"></div>
									</div>
									<div class="formbtn">
										<button type="submit" onclick="return demoform();" class="white">SEND NOW</button>
									</div>
								</form>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</section>
<?php 
get_footer();
?>
