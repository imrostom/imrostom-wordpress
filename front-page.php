<?php get_header();?>
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
	<section class="skills_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php _e('Skills','imrostom')?></h2>
					<p><?php echo cs_get_option('skill_desc');?></p>
					<div class="skill-progress-bar">
						<?php 
							$skill_options=cs_get_option('skill_option');
							if($skill_options):
								foreach($skill_options as $skill_option):?>
								
									<div class="single_skill_bar">
										<span><?php echo $skill_option['skill_label'];?></span>
										<div class="pro-bar-container shine">
											<div style="width:<?php echo $skill_option['skill_percentage'];?>%;background-color:#A75DB4"><?php echo $skill_option['skill_percentage'];?>%</div>
										</div>
									</div>
								<?php endforeach;
							else:
							?>
							<div class="single_skill_bar">
								<span>Html5</span>
								<div class="pro-bar-container shine">
									<div style="width:50%;background-color:#A75DB4">50%</div>
								</div>
							</div>
							<div class="single_skill_bar">
								<span>Css</span>
								<div class="pro-bar-container shine">
									<div style="width:60%;background-color:#A75DB4">60%</div>
								</div>
							</div>
							<?php 
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="experience_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php _e('Experience','imrostom');?></h2>
					<p><?php echo cs_get_option('experience_desc');?></p>
				</div>
			</div>
			<div class="row">
				<div class="experiences owl-carousel owl-theme">
				<?php 
					$ecperience_option_grps = cs_get_option('ecperience_option_grp');
					if($ecperience_option_grps):
						foreach($ecperience_option_grps as $ecperience_option_grp):?>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 full-width-owl">
								<div class="single_experience">
									<h2><?php echo $ecperience_option_grp['experience_time'];?></h2>
									<img src="<?php echo $ecperience_option_grp['experience_image'];?>" alt="" />
									<h2><?php echo $ecperience_option_grp['experience_desig'];?></h2>
									<p><?php echo $ecperience_option_grp['experience_company'];?></p>
								</div>
							</div>
						<?php
						endforeach;
					else:?>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 full-width-owl">
							<div class="single_experience">
								<h2><?php _e('January 2013-Present','imrostom');?></h2>
								<img src="<?php echo get_template_directory_uri();?>/images/blog.jpg" alt="" />
								<h2><?php echo _e('Ux Desingner','imrostom');?></h2>
								<p><?php echo _e('Windows Phone','imrostom');?></p>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 full-width-owl">
							<div class="single_experience">
								<h2><?php _e('January 2013-Present','imrostom');?></h2>
								<img src="<?php echo get_template_directory_uri();?>/images/blog.jpg" alt="" />
								<h2><?php echo _e('Ux Desingner','imrostom');?></h2>
								<p><?php echo _e('Windows Phone','imrostom');?></p>
							</div>
						</div>
					<?php
					endif;
				?>
				</div>
			</div>
		</div>
	</section>
	<section class="education_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php _e('Education','imrostom');?></h2>
					<p><?php echo cs_get_option('education_desc');?></p>
				</div>
			</div>
			<div class="row">
				<div class="educations owl-carousel owl-theme">
				<?php 
				$education_option_grps=cs_get_option('education_option_grp');
				if($education_option_grps):
					foreach($education_option_grps as $education_option_grp):
				?>
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 full-width-owl">
						<div class="single_education">
							<h2><?php echo $education_option_grp['education_time'];?></h2>
							<img src="<?php echo $education_option_grp['education_image'];?>" alt="" />
							<h2><?php echo $education_option_grp['education_desig'];?></h2>
							<p><?php echo $education_option_grp['education_company'];?></p>
						</div>
					</div>
				<?php
					endforeach;
				else:
				?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 full-width-owl">
					<div class="single_education">
						<h2><?php _e('January 2014-Present','imrostom');?></h2>
						<img src="<?php echo get_template_directory_uri();?>/images/blog.jpg" alt="" />
						<h2><?php _e('Ux Desingner','imrostom');?></h2>
						<p><?php _e('Windows Phone','imrostom');?></p>
					</div>
				</div>
				<?php
				endif;
				?>
				</div>
			</div>
		</div>
	</section>
	<section class="portfolio_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php _e('Portfolio','imrostom');?></h2>
					<p><?php echo cs_get_option('portfolio_desc');?></p>
				</div>
			</div>
			
			<div class="row">
				<?php 
					$port_posts = new WP_Query(array(
						'post_type'=>'portfolio',
						'posts_per_page'=>6
					));
					
					if($port_posts->have_posts()):while($port_posts->have_posts()):$port_posts->the_post();
				
				?>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="single_portfolio">
						<div data-toggle="modal" data-target="#exampleModal<?php echo get_the_ID();?>" class="portfolio_show">
							<?php the_post_thumbnail('large');?>
							<div class="myoverlay">
								<div class="overlay">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</div>
						<div class="modal fade" id="exampleModal<?php echo get_the_ID();?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<h2 class="modal-title" id="exampleModalLabel"><?php the_title();?></h2>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								  <span aria-hidden="true">&times;</span>
								</button>
							  </div>
							  <div class="modal-body">
									<?php the_post_thumbnail('port_img');?>
									<h2><?php the_title();?></h2>
									<?php the_content();?>
									<?php 
										$meta_data = get_post_meta( get_the_ID(), '_portfolio_meta_id', true );
										
										$meta_url = $meta_data['portfolio_link'];
									?>
									</div>
							  <div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<a target="_blank" href="<?php echo $meta_url;?>" class="btn btn-theme">Visit Website</a>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
					<?php endwhile;else:
						echo "Your Post Not Found";
					endif;	
					?>
					
			</div>
		</div>
	</section>
	<section class="counter_section section_padding">
		<div class="container">
			<div class="row">
			<?php $project_option_grp = cs_get_option('project_option_grp');
				if(!empty($project_option_grp)){
					$project_option_grps = array_reverse($project_option_grp);
					$i=0;
					foreach($project_option_grps as $project_option_grp){
						if($i==3){
							break;
						}
						$i++;
						?>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="single_count">
								<i class="<?php echo $project_option_grp['project_icon'];?>"></i>
								<span><?php echo $project_option_grp['project_number'];?></span>
								<p><?php echo $project_option_grp['project_title'];?></p>
							</div>
						</div>
						<?php
					}
				}
				else{
					?>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single_count">
							<i class="fa fa-leaf"></i>
							<span>356</span>
							<p>Happy Clients</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="single_count">
							<i class="fa fa-leaf"></i>
							<span>356</span>
							<p>Happy Clients</p>
						</div>
					</div>
					<?php
				}
			?>
			</div>
		</div>
	</section>
	<section class="testimonial_section section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2><?php _e('Testimonial','imrostom');?></h2>
					<p><?php echo cs_get_option('testimonial_desc');?></p>
				</div>
			</div>
			<div class="row">
				<div class="testimonials owl-carousel owl-theme">
					<?php 
					$testimonial_option_grps = cs_get_option('testimonial_option_grp');
					if($testimonial_option_grps):
						foreach($testimonial_option_grps as $testimonial_option_grp):
						?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full-width-owl">
							<div class="single_test">
								<div class="testimonial_img">
									<img src="<?php echo $testimonial_option_grp['testimonial_image'];?>" alt="" />
								</div>
								<div class="testimonial_description">
									<h3><?php echo $testimonial_option_grp['clients_name'];?></h3>
									<span><i class="fa fa-user"></i> <?php echo $testimonial_option_grp['clients_desing'];?></span>
									<p><?php echo $testimonial_option_grp['clients_desig'];?></p>
								</div>
							</div>
						</div>
						<?php
						endforeach;
					else:
					?>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 full-width-owl">
						<div class="single_test">
							<div class="testimonial_img">
								<img src="<?php echo get_template_directory_uri();?>/images/blog.jpg" alt="" />
							</div>
							<div class="testimonial_description">
								<h3><?php _e('General Maneger','imrostom');?></h3>
								<span><i class="fa fa-user"></i> <?php _e('Author','imrostom');?></span>
								<p><?php _e('The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.','imrostom');?></p>
							</div>
						</div>
					</div>
					<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
	<section class="blog_area frontpage section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2><?php _e('Blog','imrostom');?></h2>
					<p><?php echo cs_get_option('blog_desc');?></p>
				</div>
			</div>
			<div class="row">
					<?php 
						$blog_posts = new WP_Query(array(
							'post_type'=>'post',
							'posts_per_page'=>3
						));
						if($blog_posts->have_posts()):
							while($blog_posts->have_posts()):$blog_posts->the_post();
							?>
							<div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
							<div class="single_blog">
								<?php if(has_post_thumbnail()):?>
									<div class="blog_thum">
										<a href="<?php the_permalink();?>"><?php the_post_thumbnail();?></a>
									</div>
									<?php 
									else:?>
									<div class="blog_thum">
										<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri().'/images/blog.jpg';?>" alt="" /></a>
									</div>
									<?php endif;?>
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
								<div class="blog_meta">
									<div class="single_meta_post">Post By: <?php the_author_posts_link(); ?></div>
									<div class="single_meta_category">Category: <?php the_category( ' ' ); ?></div>
								</div>
								<div class="mata_action">
									<div class="single_action_count">
										<a><i class="fa fa-leaf"></i> Total Comments : <?php comments_number('No Comment','One Comments','% Comments'); ?></a>
									</div>
									<div class="single_action_readmore">
										<a href="<?php the_permalink();?>">Readmore</a>
									</div>
								</div>
							</div>
							</div>
							<?php
							endwhile;
						else:
							get_template_part('template-parts/content','none');
						endif;	
					?>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<a class="btn btn-lg theme_all_post" href="<?php echo get_permalink(get_option('page_for_posts'));?>">All Post</a>
				</div>
			</div>
		</div>
	</section>
	<section class="contacts_section section_padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="contact_form">
						<form action="" method="post">
							<div class="single_form">
								<label for="">Name</label>
								<input type="text" name="" placeholder="Name" id="" />
							</div>
							<div class="single_form">
								<label for="">Email</label>
								<input type="text" placeholder="Email Here" name="" id="" />
							</div>
							<div class="single_form">
								<label for="">Subject</label>
								<input type="text" name="" placeholder="Subject" id="" />
							</div>
							<div class="single_form">
								<label for="">Message</label>
								<textarea name="" placeholder="Enter Your Message" id="" cols="30" rows="10"></textarea>
							</div>
							<div class="single_form">
								<input type="submit" name="" id="" />
							</div>
						</form>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="contact_map" id="map">
						
					</div>
				</div>
				<a href="#header_top" class="call_to_action_top"><i class="fa fa-chevron-up"></i></a>
			</div>
		</div>
	</section>
<?php get_footer('home');?>