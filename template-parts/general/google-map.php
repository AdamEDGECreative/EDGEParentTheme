<?php
	
/**
 * Template part to show a Google Map.
 */

$location = get_field( 'map_location', 'options' );
$google_map_link = get_field( 'map_link', 'options' );

$map_marker_content = get_field( 'map_content', 'options' );

?>

<div class="s-map">

	<div class="s-map__embed js-googleMap">
		<div class="s-map__marker js-googleMap__marker" data-lat="<?php echo esc_attr( $location['lat'] ); ?>" data-lng="<?php echo esc_attr( $location['lng'] ); ?>"><?php echo $map_marker_content; ?></div>
	</div>
	
	<a class="s-map__preloader js-googleMap__fadeOnInit" href="<?php echo esc_url( $google_map_link ); ?>" target="_blank">
		<div class="s-map__preloader-wrap">
			<img class="s-map__preloader-icon" src="<?php echo get_parent_images_uri( 'googlemaps-icon.png' ); ?> " alt="Google Maps Icon" width="150" height="150" />
			<div class="s-map__preloader-body">
				<p class="s-map__preloader-title">Find us on Google Maps</p>
				<p>The map is loading&hellip;</p>
				<p>Click here to view it in a new tab/window.</p>
			</div>
		</div>
	</a>

</div>
