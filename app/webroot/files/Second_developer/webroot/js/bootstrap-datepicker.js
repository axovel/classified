jQuery(document).ready(function($){						

		function propertyListMap(){

			var propertyLatLng1 = new google.maps.LatLng(51.5799597, 0.12912340000003496);
			var propertyLatLng2 = new google.maps.LatLng(51.5899597, 0.13812340000003496);
			var propertyLatLng3 = new google.maps.LatLng(51.5595597, 0.11712340000003496);
			var propertyLatLng4 = new google.maps.LatLng(51.5699597, 0.14612340000003496);

			var mapPinOrange = '../assets/images/tla-icon-map-pin-orange.png';
			var mapPinBlack = '../assets/images/tla-icon-map-pin-black.png';

			var mapOptions = {
				zoom:12,
				center: propertyLatLng1,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			propertyMap = new google.maps.Map(document.getElementById("property-map-canvas"), mapOptions);
		
			var marker1 = new google.maps.Marker({
			    map:propertyMap,
			    position: propertyLatLng1,
			    icon: mapPinOrange
			});

			var marker2 = new google.maps.Marker({
			    map:propertyMap,
			    position: propertyLatLng2,
			    icon: mapPinBlack
			});

			var marker3 = new google.maps.Marker({
			    map:propertyMap,
			    position: propertyLatLng3,
			    icon: mapPinBlack
			});

			var marker4 = new google.maps.Marker({
			    map:propertyMap,
			    position: propertyLatLng4,
			    icon: mapPinBlack
			});						

		}

		$('a[href="#map-view"]').on('shown.bs.tab', function(e) {
				propertyListMap();		
		});


		function singlePropertyMap(){

			var propertyLatLng1 = new google.maps.LatLng(51.5799597, 0.12912340000003496);

			var mapPin = '../assets/images/tla-icon-map-pin-orange.png'

			var mapOptions = {
				zoom:12,
				center: propertyLatLng1,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			};

			propertyMap = new google.maps.Map(document.getElementById("single-property-map-canvas"), mapOptions);
		
			var marker1 = new google.maps.Marker({
			    map:propertyMap,
			    position: propertyLatLng1,
			    icon: mapPin
			});

		}

		if ($('#single-property-map-canvas').length) {

			google.maps.event.addDomListener(window, 'load', singlePropertyMap);

		};
});					