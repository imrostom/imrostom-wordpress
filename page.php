<?php get_header();?>
	<div class="page_area section_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
						if(have_posts()):while(have_posts()):the_post()
							?>
						<h2><?php the_title();?></h2>
							<?php
							the_content();
						endwhile;
						else:
							echo "Your Page Not Found";
						endif;
					?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer('home');?>