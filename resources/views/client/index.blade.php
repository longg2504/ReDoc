@extends('client.layout.index')
@section('css')
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
@endsection
@section('content')
    <div id="main">
        <div class="position category-list" id="list-cms">
            <div id="category-collapsible-menu">
                <div class="category-collapsible-content collapsible-container collapsible-block collapsed">
                    <div class="nav-left collapsible-target">
                        <ul>
                            @if (isset($categories))
                                @foreach ($categories as $item)
                                    <li class="collapsible-container collapsible-block collapsed">
                                        <div class="parent-category">
                                            <a href="/category/{{ $item->id }}">{{ $item->name }}</a>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                    <div class="category-other collapse-trigger">
                        Các chuyên mục <i class="fa fa-bars fa-fw" aria-hidden="true"></i><i class="fa fa-close"
                            aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div id="vue-bootstrap" class="category-content">
                <h1>
                    <div class="breadcrumb"><span>Bài viết</span></div>
                </h1>
                <div class="post-list">
                    <ul>
                        @if (isset($posts))
                            @foreach ($posts as $item)
                            <li>
                                <a href="/post/{{ $item->id }}"
                                class="has-zoomable loaded-img"><img
                                    alt="{{ $item->title }}"
                                    src="{{ $item->media->getMedia($item->media, 'thumb') }}"
                                    lazy="loaded"></a>
                                <div class="post-content">
                                    <h2><a href="/post/{{ $item->id }}">{{ $item->title }}</a></h2>
                                    {!! $item->content !!}
                                </div>
                            </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                {!! $posts->links() !!}
            </div>
        </div>
    </div>
@endsection
