@extends('admin/layout/base')

@section('body')

    <body class="main">
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @yield('content')
        {{-- @include('../layout/components/dark-mode-switcher') --}}

        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>

        <!-- END: JS Assets-->

        @livewireScripts
        @yield('script')
    </body>
@endsection
