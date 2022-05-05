@extends('client.layout.index')
@section('css')
<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
@endsection
@section('content')
    <div id="main">
        @if (isset($post))
            <div class="position category-list" id="list-cms">
                <div id="vue-bootstrap" class="category-content">
                    <h1>
                        <div class="breadcrumb"><span>{{ $post->title }}</span></div>
                    </h1>
                    <img
                                    alt="{{ $post->title }}"
                                    src="{{ $post->media->getMedia($post->media, 'thumb') }}"
                                    lazy="loaded">
                    <div class="post-content">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
@section('js')
  
@endsection