var viewport = {
	width : $(window).width(),
	height : $(window).height()
};
var height = ((80.0 / 100.0) * viewport.height);

google.maps.visualRefresh = true;
var map;
var infowindow;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var isGeoAvailable = null;
var SRM_loc = new google.maps.LatLng(12.823424, 80.042367);
var eventLoc = [["SRM University Tech-Park", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.824404", "80.045258"], ["Bio-Tech Block", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.824708", "80.044297"], ["TP Ganesan Auditorium", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.824369", "80.046471"], ["Java-Green Cafe", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.822974", "80.04457"], ["Architecture Block", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.824072", "80.044292"], ["MBA Block", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.823533", "80.044013"], ["University Building", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.823047", "80.04283"], ["Main Block", "SRM University, SRM Nagar", "Kattankulathur", "Chennai", "603203", "12.820787", "80.038895"]];

function initialize() {
	$("#map-canvas").css("height", height);
	directionsDisplay = new google.maps.DirectionsRenderer();
	var mapOptions = {
		zoom : 15,
		center : SRM_loc,
		mapTypeId : google.maps.MapTypeId.ROADMAP
	};
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	setMarkers(eventLoc);
	directionsDisplay.setMap(map);
	isGeoAvailable = getGeoLocation();
}

function getGeoLocation() {
	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			addPointMarker(pos, "you r here", "img/circle.png");
		}, function() {
			handleNoGeolocation(true);
		}, {
			enableHighAccuracy : false,
			timeout : 10000,
			maximumAge : 120000
		});

		return true;
	} else {
		handleNoGeolocation(false);
		return false;
	}
}

function setMarkers(eventLoc) {
	for (var i in eventLoc) {
		var name = eventLoc[i][0];
		var address = eventLoc[i][1];
		var city = eventLoc[i][2];
		var state = eventLoc[i][3];
		var zip = eventLoc[i][4];
		var lat = eventLoc[i][5];
		var lng = eventLoc[i][6];
		event_latlng = new google.maps.LatLng(lat, lng);
		var content = "<div class='map-content'><h3>" + name + "</h3>" + address + "<br />" + city + ", " + state + " " + zip + "</div>";
		addPointMarker(event_latlng, content);
	}
}

function addPointMarker(markerLoc, contentString, iconURL) {
	var marker = new google.maps.Marker({
		position : markerLoc,
		map : map,
		icon : iconURL,
		animation : google.maps.Animation.DROP
	});

	google.maps.event.addListener(marker, 'click', function() {
		if (infowindow)
			infowindow.close();
		infowindow = new google.maps.InfoWindow({
			content : contentString
		});
		infowindow.open(map, marker);
		routeMyWay(marker);
	});
}

function routeMyWay(marker) {
	if (isGeoAvailable) {
		navigator.geolocation.getCurrentPosition(function(position) {
			var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
			var start = pos;
			var end = marker.getPosition();
			var request = {
				origin : start,
				destination : end,
				travelMode : google.maps.DirectionsTravelMode.DRIVING
			};
			directionsService.route(request, function(response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setDirections(response);
				}
			});
		}, function() {
			handleNoGeolocation(true);
		}, {
			enableHighAccuracy : false,
			timeout : 10000,
			maximumAge : 120000
		});

	}

}

google.maps.event.addDomListener(window, 'load', initialize);
