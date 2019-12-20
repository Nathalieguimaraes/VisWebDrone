<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <title>Example Leaflet</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
  </head> 
  <style>
    body {
      padding: 0;
      margin: 0;
    }
    html, body, #map {
      height: 100%;
      width: 100%;
    }
  </style>

  <body>
    <div id="map"></div>

    <?php 
      include 'C:\xampp\htdocs\test\jQuery-File-Upload\server\php\map_leaflet_par.php';
    ?>

    <script src="//cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>

    var map = L.map('map').setView(['<?php echo $lat; ?>','<?php echo $lon; ?>'], 20);

    L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
      maxZoom: 25,
      subdomains:['mt0','mt1','mt2','mt3']
    }).addTo(map);

    var wmsLayer= L.tileLayer.wms("http://127.0.0.1:8080/geoserver/ortofoto/wms", {
        layers: 'ortofoto:ortofotog',
        format: 'image/png',
        minZoom: 0,
        maxZoom: 25,
        transparent: true
    });
    map.addLayer(wmsLayer);

    // loading GeoJSON file - Here my html and usa_adm.geojson file resides in same folder
    $.getJSON("http://localhost/test/jQuery-File-Upload/orthomap/line_measure.geojson",function(data){
    // L.geoJson function is used to parse geojson file and load on to map
    L.geoJson(data).addTo(map);
    });

    </script>
    
</html>