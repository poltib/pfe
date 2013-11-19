var map, path = new google.maps.MVCArray(),
    service = new google.maps.DirectionsService(), poly;

google.maps.event.addDomListener(window, 'load', loadFestivalMap);


function loadFestivalMap() {
  var myOptions = {
    zoom: 17,
    center: new google.maps.LatLng(37.2008385157313, -93.2812106609344),
    panControl: false,
    backgroundColor: "rgba(0,0,0,0)",
    mapTypeControl: false,
    disableDoubleClickZoom: true,
    scrollwheel: false,
    draggableCursor: "crosshair"
  }

  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  poly = new google.maps.Polyline({ map: map });
  google.maps.event.addListener(map, "click", function(evt) {
    if (path.getLength() === 0) {
      path.push(evt.latLng);
      poly.setPath(path);
    } else {
      service.route({
        origin: path.getAt(path.getLength() - 1),
        destination: evt.latLng,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
      }, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          for (var i = 0, len = result.routes[0].overview_path.length;
              i < len; i++) {
            path.push(result.routes[0].overview_path[i]);
          }
        }
      });
    }
  });
}