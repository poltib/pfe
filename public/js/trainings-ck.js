function loadFestivalMap(){var e={zoom:14,center:new google.maps.LatLng(50.633333,5.566667),panControl:!1,backgroundColor:"rgba(0,0,0,0)",mapTypeControl:!1,disableDoubleClickZoom:!0,scrollwheel:!1,draggableCursor:"crosshair"};map=new google.maps.Map(document.getElementById("map_canvas"),e);poly=new google.maps.Polyline({map:map,strokeColor:"rgb(244,129,64)",opacity:.4});google.maps.event.addListener(map,"click",function(e){if(path.getLength()===0){path.push(e.latLng);poly.setPath(path)}else service.route({origin:path.getAt(path.getLength()-1),destination:e.latLng,travelMode:google.maps.DirectionsTravelMode.WALKING},function(e,t){if(t==google.maps.DirectionsStatus.OK)for(var n=0,r=e.routes[0].overview_path.length;n<r;n++){path.push(e.routes[0].overview_path[n]);allPath=poly.getPath();console.log(allPath.length)}})})}var map,path=new google.maps.MVCArray,service=new google.maps.DirectionsService,poly,allPath;google.maps.event.addDomListener(window,"load",loadFestivalMap);