@extends('client.layout.index')
@section('content')
    <style>
        .font-weight-600 {
            font-weight: 600;
        }

    </style>
    <div id="wrapper" class="container">
        <div class="breadcrumb-vn mt-2"><label class="font-weight-600">Trang chủ/</label><span>Tìm hiệu thuốc</span></div>
        <div class="card text-left">
            <div class="card-body">
                <div id="map" style="height: 300px; width: 100%" ></div>
            </div>
        </div>
        <div class="col-sm-4">
            <div style="margin-left: 123px;" id="result" class="hide">
                <ul class="list-group">
                    <li id="in_kilo" class="list-group-item d-flex justify-content-between align-items-center"></li>
                    <li id="duration_text" class="list-group-item d-flex justify-content-between align-items-center"></li>
                </ul>
            </div>
        </div>
    </div>

    <script>
    $(function () {

        var origin, destination, map;
        origin = {!! json_encode($_GET["origin"]) !!};
        destination = {!! json_encode($_GET["destination"]) !!};
        var travel_mode = "DRIVING";

        initMap();

        function initMap() {

            var myLatLng = {
                lat: 10.801826,
                lng: 106.647386
            };

            map = new google.maps.Map(document.getElementById('map'), {center: myLatLng, zoom: 17});
        }

        var directionsDisplay = new google.maps.DirectionsRenderer({'draggable': false});
        var directionsService = new google.maps.DirectionsService();
        displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay);
        calculateDistance(travel_mode, origin, destination);

        function displayRoute(travel_mode, origin, destination, directionsService, directionsDisplay) {
            directionsService.route({
                origin: origin,
                destination: destination,
                travelMode: travel_mode,
                avoidTolls: true
            }, function (response, status) {
                if (status === 'OK') {
                    directionsDisplay.setMap(map);
                    directionsDisplay.setDirections(response);
                } else {
                    directionsDisplay.setMap(null);
                    directionsDisplay.setDirections(null);
                    alert('Could not display directions due to: ' + status);
                }
            });
        }

        // calculate distance , after finish send result to callback function
        function calculateDistance(travel_mode, origin, destination) {

            var DistanceMatrixService = new google.maps.DistanceMatrixService();
            DistanceMatrixService.getDistanceMatrix(
                {
                    origins: [origin],
                    destinations: [destination],
                    travelMode: google.maps.TravelMode[travel_mode],
                    unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
                    // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
                    avoidHighways: false,
                    avoidTolls: false
                }, save_results);
        }

        // save distance results
        function save_results(response, status) {

            if (status != google.maps.DistanceMatrixStatus.OK) {
                $('#result').html(err);
            } else {
                var origin = response.originAddresses[0];
                var destination = response.destinationAddresses[0];
                if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
                    $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
                } else {
                    var distance = response.rows[0].elements[0].distance;
                    var duration = response.rows[0].elements[0].duration;
                    var distance_in_kilo = distance.value / 1000; // the kilo meter
                    var duration_text = duration.text;
                    appendResults(distance_in_kilo, duration_text);
                }
            }
        }

        function appendResults(distance_in_kilo, duration_text) {
            $("#result").removeClass("hide");
            $('#in_kilo').html("Distance: <span class='badge badge-pill badge-secondary'>" + distance_in_kilo.toFixed(2) + " km</span>");
            $('#duration_text').html("Duration: <span class='badge badge-pill badge-success'>" + duration_text + "</span>");
        }

    });

    </script>
@endsection
