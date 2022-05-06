@extends('client.layout.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
@endsection
@section('content')
    <style>
        a {
            color: black
        }
        a:hover {
            color: black
        }
        .tab {
            background-color: #fff;
        }

        .tab-active,
        .tab-line {
            background-color: #3bccbb;
        }

        .tab-active {
            border-width: 1px;
            color: #fff;
        }

        .tab,
        .tab-active {
            text-align: center;
            font-style: normal;
            font-weight: 700;
            font-size: 14px;
            padding: 5px;

        }

        .page {
            background: #fff;
            border-color: #e2e2e2;
            padding-top: 3px;
        }

        .img-post {
            width: 300px;
            margin-right: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .content h5 {
            font-size: 20px;
            font-weight: 500;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            height: 1px;
            border-top: 1px solid rgba(0, 0, 0, .1);
        }

    </style>
    <div class="index-content">
        <div style="height: 15px;"></div>
        <div class="title tab-container"><b>Trang chủ </b><span></span></div>
        <div class="tab-container mb-1">
            <div class="row  mr-0 ml-0">
                @if (isset($categories))
                    @foreach ($categories as $item)
                        <a class="col col-sm col-lg-2 tab" href="/category/{{ $item->id }}">
                            <div><span>{{ $item->name }}</span></div>
                        </a>
                    @endforeach
                @endif
            </div>
            <div class="tab-line"></div>
        </div>
        <!---->
        <div class="page">
            <div class="row mr-0 ml-0 p-2">
                <div class="text-align b-title" style="width: 100%; margin-bottom: 10px;"><label>Bài viết</label></div>
                @if (isset($posts))
                    @foreach ($posts as $item)
                        <a href="/post/{{ $item->id }}">
                            <div class="col-sm-12 col-lg-12 mb-2">
                                <img src="https://photo-baomoi.bmcdn.me/2022_05_06_83_42520284/47d9481fb15d5803014c.jpg" class="float-left img-post"
                                    alt="" srcset="">
                                <div class="content">
                                    <h5>{{ $item->title }}</h5>
                                    <p>{!! $item->content !!}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
            {!! $posts->links() !!}
        </div>
    </div>
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
