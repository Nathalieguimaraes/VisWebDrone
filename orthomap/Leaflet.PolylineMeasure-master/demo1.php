<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo 1 of Leaflet.PolylineMeasure</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <link rel="stylesheet" href="Leaflet.PolylineMeasure.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="Leaflet.PolylineMeasure.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <style>
            body {padding: 0; margin: 0;}
            html, body, #map {height: 100%;}
        </style>
    </head>
    
    <body>
        <div id="map"></div>
            <?php 
                include 'C:\xampp\htdocs\test\jQuery-File-Upload\server\php\map_leaflet_par.php';
            ?>

        <script>
            var layerOsm = new L.TileLayer ('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {maxZoom:25,subdomains:['mt0','mt1','mt2','mt3']});
            var map = new L.Map ('map').addLayer (layerOsm).setView (['<?php echo $lat; ?>','<?php echo $lon; ?>'], 20);
            L.control.scale ({maxWidth:240, metric:true, imperial:false, position: 'bottomleft'}).addTo (map);
            L.control.polylineMeasure ({position:'topleft', unit:'metres', showBearings:true, clearMeasurementsOnStop: false, showClearControl: true, showUnitControl: true}).addTo (map);

            var wmsLayer= L.tileLayer.wms("http://127.0.0.1:8080/geoserver/ortofoto/wms", {
                layers: 'ortofoto:ortofotog',
                format: 'image/png',
                minZoom: 0,
                maxZoom: 25,
                transparent: true
            });
            map.addLayer(wmsLayer);

            // loading GeoJSON file - Here my html and usa_adm.geojson file resides in same folder
            $.getJSON("http://localhost/test/jQuery-File-Upload/orthomap/myfile.geojson",function(data){
            // L.geoJson function is used to parse geojson file and load on to map
            L.geoJson(data).addTo(map);
            });

            
        </script>    
    </body>
</html>
