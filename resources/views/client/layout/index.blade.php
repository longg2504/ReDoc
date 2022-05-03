<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('assets/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/common.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script defer
            src="https://maps.googleapis.com/maps/api/js?libraries=places&language=vi&key=AIzaSyAfPMMozZ7nfUi9jG9IidOMx2Bh16h1x3E"
            type="text/javascript"></script>
    <script src="{{asset('js/sweetalert.all.js')}}"></script>
    @yield('css')
</head>

<body>
    @include('sweetalert::alert')
    @include('client.includes.header')
    <div id="wrapper" class="container">
        @yield('content')
        <!---->
    </div>

    @yield('js')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
   
</body>

</html>
