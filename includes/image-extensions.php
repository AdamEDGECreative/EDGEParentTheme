<?php

/**
 * Define the custom image sizes used by this theme.
 * @return array The image sizes required.
 */
function et_get_theme_image_sizes() {
  $image_sizes = array();

  /** Example
  $image_sizes[ 'banner' ] = array(
    'width' => 1600,
    'height' => 500,
    /**
     * Whether to crop the image to the exact dimensions specified.
     * true = hard crop, will lose some of the image.
     * false = soft crop, the whole image will be visible but may not 
     *         be the exact width and height specified above.
     *         The image will be scaled to the largest of the 2 dimensions.
    * /
    'hard_crop' => true,
  );
  //*/

  /**
   * Filter the image sizes.
   * @param array $image_sizes The custom sizes currently defined.
   * @return array
   */
  return apply_filters( 'et_custom_image_sizes', $image_sizes );
}

/**
 * Get an image attachment from the media library.
 *
 * @param integer $image_id The image attachment to get.
 * @param string $size Optional, The size of the image attachment to get, e.g. 'full', 'thumbnail'. 'full' is used by default.
 *
 * @return array An array containing the image src, width & height and the alt text.
 */
function et_get_image( $image_id, $size = 'full' ) {
  if ( $image = wp_get_attachment_image_src( $image_id, $size ) ) {
    return array(
      'src' => $image[0],
      'width' => $image[1],
      'height' => $image[2],
      'alt' => get_post_meta( $image_id, '_wp_attachment_image_alt', true ),
    );
  }
} 

/**
 * Get the attributes for an image attachment from the media library.
 *
 * @param integer $image_id The image attachment to get.
 * @param string $size Optional, The size of the image attachment to get, e.g. 'full', 'thumbnail'. 'full' is used by default.
 *
 * @return string The attributes needed to output the image.
 */
function et_get_image_attributes( $image_id, $size = 'full' ) {
  $image = wp_get_image( $image_id, $size );

  if ( !$image ) {
    return false;
  }

  return sprintf(
    'src="%s" alt="%s" width="%s" height="%s"',
    $image['src'],
    $image['alt'],
    $image['width'],
    $image['height']
  );
}
