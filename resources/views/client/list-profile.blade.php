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
            <div class="col-md-12 col-xs-12 dia-chi__box-dia-chi">
                <div id="boxDiaChiCps" class="col-md-12 col-xs-12 box-dia-chi__cua-hang">
                    <div class="cua-hang__box-h2">
                        <h2>Hệ Thống Phòng khám</h2>
                        <h2></h2>
                    </div>
                    <div class="cua-hang__thong-tin">
                        <p><strong>Giờ cửa mở cửa: </strong>8h00 - 22h00 <a
                                href="https://cellphones.com.vn/lich-hoat-dong-cua-hang-cellphones" target="_blank">(Áp dụng
                                tuỳ phòng khám)</a></p>
                    </div>
                    <div class="cua-hang__box-search">
                        <div class="form-group">
                            <div class="location-select-box"><select id="sel1" class="form-control select__khu-vuc">
                                    <option value="0">Tất cả khu vực</option>
                                    <option value="7">Miền Nam</option>
                                    <option value="1">Miền Bắc</option>
                                </select> <select id="selProvince" class="form-control select__tinh-thanh">
                                    <option value="0" hidden="hidden">Chọn Tỉnh Thành</option>
                                    <option value="0">Tất cả Tỉnh Thành</option>
                                    <option value="1">
                                        Hồ Chí Minh
                                    </option>
                                    <!---->
                                    <option value="4">
                                        Bình Dương
                                    </option>
                                    <option value="5">
                                        Đồng Nai
                                    </option>
                                    <!---->
                                    <option value="8">
                                        Long An
                                    </option>
                                    <option value="10">
                                        Vũng Tàu
                                    </option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <option value="37">
                                        Bến Tre
                                    </option>
                                </select> <select id="sel2" class="form-control select_quan-huyen">
                                    <option value="0" hidden="hidden">Chọn Quận Huyện</option>
                                    <option value="0">Tất cả Quận Huyện</option>
                                    <option value="10">
                                        Quận 1
                                    </option>
                                    <option value="14">
                                        Quận 2
                                    </option>
                                    <option value="16">
                                        Quận 4
                                    </option>
                                    <option value="18">
                                        Quận 6
                                    </option>
                                    <option value="19">
                                        Quận 7
                                    </option>
                                    <option value="20">
                                        Quận 8
                                    </option>
                                    <option value="21">
                                        Quận 9
                                    </option>
                                    <option value="11">
                                        Quận 10
                                    </option>
                                    <option value="12">
                                        Quận 11
                                    </option>
                                    <option value="13">
                                        Quận 12
                                    </option>
                                    <option value="1">
                                        Huyện Bình Chánh
                                    </option>
                                    <option value="3">
                                        Quận Bình Thạnh
                                    </option>
                                    <option value="2">
                                        Quận Bình Tân
                                    </option>
                                    <option value="5">
                                        Huyện Củ Chi
                                    </option>
                                    <option value="6">
                                        Quận Gò Vấp
                                    </option>
                                    <option value="7">
                                        Huyện Hóc Môn
                                    </option>
                                    <option value="9">
                                        Quận Phú Nhuận
                                    </option>
                                    <option value="24">
                                        Quận Thủ Đức
                                    </option>
                                    <option value="22">
                                        Quận Tân Bình
                                    </option>
                                    <option value="23">
                                        Quận Tân Phú
                                    </option>
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                    <!---->
                                </select></div> <input type="text" placeholder="Nhập tên đường, quận huyện"
                                class="form-control">
                        </div>
                    </div>
                    <div id="boxContentCps" class="cua-hang__box-content" style="">
                        <div id="359CH" class="box-content__item">
                            <div class="row">
                                <div class="col-md-12 col-xs-5 item__img"><a target="_blank"
                                        href="https://g.page/cps359hcm?share"><img
                                            data-src="/media/ltsoft/shop_media/shop_image_359CH.png"
                                            src="/media/ltsoft/shop_media/shop_image_359CH.png" lazy="loaded"> <span>Nhấn
                                            vào để xem bản đồ chi tiết</span></a></div>
                                <div class="col-md-12 col-xs-7 item__dia-chi">
                                    <p>359 Cộng Hòa, Phường 13, Quận Tân Bình</p>
                                    <!---->
                                    <div class="box-shop-description">
                                        <p><strong>Gọi shop:&nbsp;<a href="tel:02871015359">0<span
                                                        data-sheets-value="{&quot;1&quot;:3,&quot;3&quot;:2871015359}"
                                                        data-sheets-userformat="{&quot;2&quot;:7147,&quot;3&quot;:{&quot;1&quot;:0},&quot;4&quot;:{&quot;1&quot;:2,&quot;2&quot;:16167531},&quot;6&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;8&quot;:{&quot;1&quot;:[{&quot;1&quot;:2,&quot;2&quot;:0,&quot;5&quot;:{&quot;1&quot;:2,&quot;2&quot;:0}},{&quot;1&quot;:0,&quot;2&quot;:0,&quot;3&quot;:3},{&quot;1&quot;:1,&quot;2&quot;:0,&quot;4&quot;:1}]},&quot;9&quot;:0,&quot;10&quot;:2,&quot;11&quot;:0,&quot;12&quot;:0,&quot;14&quot;:{&quot;1&quot;:2,&quot;2&quot;:0},&quot;15&quot;:&quot;Arial&quot;}">2871015359</span></a>&nbsp;|&nbsp;</strong><a
                                                href="https://oa.zalo.me/231202482010176315" target="_blank"><strong>Zalo
                                                    với shop</strong></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="boxNoneCps" style="display: none;">
                        <p>Chưa có cửa hàng tại khu vực này, Vui lòng chọn tiếp các Quận gần Quý khách!</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
