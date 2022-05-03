@extends('client.layout.index')
@section('content')
    <h3>{{ $disease->name }}</h3>
    <hr>
    <h5>Triệu chứng</h5>
    <ul>
        @foreach ($listSymptoms as $item)
            <li>{{ $item->name }}</li>
        @endforeach

    </ul>
    <hr>
    <h5>Đơn thuốc</h5>
    <ul>
        @foreach ($listSymptoms as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>

    <a href="" class="btn btn-primary">Nhà Thuốc gần bạn</a>
@endsection
