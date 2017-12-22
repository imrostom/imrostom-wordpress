<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/blog.jpg" />
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<section id="header_top" class="topbar_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="topconinfo">
						<a href="mailto:<?php echo cs_get_option('header_email');?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo cs_get_option('header_email');?></a>
						<a href="tel:<?php echo cs_get_option('header_phone');?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo cs_get_option('header_phone');?></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
					<div class="socialtop">
					<?php 
						$social_option = cs_get_option('social_option');
						if($social_option):
							foreach($social_option as $single_social){
								?>
								<a href="<?php echo $single_social['social_link'];?>"><i class="<?php echo $single_social['social_icon'];?>"></i></a>
								<?php
							}
						else:
						?>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
						<?php 
						endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="header_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="logo">
						<a href="<?php echo home_url();?>"><?php echo cs_get_option('logo_option');?></a>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-right">
					<div class="mainmenu">
						<?php 
							wp_nav_menu(array(
								'theme_location'=>'main_menu',
								'fallback_cb'=>'fallback_mainmenu'
							));
						?>
					</div>
				</div>
			</div>
		</div>
	</section>