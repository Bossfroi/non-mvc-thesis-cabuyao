       <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
             <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">
    function initialize() {
        var loc = {};
        var geocoder = new google.maps.Geocoder();
        if(google.loader.ClientLocation) {
            loc.lat = google.loader.ClientLocation.latitude;
            loc.lng = google.loader.ClientLocation.longitude;

            var latlng = new google.maps.LatLng(loc.lat, loc.lng);
            geocoder.geocode({'latLng': latlng}, function(results, status) {
                if(status == google.maps.GeocoderStatus.OK) {
                    alert(results[0]['formatted_address']);
                };
            });
        }
    }

    google.load("maps", "3.x", {other_params: "sensor=false", callback:initialize});
