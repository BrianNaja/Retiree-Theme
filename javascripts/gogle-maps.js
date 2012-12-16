var directionsDisplay;
   var directionsService = new google.maps.DirectionsService();
   var map;

   function initialize() {
	   directionsDisplay = new google.maps.DirectionsRenderer();
  var chicago = new google.maps.LatLng(40.440625 ,-79.995886);//Pittsburgh LatLng
  var myOptions = {
    zoom:13,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    center: chicago
  }
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  directionsDisplay.setMap(map);
  directionsDisplay.setPanel(document.getElementById("directionsPanel"));
  }

  	function calcRoute() {
	  	var start = document.getElementById("start").value;
	  	var end = document.getElementById("end").value;
	  	var request = {
		  	origin:start,
		  	destination:end,
		  	travelMode: google.maps.TravelMode.DRIVING
		  };
		  directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(result);
    }
  });
}