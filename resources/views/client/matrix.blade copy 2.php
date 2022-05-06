<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Add a default marker</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://vietmaps.vn/vietmap-gl-js/v1.0.0/vietmap-gl.js"></script>
<script src="https://vietmaps.vn/vietmap-gl-js/plugins/vietmaps-gl-directions/v1.0.0/vietmap-gl-directions.js"></script>

<link href="https://vietmaps.vn/vietmap-gl-js/v1.0.0/vietmap-gl.css" rel="stylesheet" />
<link href="https://vietmaps.vn/vietmap-gl-js/plugins/vietmaps-gl-directions/v1.0.0/vietmap-gl-directions.css" rel="stylesheet" />
<style>
    body { margin: 0; padding: 0; }
    #map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
<div id="map"></div>

<script>
    mapboxgl.accessToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6Ik5UZG1aak00WkRrM05qWTBZemM1TW1abU9EZ3dNVEUzTVdZd05ERTVNV1JsWkRnNE56YzRaQT09In0.eyJhdWQiOiJodHRwOlwvXC9vcmcud3NvMi5hcGltZ3RcL2dhdGV3YXkiLCJzdWIiOiJhZG1pbkBjYXJib24uc3VwZXIiLCJhcHBsaWNhdGlvbiI6eyJvd25lciI6ImFkbWluIiwidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoiTWFwIFNlcnZpY2UiLCJpZCI6MywidXVpZCI6bnVsbH0sInNjb3BlIjoiYW1fYXBwbGljYXRpb25fc2NvcGUgZGVmYXVsdCIsImlzcyI6Imh0dHBzOlwvXC9hbS52aWV0bWFwcy52bjo0NDNcL29hdXRoMlwvdG9rZW4iLCJ0aWVySW5mbyI6eyJVbmxpbWl0ZWQiOnsidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInN0b3BPblF1b3RhUmVhY2giOnRydWUsInNwaWtlQXJyZXN0TGltaXQiOjAsInNwaWtlQXJyZXN0VW5pdCI6bnVsbH19LCJrZXl0eXBlIjoiUFJPRFVDVElPTiIsInN1YnNjcmliZWRBUElzIjpbeyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InJvdXRlIiwiY29udGV4dCI6Ilwvcm91dGVcL3YxIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEiLCJzdWJzY3JpcHRpb25UaWVyIjoiVW5saW1pdGVkIn0seyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InNlYXJjaCIsImNvbnRleHQiOiJcL3NlYXJjaFwvdjEuMC4wIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9LHsic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJNYXJrZXIiLCJjb250ZXh0IjoiXC9tYXJrZXJcLzEuMCIsInB1Ymxpc2hlciI6ImFkbWluIiwidmVyc2lvbiI6IjEuMCIsInN1YnNjcmlwdGlvblRpZXIiOiJVbmxpbWl0ZWQifV0sImNvbnN1bWVyS2V5IjoiYVJWbm1UUUhRbWxydXRwQ1RLNVdmdVdXV0E0YSIsImV4cCI6MzczNjMyNTYxMSwiaWF0IjoxNTg4ODQxOTY0LCJqdGkiOiIyMDI2NWY5NC1mOWZlLTQ0NGItYWQ2Ni1hM2Q3NDk0YzkwZTkifQ.ZE63gv6YTsxqXN3OorriRnG49zGMIWoXF5phsf__IDz6yPPf0u9qCDng6hK7dE27sl7C3N2TtCrranc8iOC2p7t7pV-7tdRh0sgmI8qrl_2_xCAdikXzs2e69_WnI8C11ObDGz_i6T6ypiYWUSb9eqi833MabegPY6BlZp0FRBBsB1ssDClDllzXiYf7RbppdAl4bDa-So1Jq6cWAUk9GTeTw53LsF6FriijShLPm-RmN0fgzBoKsDTuTbYIHy_x4GRpTamheAyiFLBEJvyzh5CR_ARUip7nfQLVafFsQ83T8mmuHoEhBpMMzFCJKmJ4paqD1bA4hc9ThsPOxr9iNg';
    // mapboxgl.accessToken = '2a549e9d588f70590da10665c733e5c5f0f0961393c3374c';
    // mapboxgl.accessToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsIng1dCI6Ik5UZG1aak00WkRrM05qWTBZemM1TW1abU9EZ3dNVEUzTVdZd05ERTVNV1JsWkRnNE56YzRaQT09In0.eyJhdWQiOiJodHRwOlwvXC9vcmcud3NvMi5hcGltZ3RcL2dhdGV3YXkiLCJzdWIiOiJhZG1pbkBjYXJib24uc3VwZXIiLCJhcHBsaWNhdGlvbiI6eyJvd25lciI6ImFkbWluIiwidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoiTWFwIFNlcnZpY2UiLCJpZCI6MywidXVpZCI6bnVsbH0sInNjb3BlIjoiYW1fYXBwbGljYXRpb25fc2NvcGUgZGVmYXVsdCIsImlzcyI6Imh0dHBzOlwvXC9hbS52aWV0bWFwcy52bjo0NDNcL29hdXRoMlwvdG9rZW4iLCJ0aWVySW5mbyI6eyJVbmxpbWl0ZWQiOnsidGllclF1b3RhVHlwZSI6InJlcXVlc3RDb3VudCIsInN0b3BPblF1b3RhUmVhY2giOnRydWUsInNwaWtlQXJyZXN0TGltaXQiOjAsInNwaWtlQXJyZXN0VW5pdCI6bnVsbH19LCJrZXl0eXBlIjoiUFJPRFVDVElPTiIsInN1YnNjcmliZWRBUElzIjpbeyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InJvdXRlIiwiY29udGV4dCI6Ilwvcm91dGVcL3YxIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEiLCJzdWJzY3JpcHRpb25UaWVyIjoiVW5saW1pdGVkIn0seyJzdWJzY3JpYmVyVGVuYW50RG9tYWluIjoiY2FyYm9uLnN1cGVyIiwibmFtZSI6InNlYXJjaCIsImNvbnRleHQiOiJcL3NlYXJjaFwvdjEuMC4wIiwicHVibGlzaGVyIjoiYWRtaW4iLCJ2ZXJzaW9uIjoidjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9LHsic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJNYXJrZXIiLCJjb250ZXh0IjoiXC9tYXJrZXJcLzEuMCIsInB1Ymxpc2hlciI6ImFkbWluIiwidmVyc2lvbiI6IjEuMCIsInN1YnNjcmlwdGlvblRpZXIiOiJVbmxpbWl0ZWQifV0sImNvbnN1bWVyS2V5IjoiYVJWbm1UUUhRbWxydXRwQ1RLNVdmdVdXV0E0YSIsImV4cCI6MzczNjMyNTYxMSwiaWF0IjoxNTg4ODQxOTY0LCJqdGkiOiIyMDI2NWY5NC1mOWZlLTQ0NGItYWQ2Ni1hM2Q3NDk0YzkwZTkifQ.ZE63gv6YTsxqXN3OorriRnG49zGMIWoXF5phsf__IDz6yPPf0u9qCDng6hK7dE27sl7C3N2TtCrranc8iOC2p7t7pV-7tdRh0sgmI8qrl_2_xCAdikXzs2e69_WnI8C11ObDGz_i6T6ypiYWUSb9eqi833MabegPY6BlZp0FRBBsB1ssDClDllzXiYf7RbppdAl4bDa-So1Jq6cWAUk9GTeTw53LsF6FriijShLPm-RmN0fgzBoKsDTuTbYIHy_x4GRpTamheAyiFLBEJvyzh5CR_ARUip7nfQLVafFsQ83T8mmuHoEhBpMMzFCJKmJ4paqD1bA4hc9ThsPOxr9iNg';

    var map = new mapboxgl.Map({
        container: 'map',
        style: 'vietmap://styles/default/style.json',
        center: [106.647386, 10.801826],
        zoom: 15,
        maxBounds: [[102.0409, 7.730748], [111.6685, 23.47731]],
        attributionControl: false
    });

    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl,
            profile: 'driving',
            placeholderOrigin: 'Điểm bắt đầu',
            placeholderDestination: 'Điểm đến',
            unit: 'metric',
            controls: {
              profileSwitcher: true,
              inputs: true
            }
        }),
        'top-left'
    );

    var marker = new mapboxgl.Marker({
            draggable: true
        })
            .setLngLat([106.647386, 10.801826])
            .addTo(map);

</script>

</body>
</html>
