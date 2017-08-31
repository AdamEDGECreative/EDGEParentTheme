<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

get_header();

?>

<?php while ( have_posts() ): ?>
	<?php
		the_post();
	?>

	<div class="container">
		<?php get_template_part('content', 'single-page') ?>
	</div>
	
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
