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

        #app_dia-chi {
            width: 100%;
            float: left;
        }

        .dia-chi__box>div,
        .dia-chi__box-dia-chi>div {
            margin-bottom: 10px;
        }

        [class*="box-thong-tin__"],
        [class*="box-dia-chi__"] {
            height: auto;
            border: 1px solid #ccc;
            background: white;
            box-shadow: 0 1px 3px rgb(0 0 0 / 20%);
            border-radius: 5px;
            overflow: hidden;
        }

        .dia-chi__box [class*="__box-h2"] {
            /* padding: 15px; */
        }

        .tru-so__box-h2,
        .cua-hang__box-h2 {
            padding: 15px 10px 0px 15px;
        }

        .cua-hang__thong-tin {
            padding: 0 20px 5px 20px;
        }

        .cua-hang__box-search {
            width: 50%;
            height: 100px;
            float: left;
            margin: 0 0 15px 10px;
            padding: 10px;
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .location-select-box {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .cua-hang__box-search select {
            width: calc(33% - 3px);
            float: left;
            margin-bottom: 10px;
        }

        .dia-chi__box [class*="__box-content"] {
            padding: 0;
        }

        [class*="boxNone"],
        .cua-hang__box-content {
            width: 100%;
            height: auto;
            /* min-height: 280px; */
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            float: left;
            border-top: 1px solid #ccc;
        }

        .box-content__item {
            min-height: 267px;
            display: flex;
            flex-basis: calc(100% / 3);
            flex-direction: column;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            overflow: hidden;
        }

        .box-content__item>.row>.item__img {
            height: 200px;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #eeeeee;
            overflow: hidden;
            -webkit-transition: .3s;
            -moz-transition: .3s;
            -o-transition: .3s;
            transition: .3s;
        }

        .box-content__item>.row>.item__dia-chi {
            padding: 10px 0 0 0;
        }

    </style>
    {{-- <div id="wrapper" class="container">
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

    </div> --}}

    <div id="wrapper" class="container mt-3">
        <div id="app_dia-chi ">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.3125485990154!2d108.34125971426357!3d12.951841218817174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316e1ebdadd30301%3A0x6203cb25d38db747!2zQ-G7rWEgSMOgbmcgSG9uZGEg4bumeSBOaGnhu4dtIFRydW5nIFRo4bqhY2ggMg!5e0!3m2!1svi!2s!4v1649598343153!5m2!1svi!2s"
                width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
