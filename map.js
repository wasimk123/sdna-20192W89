var map;

function createMap () {
	
	var myLatLng = { lat: 32.0947997, lng: 34.8242816 };
	
	var options = {
		center: myLatLng,
		mapTypeId: 'terrain',
		zoom: 16
		
	};
	
	map = new google.maps.Map(document.getElementById('map'), options);
	
		var marker = new google.maps.Marker({
		position: myLatLng,
	map: map,
	title:  "מגדל ב.ס.ר 3, קומה 20 רח' כנרת 5, בני ברק"
	});
}
