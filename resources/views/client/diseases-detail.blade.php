@extends('client.layout.index')
@section('content')

    <style>
        .no-padding {padding:0 !important;}

        .add-padding {
            padding: .625em 2em; # padding as you need according your styles
            display: inline-block;
        }

        a {
            text-decoration: none !important;
        }
    </style>

    <h3>{{ $disease->name }}</h3>

    @if (isset($user->address))
        <form action="{{ route('client.matrix') }}" method="post">
            @csrf
            <input type="hidden" name="origin" value="{{ $user->address }}">
            <button type="submit" class="btn btn-primary">Nhà Thuốc gần bạn</button>
        </form>
    @endif

@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('.swal2-confirm').click(function () {
                console.log('click');
                location.href = '{{ route('client.login') }}';
            });
        });
    </script>
@endsection

