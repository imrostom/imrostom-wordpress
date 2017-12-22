<?php 
/*
Template Name:Abouts
*/
get_header();?>
	<section class="header_bottom_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="items_table">
						<div class="item_cell">
							<h2><?php _e('HI! I\'M','imrostom');?> <span style="text-transform:uppercase;color:#BA68C8;font-weight:bold"><?php echo cs_get_option('author_name');?></span></h2>
							<p><?php echo cs_get_option('author_desc');?></p>
							<a href="<?php echo cs_get_option('author_hire');?>" class="btn btn-theme btn-lg"><i class="fa fa-user"></i> Hire Me</a>
							<a href="#aboutme" class="call_to_about"><i class="fa fa-chevron-down"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="aboutme" class="aboutmearea section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="about_img">
						<img src="<?php echo cs_get_option('author_img');?>" alt="" />
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<div class="about_des">
						<h2>About Me</h2>
						<p><?php echo cs_get_option('author_about_desc');?></p>
						<h2>Personal Information</h2>
						<div class="about_des_left">
							<ul>
								<?php $info_options = cs_get_option('info_options');
								if($info_options):
								foreach($info_options as $info_option):
								?>
								<li><span><?php echo $info_option['info_label'];?> :</span> <?php echo $info_option['info_value'];?></li>
								<?php
								endforeach;
								else:
								?>
								<li><span>Name :</span> Rostom Ali</li>
								<li><span>Address :</span> Bagilara,Moynamati,Burichong,Comilla</li>
								<li><span>Email :</span> rostomali4444@gmail.com</li>
								<li><span>Phone :</span> +88017747477</li>
								<li><span>Country :</span> Bangladesh</li>
								<?php
								endif;
								?>
							</ul>
						</div>
						<div class="about_des_right">
							<a href="<?php echo cs_get_option('author_resume');?>" class="btn btn-theme btn-lg">Download Resume</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer('home');?>