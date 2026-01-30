// 1. Move the function OUTSIDE the (function($){...}) wrapper 
// or attach it to the window object so Google can see it.

var googleMapInstances = [];

window.initMap = function() {
    var $ = jQuery;
    
    $('.acf-map').each(function(){
        var $el = $(this);
        var $markers = $el.find('.marker');

        const mapOptions = {
            zoom           : $el.data('zoom') || 16,
            mapTypeId      : google.maps.MapTypeId.ROADMAP,
            center         : { lat: -33.9523, lng: 151.0146 },
            disableDefaultUI: true,
            zoomControl    : true,
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

        const map = new google.maps.Map($el[0], mapOptions);

        map.markers = [];
        $markers.each(function(){
            initMarker( $(this), map );
        });

        centerMap( map );
        googleMapInstances.push(map);
    });
};

// Keep your helper functions accessible
function initMarker( $marker, map ) {
    var lat = $marker.data('lat');
    var lng = $marker.data('lng');
    var latLng = { lat: parseFloat(lat), lng: parseFloat(lng) };

    var marker = new google.maps.Marker({
        position : latLng,
        map: map,
        icon: {
            url: "https://gatewaycapital.com.au/wp-content/themes/gatewaycapital/shared/images/marker.png",
            scaledSize: new google.maps.Size(30, 30),
            origin: new google.maps.Point(0,0),
            anchor: new google.maps.Point(15, 15)
        }
    });

    map.markers.push( marker );

    if( $marker.html() ){
        var infowindow = new google.maps.InfoWindow({
            content: $marker.html()
        });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open( map, marker );
        });
    }

    google.maps.event.addListener(marker, 'click', function() {
        map.setZoom(14);
        map.panTo(this.getPosition());

        var lat = this.getPosition().lat();
        var lng = this.getPosition().lng();

        //console.log(lat + ' and ' + lng);
    });  
}

function centerMap( map ) {
    var bounds = new google.maps.LatLngBounds();
    map.markers.forEach(function( marker ){
        bounds.extend(marker.getPosition());
    });

    if( map.markers.length == 1 ){
        map.setCenter( bounds.getCenter() );
    } else {
        map.fitBounds( bounds );
    }
}