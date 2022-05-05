@extends('client.layout.index')
@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
@endsection
@section('content')
    <ul class="nav nav-pills mb-3 mt-4">
        <li class="nav-item">
            <a class="nav-link" href="">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">Profile</a>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <h1>
            <div class="breadcrumb"><span>Bài viết</span></div>
        </h1>
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="card-group row">
                <div class="card col-md-12">
                    <img class="card-img-top" data-src="holder.js/100x180/" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" data-src="holder.js/100x180/" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>

        </div>
       
    </div>

    {{-- <div class="position category-list" id="list-cms">
            <div id="category-collapsible-menu">
                <div class="category-collapsible-content collapsible-container collapsible-block collapsed">
                    <div class="nav-left collapsible-target">
                        <ul>
                            
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
        </div> --}}
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
