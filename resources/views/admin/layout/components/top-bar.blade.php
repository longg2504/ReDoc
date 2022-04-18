<!-- BEGIN: Top Bar -->
<div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="-intro-x hidden md:flex">
            <img alt="Icewall Tailwind HTML Admin Template" class="w-6"
                src="{{ asset('dist/images/logo.svg') }}">
            <span class="text-white text-lg ml-3">
                HI<span class="font-medium">RE</span>
            </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <div class="-intro-x breadcrumb mr-auto">
            <a href="">Application</a>
            <i data-feather="chevron-right" class="breadcrumb__icon"></i>
            <a href="" class="breadcrumb--active">{{$title}}</a>
        </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            {{-- <div class="search hidden sm:block">
                <input id="searchField" type="text"
                    class="search__input form-control dark:bg-dark-1 border-transparent placeholder-theme-8"
                    placeholder="Search...">
                <i data-feather="search" class="search__icon dark:text-gray-300"></i>
            </div> --}}

            <livewire:search-overview />
            {{-- <a class="notification sm:hidden" href="">
                <i data-feather="search" class="notification__icon dark:text-gray-300"></i>
            </a>
            <div class="search-result">
                <div class="search-result__content">
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full"
                                        src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                </div>
                                <div class="ml-3">{{ $faker['users'][0]['name'] }}</div>
                                <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                    {{ $faker['users'][0]['email'] }}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="search-result__content__title">Products</div>
                    @foreach (array_slice($fakers, 0, 4) as $faker)
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Icewall Tailwind HTML Admin Template" class="rounded-full"
                                    src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                            </div>
                            <div class="ml-3">{{ $faker['products'][0]['name'] }}</div>
                            <div class="ml-auto w-48 truncate text-gray-600 text-xs text-right">
                                {{ $faker['products'][0]['category'] }}</div>
                        </a>
                    @endforeach
                </div>
            </div> --}}
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification cursor-pointer" id="notification-btn" role="button"
                aria-expanded="false">
                <i data-feather="bell" class="notification__icon dark:text-gray-300"></i>
            </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-menu__content box dark:bg-dark-6">
                    <div class="notification-content__title">Thông báo</div>
                    <div id="notifications">
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <div class="cursor-pointer relative flex items-center {{ $key ? 'mt-5' : '' }}">
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;"
                                            class="font-medium truncate mr-5">{{ $faker['users'][0]['name'] }}</a>
                                        <div class="text-xs text-gray-500 ml-auto whitespace-nowrap">
                                            {{ $faker['times'][0] }}</div>
                                    </div>
                                    <div class="w-full truncate text-gray-600 mt-0.5">
                                        {{ $faker['news'][0]['short_content'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                role="button" aria-expanded="false">
                <img alt="Icewall Tailwind HTML Admin Template"
                    src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
            </div>
            <div class="dropdown-menu w-56">
                <div class="dropdown-menu__content box bg-theme-11 dark:bg-dark-6 text-white">
                    <div class="p-4 border-b border-theme-12 dark:border-dark-3">
                        {{-- <div class="font-medium">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600">{{ Auth::user()->email }}</div> --}}
                        <div class="font-medium"></div>
                        <div class="text-xs text-theme-13 mt-0.5 dark:text-gray-600"></div>
                    </div>
                    <div class="p-2">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="user" class="w-4 h-4 mr-2"></i> Hồ sơ
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="lock" class="w-4 h-4 mr-2"></i> Thiết lập lại mật khẩu
                        </a>
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help
                        </a>
                    </div>
                    <div class="p-2 border-t border-theme-12 dark:border-dark-3">
                        <a href=""
                            class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                            <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Đăng xuất
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>

<!-- BEGIN: Notification Content -->
{{-- <script>
    let userSaveTokenUrl = "{{route('users.saveToken')}}";
    let getNotificationUrl = "{{route('notifications')}}";
    let readNotificationUrl = "{{route('notifications.read')}}";
</script> --}}
<div id="order-notification" class="toastify-content hidden flex">
    <i class="text-theme-10" data-feather="credit-card"></i>
    <div class="ml-4 mr-4 notification-body"></div>
</div>
<!-- END: Top Bar -->
@section('script')
    <script>
        $('#searchField').click(function() {
            // $(this).select();
            console.log(123)
        });
    </script>
@endsection
