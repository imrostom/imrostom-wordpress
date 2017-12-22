<?php get_header();?>
	<div class="breadcumb_section section_padding">
		<div class="container">
			<div class="col-md-12">
				<h2><a>Search Arhieve</a></h2>
				<p>To Know Just Click Search Here</p>
			</div>
		</div>
	</div>
	
	<div class="blog_page_section">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<header class="page-header">
						<?php if ( have_posts() ) : ?>
							<h1 class="page-title"><?php printf( __('Search Results for: %s', 'imrostom'), '<span>'.get_search_query() . '</span>' ); ?></h1>
						<?php endif; ?>
					</header><!-- .page-header -->
					<div class="blog_content">
						<?php 
							if(have_posts()):
								while(have_posts()):the_post();
									get_template_part('template-parts/content',get_post_format());
								endwhile;
							else:
								get_template_part('template-parts/content','404');
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