jQuery(document).ready(function($) {
	/**  ------------ Maps -------------------
  **/

     function initializeMap() {
     	
        var styles = [{
            "featureType": "administrative",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "saturation": -100
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "saturation": -100
            }, {
                "lightness": 40
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "visibility": "on"
            }, {
                "saturation": -10
            }, {
                "lightness": 30
            }]
        }, {
            "featureType": "landscape.man_made",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }, {
                "saturation": -60
            }, {
                "lightness": 10
            }]
        }, {
            "featureType": "landscape.natural",
            "elementType": "all",
            "stylers": [{
                "visibility": "simplified"
            }, {
                "saturation": -60
            }, {
                "lightness": 60
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }, {
                "saturation": -100
            }, {
                "lightness": 60
            }]
        }, {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }, {
                "saturation": -100
            }, {
                "lightness": 60
            }]
        }];

        var styledMap = new google.maps.StyledMapType(styles, {
            name: "Styled Map"
        });

        var mapOptions = {
            scaleControl: true,
            scrollwheel: false,
            center: new google.maps.LatLng(latitude, longitude),
            zoom: phonerepair_zoom,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }

        };

        var map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');
        var image = window.location.origin + window.location.pathname + 'wp-content/themes/logistica/images/marker_icon.png';
        var marker = new google.maps.Marker({
            map: map,
            icon: image,
            position: map.getCenter()
        });
        
        var infowindow = new google.maps.InfoWindow();
        if( companyname !=  ""){
          companyname = "<h4>" + companyname + "</h4>";
        }
        infowindow.setContent( "<div class='map-description'>" + companyname + " " + description + "</div>" );
        
        infowindow.open(map, marker);

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }
   if ($('#map-canvas').length > 0) {
    
    var latitude = $('#map-canvas').data('latitude'),
        longitude = $('#map-canvas').data('longitude'),
        phonerepair_zoom = $('#map-canvas').data('zoom'),
        companyname = $('#map-canvas').data('companyname'),
        imagepath = $('#map-canvas').data('imagepath'),
        description = $('#map-canvas').data('decription');
    if (imagepath=="") {
        var image_markup = '';
    } else{
        var image_markup = '<div class="map-img"><img src="' + imagepath + '" alt="" width="320px"></div>';
    }



    google.maps.event.addDomListener(window, 'load', initializeMap);
  }
  /*---------------caro--------------*/
 
 var $direction ;
  if ( $('html').attr('dir') == 'rtl' ) {
  $direction = true;
  }else {
  	$direction = false;
  }
	$('.carousel').owlCarousel({
		items: 1,	
		rtl : $direction,
    	margin:10,
			autoplay:true,
   		autoplayTimeout:5000,
	});
	
	 $Bitmnumber = $(".carousel_blog").data("numberitem");
	 $Bmargin = $(".carousel_blog").data("margin");

	$('.carousel_blog').owlCarousel({
		items: $Bitmnumber,
		margin: $Bmargin,
		rtl : $direction,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		autoplay:true,
   		autoplayTimeout:5000,
   		responsiveClass:true,
    	responsive:{
        0:{
            items:1,
            nav:true,
            rtl : $direction,
        },
        600:{
            items:2,
            rtl : $direction,
            nav:false
        },
        1000:{
            items:$Bitmnumber,
            nav:true,
            rtl : $direction,
            loop:false,
        }
       }
	});
	
	$Pitmnumber = $(".carousel_portfolio").data("numberitem");
	 $Pmargin = $(".carousel_portfolio").data("margin");

	$('.carousel_portfolio').owlCarousel({
		items: $Pitmnumber,
		margin: $Pmargin,
		rtl : $direction,
		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		autoplay:true,
   		autoplayTimeout:5000,
   		responsiveClass:true,
    	responsive:{
        0:{
            items:1,
            nav:true,
            rtl : $direction,
        },
        600:{
            items:2,
            rtl : $direction,
            nav:false
        },
        1000:{
            items:$Pitmnumber,
            rtl : $direction,
            nav:true,
            loop:false,
        }
       }
	});
	var show = $(".testimonials-box").data("show");
	$('.testimonials').owlCarousel({
		items: show,
		rtl : $direction,
		 pagination : true,
	});

    var itemstoshow = $('.carousel_client').data("columns");
	$('.carousel_client').owlCarousel({
		items: itemstoshow,
		nav:true,
		rtl : $direction,
  		margin:20,
  		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		autoplay:true,
    	autoplayTimeout:5000,
    	responsiveClass:true,
    	responsive:{
        0:{
            items:1,
            rtl : $direction,
            nav:true,
        },
        600:{
            items:2,
            rtl : $direction,
            nav:false
        },
        1000:{
            items:itemstoshow,
            rtl : $direction,
            nav:true,
            loop:false,
        }
       }
	});
	
	$('.wd-gallery-images-holder').owlCarousel({
		items: 1,
		nav:true,
		rtl : $direction,
  		margin:10,
  		navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
		autoplay:true,
    	autoplayTimeout:5000,
	});
});