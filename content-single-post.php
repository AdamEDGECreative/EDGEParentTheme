<?php

/**
 * The template used for displaying a single posts's content in single.php
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					
	<h2 class="title"><?php echo get_the_title(); ?></h2>
	<div class="s-cms-content">
		<?php the_content(); ?>
	</div>

</article><!-- #post -->
