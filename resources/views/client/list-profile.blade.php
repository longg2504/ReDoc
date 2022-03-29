@extends('client.layout.index')
@section('content')
    <style>
        .dshs-block {
            width: auto;
            height: auto;
            margin-top: 12px;
            padding-left: 28px !important;
            padding-right: 28px !important;
            padding-bottom: 38px !important;
            background: #fff;
            border: 1px solid #e2e2e2;
            box-sizing: border-box;
            border-radius: 8px;
        }

        .btn {
            background: #3bccbb;
            border-radius: 8px;
            width: 140px;
            height: 40px;
            margin-top: -5px;
        }

        .text-2,
        .text-3 {
            font-family: Open Sans;
            font-style: normal;
            font-weight: 700;
            color: #141414;
        }

        .text-2 {
            height: 51px;
            margin-top: 28px;
            font-size: 17px;
            line-height: 23px;
            letter-spacing: -.408px;
            border-bottom: 1px solid #e2e2e2;
        }

    </style>
    <div id="wrapper" class="container">



        <div id="ect-loader" class="ect-loader app-spinner ng-tns-c126-0 ng-trigger ng-trigger-inOutAnimation"
            style="display: none;">
            <div id="overlay-bg" class="ng-tns-c126-0"></div>
            <div class="spinner-dual-ring ng-tns-c126-0"><img src="assets/img/loading-icon.svg" height="60" width="60"
                    class="ng-tns-c126-0" /></div>
        </div>

        <div class="frm">
            <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                <div class="form-row index-content m-0 p-0">
                    <div class="title"><b>Trang chủ</b><b> / </b><span>Quản lí thông tin hồ sơ</span>
                    </div>
                    <div class="form-row col-12 dshs-block">
                        <div class="col-12 text-2">
                            Danh sách hồ sơ <button class="btn mr-1 float-right"><span class="text-btn">Thêm hồ
                                    sơ</span></button>
                        </div>
                        <!---->
                    </div>
                </div>
            </form>
        </div>
        <div id="exampleModalCenter" tabindex="-1 " role="dialog " aria-labelledby="exampleModalCenterTitle "
            aria-hidden="true " class="modal fade" style="margin-top: 5%;">
            <div role="document " class="modal-dialog">
                <div class="modal-content" style="height: 200px;">
                    <div class="b-title" style="height: 30%;">
                        <h2 id="exampleModalCenterTitle" style="margin-top: 5px;">Xác nhận xóa hồ
                            sơ</h2>
                    </div>
                    <div class="m-title" style="height: 30%;"><label>Bạn có chắc chắn muốn xóa thông tin hồ sơ của
                        </label></div>
                    <div style="height: 40%;">
                        <div class="popup-content ml-7 mr-7">
                            <p>Lưu ý sau khi xóa, sẽ không thể lấy lại thông tin hồ sơ.</p>
                        </div>
                        <div class="justify-content-center">
                            <button data-dismiss="modal" class="btn" style="margin-right: 10px;"><span
                                    class="text-btn">Hủy</span></button>
                            <button class="btn" style="margin-left: 10px;"><span class="text-btn">Xóa hồ
                                    sơ</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
