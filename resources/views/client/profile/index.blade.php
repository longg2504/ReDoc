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
                            <div routerlink="/setting/change-phone-number"
                                class="prof-sidebar-item prof-sidebar-item-active" tabindex="0">
                                <div class="p-2">

                                    <img src="/assets/img/setting-call-active.svg"
                                        class="ng-star-inserted" />

                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Thay đổi số điện thoại</span></a>
                                </div>
                            </div>
                            <div routerlink="/setting/change-password" class="prof-sidebar-item" tabindex="0">
                                <div class="p-2">
                                    <img src="/assets/img/setting-lock.svg"
                                        class="ng-star-inserted" />
                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Đổi mật khẩu</span></a>
                                </div>
                            </div>
                            <div class="prof-sidebar-item">
                                <div class="p-2"><img src="/assets/img/rules.svg" />
                                </div>
                                <div class="p-2">
                                    <a routerlink="/dieukhoan" href="/dieukhoan"><span class="font-weight-600">Điều
                                            khoản sử dụng</span></a>
                                </div>
                            </div>
                            <div class="prof-sidebar-item">
                                <div class="p-2"><img src="/assets/img/remove.svg" />
                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Xóa tài khoản</span></a>
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
                        <div class="font-weight-600">Thay đổi số điện thoại</div>
                        <!---->
                        <div class="row">
                            <div class="mt-2 col-md-8">
                                <form novalidate="" class="ng-invalid ng-dirty ng-touched">
                                    <div class="form-group">
                                        <label>Số điện thoại cũ <span class="text-danger"> *</span></label>
                                        <input type="text" formcontrolname="username" placeholder="Nhập số điện thoại cũ"
                                            class="form-control ng-untouched ng-pristine ng-invalid" />
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại mới <span class="text-danger"> *</span></label>
                                        <input type="text" formcontrolname="phoneNumber"
                                            placeholder="Nhập số điện thoại mới"
                                            class="form-control ng-dirty ng-valid ng-touched" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu <span class="text-danger"> *</span></label>
                                        <input type="password" formcontrolname="password" placeholder="Nhập mật khẩu"
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
@endsection
