@extends('client.layout.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
@endsection
{{-- @section('content')
    <style>
        a {
            color: black
        }
        a:hover {
            color: black
        }
        .tab {
            background-color: #fff;
            border: 1px solid #ddd;
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
@endsection --}}

@section('content')
    <style>
        h3.title {
            margin-top: 10px;
            font-weight: 600;
            border-bottom: 1px solid #e8e8e8;
            padding: 10px 0;
        }

        ul {
            list-style: none;
        }

        ul.list-categories li {
            border-bottom: 1px solid #e8e8e8;
            padding: 10px 0;
        }

        ul.list-categories li a {
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
        }

        .breadcrumb .icon-title:after {
            content: "\F054";
            font-family: FontAwesome;
            margin-left: 5px;
        }

        .post-list ul li {
            list-style: none;
            overflow: hidden;
            margin-bottom: 20px;
            padding-bottom: 20px;
            font-size: 13px;
            border-bottom: 1px solid #e8e8e8;
        }

        .breadcrumb {
            padding: 8px 15px;
            margin-bottom: 20px;
            list-style: none;
            background-color: #f5f5f5;
            border-radius: 4px;
        }

        .has-zoomable.loaded-img {
            clear: both;
            cursor: pointer;
            position: relative;
            width: auto;
        }

        .post-list ul li img {
            float: left;
            margin-right: 15px;
            max-width: 260px;
            border-radius: 5px;
            margin-bottom: 10px;
        }

    </style>
    <div class="row bg-white mt-3">
        <div class="col-md-3">
            <h3 class="title">Danh mục</h3>
            <ul class="list-categories">
                @if (isset($categories))
                    @foreach ($categories as $item)
                        <li>
                            <a href="/category/{{ $item->id }}">{{ $item->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col-md-9 pr-0">
            <div class="breadcrumb">
                <a href="/" class="no-underline">Trang chủ</a>
                @if (url()->current() != route('client.index'))
                    <span class="icon-title"></span>
                    <span>
                        @if (isset($nameCategory))
                            {{ $nameCategory }}
                        @endif
                    </span>
                @endif
            </div>
            <div class="post-list">
                <ul>
                    @if (isset($posts))
                        @foreach ($posts as $post)
                            <li><a href="/post/{{ $post->id }}" class="has-zoomable loaded-img"><img
                                        alt="{{ $post->title }}"
                                        src="{{ $post->media->getMedia($post->media, 'thumb') }}" lazy="loaded"></a>
                                <div class="post-content">
                                    <h2><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h2>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>

            @if ($posts->total() > 1)
                <div class="pagination  justify-content-center">
                    <div class="vh"> kết quả.</div>
                    <span class="step-links">
                        @if ($posts->previousPageUrl())
                            <a href="{{ $posts->previousPageUrl() }}">Trang trước</a>
                        @endif
                        <span class="current">
                            Trang {{ $posts->currentPage() }} / {{ $posts->lastPage() }}
                        </span>
                        @if ($posts->nextPageUrl())
                            <a href="{{ $posts->nextPageUrl() }}">Trang sau</a>
                        @endif
                    </span>
                </div>
            @endif
        </div>
    </div>
@endsection
