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
                {{-- <img src="https://maps.vietmap.vn/api/tm/1/1/1.png?apikey=2a549e9d588f70590da10665c733e5c5f0f0961393c3374c" alt=""> --}}
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src='https://vietmaps.vn/vietmap-gl-js/v1.0.0/vietmap-gl.js'></script>
    <script src="https://vietmaps.vn/vietmap-gl-js/plugins/vietmaps-gl-directions/v1.0.0/vietmap-gl-directions.js"></script>
    <script>
        mapboxgl.accessToken = '2a549e9d588f70590da10665c733e5c5f0f0961393c3374c';
        // mapboxgl.accessToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6Ik5UZG1aak00WkRrM05qWTBZemM1TW1abU9EZ3dNVEUzTVdZd05ERTVNV1JsWkRnNE56YzRaQT09In0.eyJhdWQiOiJodHRwOlwvXC9vcmcud3NvMi5hcGltZ3RcL2dhdGV3YXkiLCJzdWIiOiJhZG1pbkBjYXJib24uc3VwZXIiLCJhcHBsaWNhdGlvbiI6eyJvd25lciI6ImFkbWluIiwidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoiTWFwIFNlcnZpY2UiLCJpZCI6MywidXVpZCI6bnVsbH0sInNjb3BlIjoiYW1fYXBwbGljYXRpb25fc2NvcGUgZGVmYXVsdCIsImlzcyI6Imh0dHBzOlwvXC9hbS52aWV0bWFwcy52bjo0NDNcL29hdXRoMlwvdG9rZW4iLCJ0aWVySW5mbyI6eyJVbmxpbWl0ZWQiOnsidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInN0b3BPblF1b3RhUmVhY2giOnRydWUsInNwaWtlQXJyZXN0TGltaXQiOjAsInNwaWtlQXJyZXN0VW5pdCI6bnVsbH19LCJrZXl0eXBlIjoiUFJPRFVDVElPTiIsInN1YnNjcmliZWRBUElzIjpbeyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InJvdXRlIiwiY29udGV4dCI6Ilwvcm91dGVcL3YxIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEiLCJzdWJzY3JpcHRpb25UaWVyIjoiVW5saW1pdGVkIn0seyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InNlYXJjaCIsImNvbnRleHQiOiJcL3NlYXJjaFwvdjEuMC4wIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9LHsic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJNYXJrZXIiLCJjb250ZXh0IjoiXC9tYXJrZXJcLzEuMCIsInB1Ymxpc2hlciI6ImFkbWluIiwidmVyc2lvbiI6IjEuMCIsInN1YnNjcmlwdGlvblRpZXIiOiJVbmxpbWl0ZWQifV0sImNvbnN1bWVyS2V5IjoiYVJWbm1UUUhRbWxydXRwQ1RLNVdmdVdXV0E0YSIsImV4cCI6MzczNjMyNTYxMSwiaWF0IjoxNTg4ODQxOTY0LCJqdGkiOiIyMDI2NWY5NC1mOWZlLTQ0NGItYWQ2Ni1hM2Q3NDk0YzkwZTkifQ.ZE63gv6YTsxqXN3OorriRnG49zGMIWoXF5phsf__IDz6yPPf0u9qCDng6hK7dE27sl7C3N2TtCrranc8iOC2p7t7pV-7tdRh0sgmI8qrl_2_xCAdikXzs2e69_WnI8C11ObDGz_i6T6ypiYWUSb9eqi833MabegPY6BlZp0FRBBsB1ssDClDllzXiYf7RbppdAl4bDa-So1Jq6cWAUk9GTeTw53LsF6FriijShLPm-RmN0fgzBoKsDTuTbYIHy_x4GRpTamheAyiFLBEJvyzh5CR_ARUip7nfQLVafFsQ83T8mmuHoEhBpMMzFCJKmJ4paqD1bA4hc9ThsPOxr9iNg';

        var map = new mapboxgl.Map({
            container: 'map',
            style: 'vietmap://styles/default/style.json',
            center: [106.647386, 10.801826],
            zoom: 15,
            maxBounds: [[102.0409, 7.730748], [111.6685, 23.47731]],
            attributionControl: false
        });

        var marker = new mapboxgl.Marker({
            draggable: true
        })
            .setLngLat([106.647386, 10.801826])
            .addTo(map);

        map.addControl(
            new MapboxDirections({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl,
                profile: 'driving',
                placeholderOrigin: 'Nhập địa chỉ bạn muốn đi',
                placeholderDestination: 'Nhập địa chỉ bạn muốn đến',
                unit: 'metric',
                alternatives: true,
                language: 'vi',
                controls: {
                    profileSwitcher: true,
                    inputs: true
                }
            }),
            'top-left'
        );

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
