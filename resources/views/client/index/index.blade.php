@extends('client.layout.index')
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
@endsection
