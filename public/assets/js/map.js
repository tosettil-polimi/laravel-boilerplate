google.maps.event.addDomListener(window, 'load', init);

function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    let mapOptions = {
        // How zoomed in you want the map to start at (always required)
        zoom: 12,

        scrollwheel: false,
        disableDefaultUI: true,

        // The latitude and longitude to center the map (always required)
        center: new google.maps.LatLng(45.794790, 9.191986), // New York

        // How you would like to style the map.
        // This is where you would paste any style found on Snazzy Maps.

        /* styles: [


            {
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "hue": "#ff0000"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#888888"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                    "hue": "#ff0000"
                }]
            }, {
                "featureType": "administrative",
                "elementType": "labels.text",
                "stylers": [{
                    "color": "#6e6e6e"
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "administrative.country",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#6f6b6b"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "labels.text",
                "stylers": [{
                    "color": "#c5c5c5"
                }]
            }, {
                "featureType": "landscape.natural",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#eee"
                }]
            }, {
                "featureType": "landscape.natural.landcover",
                "elementType": "all",
                "stylers": [{
                    "hue": "#ff0000"
                }]
            }, {
                "featureType": "landscape.natural.landcover",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ff0000"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "off"
                }, {
                    "color": "#909090"
                }]
            }, {
                "featureType": "poi",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "poi.medical",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            }, {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e5e5e5"
                }]
            }, {
                "featureType": "poi.place_of_worship",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#ff0000"
                }]
            }, {
                "featureType": "poi.sports_complex",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#f7f7f7"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "gamma": 7.18
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road.local",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [{
                    "gamma": 0.48
                }]
            }, {
                "featureType": "transit.station",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#aadcf7"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }
        ]
         */
    };

    // Get the HTML DOM element that will contain your map
    // We are using a div with id="map" seen below in the <body>
    //var mapElement = document.getElementById('gmap');
    var mapElement2 = document.getElementById('gmap-contact');

    // Create the Google Map using our element and options defined above
    //var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    /*var marker = new google.maps.Marker({
        position: new google.maps.LatLng(45.794790, 9.191986),
        map: map,
        title: 'Moiana SNC'
        //icon: 'assets/img/map.png'
        //animation: google.maps.Animation.BOUNCE
    });*/

    if (mapElement2 !== null) {
        var map2 = new google.maps.Map(mapElement2, mapOptions);
        // Let's also add a marker while we're at it
        var marker2 = new google.maps.Marker({
            position: new google.maps.LatLng(45.794790, 9.191986),
            map: map2,
            title: 'Moiana SNC'
            //icon: 'assets/img/map.png'
            //animation: google.maps.Animation.BOUNCE
        });
    }
}
