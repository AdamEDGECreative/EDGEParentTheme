// Small jQuery library to init Google Maps

( function( $, window, document, undefined ) {
		
	// Constructor
	var GoogleMap = function( $mapElement, markers, initialZoom ) {

		// Set properties
		this.$mapElement = $mapElement;
		this.markers = markers;

		if ( undefined === initialZoom ) {
			this.initialZoom = 14;
		} else {
			this.initialZoom = initialZoom;
		}

		this.options = {
			zoom  		  : this.initialZoom,
			center		  : new google.maps.LatLng(0, 0),
			mapTypeId	  : google.maps.MapTypeId.ROADMAP,
			scrollwheel : false
		};

		// Kick off load
		this._init();
	};

	GoogleMap.prototype._init = function() {
		// Get a map object
		this.map = new google.maps.Map( this.$mapElement.get(0), this.options );

		// Create markers reference
		this.map.markers = [];

		for (var i = 0, len = this.markers.length; i < len; i++) {
			var _marker = this.markers[i];

			this.addMarker( _marker );
		}

		this.centerMap();

		// Trigger event on finish init
		this.$mapElement.trigger( 'googleMap-ready' );
	};

	GoogleMap.prototype.addMarker = function( marker ) {
		var latlng = new google.maps.LatLng( marker.lat, marker.lng ),
				mapMarker = new google.maps.Marker( {
					position	: latlng,
					map			  : this.map
				} );

		this.map.markers.push( mapMarker );

		// If the marker contains HTML then add it in an infowindow
		if ( marker.hasOwnProperty( 'content' ) && '' !== marker.content ) {
			this.addInfoWindow( mapMarker, marker.content );
		}
	};

	GoogleMap.prototype.addInfoWindow = function( mapMarker, content ) {
		var infoWindow = new google.maps.InfoWindow( {
					content: content
				} );

		// Add open event
		google.maps.event.addListener( mapMarker, 'click', function() {
			infoWindow.open( this.map, mapMarker );
		} );
	};

	GoogleMap.prototype.centerMap = function() {
		var bounds = new google.maps.LatLngBounds();

		for (var i = 0, len = this.map.markers.length; i < len; i++) {
			var _mapMarker = this.map.markers[i],
					latlng = new google.maps.LatLng( _mapMarker.position.lat(), _mapMarker.position.lng() );
			
			bounds.extend( latlng );
		}

		if( this.map.markers.length == 1 ) {
	    this.map.setCenter( bounds.getCenter() );
	    this.map.setZoom( this.initialZoom );
		} else {
			this.map.fitBounds( bounds );
		}
	};

	/**
	 * Get an array of marker objects with optional content - { lat, lng, [content] }.
	 * @param {jQuery} $mapElement The element the map will be created on, should contain marker elements.
	 * @return array
	 */
	function getMarkers( $mapElement ) {
		var $markers = $mapElement.find( '.js-googleMap__marker' ),
				markers = [];

		$markers.each( function( i, marker ) {
			var $marker = $(marker),
					markerObject = {};

			if ( $marker.attr( 'data-lat' ) && $marker.attr( 'data-lng' ) ) {
				
				markerObject.lat = $marker.attr( 'data-lat' );
				markerObject.lng = $marker.attr( 'data-lng' );
				
				if ( $marker.html() ) {
					markerObject.content = $marker.html();
				}

				markers.push( markerObject );

			}
		} );

		return markers;
	}

	var $mapElements = $('.js-googleMap');

	// Once init'd hide any elements that need to
	$mapElements.on( 'googleMap-ready', function() {
		$(this).siblings('.js-googleMap__fadeOnInit').fadeOut( 250 );
	} );

	$mapElements.each( function( i, mapElement ) {
		new GoogleMap( $(mapElement), getMarkers( $(mapElement) ) );
	} );

} )( jQuery, window, document );

