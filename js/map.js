var map = L.map('map').setView(['41.28505', '-7.73947'], 18);

L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
    maxZoom: 25,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
}).addTo(map);

var wmsLayer = L.tileLayer.wms("http://127.0.0.1:8080/geoserver/orto_trigo/wms", {
    layers: 'orto_trigo:ortofotog',
    format: 'image/png',
    minZoom: 0,
    maxZoom: 25,
    transparent: true
});
map.addLayer(wmsLayer);

/*var myIcon = L.icon({
iconUrl: 'logos/marker.png',
iconSize: [20, 20],
iconAnchor: [20, 20],
popupAnchor: [-3, -76]
});
L.marker([41.284553, -7.739403], {icon: myIcon}).addTo(map);


// loading GeoJSON file - Here my html and usa_adm.geojson file resides in same folder
$.getJSON("http://localhost/test/jQuery-File-Upload/data/GpsCoordinates_tab.geojson",function(data){
// L.geoJson function is used to parse geojson file and load on to map
L.geoJson(data  ,{
pointToLayer: function(feature,latlng){
  return L.marker(latlng,{icon: myIcon});
}
}).addTo(map);
});*/