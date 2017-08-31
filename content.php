<?php

/**
 * The template used for displaying generic post content in the loop
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					
	<h2 class="title"><?php echo get_the_title(); ?></h2>
	<?php the_excerpt(); ?>

</article><!-- #post -->
