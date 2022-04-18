@extends('admin/layout/base')

@section('body')
    <body class="login">
        @yield('content')
        @include('admin/layout/components/dark-mode-switcher')

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->

        @yield('script')
    </body>
@endsection
