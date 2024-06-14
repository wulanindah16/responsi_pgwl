@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="{{ url('leaflet-search/leaflet-search.css') }}">
<link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
<link rel="stylesheet" href="assets/plugins/leaflet-routing/leaflet-routing-machine.css" />

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
        }

        #map {
            height: calc(100vh - 56px);
            width: 100%;
            margin: 0;
        }
    </style>
@endsection


@section('content')
    <div id="map"></div>
@endsection

@section('script')
    <script src="{{ url('leaflet-search/leaflet-search.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fuse.js/1.2.2/fuse.min.js"></script>
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js">
    </script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="frontend/leaflet-routing/leaflet-routing-machine.js"></script>
        <script src="frontend/leaflet-routing/leaflet-routing-machine.min.js"></script>
    <script>
        //Map
        var map = L.map('map').setView([-8.599527615163064, 119.88444242903452], 10)

        //Basemap
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Create a GeoJSON layer for polygon data
        var Mamba = L.geoJson(null, {
            style: function(feature) {
                // Adjust this function to define styles based on your polygon properties
                var value = feature.properties.WADMKC; // Change this to your actual property name
                return {
                    fillColor: getColor(value),
                    weight: 2,
                    opacity: 1,
                    color: "red",
                    dashArray: "3",
                    fillOpacity: 0.7,
                };
            },
            onEachFeature: function(feature, layer) {
                // Adjust the popup content based on your polygon properties
                var content =
                    "KECAMATAN: " +
                    feature.properties.WADMKC +
                    "<br>";

                layer.bindPopup(content);
            },
        });

        // Function to generate a random color //
        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Load GeoJSON //
        fetch('geojson/mamba.geojson')
            .then(response => response.json())
            .then(data => {
                L.geoJSON(data, {
                    style: function(feature) {
                        return {
                            opacity: 1,
                            color: "black",
                            weight: 0.5,
                            fillOpacity: 0.1,
                            fillColor: getRandomColor(),
                        };
                    },
                    onEachFeature: function(feature, layer) {
                        var content = "Kecamatan : " + feature.properties.WADMKC;
                        layer.on({
                            click: function(e) {
                                // Fungsi ketika objek diklik
                                layer.bindPopup(content).openPopup();
                            },
                            mouseover: function(e) {
                                // Tidak ada perubahan warna saat mouse over
                                layer.bindPopup("Kecamatan : " + feature.properties.WADMKC, {
                                    sticky: false
                                }).openPopup();
                            },
                            mouseout: function(e) {
                                // Fungsi ketika mouse keluar dari objek
                                layer.resetStyle(e
                                    .target); // Mengembalikan gaya garis ke gaya awal
                                map.closePopup(); // Menutup popup
                            },
                        });
                    }

                }).addTo(map);
            })
            .catch(error => {
                console.error('Error loading the GeoJSON file:', error);
            });

        /* GeoJSON Point */
        var point = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<strong>Nama:</strong> " + feature.properties.name + "<br>" +
                    "<div style='text-align: justify;'><strong>Deskripsi:</strong> " + feature.properties.description + "<br>" +
                    "<strong>Foto:</strong> <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='img-thumbnail'alt='...'>" +
                    "<br>";
                layer.on({
                    click: function(e) {
                        point.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        point.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.points') }}", function(data) {
            console.log(data);
            point.addData(data);
            map.addLayer(point);

            var restLayers = L.geoJson(data, {
                pointToLayer: function(feature, latlng) {

                    var props = L.Util.extend({
                            'name': '',
                            'description': '',
                            'image': ''
                        }, feature.properties),
                        textPopup = L.Util.template(
                            "<h3>{name}</h3><p>{description}</p><img src='{{ asset('storage/images/') }}/{image}' class='img-thumbnail' alt='{name}'>",
                            props),
                        style = {
                            radius: 5,
                            opacity: 0.8,
                            fillColor: '#ddd',
                            fillOpacity: 0.8
                        };

                    return L.circleMarker(latlng, style).bindPopup(textPopup);
                }
            }).addTo(map);

            var fuse = new Fuse(data.features, {
                keys: [
                    'properties.name',
                ]
            });

            L.control.search({
                    layer: restLayers,
                    propertyName: 'name',
                    filterData: function(text, records) {
                        var jsons = fuse.search(text),
                            ret = {},
                            key;

                        for (var i in jsons) {
                            key = jsons[i].properties.name;
                            ret[key] = records[key];
                        }

                        return ret;
                    }
                })
                .on('search:locationfound', function(e) {
                    e.layer.openPopup();
                }).addTo(map);
        });

        /* GeoJSON Polyline */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<strong>Nama:</strong> " + feature.properties.name + "<br>" +
                    "<div style='text-align: justify;'><strong>Deskripsi:</strong> " + feature.properties.description + "<br>" +
                    "<strong>Foto:</strong> <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='' alt='' width='200'>";
                layer.on({
                    click: function(e) {
                        polyline.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polylines') }}", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        /* GeoJSON Polygons */
        var polygon = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "<strong>Nama:</strong> " + feature.properties.name + "<br>" +
                    "<div style='text-align: justify;'><strong>Deskripsi:</strong> " + feature.properties.description + "<br>" +
                    "<strong>Foto:</strong> <img src='{{ asset('storage/images/') }}/" + feature.properties.image +
                    "' class='' alt='' width='200'>";
                layer.on({
                    click: function(e) {
                        polygon.bindPopup(popupContent);
                    },
                    mouseover: function(e) {
                        polygon.bindTooltip(feature.properties.name);
                    },
                });
            },
        });
        $.getJSON("{{ route('api.polygons') }}", function(data) {
            polygon.addData(data);
            map.addLayer(polygon);
        });

        //layer control
        var overlayMaps = {
            "Point": point,
            "Polyline": polyline,
            "Polygon": polygon
        }

        var layerControl = L.control.layers(null, overlayMaps).addTo(map);
        var locateControl = L.control
            .locate({
                position: "topleft",
                drawCircle: true,
                follow: true,
                setView: true,
                keepCurrentZoomLevel: false,
                markerStyle: {
                    weight: 1,
                    opacity: 0.8,
                    fillOpacity: 0.8,
                },
                circleStyle: {
                    weight: 1,
                    clickable: false,
                },
                icon: "fas fa-crosshairs",
                metric: true,
                strings: {
                    title: "Click for Your Location",
                    popup: "You're here. Accuracy {distance} {unit}",
                    outsideMapBoundsMsg: "Not available",
                },
                locateOptions: {
                    maxZoom: 16,
                    watch: true,
                    enableHighAccuracy: true,
                    maximumAge: 10000,
                    timeout: 10000,
                },
            })
            .addTo(map);

            /*Plugin Routing */
           L.Routing.control({
                waypoints: [
                    L.latLng(-8.469461831719146, 120.09249844316379),
                    L.latLng(-8.523712586766832, 120.15254780685707)
                ],
                routeWhileDragging: true,
                position: "topright",
                collapsed: false,
            }).addTo(map);


    </script>
@endsection
