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
@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
