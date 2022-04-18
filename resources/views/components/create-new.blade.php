@if (Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.create')))
    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
        <a href="{{ route('admin.' . $controllerName . '.create') }}" class="btn btn-primary shadow-md mr-2">Tạo
            mới</a>
    </div>
@endif
