$(document).ready(function() {
	$('.gallery-item').magnificPopup({
		delegate: 'a',
		type: 'image'
	});
});

function initMap() {
	// The location of Brookside Pearl’s, B9. Brookside Drive, Westlands, Nairobi
	let brookside = {lat: -1.256372, lng: 36.793474};
	// The map, centered at Brookside Pearl’s, B9. Brookside Drive, Westlands, Nairobi
	let map = new google.maps.Map(
		document.getElementById('map'), {zoom: 12, center: brookside});
	// The marker, positioned at brookside
	let marker = new google.maps.Marker({position: brookside, map: map});
}