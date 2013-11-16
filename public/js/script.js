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
      { "visibility": "simplified" },
      { "color": "#90A1BF" }
    ]
  },{
      featureType: "water",
      stylers:[
          {visibility: "on"}
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
//The degree to which the map is zoomed in. This can range from 0 (least zoomed) to 21 and above (most zoomed).
var festivalMapZoom = 13;
var festivalMapZoomMax = 18;
var festivalMapZoomMin = 4;


google.load('visualization', '1.0', {'packages':['corechart']});

//Create the variable for the main map itself.
var festivalMap;
var elevator;
var chart;
var infowindow = new google.maps.InfoWindow();
var polyline;
var trajet = [];
var gMarker;
var startPosition;
var sponsorsPosition = [];
var gGeocoder;


//When the page loads, the line below calls the function below called 'loadFestivalMap' to load up the map.
google.maps.event.addDomListener(window, 'load', loadFestivalMap);


//THE MAIN FUNCTION THAT IS CALLED WHEN THE WEB PAGE LOADS--------------------------------------------------------------------------------
function loadFestivalMap() {
var lats = document.getElementsByClassName('lat');

var lons = document.getElementsByClassName('lon');

var startPosition = document.getElementsByClassName('address')[0].firstChild.textContent;

var sponsorsAdress = document.getElementsByClassName('sponsorAddress');

for(var i=0; i < sponsorsAdress.length; ++i){
     sponsorsPosition[i] = [sponsorsAdress[i].firstChild.textContent, 'sponsor'+i];
}

console.log(sponsorsPosition);

var festivalMapCenter = new google.maps.LatLng(lats[150].firstChild.textContent, lons[150].firstChild.textContent);

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

  
//The variable to hold the map was created above.The line below creates the map, assigning it to this variable. The line below also loads the map into the div with the id 'festival-map' (see code within the 'body' tags below), and applies the 'festivalMapOptions' (above) to configure this map. 
festivalMap = new google.maps.Map(document.getElementById("race-map"), festivalMapOptions); 

gGeocoder = new google.maps.Geocoder;

gMarker = new google.maps.Marker( {
      position:festivalMapCenter,
      map:festivalMap
    } );

//Assigning the two map styles defined above to the map.
festivalMap.mapTypes.set('map_styles_festival', styled_festival);
festivalMap.mapTypes.set('map_styles_festival_zoomed', styled_festival_zoomed);
//Setting the one of the styles to display as default as the map loads.
festivalMap.setMapTypeId('map_styles_festival_zoomed');

for(var i=0; i < lats.length; ++i){
     trajet[i] = new google.maps.LatLng(lats[i].firstChild.textContent, lons[i].firstChild.textContent);
}

// Create an ElevationService.
elevator = new google.maps.ElevationService();

// Draw the path, using the Visualization API and the Elevation service.
drawPath();

var setMarker = function( sAddress , gMarker ){
    gGeocoder.geocode({
      address: sAddress,
      region:"BE"
    }, function(aResults, sStatus){
      gMarker.setPosition( aResults[0].geometry.location );
    });
  };

setMarker(startPosition, gMarker);

for(var i=0; i < sponsorsPosition.length; ++i){
     sponsorsPosition[i][1] = new google.maps.Marker( {
        position:festivalMapCenter,
        map:festivalMap,
        icon:{
           url: 'http://pfe/uploads/races/1/sponsors/100x100_crop/522977_399909913394501_164909558_n.jpg',
           size: new google.maps.Size(100, 100),
           origin: new google.maps.Point(0, 0),
           anchor: new google.maps.Point(0, 0)
          },
        shape:{
           coord: [0,0,50],
           type: 'circle'
          },
        zIndex:102
      } );

     //setMarker(sponsorsPosition[i][0], sponsorsPosition[i][1]);
}



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

function drawPath() {

  // Create a new chart in the elevation_chart DIV.
  chart = new google.visualization.ColumnChart(document.getElementById('elevation_chart'));

  var path = trajet;

  // Create a PathElevationRequest object using this array.
  // Ask for 256 samples along that path.
  var pathRequest = {
    'path': path,
    'samples': 256
  }

  // Initiate the path request.
  elevator.getElevationAlongPath(pathRequest, plotElevation);
}




// Takes an array of ElevationResult objects, draws the path on the map
// and plots the elevation profile on a Visualization API ColumnChart.
function plotElevation(results, status) {
  if (status != google.maps.ElevationStatus.OK) {
    return;
  }
  var elevations = results;

  // Extract the elevation samples from the returned results
  // and store them in an array of LatLngs.
  var elevationPath = [];
  for (var i = 0; i < results.length; i++) {
    elevationPath.push(elevations[i].location);
  }





  // Display a polyline of the elevation path.
  var pathOptions = {
    path: elevationPath,
    strokeColor: 'rgb(244,129,64)',
    opacity: 0.4,
    map: festivalMap
  }
  polyline = new google.maps.Polyline(pathOptions);

  // Extract the data from which to populate the chart.
  // Because the samples are equidistant, the 'Sample'
  // column here does double duty as distance along the
  // X axis.
  var data = new google.visualization.DataTable();
  data.addColumn('string', 'Sample');
  data.addColumn('number', 'Elevation');
  for (var i = 0; i < results.length; i++) {
    data.addRow(['', elevations[i].elevation]);
  }

  // Draw the chart using the data within its DIV.
  document.getElementById('elevation_chart').style.width = 'auto';
  chart.draw(data, {
    chartType: 'LineChart',
    height: 150,
    colors: ['#90A1BF'],
    width: 'auto',
    legend: 'none',
    titleY: 'Elevation (m)',
    titleX: 'Distance'
  });
}

