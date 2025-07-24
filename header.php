<!DOCTYPE html>
<html>
	<head>
		<title><?php the_title()?><?php echo " | "?><?php bloginfo('description');?></title>	
		 <!--Bootstrep css-->
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
		 <link rel="stylesheet" href="assets/bootstrap-4.0.0/css/bootstrap-grid.min.css">
		 <link rel="stylesheet" href="assets/bootstrap-4.0.0/css/bootstrap-reboot.min.css">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/st.css" type="text/css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/E:\Web\Baby Kids\assets\css\mstyle.css" type="text/css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css" type="text/css" rel="stylesheet">
		<!-- <script src="<?php echo get_template_directory_uri(); ?>assets/js/jquery-3.6.4.min.js" type="text/javascript"></script> -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php wp_head(); ?>
	</head>
	<style>
		.position{
			position: fixed;
			width:100%;
			margin-top: -32px !important;
		}
		.bg{
			background-color: #fff;
		}
		.error-container {
      height: 100vh;
      background-color: #f8f9fa;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      flex-direction: column;
    }

    .error-code {
      font-size: 120px;
      font-weight: bold;
      color: #dc3545;
    }

    .error-message {
      font-size: 24px;
      margin-bottom: 20px;
      color: #343a40;
    }

    .btn-home {
      padding: 10px 20px;
      font-size: 18px;
    }
	 .category-box {
      border: 1px solid #dee2e6;
      padding: 20px;
      border-radius: 10px;
      transition: all 0.3s ease;
      background-color: #fff;
      text-align: center;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .category-box:hover {
      background-color: #f8f9fa;
      transform: translateY(-5px);
    }

    .category-title {
      font-size: 20px;
      font-weight: 600;
      color: #333;
      margin-top: 10px;
    }

    .category-icon {
      font-size: 40px;
      color: #0d6efd;
    }
	</style>
<header class="position"style="z-index:999;">
				<div class="header">
					<div class="container">
						<div class="w-50 fleft">
							<div class="fleft w-33 mh">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="money-check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
									<path fill="currentColor" d="M0 448c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V128H0v320zm448-208c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v32c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-32zm0 120c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H456c-4.42 0-8-3.58-8-8v-16zM64 264c0-4.42 3.58-8 8-8h304c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zm0 96c0-4.42 3.58-8 8-8h176c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16zM624 32H16C7.16 32 0 39.16 0 48v48h640V48c0-8.84-7.16-16-16-16z"></path>
								</svg>
								<label>Payment Options</label>
							</div>
							<div class="fleft w-33 mh">
								<svg class="check" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
									<path fill="currentColor" d="M400 32H48C21.49 32 0 53.49 0 80v352c0 26.51 21.49 48 48 48h352c26.51 0 48-21.49 48-48V80c0-26.51-21.49-48-48-48zm0 400H48V80h352v352zm-35.864-241.724L191.547 361.48c-4.705 4.667-12.303 4.637-16.97-.068l-90.781-91.516c-4.667-4.705-4.637-12.303.069-16.971l22.719-22.536c4.705-4.667 12.303-4.637 16.97.069l59.792 60.277 141.352-140.216c4.705-4.667 12.303-4.637 16.97.068l22.536 22.718c4.667 4.706 4.637 12.304-.068 16.971z"></path>
								</svg>
								<label class="">Terms &amp; Conditions</label>
							</div>
							<div class="fleft w-33 mh us">
								<label>US</label>
								<label>IT</label>
								<label>ES</label>
							</div>
							<div class="clear"></div>
						</div> 
						<div class="fleft w-50">
							<div class="fleft w-33 mh">
								<label>My Infobox</label>
							</div>
							<div class="fleft w-33 mh">
								<svg class="message" aria-hidden="true" focusable="false" data-prefix="far" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
									<path fill="currentColor" d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"></path>
								</svg>
								<label class="">Add Your Review</label>
							</div>
							<div class="fleft w-33 sign ph">
								<div class="fleft w-25">
									<svg class="account" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" data-fa-i2svg="">
										<path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path>
									</svg>
								</div>
								<div class="fleft w-75">
									<label>My Account</label>
									<a href="#"><p>Log IN</p></a>
								</div>
							</div>
							</a>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="bheader bg">
					 <?php $mylog = get_header_image();?>
						<figure class="fleft w-25 logo container ">
							<img class="w-75" src = "<?php echo $mylog; ?>">
						</figure>
						<div class="fleft w-75 container">
							<nav class="montserrat-light">
								<ul>
									<?php 
                                        wp_nav_menu(
                                            array('theme_location'=>'primary-menu')
                                        );
                                    ?>
								</ul>
							</nav>
						</div>					
						<div class="clear"></div>
					</div>
				</div>
			</header>