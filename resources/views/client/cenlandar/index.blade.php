@extends('client.layout.index')
@section('css')
<link rel="stylesheet" href="{{asset('/assets/css/cenlandar.css')}}">
@endsection
@section('content')
<div class="">
    <div style="height: 15px;"></div>
    <div class="title tab-container"><b>Trang chủ / </b><span>Xem lịch sử thông tin khám</span></div>
    <div class="tab-container">
        <div class="row">
            <a class="col col-sm col-lg-2 tab" href="/view-history">
                <div><span>Lịch đang đăng ký</span></div>
            </a>
            <a class="col col-sm col-lg-2 tab" href="/view-history/view-results">
                <div><span>Kết quả tư vấn, khám</span></div>
            </a>
            <a class="col col-sm col-lg-2 tab" href="/view-history/view-transactions">
                <div><span>Lịch sử giao dịch</span></div>
            </a>
            <div class="col col-sm col-lg-2 tab-active" style="margin-right: 15px;"><span>Lịch sử đặt hẹn</span></div>
        </div>
        <div class="tab-line"></div>
    </div>
    <div class="page">
        <div class="t-container border-bottom">
            <div class="row mt-3">
                <div class="col col-sm col-lg-2 mb-3">
                    <div class="inner-addon right-addon">
                        <img src="/assets/img/icon/Calendar.svg" class="glyphicon" />
                            <form  novalidate="" style="height: 100%;" class="ng-untouched ng-pristine ng-valid">
                                <div  class="row ml-0" style="height: 100%;">
                                    <div  style="width: 100%;">
                                        <input
                                            
                                            bsdatepicker=""
                                            formcontrolname="dateYMD"
                                            class="w3-input w3-border w3-round-large t-input ng-untouched ng-pristine ng-valid"
                                            style="height: 100%;"
                                            placeholder="22/03/2022"
                                        />
                                        <!---->
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="col-sm col-lg-2 mb-3">
                    <div class="inner-addon right-addon">
                        <img src="/assets/img/icon/Calendar.svg" class="glyphicon" />
                       
                            <form  novalidate="" style="height: 100%;" class="ng-untouched ng-pristine ng-valid">
                                <div  class="row ml-0" style="height: 100%;">
                                    <div  style="width: 100%;">
                                        <input
                                            
                                            bsdatepicker=""
                                            formcontrolname="dateYMD"
                                            class="w3-input w3-border w3-round-large t-input ng-untouched ng-pristine ng-valid"
                                            style="height: 100%;"
                                            placeholder="29/03/2022"
                                        />
                                        <!---->
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div class="ng-star-inserted">
            <div class="title-table">
                <div class="row">
                    <div class="text-align" style="width: 10%; padding-right: 20px;"><label>STT</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Ngày đặt</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Dịch vụ</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Hồ sơ</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Bệnh viện</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Mã BN</label></div>
                    <div style="width: 15%; padding-right: 20px;"><label>Trạng thái</label></div>
                </div>
            </div>
            <!---->
            <div class="page-number justify-content-center">
                <!---->
            </div>
        </div>
        <!---->
    </div>
    <div style="height: 4vh;"></div>
</div>

@endsection
