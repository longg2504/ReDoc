<style>
    #navbarCollapse .navbar-nav .nav-item.active .nav-link::after {
        position: absolute;
        width: 100%;
        bottom: 0;
        height: 10px;
        background-color: #3bccbb
    }

    #navbarCollapse .navbar-nav .nav-item.active .nav-link {
        color: #3bccbb;
    }

    

</style>
@php
$url = url()->current();
@endphp

<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light shadow">
    <a class="navbar-brand" href="/">
        <img src="/assets/img/vncare-logo.svg" title="VNCARE" class="img-logo" />
    </a>
    <button type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"
        aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="navbar-collapse collapse" style="">
        <ul class="navbar-nav ml-auto mr-auto vncare-navbar">
            <li class="nav-item {{ $url === route('client.index') ? 'active' : '' }}">
                <a class="nav-link text-md-center" href="{{ route('client.index') }}">
                    <span class="material-icons-outlined d-md-block">
                        <i class="fa fa-home fa-nav" aria-hidden="true"></i>
                    </span>
                    <span> Trang chủ </span>
                </a>
            </li>
            <li class="nav-item {{ $url === route('client.medical-check-up') ? 'active' : '' }}">
                <a class="nav-link text-md-center" href="{{ route('client.medical-check-up') }}">
                    <span class="material-icons-outlined d-md-block">
                        <i class="fa fa-clock-o fa-nav" aria-hidden="true"></i>
                    </span>
                    Tra cứu bệnh
                </a>
            </li>
            <li class="nav-item">
                <a tabindex="-1" aria-disabled="true" class="nav-link text-md-center" href="/list-drugstore">
                    <span class="material-icons-outlined d-md-block">
                        <i class="fa fa-user-md fa-nav" aria-hidden="true"></i>
                    </span>
                    Hiệu thuốc gần bạn
                </a>
            </li>
            @if (Auth::user())
                <li class="nav-item {{ $url === route('client.setting') ? 'active' : '' }} ">
                    <a tabindex="-1" aria-disabled="true" class="nav-link text-md-center"
                        href="{{ route('client.setting') }}">
                        <span class="material-icons-outlined d-md-block">
                            <i class="fa fa-cog fa-nav" aria-hidden="true"></i>
                        </span>
                        Cài đặt
                    </a>
                </li>
            @endif
        </ul>
        <style>
            .sing-in {
                font-size: 17px;
            }

        </style>
        <ul class="navbar-nav">
            @if (Auth::user())
                <li class="nav-item sing-in dropdown mr-3">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <a href="{{ route('client.logout') }}">Đăng xuất</a>
                </li>
            @else
                <li class="nav-item sing-in dropdown mr-3">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    <a href="{{ route('client.login') }}">Đăng nhập</a>
                </li>
            @endif

        </ul>
    </div>
</nav>
