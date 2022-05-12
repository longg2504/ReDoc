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
        <div id="mapRaw" class="mt-3 bg-white p-3" style="position:relative;width: 100%;height: 60vh; ">
            <div id="mapid" style="width: 100%; height: 100%"></div>
        </div>
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

        var nearest = {!! json_encode($nearest) !!};
        var origin = {!! json_encode($origin) !!};
        var listDrugstore = {!! json_encode($listDrugstore) !!};

        var locations = [];

        locations.push({
            "x": origin.longitude,
            "y": origin.latitude,
            "id": 1,
            "name": "Địa chỉ của bạn",
            "address": origin.address
        })

        locations.push({
            "x": nearest.longitude,
            "y": nearest.latitude,
            "id": 2,
            "name": nearest.name,
            "address": nearest.address
        })

        var mapLocations = {};
        var markersLayer = new L.LayerGroup();

        function onMapClick(e) {
            var id = e.sourceTarget.options.id;
            if (!id) return;
        }

        let mymap = L.map('mapid').setView([origin.latitude, origin.longitude], 13);

        L.tileLayer('https://maps.vietmap.vn/tm/{z}/{x}/{y}@2x.png?apikey=b351baf1a7da8fcbb75a4a480e849ae4a8b7e48d1d1ff046', {
            maxZoom: 17,
            id: 'vietmap',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        function showPoint(map, markersLayerNew) {

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

                markersLayerNew.addLayer(marker);

                mapLocations[locations[i].id] = locations[i];
            }

            markersLayerNew.addTo(map);
        }

        function showLine(map) {

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
                    }).addTo(map);;
                    // zoom the map to the polyline
                    map.fitBounds(polyline.getBounds());

                })
                .catch(error => console.log('error', error))
        }

        showPoint(mymap, markersLayer);
        showLine(mymap);

        $("#select-drugstore").change(function(){
            var data = $(this).val();
            var key = data.split("-")[0];
            var distance = data.split("-")[1];
            var duration = data.split("-")[2];
            locations.pop();
            console.log(locations);
            locations.push({
                "x": listDrugstore[key].longitude,
                "y": listDrugstore[key].latitude,
                "id": 2,
                "name": listDrugstore[key].name,
                "address": listDrugstore[key].address
            })

            document.getElementById('mapRaw').innerHTML = '<div id="mapid1" style="width: 100%; height: 100%"></div>';

            var mymap = L.map('mapid1').setView([origin.latitude, origin.longitude], 13);
            L.tileLayer('https://maps.vietmap.vn/tm/{z}/{x}/{y}@2x.png?apikey=b351baf1a7da8fcbb75a4a480e849ae4a8b7e48d1d1ff046', {
                maxZoom: 17,
                id: 'vietmap',
                tileSize: 512,
                zoomOffset: -1
            }).addTo(mymap);

            var markersLayerNew = new L.LayerGroup();

            showPoint(mymap, markersLayerNew);
            showLine(mymap);

            console.log(distance);

            $("#distance_nearest").html('Quãng đường : ' + distance + ' km');
            $("#duration_nearest").html('Thời gian :' + duration + ' phút');
        });


    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
