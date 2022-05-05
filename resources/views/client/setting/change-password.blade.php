@extends('client.layout.index')
@section('content')
    <div id="wrapper" class="container">
        <div class="breadcrumb-vn"><label class="font-weight-600">Trang chủ/</label><span> Cài đặt</span></div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-start align-items-center mb-1 p-125">
                            <div class="avatar mr-2"><img alt="avatar img" height="50" width="50"
                                    src="/assets/img/logo-vncare-min.png" /></div>
                            <div class="profile-user-info">
                                <div class="mb-0 font-weight-600"></div>
                                <div class="text-muted"></div>
                            </div>
                        </div>
                        <div class="mt-3 mb-3">
                            <div class="prof-sidebar-item " tabindex="0">
                                <div class="p-2">
                                    <img src="/assets/img/setting-call-active.svg" class="ng-star-inserted" />

                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Thay đổi thông tin</span></a>
                                </div>
                            </div>
                            <div  class="prof-sidebar-item prof-sidebar-item-active" tabindex="0">
                                <div class="p-2">
                                    <img src="/assets/img/setting-lock.svg" class="ng-star-inserted" />
                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Đổi mật khẩu</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-4 mr-3 ml-3"><button class="btn btn-lg btn-logout btn-block">Đăng
                                xuất</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="font-weight-600">Đổi mật khẩu</div>
                        <!---->
                        <div class="row">
                            <div class="mt-2 col-md-8">
                                <form novalidate="" class="ng-invalid ng-dirty ng-touched">
                                    <div class="form-group">
                                        <label>Mật khẩu hiện tại <span class="text-danger"> *</span></label>
                                        <input type="text" formcontrolname="username" placeholder="Nhập mật khẩu hiện tại"
                                            class="form-control ng-untouched ng-pristine ng-invalid" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu mới  <span class="text-danger"> *</span></label>
                                        <input type="text" formcontrolname="phoneNumber"
                                            placeholder="Nhập mật khẩu mới"
                                            class="form-control ng-dirty ng-valid ng-touched" />
                                    </div>
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu mới <span class="text-danger"> *</span></label>
                                        <input type="password" formcontrolname="password" placeholder="Xác nhận mật khẩu mới"
                                            class="form-control ng-dirty ng-valid ng-touched" />
                                    </div>
                                    <div class="form-group"><button class="btn vn-btn-success">Lưu</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->

        <!---->
    </div>
    <style>
        .btn-logout {
            background: #fff;
            border: 1px solid #e2e2e2;
            box-sizing: border-box;
            border-radius: 8px;
            color: #f23939;
            font-weight: 700;
            font-size: 1rem;
        }

        .font-weight-600 {
            font-weight: 600;
        }

        .vn-btn-success {
            color: #fff !important;
            background-color: #3bccbb !important;
            border-color: #3bccbb !important;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

    </style>
@endsection
