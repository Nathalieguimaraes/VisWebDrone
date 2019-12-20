<!DOCTYPE HTML>
<!--
/*
 * jQuery File Upload Plugin jQuery UI Demo
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2013, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
-->
<html lang="en">

<head>
    <!-- Force latest IE rendering engine or ChromeFrame if installed -->
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VisWebDrone</title>
    <meta name="description"
        content="File Upload widget with multiple file selection, drag&amp;drop support, progress bars, validation and preview images, audio and video for jQuery. Supports cross-domain, chunked and resumable file uploads and client-side image resizing. Works with any server-side platform (PHP, Python, Ruby on Rails, Java, Node.js, Go etc.) that supports standard HTML form file uploads.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI styles -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/dark-hive/jquery-ui.css"
        integrity="sha384-ufZtQaOYGuy/CibAC5jmelOpBu3H78Js7HrXSLo4LGccHUrGGHXt+uaTcDbio3kI" crossorigin="anonymous">
    <!-- Demo styles -->
    <link rel="stylesheet" href="css/jquery-ui-demo.css">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/jquery-ui-demo-ie8.css">
    <![endif]-->
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript>
        <link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
    <link href="https://fonts.googleapis.com/css?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/exif-js"></script>
    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
        integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
        crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
        integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
        crossorigin=""></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!--Map-->
    <link rel="stylesheet" href="css/map.css">

    <style>
        body {
            font-family: "Lato", sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 2;
            top: 0;
            left: 0;
            background-color: #fff;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            border-bottom: 2px solid grey;
            box-shadow: 2px 2px 3px grey;
        }

        .sidenav a {
            padding: 2px 2px 2px 5px;
            text-decoration: none;
            font-size: 15px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 15px;
            border-bottom: 2px solid grey;
            box-shadow: 2px 2px 3px grey;
            font-family: 'Rajdhani', sans-serif;
            max-width: 100%;
            max-height: 100%;
        }

        .text_logo {
            display: inline-block;
            background-image: url("logos/viswebdrone.png");
            background-repeat: no-repeat;
            width: 15em;
            height: 4em;
            margin-top: 1em;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        body {
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="inner">
            <div class="bolas">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- preloader -->

    <!--lateral bar-->
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div id="box">
            <div id="tags_menu">
                <ul>
                    <li class="tag1"></li>
                    <li class="tag2"></li>
                    <li class="tag3"></li>
                </ul>
                <div class="container1" style="display:none;">
                    <!-- The file upload form used as target for the file upload widget -->
                    <form id="fileupload" action="https://jquery-file-upload.appspot.com/" method="POST"
                        enctype="multipart/form-data" class="tags_content">
                        <!-- Redirect browsers with JavaScript disabled to the origin page -->
                        <noscript><input type="hidden" name="redirect"
                                value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
                        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                        <div class="fileupload-buttonbar">
                            <div class="fileupload-buttons">
                                <!-- The fileinput-button span is used to style the file input field as button -->
                                <button class="fileinput-button uploadButtons">
                                    <span>Add Files</span>
                                    <input type="file" name="files[]" multiple>
                                </button>
                                <button type="submit" class="start uploadButtons">Start upload</button>
                                <button type="reset" class="cancel uploadButtons">Cancel upload</button>
                                <button type="button" class="delete uploadButtons">Delete</button>
                                <input type="checkbox" class="toggle">
                                <!-- The global file processing state -->
                                <span class="fileupload-process"></span>
                            </div>
                            <!-- The global progress state -->
                            <div class="fileupload-progress fade" style="display:none">
                                <!-- The global progress bar -->
                                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                <!-- The extended global progress state -->
                                <div class="progress-extended">&nbsp;</div>
                            </div>
                        </div>
                        <!-- The table listing the files available for upload/download -->
                        <table role="presentation">
                            <tbody class="files"></tbody>
                        </table>
                    </form>
                </div>

                <div class="container2" style="display:none;">
                    <form action="server/php/formdata.php" method="post">
                        <div class="pretty p-default p-has-focus">
                            <input type="checkbox" name="ortofoto" id="ortofoto" class="check" />
                            <div class="state">
                                <label>Orthophoto Mosaic</label>
                            </div>
                        </div>
                        <div class="pretty p-default p-has-focus">
                            <input type="checkbox" name="nuvempontos" id="nuvempontos" class="check" />
                            <div class="state">
                                <label>Point Cloud</label>
                            </div>
                        </div>
                        <input type="submit" value="Start Processing" class="processButton" name="SubmitButton"
                            id="subm" />
                    </form>
                </div>

                <div class="container3" style="display:none;">     
                    <div id="containerScript">
                        <div id="responsecontainer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main">
        <a href="index.php">
            <div class="text_logo"></div>
        </a>
        <p>Visual Web Platform for Drone-Based Imagery Analysis</p>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "40%";
            document.getElementById("main").style.marginLeft = "40%";
            document.getElementById("map").style.marginLeft = "40%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("map").style.marginLeft = "0";
        }
    </script>

    <div id="map"></div>
    <div style="display:none;">
        <?php 
            include 'server/php/map_leaflet_par.php';
        ?>
    </div>

    <script src="//cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script>
        var map = L.map('map').setView(['<?php echo $lat; ?>','<?php echo $lon; ?>'], 18);

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

/*      var myIcon = L.icon({
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
        });  */
    </script>



    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            {% if (window.innerWidth > 480 || !o.options.loadImageFileTypes.test(file.type)) { %}
                <p class="name">{%=file.name%}</p>
            {% } %}
            <strong class="error"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress"></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="start uploadButtons" disabled>Start</button>
            {% } %}
            {% if (!i) { %}
                <button class="cancel uploadButtons">Cancel</button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            {% if (window.innerWidth > 480 || !file.thumbnailUrl) { %}
                <p class="name">
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                </p>
            {% } %}
            {% if (file.error) { %}
                <div><span class="error">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            <button class="delete uploadButtons" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>Delete</button>
            <input type="checkbox" name="delete" value="1" class="toggle">
        </td>
    </tr>
{% } %}
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"
        integrity="sha384-Dziy8F2VlJQLMShA6FHWNul/veM9bCkRUaLqr199K94ntO5QUrLJBEbYegdSkkqX" crossorigin="anonymous">
    </script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- blueimp Gallery script -->
    <script src="https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="js/jquery.fileupload-validate.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="js/jquery.fileupload-ui.js"></script>
    <!-- The File Upload jQuery UI plugin -->
    <script src="js/jquery.fileupload-jquery-ui.js"></script>
    <!-- The main application script -->
    <script src="js/main.js"></script>
    <script>
        // Initialize the jQuery UI theme switcher:
        $('#theme-switcher').change(function () {
            var theme = $('#theme');
            theme.prop(
                'href',
                theme.prop('href').replace(
                    /[\w\-]+\/jquery-ui.css/,
                    $(this).val() + '/jquery-ui.css'
                )
            );
        });
    </script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
    <!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
</body>

</html>