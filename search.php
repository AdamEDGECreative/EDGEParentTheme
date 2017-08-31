<?php

/**
 * The template for displaying Search Results pages.
 */

global $wp_query;

get_header(); 

?>

<div class="container">
	
	<header class="page-header">
		<h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'edge-template' ), '<span class="search-term">' . get_search_query() . '</span>' ); ?></h2>
	</header>

	<?php if ( have_posts() ): ?>
		
		<?php while ( have_posts() ): ?>
			<?php
				the_post();
			?>

			<?php get_template_part( 'content', get_post_format() ) ?>
			
		<?php endwhile; ?>

		<?php if ( $wp_query->max_num_pages > 1 ): ?>
			<?php get_template_part_with_context( 'pagination', array( 'max_num_pages' => $wp_query->max_num_pages ) ); ?>
		<?php endif; ?>

	<?php else: ?>

		<?php get_template_part( 'content', 'empty-search' ); ?>
		<?php get_search_form(); ?>

	<?php endif; ?>


</div>
