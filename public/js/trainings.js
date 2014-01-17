var map, path = new google.maps.MVCArray(),
    service = new google.maps.DirectionsService(), 
    poly,
    allPath;

google.maps.event.addDomListener(window, 'load', loadFestivalMap);

var addElement = function(){
    var newDiv = document.createElement('div');
    var newDiv2 = document.createElement('div');
    var newDiv3 = document.createElement('div');
    var saveContent = document.createTextNode("save");
    var beforeContent = document.createTextNode("before");
    var closeContent = document.createTextNode("close");

    var beforeButton = newDiv.appendChild(beforeContent);
    var saveButton = newDiv2.appendChild(saveContent);
    var closeButton = newDiv3.appendChild(closeContent);

    my_div = document.getElementById("map_canvas");
    parentMy_div = my_div.parentNode;
    parentMy_div.insertBefore(beforeButton, my_div);
    parentMy_div.insertBefore(saveButton, my_div);
    parentMy_div.insertBefore(closeButton, my_div);
  }


function loadFestivalMap() {
  var myOptions = {
    zoom: 14,
    center: new google.maps.LatLng(50.633333, 5.566667),
    panControl: false,
    backgroundColor: "rgba(0,0,0,0)",
    mapTypeControl: false,
    disableDoubleClickZoom: true,
    scrollwheel: false,
    draggableCursor: "crosshair"
  }


  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  poly = new google.maps.Polyline({ draggable: true, editable:true, geodesic:false, map: map, strokeColor: 'rgba(244,129,64,0.8)'});
  addElement();
  google.maps.event.addListener(map, "click", function(evt) {
    if (path.getLength() === 0) {
      path.push(evt.latLng);
      poly.setPath(path);
    } else {
      service.route({
        origin: path.getAt(path.getLength() - 1),
        destination: evt.latLng,
        travelMode: google.maps.DirectionsTravelMode.WALKING
      }, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
          for (var i = 0, len = result.routes[0].overview_path.length;
              i < len; i++) {
            path.push(result.routes[0].overview_path[i]);
            allPath = poly.getPath();
            console.log(allPath.length);
          }
        }
      });
    }
  });
}