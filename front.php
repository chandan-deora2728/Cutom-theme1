<?php
// Template Name:front
?>
<body>
		<section class="outer">
			<?php
                get_header();
            ?>
			<?php $cat = get_categories(array('taxonomy' => 'category'));
			// echo"<pre>";
			// print_r($cat);
			// echo"</pre>"
			?>

			<section class="bk1">
				<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/bk1.png">
			</section>
			<section class="container">
				<div class="w-25 text-center fleft download white">
					<p class="h">DOWNLOAD AREA</p>
					<p>Chandan Deora consectetur adipiscing elit. Aenean egestas magna.</p>
					<a href="#"><button class="btn">READ MORE</button></a>
				</div>
				<div class="w-25 text-center fleft open white">
					<p class="h">OPENING HOURS</p>
					<div>
						<div class="fleft w-50">
							<p>Mon - Fri</p>
						</div>
						<div class="fleft">
							<p>8 - 17:00</p>
						</div>
						<div class="clear"></div>
						<br><hr><br>
					</div>
					<div>
						<div class="fleft w-50">
							<p>Saturday</p>
						</div>
						<div class="fleft">
							<p>9 - 17:30</p>
						</div>
						<div class="clear"></div>
						<br><hr><br>
					</div>
					<div>
						<div class="fleft w-50">
							<p>Sunday</p>
						</div>
						<div class="fleft">
							<p>8 - 17:30</p>
						</div>
						<div class="clear"></div>
						<br><hr><br>
					</div>
				</div>
				<div class="w-50 text-center fleft course">
					<p>Find Your Course</p>
					<div class="select">
						<div class="fleft">
							<select>
								<option>All Levels</option>
								<option>Level 1</option>
								<option>Level 2</option>
								<option>Level 3</option>
								<option>Level 4</option>
							</select>
						</div>
						<div class="fleft">
							<select>
								<option>All Categories</option>
								<option>Categories 1</option>
								<option>Categories 2</option>
								<option>Categories 3</option>
								<option>Categories 4</option>
							</select>
						</div>
						<div class="fleft">
							<select>
								<option>All Locations</option>
								<option>Locations 1</option>
								<option>Locations 2</option>
								<option>Locations 3</option>
								<option>Locations 4</option>
							</select>
						</div>
						<div class="fleft">
							<select>
								<option>All Typologies</option>
								<option>Typologies 1</option>
								<option>Typologies 2</option>
								<option>Typologies 3</option>
								<option>Typologies 4</option>
							</select>
						</div>
						<div class="fleft">
							<select>
								<option>All Durations</option>
								<option>Durations 1</option>
								<option>Durations 2</option>
								<option>Durations 3</option>
								<option>Durations 4</option>
							</select>
						</div>
						<div class="fleft">
							<a href="#"><button class="white" type="button" >SEARCH</button></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<div class="container py-5">
				<h2 class="text-center mb-4">Browse Categories</h2>
				<div class="row g-4">
					<?php 
					foreach($cat as $catvalue){
					?>
					<div class="col-12 col-md-6">
					<div class="border rounded p-4 text-center shadow-sm bg-white">
						<div class="fs-1 text-primary">📘</div>
						<a href="<?php echo get_category_link($catvalue->term_id) ?>"><h5 class="mt-3 mb-0"><?php echo $catvalue->name?></h5></a>
					</div>
					</div>
					<?php } ?>
				</div>
			</div>

			<section class="container text-center course">
				<p class="text-center heading">Our Courses</p>
				<p class=" text-center sub">THE BEST IN OUR SCHOOL</p>
				<div class="fleft courses">
					<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/c1.png"></img>
					<div class="coursed">
						<label>Orienteering</label>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="contact">
						<div class="fleft w-50">
							<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/abbey.png"></img>
							<span>Abbey</span>
						</div>
						<div class="fleft w-50">
							<a href="#"><button class="white" type="button" >READ MORE</button></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="fleft courses">
					<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/c2.png"></img>
					<div class="coursed">
						<label>Outdoor Activity</label>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="contact">
						<div class="fleft w-50">
							<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/abbey.png"></img>
							<span>Abbey</span>
						</div>
						<div class="fleft w-50">
							<a href="underprogress.html"><button class="white" type="button" >READ MORE</button></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="fleft courses">
					<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/c3.png"></img>
					<div class="coursed">
						<label>Drawing Course</label>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="contact">
						<div class="fleft w-50">
							<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/abbey.png"></img>
							<span>Abbey</span>
						</div>
						<div class="fleft w-50">
							<a href="#"><button class="white" type="button" >READ MORE</button></a>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="register">
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
			<section class="degree text-center">
				<div class="container">
					<div class="fleft img">
						<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/degree1.png">
					</div>
					<div class="fleft degreed">
						<span>FIRST DEGREE</span>
						<p>
							Lorem ipsum dolor sit amet, adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="fleft img">
						<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/degree2.png">
					</div>
					<div class="fleft degreed">
						<span>SECOND DEGREE</span>
						<p>
							Lorem ipsum dolor sit amet, adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="fleft img">
						<img src = "<?php echo get_template_directory_uri(); ?>/assets/img/degree3.png">
					</div>
					<div class="fleft degreed">
						<span>THIRD DEGREE</span>
						<p>
							Lorem ipsum dolor sit amet, adipiscing elit.
							Aenean egestas magna at porttitor vehicula nullam augue.
						</p>
					</div>
					<div class="clear"></div>
				</div>
			</section>
            <?php
                get_footer();
            ?>
		</section>
	</body>
</html>