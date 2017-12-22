<?php
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form class="mysearchform" role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php _e('Search Here','imrostom')?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button class="btn btn-theme" type="submit" class="search-submit">Search</button>
</form>
