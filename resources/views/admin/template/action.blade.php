@if (Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.update')))

    <a href="{{ route('admin.' . $controllerName . '.edit', ['id' => $id]) }}" class="edit flex items-center mr-3"
        href="javascript:;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-check-square w-4 h-4 mr-1">
            <polyline points="9 11 12 14 22 4"></polyline>
            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
        </svg> Sửa
    </a>

@endif
@if (Auth::guard('admin')->user()->can(config('permission.list.' . $controllerName . '.delete')))

    <a id="{{ $id }}" class="delete flex items-center text-theme-24" data-toggle="modal"
        data-target="#delete-confirmation-modal-delete">
        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-trash-2 w-4 h-4 mr-1">
            <polyline points="3 6 5 6 21 6"></polyline>
            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
        </svg> Xóa
    </a>

@endif

@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete').click(function() {

                const id = $(this).attr('id');
                var url = {!! json_encode(route('admin.' . $controllerName . '.delete', ['id' => 1])) !!}

                $('#delete-confirmation-modal-delete #confirmDelete').attr('href', url.slice(0, -1) + id);
            });
        });
    </script>

@endsection
