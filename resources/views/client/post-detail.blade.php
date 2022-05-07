@extends('client.layout.index')
@section('content')
    <style>
        .breadcrumb {
            margin-left: -15px;
            margin-right: -15px;
            margin-bottom: 30px;
            margin-top: 10px;
        }

        ul {
            list-style: none;
        }

        .breadcrumb a {
            font-size: 16px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #fa8c1d;
        }

        .breadcrumb a:last-child {
            color: #333;
        }

        .breadcrumb a:first-child:after {
            content: "\F054";
            font-family: FontAwesome;
            margin-left: 5px;
            font-size: 10px;
        }

        h1 {
            font-family: Helvetica, Arial, san-serif;
            font-size: 32px;
            font-weight: 700;
        }

        .post-image img:not(.feed-img) {
            border-radius: 5px;
            width: 100%;
        }

        .content .tags {
            clear: both;
            color: #a9a1a1;
            font-size: 12px;
            margin: 10px 0 20px;
        }

        .content .tags a {
            background: #f2f2f2;
            border-radius: 20px;
            color: #4a4a4a;
            display: inline-block;
            margin: 5px 2px 0 0;
            padding: 5px 12px 6px;
            text-decoration: none;
        }

        .post-related .body {
            display: flex;
            flex-direction: row;
        }

        .post-related .aside-header {
            font-size: 22px;
            font-weight: 700;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #333;
            margin-bottom: 32px;
        }

        .post-related .post-image {
            width: 270px;
            height: 180px;
            object-fit: contain;
            background-color: #d8d8d8;
            margin-bottom: 0;
            margin-top: 0;
            overflow: hidden;
            margin-left: 0;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: 50%;
        }

        .content .post-image {
            margin: 10px auto;
            max-width: 420px;
        }

        .recent-list a:first-child {
            color: #000;

        }

        s .post-related .post-title {
            font-size: 20px;
            font-weight: 700;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.25;
            letter-spacing: normal;
            color: #000;
            margin-bottom: 10px;
        }

        .post-related .post_intro {
            margin-bottom: 0;
            font-size: 15px;
            font-weight: 400;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #000;
        }

        .post-related .post-readmore {
            margin-top: auto;
            font-size: 16px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.5;
            letter-spacing: normal;
            color: #337ab7;
        }

        .post-related .post-content {
            display: flex;
            flex-direction: column;
            grid-column-gap: 12px;
            width: calc(100% - 296px);
        }

        .post-related .post-title {
            font-size: 20px;
            font-weight: 700;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.25;
            letter-spacing: normal;
            color: #000;
            margin-bottom: 10px;
        }

    </style>
    <div class="breadcrumb"><a href="/" class="no-underline">Tin tức</a> <a href=""
            class="no-underline">{{ @$post->categories->name }}</a></div>
    <div class="row bg-white">
        <div class="content col-xs-12 col-md-12 no-paddings-sm mt-4">
            <div class="detail-header">
                <h1>
                    {{ $post->title }}
                </h1>
            </div>
            <div class="question-images ">
                <figure class="post-image full loaded-img has-zoomable"><img
                        src="{{ $post->media->getMedia($post->media, 'thumb') }}" alt="{{ $post->title }}"
                        class="full uploaded  img-in-body"></figure>
            </div>
            <div class="detail-body clearfix">
                <div class="streamfield">
                    {!! $post->content !!}
                </div>
                <div class="tags">
                    Chủ đề:
                    @if (isset($relatedPostsWithTag))
                        @foreach ($relatedPostsWithTag as $relatedPost)
                            <a href="/vi/chu-de/hoi-thao/" data-track-tag="Hội thảo"
                                class="track-tag">{{ $relatedPost->tag_id }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
            <section class="top-list post-related">
                <div class="aside-header">
                    Bài viết liên quan
                </div>
                <ul class="recent-list">
                    @if (isset($relatedPosts))
                        @foreach ($relatedPosts as $post)
                            <li>
                                <div class="body"><a href="/post/{{ $post->id }}"
                                        class="post-image related-link"><img
                                            src="{{ $post->media->getMedia($post->media, 'thumb') }}"
                                            alt="{{ $post->title }}" class="related-link"></a>
                                    <div class="post-content"><a href="/post/{{ $post->id }}"
                                            class="post-title related-link">{{ $post->title }}</a>
                                        <p class="post_intro">
                                            Với mong muốn tiếp tục giải đáp những câu hỏi của khách hàng về các giai đoạn
                                            phát triển
                                            của ung thư dạ dày, đại trực tràng; cách sàng lọc cũng như các phương pháp điều
                                            trị tân
                                            tiến đem ...
                                        </p> <a href="/post/{{ $post->id }}" class="post-readmore related-link">

                                            Đọc thêm

                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </section>
        </div>
    </div>
@endsection
