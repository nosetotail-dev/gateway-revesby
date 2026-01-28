jQuery(document).ready(function($) {

	function initMap( $el ) {
	    // Find marker elements within map.
	    var $markers = $el.find('.marker');

	    // Create gerenic map.
	    var mapArgs = {
	        zoom        : $el.data('zoom') || 16,
	        mapTypeId   : google.maps.MapTypeId.ROADMAP,
            mapTypeControl : false,
            center: { lat: -33.9523, lng: 151.0146 },
            zoomControl : true,
	        styles: [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#2bb573"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#2bb573"
            },
            {
                "lightness": "15"
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#1a2c56"
            },
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#1a2c56"
            },
            {
                "lightness": "5"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#2bb573"
            },
            {
                "lightness": "-30"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ff0000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#222222"
            },
            {
                "lightness": "0"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": "0"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#222222"
            },
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#222222"
            },
            {
                "lightness": "-10"
            }
        ]
    }
]
	    };
	    var map = new google.maps.Map( $el[0], mapArgs );

	    // Add markers.
	    map.markers = [];
	    $markers.each(function(){
	        initMarker( $(this), map );
	    });

	    // Center map based on markers.
	    centerMap( map );

	    //marker cluster
	    //markerCluster( map.markers, map )

	    // Return map instance.
	    return map;
	}

	function initMarker( $marker, map ) {

	    // Get position from marker.
	    var lat = $marker.data('lat');
	    var lng = $marker.data('lng');
	    var latLng = {
	        lat: parseFloat( lat ),
	        lng: parseFloat( lng )
	    };

	    // Create marker instance.
	    var marker = new google.maps.Marker({
	        position : latLng,
	        map: map,
	        icon: {
				url: "https://gatewaycapital.com.au/wp-content/themes/gatewaycapital/shared/images/marker.png",
				scaledSize: new google.maps.Size(30, 30), // scaled size
			    origin: new google.maps.Point(0,0), // origin
			    anchor: new google.maps.Point(15, 15) // anchor
			}
	    });

	    // Append to reference for later use.
	    map.markers.push( marker );

	    // If marker contains HTML, add it to an infoWindow.
	    if( $marker.html() ){

	        // Create info window.
	        var infowindow = new google.maps.InfoWindow({
	            content: $marker.html()
	        });

	        // Show info window when marker is clicked.
	        google.maps.event.addListener(marker, 'click', function() {
	            infowindow.open( map, marker );
	        });

	        google.maps.event.addListener(map, 'click', function(event) {
		        if (infowindow) {
		            infowindow.close();
		        }
			});

	    }


	    google.maps.event.addListener(marker, 'click', function() {
	    	//map.setZoom(16);
			map.panTo(this.getPosition());

			var lat = this.getPosition().lat();
			var lng = this.getPosition().lng();

			console.log(lat + ' and ' + lng);
		});  
	}

	function centerMap( map ) {

	    // Create map boundaries from all map markers.
	    var bounds = new google.maps.LatLngBounds();
	    map.markers.forEach(function( marker ){
	        bounds.extend({
	            lat: marker.position.lat(),
	            lng: marker.position.lng()
	        });
	    });

	    // Case: Single marker.
	    if( map.markers.length == 1 ){
	        map.setCenter( bounds.getCenter() );

	    // Case: Multiple markers.
	    } else{
	        map.fitBounds( bounds );
	    }
	}

	function markerCluster( markers, map ) {
		var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://dev.nosetotail.com.au/gateway/wp-content/themes/gatewaycapital/shared/images/group'});
		console.log( markers );
	}


	$('.acf-map').each(function(){
        var map = initMap( $(this) );
    });


	
});