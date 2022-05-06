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
                    @foreach (@$post->tags as $item)
                        <a href="/vi/chu-de/suy-tim-cap/" data-track-tag="Suy tim cấp" class="track-tag">{{$item->name}}</a>
                    @endforeach



                    <a href="/vi/chu-de/hoi-thao/" data-track-tag="Hội thảo" class="track-tag">Hội thảo</a> <a
                        href="/vi/chu-de/covid-19/" data-track-tag="Covid-19" class="track-tag">Covid-19</a> <a
                        href="/vi/chu-de/suy-tim-an-gi/" data-track-tag="Suy tim ăn gì" class="track-tag">Suy tim ăn
                        gì</a> <a href="/vi/chu-de/suy-tim/" data-track-tag="Suy tim" class="track-tag">Suy tim</a>
                </div>
            </div>
            <section class="top-list post-related">
                <div class="aside-header">
                    Bài viết liên quan
                </div>
                <ul class="recent-list">
                    <li>
                        <div class="body"><a
                                href="/tin-tuc/lich-hoi-thao/vinmec-hai-phong-1901-hoi-thao-sang-loc-ung-thu-da-day-dai-trang/?link_type=related_posts"
                                title="[Vinmec Hải Phòng | 19/01] Hội thảo ''Sàng lọc ung thư dạ dày, đại tràng''"
                                class="post-image related-link"><img
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20190118_024902_167795_ht-sang-loc-ung-thu.max-800x800.png"
                                    alt="VMHP_Hội thảo sàng lọc ung thư" class="related-link"></a>
                            <div class="post-content"><a
                                    href="/tin-tuc/lich-hoi-thao/vinmec-hai-phong-1901-hoi-thao-sang-loc-ung-thu-da-day-dai-trang/?link_type=related_posts"
                                    class="post-title related-link">[Vinmec Hải Phòng | 19/01] Hội thảo ''Sàng lọc ung thư
                                    dạ dày, đại tràng''</a>
                                <p class="post_intro">
                                    Tham dự Hội thảo để có thể trao đổi trực tiếp với BSCK I BSCK I Phạm Thị Thảo về những
                                    kiến thức về sàng lọc ung thư dạ dày, đại tràng
                                </p> <a
                                    href="/tin-tuc/lich-hoi-thao/vinmec-hai-phong-1901-hoi-thao-sang-loc-ung-thu-da-day-dai-trang/?link_type=related_posts"
                                    title="[Vinmec Hải Phòng | 19/01] Hội thảo ''Sàng lọc ung thư dạ dày, đại tràng''"
                                    class="post-readmore related-link">

                                    Đọc thêm

                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="body"><a
                                href="/thong-tin-duoc/tin-tuc-hoat-dong/hoi-thao-pha-che-thuoc-doc-te-bao-tai-khoa-duoc-benh-vien/?link_type=related_posts"
                                title="Hội thảo &quot;Pha chế thuốc độc tế bào tại Khoa Dược bệnh viện&quot;"
                                class="post-image related-link"><img
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20220422_053354_781957_pha_che.max-800x800.png"
                                    alt="Hội thảo pha chế tại khoa dược bệnh viện" class="related-link"></a>
                            <div class="post-content"><a
                                    href="/thong-tin-duoc/tin-tuc-hoat-dong/hoi-thao-pha-che-thuoc-doc-te-bao-tai-khoa-duoc-benh-vien/?link_type=related_posts"
                                    title="Hội thảo &quot;Pha chế thuốc độc tế bào tại Khoa Dược bệnh viện&quot;"
                                    class="post-title related-link">Hội thảo "Pha chế thuốc độc tế bào tại Khoa Dược bệnh
                                    viện"</a>
                                <p class="post_intro"></p> <a
                                    href="/thong-tin-duoc/tin-tuc-hoat-dong/hoi-thao-pha-che-thuoc-doc-te-bao-tai-khoa-duoc-benh-vien/?link_type=related_posts"
                                    title="Hội thảo &quot;Pha chế thuốc độc tế bào tại Khoa Dược bệnh viện&quot;"
                                    class="post-readmore related-link">

                                    Đọc thêm

                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="body"><a
                                href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-29052018-ung-thu-da-day-dai-truc-trang-chua-duoc-ban-biet-khong/?link_type=related_posts"
                                title="[Hội thảo trực tuyến| 29.05.2021] Ung thư dạ dày, đại trực tràng chữa được, bạn biết không?"
                                class="post-image related-link"><img
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20210522_072814_001351_184688731_47138265953.max-800x800.jpg"
                                    alt="Hoi thao Ung thu da day" class="related-link"></a>
                            <div class="post-content"><a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-29052018-ung-thu-da-day-dai-truc-trang-chua-duoc-ban-biet-khong/?link_type=related_posts"
                                    title="[Hội thảo trực tuyến| 29.05.2021] Ung thư dạ dày, đại trực tràng chữa được, bạn biết không?"
                                    class="post-title related-link">[Hội thảo trực tuyến| 29.05.2021] Ung thư dạ dày, đại
                                    trực tràng chữa được, bạn biết không?</a>
                                <p class="post_intro">
                                    Với mong muốn tiếp tục giải đáp những câu hỏi của khách hàng về các giai đoạn phát triển
                                    của ung thư dạ dày, đại trực tràng; cách sàng lọc cũng như các phương pháp điều trị tân
                                    tiến đem ...
                                </p> <a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-29052018-ung-thu-da-day-dai-truc-trang-chua-duoc-ban-biet-khong/?link_type=related_posts"
                                    title="[Hội thảo trực tuyến| 29.05.2021] Ung thư dạ dày, đại trực tràng chữa được, bạn biết không?"
                                    class="post-readmore related-link">

                                    Đọc thêm

                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="body"><a
                                href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-26062021-cham-soc-thai-ky-toan-dien-va-phuc-hoi-sau-sinh-cho-me/?link_type=related_posts"
                                title="[Hội thảo trực tuyến| 26.06.2021] Chăm sóc thai kỳ toàn diện và Phục hồi sau sinh cho mẹ"
                                class="post-image related-link"><img
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20210618_085241_561420_LA259-_screen2.max-800x800.jpg"
                                    alt="Hoi thao thai san" class="related-link"></a>
                            <div class="post-content"><a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-26062021-cham-soc-thai-ky-toan-dien-va-phuc-hoi-sau-sinh-cho-me/?link_type=related_posts"
                                    title="[Hội thảo trực tuyến| 26.06.2021] Chăm sóc thai kỳ toàn diện và Phục hồi sau sinh cho mẹ"
                                    class="post-title related-link">[Hội thảo trực tuyến| 26.06.2021] Chăm sóc thai kỳ toàn
                                    diện và Phục hồi sau sinh cho mẹ</a>
                                <p class="post_intro">
                                    Được tin yêu bởi hàng ngàn mẹ bầu từ những ngày đầu thành lập, Bệnh viện Đa khoa Quốc tế
                                    Vinmec luôn không ngừng phát triển các dịch vụ chăm sóc cho mẹ toàn diện nhất, từ lúc
                                    bắt đầu ...
                                </p> <a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-26062021-cham-soc-thai-ky-toan-dien-va-phuc-hoi-sau-sinh-cho-me/?link_type=related_posts"
                                    title="[Hội thảo trực tuyến| 26.06.2021] Chăm sóc thai kỳ toàn diện và Phục hồi sau sinh cho mẹ"
                                    class="post-readmore related-link">

                                    Đọc thêm

                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="body"><a
                                href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-nguyen-nhan-thu-tinh-ong-nghiem-bai/?link_type=related_posts"
                                title="[HỘI THẢO TRỰC TUYẾN] NGUYÊN NHÂN THỤ TINH ỐNG NGHIỆM THẤT BẠI"
                                class="post-image related-link"><img
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20210322_031734_788199_Banner_RUT_NGAN_HANH_.max-800x800.jpg"
                                    alt="IVF Vinmec Times City" class="related-link"></a>
                            <div class="post-content"><a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-nguyen-nhan-thu-tinh-ong-nghiem-bai/?link_type=related_posts"
                                    title="[HỘI THẢO TRỰC TUYẾN] NGUYÊN NHÂN THỤ TINH ỐNG NGHIỆM THẤT BẠI"
                                    class="post-title related-link">[HỘI THẢO TRỰC TUYẾN] NGUYÊN NHÂN THỤ TINH ỐNG NGHIỆM
                                    THẤT BẠI</a>
                                <p class="post_intro">
                                    Trong gần năm thập kỷ qua, thụ tinh trong ống nghiệm (IVF) đã giúp hàng triệu phụ nữ
                                    trên toàn thế giới thụ thai những đứa trẻ khỏe mạnh. Tỉ lệ thành công trung bình của IVF
                                    trên thế giới ...
                                </p> <a
                                    href="/tin-tuc/lich-hoi-thao/hoi-thao-truc-tuyen-nguyen-nhan-thu-tinh-ong-nghiem-bai/?link_type=related_posts"
                                    title="[HỘI THẢO TRỰC TUYẾN] NGUYÊN NHÂN THỤ TINH ỐNG NGHIỆM THẤT BẠI"
                                    class="post-readmore related-link">

                                    Đọc thêm

                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </div>
@endsection
