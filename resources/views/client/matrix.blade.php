<!DOCTYPE html>
<html>

<head>

	<title>Map</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
		integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
		crossorigin="" />
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
		integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
		crossorigin=""></script>
		<script src="https://cdn.jsdelivr.net/npm/polyline-encoded@0.0.9/Polyline.encoded.min.js"></script>


</head>

<body>
	<style>
		* {
			padding: 0;
			margin: 0;
		}
	</style>

	<div style="position:relative;width: 100%;height: 100vh;">
		<div id="mapid" style="width: 100%; height: 100%;position:absolute"></div>
		<div style="display: flex; flex-direction: column; position: absolute; z-index: 1000; top: 10%;">
			<button style="padding: 10px; background-color: green; margin-bottom: 10px; border-radius: 5px;"
				onclick=showPoint()>Show Point</button>
			<button style="padding: 10px; background-color: green; border-radius: 5px;" onclick=showLine()>ShowPolyline</button>
		</div>

	</div>


	<script src="js/map.js">


	</script>

</body>

</html>
