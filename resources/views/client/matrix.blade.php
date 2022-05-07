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
    <div class="breadcrumb mt-4"><label class="font-weight-600">Trang chủ/</label><span>Cửa hàng gần bạn nhất</span></div>

    <div class="mt-3 bg-white p-3" style="position:relative;width: 100%;height: 100vh; ">
        <div class="form-group">
            <label for="">Chọn đường đi đến nhà thuốc</label>
            <select class="form-control mb-3 col-md-8" id="select-drugstore" style="width: 100%;">
                <option value="">Chọn nhà thuốc</option>
                @foreach ($listDrugstore as $key => $drugstore)
                    <option {{ $key == 0 ? 'selected' : '' }}
                        value="{{ $key . '-' . $drugstore['distance'] . '-' . $drugstore['duration'] }}">
                        {{ $drugstore['name'] }} </option>
                @endforeach
            </select>
        </div>
        <div id="mapid" style="width: 100%; height: 50%"></div>
        <div>
            <div>
                <h5 id="distance_nearest">Quãng đường : {{ $nearest['distance'] }} km</h5>
                <h5 id="duration_nearest">Thời gian :{{ $nearest['duration'] }} phút</h5>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>

        var locations = [
            { "x": 106.68534799462223, "y": 10.78252517522869, "id": 1, "name": "Điểm 1", "address": "địa chỉ 1" },
            { "x": 106.66938629614792, "y": 10.784824619376634, "id": 2, "name": "Điểm 2", "address": "địa chỉ 2" }
        ]

        var mapLocations = {};
        var markersLayer = new L.LayerGroup();

        function onMapClick(e) {
            var id = e.sourceTarget.options.id;
            if (!id) return;
        }

        var mymap = L.map('mapid').setView([10.78252517522869, 106.68534799462223], 13);
        L.tileLayer('https://maps.vietmap.vn/tm/{z}/{x}/{y}@2x.png?apikey=b351baf1a7da8fcbb75a4a480e849ae4a8b7e48d1d1ff046', {
            maxZoom: 17,
            id: 'vietmap',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function showPoint() {
            this.markersLayer.clearLayers();
            for (i = 0; i < locations.length; i++) {

                var myIcon = L.icon({
                    iconUrl: 'images/my-icon.png',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32],
                    popupAnchor: [0, -32],
                    shadowSize: [68, 95],
                    shadowAnchor: [22, 94]
                });

                var marker = L.marker([locations[i].y, locations[i].x], {
                    icon: myIcon,
                    id: locations[i].id
                }).on('click', onMapClick);

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

        function showLine() {

            var myHeaders = new Headers();
            myHeaders.append("accept", "text/plain");
            myHeaders.append("Content-Type", "application/json");

            var requestOptions = {
                method: 'GET',
                headers: myHeaders,
                redirect: 'follow'
            };
            var points = locations.map(p => `point=${p.y},${p.x}`).join("&");
            fetch(`https://maps.vietmap.vn/api/route?api-version=1.1&apikey=b351baf1a7da8fcbb75a4a480e849ae4a8b7e48d1d1ff046&vehicle=car&${points}`,
                    requestOptions)
                .then(response => response.text())
                .then(result => {
                    var resRouting = JSON.parse(result);
                    console.log(resRouting);
                    var pointList = L.PolylineUtil.decode(resRouting.paths[0].points);
                    console.log(pointList);
                    var polyline = new L.polyline(pointList, {
                        color: 'red'
                    }).addTo(mymap);;
                    // zoom the map to the polyline
                    mymap.fitBounds(polyline.getBounds());

                })
                .catch(error => console.log('error', error))
        }

        showPoint();
        showLine();

    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
