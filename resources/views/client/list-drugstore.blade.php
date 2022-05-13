@extends('client.layout.index')

@section('content')

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>
		<script src="https://cdn.jsdelivr.net/npm/polyline-encoded@0.0.9/Polyline.encoded.min.js"></script>

	<style>
		* {
			padding: 0;
			margin: 0;
		}
	</style>
  <div class="breadcrumb mt-3"><a href="/" class="no-underline">Trang chủ</a> <a href=""
    class="no-underline">Hieeuk thuốc gần nhà</a></div>

	<div style="position:relative;width: 100%;height: 100vh;">
		<div id="mapid" style="width: 100%; height: 70%"></div>
	</div>

@endsection
@section('js')

    <script>

        var listDrugstore = {!! json_encode($listDrugstore) !!};
        var origin = {!! json_encode($origin) !!};
        var addressOrigin = {!! json_encode($addressOrigin) !!};

        var locations = [];

        locations.push({
            "x": origin[1],
            "y": origin[0],
            "id": 1,
            "name": "Địa chỉ của bạn",
            "address": addressOrigin
        })

        listDrugstore.forEach((element, id) => {

            locations.push({
                "x": element.longitude,
                "y": element.latitude,
                "id": id + 2,
                "name": element.name,
                "address": element.address
            })
        });

        var mapLocations = {};
        var markersLayer = new L.LayerGroup();
        function onMapClick(e) {
            var id = e.sourceTarget.options.id;
            if (!id) return;
        }

        var mymap = L.map('mapid').setView([origin[0], origin[1]], 13);
        L.tileLayer('https://maps.vietmap.vn/tm/{z}/{x}/{y}@2x.png?apikey=2a549e9d588f70590da10665c733e5c5f0f0961393c3374c', {
            maxZoom: 17,
            id: 'vietmap',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function showPoint() {
            this.markersLayer.clearLayers();
            for (i = 0; i < locations.length; i++) {

                if (locations[i]['id'] == 1) {
                    var myIcon = L.icon({
                        iconUrl: 'images/my-icon-red.png',
                        iconSize: [32, 32],
                        iconAnchor: [16, 32],
                        popupAnchor: [0, -32],
                        shadowSize: [68, 95],
                        shadowAnchor: [22, 94]
                    });
                } else {
                    var myIcon = L.icon({
                        iconUrl: 'images/my-icon.png',
                        iconSize: [32, 32],
                        iconAnchor: [16, 32],
                        popupAnchor: [0, -32],
                        shadowSize: [68, 95],
                        shadowAnchor: [22, 94]
                    });
                }

                var marker = L.marker([locations[i].y, locations[i].x], { icon: myIcon, id: locations[i].id }).on('click', onMapClick);

                marker.bindPopup(`
                    <table style="width:100%">
                        <tr style="margin: 10px; border: 1px solid black ;">
                        <th>ID</th>
                        <td>${locations[i].id}</td>
                        </tr>
                        <tr style="margin: 10px; border: 1px solid black">
                        <th>Name</th>
                        <td>${locations[i].name}</td>
                        </tr>
                        <tr style="margin: 10px; border: 1px solid black">
                        <th>Address</th>
                        <td>${locations[i].address}</td>
                        </tr>
                    </table>
                `);

                markersLayer.addLayer(marker);

                mapLocations[locations[i].id] = locations[i];
            }

            markersLayer.addTo(mymap);

        }

        showPoint();

    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
