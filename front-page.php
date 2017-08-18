<?php

/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); 

/**
 * Due to possible dynamic nature of home page,
 * pass this off to the default page template instead.
 * Can be overwritten in child theme.
 */
get_template_part( 'page' );

?>

<?php get_footer(); ?>
