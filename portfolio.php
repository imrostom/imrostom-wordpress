<?php 
/*
Template Name:Portfolio
*/
get_header();?>
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
						'posts_per_page'=>12
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
<?php get_footer('home');?>