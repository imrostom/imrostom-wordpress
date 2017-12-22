<?php get_header();?>
	<div class="breadcumb_section section_padding">
		<div class="container">
			<div class="col-md-12">
				<h2><a href="">Blog Arhieve</a></h2>
				<p>To Know Just Click Here</p>
			</div>
		</div>
	</div>
	
	<div class="blog_page_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog_content">
						<?php 
							if(have_posts()):
								while(have_posts()):the_post();
									get_template_part('template-parts/content',get_post_format());
								endwhile;
							else:
								get_template_part('template-parts/content','none');
							endif;	
						?>
					</div>
					<div class="row">
						<div class="col-md-12">
							<?php the_posts_pagination(array(
								'screen_reader_text'=>' ',
								'prev_text'=>'<< Previous',
								'next_text'=>'Next >>',
						)); ?>
						</div>
					</div>
				</div>
				<?php get_sidebar();?>
			</div>
		</div>
	</div>
	<?php get_footer('home');?>