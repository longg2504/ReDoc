@extends('client.layout.index')
@section('content')
    <h3>{{ $disease->name }}</h3>

    @if (isset($user->address))
        <form action="{{ route('client.matrix') }}" method="post">
            @csrf
            <input type="hidden" name="origin" value="{{ $user->address }}">
            <button type="submit" class="btn btn-primary">Nhà Thuốc gần bạn</button>
        </form>
    @endif

@endsection

