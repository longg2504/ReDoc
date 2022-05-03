{{-- @extends('client.layout.index')
@section('content')
    <section>
        <div class="row">
            <div class="col-12 col-md-6 p-2">
                <a href="/book-online/step-1" routerlinkactive="router-link-active"><img
                        src="/assets/img/index-dlk-tvtx.svg" title="VNCARE" class="img-dlk" /></a>
            </div>
            <div class="col-12 col-md-6 p-2">
                <a href="/create-schedule" routerlinkactive="router-link-active"><img src="/assets/img/index-dlk-csyt.svg"
                        title="VNCARE" class="img-dlk" /></a>
            </div>
        </div>
    </section>
    <section>
        <h3 class="text-1 block">Lịch hẹn khám</h3>
        <div role="alert" class="alert alert-info ng-star-inserted"><span style="font-weight: 500;">Bạn hiện chưa có
                lịch hẹn khám nào</span></div>
        <!---->
        <!---->
    </section>
    <section>
        <h3 class="text-1 block">Thông tin y tế</h3>
        <div class="ttyt-block">
            <div class="row">
                <div class="col-12 col-md-4 m-0 p-0">
                    <ul class="ds-ttyt-ul">
                        <!---->
                    </ul>
                </div>
                <div class="col-12 col-md-8 ttyt-list-btn">
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-cls.png" />
                                </div>

                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Cận lâm sàng</div>
                                        <div class="col-md-12 text-11">Thông tin xét nghiệm, CĐHA</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-lskcb.png" />
                                </div>

                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Lịch sử khám chữa bệnh</div>
                                        <div class="col-md-12 text-11">Xem các lịch sử khám chữa bệnh</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-dt.png" /></div>
                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Đơn thuốc</div>
                                        <div class="col-md-12 text-11">Thông tin đơn thuốc</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-vp.png" /></div>
                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Viện phí</div>
                                        <div class="col-md-12 text-11">Thông tin chi tiết các thanh toán đã thực
                                            hiện</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-dlk.png" />
                                </div>

                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Đặt lịch khám</div>
                                        <div class="col-md-12 text-11">Đặt lịch khám với bệnh viện</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row-ttyt ng-star-inserted">
                        <a class="w-100">
                            <div class="d-flex m-0 p-0">
                                <div class="row-ttyt-block1"><img title="VNCARE" src="/assets/img/index-btn-ks.png" /></div>
                                <div class="row-ttyt-block2">
                                    <div class="form-row m-0 p-0">
                                        <div class="col-md-12 text-10">Khảo sát</div>
                                        <div class="col-md-12 text-11">Cung cấp thông tin cho bệnh viện để cải thiện
                                            dịch vụ tốt hơn</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </section>
    <div class="empty-container"></div>
@endsection --}}
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
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/hoat-dong-benh-vien/">Hoạt động bệnh viện</a>
                                </div>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/lich-hoi-thao/">Lịch hội thảo</a>
                                </div>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/thanh-tuu-chuyen-mon/">Thành tựu chuyên môn</a>
                                </div>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/cau-chuyen-khach-hang/">Câu chuyện khách hàng</a>
                                </div>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/thong-tin-suc-khoe/">Thông tin sức khỏe</a>
                                </div>
                                <div class="arrow collapse-trigger" aria-hidden="true"></div>
                                <ul class="collapsible-target">
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/san-phu-khoa-va-ho-tro-sinh-san/">Sản phụ khoa
                                            và Hỗ trợ sinh sản</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/nhi/">Nhi</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/suc-khoe-tong-quat/">Sức khỏe tổng quát</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/te-bao-goc-cong-nghe-gen/">Tế bào gốc - Công
                                            nghệ gen</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/dich-2019-ncov/">Dịch Covid-19</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/dinh-duong/">Dinh dưỡng</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/song-khoe/">Sống khỏe</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/thong-tin-suc-khoe/lam-dep/">Làm đẹp</a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/hoat-dong-dao-tao/">Hoạt động đào tạo</a>
                                </div>
                                <div class="arrow collapse-trigger" aria-hidden="true"></div>
                                <ul class="collapsible-target">
                                    <li>
                                        <a href="/tin-tuc/hoat-dong-dao-tao/tim-mach/">Tim mạch</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/hoat-dong-dao-tao/ung-buou-xa-tri/">Ung bướu - Xạ trị</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/hoat-dong-dao-tao/tieu-hoa-gan-mat/">Tiêu hóa - Gan mật</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/hoat-dong-dao-tao/san-phu-khoa-va-ho-tro-sinh-san/">Sản phụ khoa
                                            và Hỗ trợ sinh sản</a>
                                    </li>
                                    <li>
                                        <a href="/tin-tuc/hoat-dong-dao-tao/co-xuong-khop/">Cơ xương khớp</a>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/hoi-dap-bac-si/">Hỏi đáp bác sĩ</a>
                                </div>
                            </li>
                            <li
                                class="collapsible-container collapsible-block
                      collapsed
                      ">
                                <div class="parent-category">
                                    <a href="/tin-tuc/hop-tac-quoc-te/">Hợp tác Quốc tế</a>
                                </div>
                            </li>
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
                    <div class="breadcrumb"><span>Tin tức</span></div>
                </h1>
                <div class="latest-post">
                    <div class="latest-post-image"><a
                            href="/tin-tuc/hop-tac-quoc-te/pgsbs-kelly-m-smith-dai-hoc-pennsylvania-my-trien-khai-nhieu-hoat-dong-xay-dung-trung-tam-ung-buou-xuat-sac-coe-tai-vinmec/"
                            class="has-zoomable loaded-img"><img
                                alt="PGS.BS Kelly M. Smith - Đại học Pennsylvania (Mỹ) triển khai nhiều hoạt động xây dựng Trung tâm Ung bướu xuất sắc (COE) tại Vinmec"
                                data-src="https://vinmec-prod.s3.amazonaws.com/images/20200908_094849_480552_anh89.max-800x800.jpg"
                                src="https://vinmec-prod.s3.amazonaws.com/images/20200908_094849_480552_anh89.max-800x800.jpg"
                                lazy="loaded"></a></div>
                    <div class="latest-post-body">
                        <h2 class="title-latest-post"><a
                                href="/tin-tuc/hop-tac-quoc-te/pgsbs-kelly-m-smith-dai-hoc-pennsylvania-my-trien-khai-nhieu-hoat-dong-xay-dung-trung-tam-ung-buou-xuat-sac-coe-tai-vinmec/">PGS.BS
                                Kelly M. Smith - Đại học Pennsylvania (Mỹ) triển khai nhiều hoạt động xây dựng Trung tâm Ung
                                bướu xuất sắc (COE) tại Vinmec</a></h2>
                        <div class="description-latest-post">
                            Ngày 10/8, PGS. BS Kelly M. Smith – chuyên gia của Đại học Pennsylvania (Mỹ) đã chính thức làm
                            việc tại Khoa Ung bướu, Bệnh viện Vinmec Times City với vai trò Phụ trách Dự án Trung tâm xuất
                            sắc về Ung bướu (COE) tại Vinmec.
                        </div>
                    </div>
                </div>
                <div class="post-list">
                    <ul>
                        <li>
                            <a href="/tin-tuc/thong-tin-suc-khoe/dich-2019-ncov/thong-tin-suc-khoe/co-nen-tri-hoan-viec-tiem-chung-trong-dot-dich-covid-19/"
                                class="has-zoomable loaded-img"><img
                                    alt="Có nên trì hoãn việc tiêm chủng trong đợt dịch Covid-19?"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20191120_084425_617598_tiem-phong-vacxin.max-800x800.png"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20191120_084425_617598_tiem-phong-vacxin.max-800x800.png"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/thong-tin-suc-khoe/dich-2019-ncov/thong-tin-suc-khoe/co-nen-tri-hoan-viec-tiem-chung-trong-dot-dich-covid-19/">Có
                                        nên trì hoãn việc tiêm chủng trong đợt dịch Covid-19?</a></h2>
                                Trong thời điểm dịch bệnh Covid-19 vẫn đang diễn ra phức tạp, nhiều cha mẹ băn khoăn không
                                biết có nên đưa con đến bệnh viện để tiêm phòng không. Loại vắc xin nào có thể được trì hoãn
                                lịch tiêm, loại vắc xin nào không thể?
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/hop-tac-quoc-te/dai-hoc-pensylvania-cu-chuyen-gia-bac-si-dieu-duong-lam-viec-thuong-xuyen-tai-vinmec/"
                                class="has-zoomable loaded-img"><img
                                    alt="Đại học Pensylvania cử chuyên gia, bác sĩ, điều dưỡng làm việc thường xuyên tại Vinmec"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20200821_021346_223581_245d592a6b9497cace852.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20200821_021346_223581_245d592a6b9497cace852.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/hop-tac-quoc-te/dai-hoc-pensylvania-cu-chuyen-gia-bac-si-dieu-duong-lam-viec-thuong-xuyen-tai-vinmec/">Đại
                                        học Pensylvania cử chuyên gia, bác sĩ, điều dưỡng làm việc thường xuyên tại
                                        Vinmec</a></h2>
                                Theo thỏa thuận hợp tác với Vinmec nhằm xây dựng các Trung tâm xuất sắc (COE) về Tim mạch và
                                Ung bướu đầu tiên tại Việt Nam, Đại học Pensylvania (PENN) đã cam kết kế hoạch triển khai
                                chiến lược nhằm chuẩn bị nguồn nhân lực cho các chuyên khoa nói trên. Hiện nay, PENN đã cử
                                các chuyên gia, bác sĩ, điều dưỡng trực tiếp làm việc theo 2 hình thức thường xuyên và luân
                                phiên tại Vinmec.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/hop-tac-quoc-te/chuyen-gia-dai-hoc-penn-hoi-chan-chuyen-mon-online-voi-cac-bac-si-ung-buou-tai-benh-vien-vinmec-times-city/"
                                class="has-zoomable loaded-img"><img
                                    alt="Chuyên gia ung bướu Đại học PENN hội chẩn chuyên môn online với các bác sĩ Bệnh viện Vinmec Times City"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20200617_064902_573201_001.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20200617_064902_573201_001.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/hop-tac-quoc-te/chuyen-gia-dai-hoc-penn-hoi-chan-chuyen-mon-online-voi-cac-bac-si-ung-buou-tai-benh-vien-vinmec-times-city/">Chuyên
                                        gia ung bướu Đại học PENN hội chẩn chuyên môn online với các bác sĩ Bệnh viện Vinmec
                                        Times City</a></h2>
                                Thông qua các thông tin cập nhật mới nhất từ các hội nghị Y tế thế giới, các nghiên cứu tiên
                                tiến mới, bác sĩ Ung bướu của Vinmec được học hỏi và có thêm kiến thức.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/thong-tin-suc-khoe/nhung-dieu-can-luu-y-truoc-khi-kham-suc-khoe-tong-quat/"
                                class="has-zoomable loaded-img"><img
                                    alt="Những lưu ý quan trọng trước khi khám sức khỏe tổng quát"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20191130_030902_740495_20190226_042612_26719.max-800x800.png"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20191130_030902_740495_20190226_042612_26719.max-800x800.png"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/thong-tin-suc-khoe/nhung-dieu-can-luu-y-truoc-khi-kham-suc-khoe-tong-quat/">Những
                                        lưu ý quan trọng trước khi khám sức khỏe tổng quát</a></h2>
                                Nhờ khám sức khỏe tổng quát thường xuyên, nhiều người bệnh họ có thể phát hiện sớm các bệnh
                                hiểm nghèo và được điều trị kịp thời, hiệu quả. Dưới đây là những lưu ý trước khi khám sức
                                khỏe tổng quát tại Vinmec.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/thong-tin-suc-khoe/hoa-tri-xa-tri-lieu-phap-mien-dich-chua-ung-thu-anh-huong-toi-kha-nang-mang-thai-nao/"
                                class="has-zoomable loaded-img"><img
                                    alt="Hóa trị, xạ trị, liệu pháp miễn dịch chữa ung thư ảnh hưởng tới khả năng mang thai thế nào?"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20190717_074058_911082_mang-thai-gia-1024x68.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20190717_074058_911082_mang-thai-gia-1024x68.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/thong-tin-suc-khoe/hoa-tri-xa-tri-lieu-phap-mien-dich-chua-ung-thu-anh-huong-toi-kha-nang-mang-thai-nao/">Hóa
                                        trị, xạ trị, liệu pháp miễn dịch chữa ung thư ảnh hưởng tới khả năng mang thai thế
                                        nào?</a></h2>
                                Các biện pháp điều trị ung thư như xạ trị, hóa trị, liệu pháp miễn dịch có thể ảnh hưởng tới
                                khả năng mang thai của người phụ nữ. Mức độ ảnh hưởng phụ thuộc vào nhiều yếu tố như tuổi
                                tác, liều lượng, loại phương pháp và thể trạng của bệnh nhân. Đó cũng là cơ sở giúp người
                                bệnh đưa ra quyết định bị ung thư có nên sinh con không.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/hoat-dong-benh-vien/chuyen-gia-icon-uc-tuong-ve-tien-bo-moi-trong-xa-tri-ung-thu-tai-vinmec-central-park/"
                                class="has-zoomable loaded-img"><img
                                    alt="Chuyên gia ICON (Úc) ấn tượng về tiến bộ mới trong xạ trị ung thư tại Vinmec Central Park"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20191214_162138_232433_dieu-tri-ung-thu-mmqp.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20191214_162138_232433_dieu-tri-ung-thu-mmqp.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/hoat-dong-benh-vien/chuyen-gia-icon-uc-tuong-ve-tien-bo-moi-trong-xa-tri-ung-thu-tai-vinmec-central-park/">Chuyên
                                        gia ICON (Úc) ấn tượng về tiến bộ mới trong xạ trị ung thư tại Vinmec Central
                                        Park</a></h2>
                                Ung thư là một sự tăng trưởng ác tính hoặc khối u gây ra bởi sự phân chia tế bào bất thường
                                và không kiểm soát được. Thực hiện tầm soát ung thư sớm, người bệnh sẽ được chẩn đoán sớm
                                kết hợp điều trị và gia tăng cơ hội khỏi bệnh đồng thời phòng chống bệnh tái phát. Với việc
                                hợp tác cùng tên tuổi hàng đầu thế giới như ICON Group, Vinmec đã tiệm cận sớm nhất với các
                                tiêu chuẩn quốc tế, giúp người bệnh ung bướu an tâm khám và điều trị ngay tại Việt Nam.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/hop-tac-quoc-te/chuyen-gia-dai-hoc-penn-dao-tao-ve-suy-tim-tai-benh-vien-vinmec-times-city/"
                                class="has-zoomable loaded-img"><img
                                    alt="Chuyên gia Đại học PENN đào tạo về Suy tim tại Bệnh viện Vinmec Times City"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20191014_053806_710439_gs-paul-jmather.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20191014_053806_710439_gs-paul-jmather.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/hop-tac-quoc-te/chuyen-gia-dai-hoc-penn-dao-tao-ve-suy-tim-tai-benh-vien-vinmec-times-city/">Chuyên
                                        gia Đại học PENN đào tạo về Suy tim tại Bệnh viện Vinmec Times City</a></h2>
                                Chương trình đào tạo “Chăm sóc đa chuyên khoa ở bệnh nhân suy tim” tại Vinmec Times City từ
                                ngày 1/10 - 2/10/2019 do trực tiếp GS PAUL J. MATHER - người đứng đầu chương trình suy tim
                                tại Đại học Pennsylvania (Mỹ) thực hiện.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/thong-tin-suc-khoe/cam-nang-thong-tin-ho-tro-benh-nhan-xa-tri-vung-dau-co/"><img
                                    alt="Cẩm nang thông tin hỗ trợ bệnh nhân xạ trị vùng đầu cổ"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20190706_082115_901855_xa-tri-vung-dau-va-co.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20190706_082115_901855_xa-tri-vung-dau-va-co.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/thong-tin-suc-khoe/cam-nang-thong-tin-ho-tro-benh-nhan-xa-tri-vung-dau-co/">Cẩm
                                        nang thông tin hỗ trợ bệnh nhân xạ trị vùng đầu cổ</a></h2>
                                Xạ trị là Tia X năng lượng cao được sử dụng trong điều trị ung thư. Việc điều trị được thực
                                hiện một lần mỗi ngày, từ thứ Hai đến thứ Sáu, thường áp dụng đối với bệnh nhân ngoại trú và
                                bạn sẽ được hướng dẫn đến khu vực xạ trị. Một đợt điều trị có thể kéo dài đến 7 tuần. Hóa
                                trị có thể được chỉ định kết hợp cùng với xạ trị.
                            </div>
                        </li>
                        <li>
                            <a href="/tin-tuc/thong-tin-suc-khoe/phau-thuat-noi-soi-voi-robot-ho-tro-dieu-tri-ung-thu/"><img
                                    alt="Phẫu thuật nội soi với Robot hỗ trợ điều trị ung thư thận"
                                    data-src="https://vinmec-prod.s3.amazonaws.com/images/20190625_045830_913574_ung-thu-than.max-800x800.jpg"
                                    src="https://vinmec-prod.s3.amazonaws.com/images/20190625_045830_913574_ung-thu-than.max-800x800.jpg"
                                    lazy="loaded"></a>
                            <div class="post-content">
                                <h2><a
                                        href="/tin-tuc/thong-tin-suc-khoe/phau-thuat-noi-soi-voi-robot-ho-tro-dieu-tri-ung-thu/">Phẫu
                                        thuật nội soi với Robot hỗ trợ điều trị ung thư thận</a></h2>
                                Ung thư thận là loại ung thư nguy hiểm, có tỉ lệ tử vong cao và đang ngày càng gia tăng.
                                Phẫu thuật là phương pháp điều trị chính của bệnh. Phẫu thuật nội soi điều trị u ung thư
                                thận với Robot hỗ trợ là một bước phát triển mới, mang đến hiệu quả cao, đầy triển vọng cho
                                bệnh nhân.
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pagination">
                    <div class="vh"> kết quả.</div>
                    <span class="step-links"><span class="current">
                            Trang 1 / 3210
                        </span> <a
                            href="?page=2&amp;fbclid=IwAR2f59IGVuaSuxbs9HS82Iqx6GKGpadFOLfQlD3NZ3Cx383CdnICzx7Lzns">Trang
                            sau</a></span>
                </div>
            </div>
        </div>
        <script id="login-overlay-template" type="text/html">
            <div class="has-account-type-selector">
                <ul class="tab-content-triggers">
                    <li><a href="#signup-tab" class="active"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a></li>
                    <li><a href="#login-tab"><i class="fa fa-sign-in" aria-hidden="true"></i> Đăng nhập</a></li>
                </ul>

                <div class="tab-content-container">

                    <div id="login-tab" class="tab-content">
                        <div class="for-email-existed">
                            <p>Bạn đã có tài khoản đăng ký tại ViCare với email này. Vui lòng đăng nhập để sử dụng đầy đủ chức
                                năng của ViCare. Sau khi đăng nhập, bạn sẽ được đưa trở lại trang trước. Nội dung bạn vừa viết
                                đã được lưu lại vào trình duyệt và sẽ không bị mất đi.</p>
                        </div>

                        <form method="post" action="https://www.vinmec.com/vi/dang-nhap/?next=/vi/tin-tuc/" name="login">
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Email:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="text" name="email" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Mật khẩu:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="password" name="password" required></input>
                                        <p>
                                            <a class="reset-password-link" href="https://www.vinmec.com/vi/quen-mat-khau/">Quên
                                                mật khẩu?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="button-row">
                                <button type="submit">Đăng nhập</button>
                            </div>
                            <hr class="form-hr" />
                            <div class="button-row">
                                <button type="button" name="facebook"
                                        data-link="https://www.vinmec.com/tai-khoan/ket-noi/login/facebook/?next=/vi/tin-tuc/"
                                        class="button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Đăng nhập qua
                                    Facebook</button>
                            </div>
                        </form>
                    </div>

                    <div id="signup-tab" class="tab-content active">

                        <div class="instruction">
                            <p>
                                Chào mừng bạn đến với ViCare!
                            </p>

                            <div class="for-source-register_place">
                                <p>
                                    Sau khi mở tài khoản, bạn có thể dễ dàng cập nhật, chỉnh sửa trang thông tin phòng khám,
                                    bệnh viện hoặc doanh nghiệp mà bạn quản lý trên ViCare. Bạn cũng có thể gửi phản hồi nhận
                                    xét của khách hàng, và tham gia giải đáp các thắc mắc về y tế, sức khỏe của cộng đồng.
                                </p>
                                <p>
                                    Bạn cần chọn loại tài khoản là "Quản lý cơ sở y tế".
                                </p>
                            </div>
                            <div class="for-source-register_prof">
                                <p>
                                    Sau khi mở tài khoản, bạn có thể dễ dàng cập nhật, chỉnh sửa trang thông tin của mình trên
                                    ViCare. Bạn cũng có thể gửi phản hồi nhận xét của bệnh nhân, và tham gia giải đáp các thắc
                                    mắc về y tế, sức khỏe của cộng đồng.
                                </p>
                                <p>
                                    Bạn cần chọn loại tài khoản là "Bác sĩ".
                                </p>
                            </div>
                            <div class="for-source-favourite">
                                <p>
                                    Sau khi mở tài khoản, bạn có thể lưu lại cơ sở y tế và bác sĩ đáng quan tâm, cũng như sử
                                    dụng đầy đủ các chức năng, dịch vụ của ViCare
                                </p>
                            </div>
                            <div class="for-source-promotion">
                                <p>
                                    Bạn hãy mở tài khoản hoặc đăng nhập để nhận các ưu đãi về khám chữa bệnh, chăm sóc sức khỏe
                                    hấp dẫn từ ViCare!
                                </p>
                            </div>
                            <div class="for-source-others">
                                <p>
                                    Mở tài khoản dễ dàng, nhanh chóng với một form duy nhất để có thể sử dụng đầy đủ các chức
                                    năng và dịch vụ của ViCare.
                                </p>
                            </div>

                        </div>

                        <form method="post" action="https://www.vinmec.com/vi/dang-ky/?next=/vi/tin-tuc/" name="signup">
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Loại tài khoản:
                                    </label>
                                    <div class="form-field-input">
                                        <select class="account-type-selector" name="type">
                                            <option value="user">Thành viên</option>
                                            <option value="professional">Bác sĩ / chuyên gia</option>
                                            <option value="place">Cơ sở y tế / doanh nghiệp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Họ và tên:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="text" name="name" id="name" data-rules="required" class="validate" />
                                        <p class="validation-error help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Điện thoại:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="text" name="mobile_phone" id="mobile_phone" data-rules="required" />
                                        <p class="validation-error help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Email:
                                    </label>
                                    <div class="form-field-input">
                                        <input name="email" type="text" id="email" data-rules="required|valid_email"
                                                class="validate" />
                                        <p class="validation-error help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Mật khẩu:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="password" name="password" id="password"
                                                title="Mật khẩu cần có ít nhất 5 kí tự"
                                                placeholder="Mật khẩu cần có ít nhất 5 kí tự" data-display="Mật khẩu"
                                                data-rules="required|min_length[5]" class="validate"></input>
                                        <p class="validation-error help-block"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-field">
                                    <label>
                                        Xác nhận lại mật khẩu:
                                    </label>
                                    <div class="form-field-input">
                                        <input type="password" name="confirm_password" id="confirm_password"
                                                title="Nhập lại mật khẩu" placeholder="Nhập lại mật khẩu"
                                                data-rules="required|matches[password]" class="validate"></input>
                                        <p class="validation-error help-block"></p>
                                    </div>
                                </div>
                            </div>

                            <div class="for-account-type-place">
                                <hr class="form-hr" />
                                <div class="form-row">
                                    <div class="form-field">
                                        <label>
                                            Tên cơ sở y tế / doanh nghiệp:
                                        </label>
                                        <div class="form-field-input">
                                            <input type="text" name="place_name" value="<%= meta.placeName %>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-field">
                                        <label>
                                            Địa chỉ:
                                        </label>
                                        <div class="form-field-input">
                                            <input type="text" name="place_add" value="<%= meta.placeAdd %>" />
                                        </div>
                                    </div>
                                </div>
                                <p>Vui lòng cung cấp đầy đủ thông tin để chúng tôi có thể liên hệ và hỗ trợ bạn tốt nhất.</p>
                            </div>

                            <div class="for-account-type-professional">
                                <hr class="form-hr" />
                                <div class="form-row">
                                    <div class="form-field">
                                        <label>
                                            Chuyên khoa:
                                        </label>
                                        <div class="form-field-input">
                                            <input type="text" name="prof_spec" value="<%= meta.profSpec %>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-field">
                                        <label>
                                            Nơi công tác:
                                        </label>
                                        <div class="form-field-input">
                                            <input type="text" name="prof_place" value="<%= meta.profPlace %>" />
                                        </div>
                                    </div>
                                </div>
                                <p>Vui lòng cung cấp đầy đủ thông tin để chúng tôi có thể liên hệ và hỗ trợ bạn tốt nhất.</p>
                            </div>
                            <div class="button-row">
                                <button type="submit" name="register">Đăng ký</button>
                            </div>
                            <hr class="form-hr" />
                            <div class="button-row">
                                <button type="button" name="facebook"
                                        data-link="https://www.vinmec.com/tai-khoan/ket-noi/login/facebook/?next=/vi/tin-tuc/"
                                        class="button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Đăng ký qua
                                    Facebook</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </script>
        <script type="text/html" id="signup-confirmation-template">
            <div class="form-success">
                <h4><i class="fa fa-check-square-o"></i> Đăng ký mở tài khoản thành công!</h4>
                <p>Chào mừng bạn đến với ViCare!</p>
                <div class="for-account-type-professional">
                    <p>Cảm ơn bạn đã gửi thông tin. Chúng tôi sẽ liên hệ với bạn để xác nhận trong thời gian sớm nhất.</p>
                </div>
                <div class="for-account-type-place">
                    <p>Cảm ơn bạn đã gửi thông tin. Chúng tôi sẽ liên hệ với bạn để xác nhận trong thời gian sớm nhất.</p>
                </div>
                <p>
                    <strong>Họ và tên:</strong>
                    <%= name %>
                        <br />
                        <strong>Số điện thoại:</strong>
                        <%= phone ? phone : '<em>chưa cung cấp</em>' %>
                            <br />
                            <strong>Email:</strong>
                            <%= email %>
                </p>
                <div class="button-row">
                    <a href="<%= next %>" class="button">OK <i class="fa fa-check" aria-hidden="true"></i></a>
                </div>
            </div>
        </script>
        <input type="hidden" name="csrfmiddlewaretoken"
            value="Rh8BvmCA0EWd8vR0LLxgbmhAkB7qH439t3Q0mLcIwllm7DhFZ1XueRJHDwldCmgl">
    </div>
@endsection
