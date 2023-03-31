function initMap() {
	// Create a map object and specify the DOM element for display.
	var map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 37.7749, lng: -122.4194}, // San Francisco coordinates
		zoom: 12 // Zoom level
	});

	// Create a marker and set its position.
	var marker = new google.maps.Marker({
		map: map,
		position: {lat: 37.7749, lng: -122.4194}, // San Francisco coordinates
		title: 'San Francisco'
	});
}