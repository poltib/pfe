var style_festival = [
  {
    "featureType": "administrative",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "off" }
    ]
  },{
    "featureType": "landscape",
    "stylers": [
      { "color": "#90A1BF" }
    ]
  },{
    "featureType": "water",
    "stylers": [
      { "visibility": "on" },
      { "color": "#ffffff" }
    ]
  }
];

var style_festival_zoomed = [
  {
    "featureType": "administrative",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "poi",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "transit",
    "stylers": [
      { "visibility": "on" }
    ]
  },{
    "featureType": "road",
    "stylers": [
      { "visibility": "simplified" }
    ]
  },{
      featureType: "water",
      stylers:[
          {visibility: "off"}
      ]
  },
  {
      featureType: "landscape",
      stylers:[
          {visibility: "off"}
      ]
  }
];

var styled_festival = new google.maps.StyledMapType(style_festival, {name: "Festival style"});
var styled_festival_zoomed = new google.maps.StyledMapType(style_festival_zoomed, {name: "Festival style zoomed"});

//Create the variables that will be used within the map configuration options.
//The latitude and longitude of the center of the map.
var festivalMapCenter = new google.maps.LatLng(44.465332670616895, 26.143829190988);
//The degree to which the map is zoomed in. This can range from 0 (least zoomed) to 21 and above (most zoomed).
var festivalMapZoom = 14;
var festivalMapZoomMax = 18;
var festivalMapZoomMin = 4;

//These options configure the setup of the map. 
var festivalMapOptions = { 
      center: festivalMapCenter, 
          zoom: festivalMapZoom,
      maxZoom:festivalMapZoomMax,
      scrollwheel:false,
      minZoom:festivalMapZoomMin,
      panControl: false,
      backgroundColor: "rgba(0,0,0,0)",
      mapTypeControl: false,
       mapTypeControlOptions: {
        mapTypeIds: [ 'map_styles_festival', 'map_styles_festival_zoomed']
       }
};

var trajet = [[44.465332670616895, 26.143829190988], [44.466098355169805, 26.1465114000029], [44.4652867292244, 26.1474555375761], [44.4646435459323, 26.1463826539702], [44.4643066375701, 26.145588720101802]]
;

//Create the variable for the main map itself.
var festivalMap;
//When the page loads, the line below calls the function below called 'loadFestivalMap' to load up the map.
google.maps.event.addDomListener(window, 'load', loadFestivalMap);


//THE MAIN FUNCTION THAT IS CALLED WHEN THE WEB PAGE LOADS--------------------------------------------------------------------------------
function loadFestivalMap() {
  
//The variable to hold the map was created above.The line below creates the map, assigning it to this variable. The line below also loads the map into the div with the id 'festival-map' (see code within the 'body' tags below), and applies the 'festivalMapOptions' (above) to configure this map. 
festivalMap = new google.maps.Map(document.getElementById("race-map"), festivalMapOptions); 

//Assigning the two map styles defined above to the map.
festivalMap.mapTypes.set('map_styles_festival', styled_festival);
festivalMap.mapTypes.set('map_styles_festival_zoomed', styled_festival_zoomed);
//Setting the one of the styles to display as default as the map loads.
festivalMap.setMapTypeId('map_styles_festival_zoomed');

for(var i=0; i < trajet.length; ++i){
     trajet[i] = new google.maps.LatLng(Number(trajet[i][0]),
                                        Number(trajet[i][1]));
}

var polyOptions = {
    strokeColor: 'rgb(210,79,57)',
    strokeWeight: 6,
    path: trajet
  };

var polyline =new google.maps.Polyline(polyOptions);
polyline.setMap(festivalMap);




//Continuously listens out for when the zoom level changes. This includs when the map zooms when a marker is clicked.
google.maps.event.addListener(festivalMap, "zoom_changed", function() {
  var newZoom = festivalMap.getZoom();
  //If the map is zoomed in, the switch to the style that shows the higher level of detail.
  if (newZoom > 6){
    festivalMap.setMapTypeId('map_styles_festival_zoomed');
      }
  //Otherwise the map must be zoomed out, so use the style with the lower level of detail.
  else {
    festivalMap.setMapTypeId('map_styles_festival');
  }

}); 
}

