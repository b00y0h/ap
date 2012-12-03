function load(x,y) {
	if (GBrowserIsCompatible()) {
		// Display the map, with some controls and set the initial location 
		var map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl());
		//map.addControl(new GMapTypeControl());
		map.setCenter(new GLatLng(x,y),13);

		// Set up three markers with info windows 
		var point = new GLatLng(x,y);
		var location = new GMarker(point);
		map.addOverlay(location);
	}
}

