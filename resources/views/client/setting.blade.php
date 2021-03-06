@extends('client.layout.index')
@section('content')
    <div id="wrapper" class="container">
        <div class="breadcrumb mt-3"><a href="/" class="no-underline">Trang chủ</a> <a href="" class="no-underline">Cài
                đặt</a></div>
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
                            <div class="prof-sidebar-item" tabindex="0" data-tab="information">
                                <div class="p-2">
                                    <img src="/assets/img/setting-call-active.svg" class="ng-star-inserted" />
                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Thay đổi thông tin</span></a>
                                </div>
                            </div>

                            <div class="prof-sidebar-item prof-sidebar-item-active" tabindex="0" data-tab="password">
                                <div class="p-2">
                                    <img src="/assets/img/setting-lock.svg" class="ng-star-inserted" />
                                </div>
                                <div class="p-2">
                                    <a><span class="font-weight-600">Đổi mật
                                            khẩu</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-show-content-password">
                    <div class="card-body">
                        <div class="font-weight-600">Đổi mật khẩu</div>
                        <!---->
                        <div class="row">
                            <div class="mt-2 col-md-8">
                                <form action="{{ route('client.update-password') }}" method="POST" novalidate=""
                                    class="ng-invalid ng-dirty ng-touched">
                                    @csrf
                                    <div class="form-group">
                                        <label>Mật khẩu hiện tại <span class="text-danger"> *</span></label>
                                        <input type="password" name="oldPassword" formcontrolname="username"
                                            placeholder="Nhập mật khẩu hiện tại"
                                            class="form-control ng-untouched ng-pristine ng-invalid" />
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu mới <span class="text-danger"> *</span></label>
                                        <input type="password" name="password" formcontrolname="phoneNumber"
                                            placeholder="Nhập mật khẩu mới"
                                            class="form-control ng-dirty ng-valid ng-touched" />
                                    </div>
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu mới <span class="text-danger"> *</span></label>
                                        <input type="password" name="confirmPassword" formcontrolname="password"
                                            placeholder="Xác nhận mật khẩu mới"
                                            class="form-control ng-dirty ng-valid ng-touched" />
                                    </div>
                                    <div class="form-group"><button class="btn vn-btn-success">Lưu</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-show-content-information d-none">
                    @if (isset($user))
                        <div class="card-body">
                            <div class="font-weight-600">Thay đổi thông tin cá nhân</div>
                            <!---->
                            <div class="row">
                                <div class="mt-2 col-md-8">
                                    <form novalidate="" class="ng-invalid ng-dirty ng-touched"
                                        action="{{ route('client.update-info') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label>Tên người dùng <span class="text-danger"> *</span></label>
                                            <input type="text" name="username" formcontrolname="username"
                                                placeholder="Nhập tên người dùng"
                                                value="{{ old('username', $user->username) }}"
                                                class="form-control ng-untouched ng-pristine ng-invalid" />
                                            @error('username')
                                                <small class="text-danger">* {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Email <span class="text-danger"> *</span></label>
                                            <input type="text" name="email" formcontrolname="email"
                                                value="{{ old('username', $user->email) }}" placeholder="Nhập email"
                                                class="form-control ng-dirty ng-valid ng-touched" />
                                            @error('email')
                                                <small class="text-danger">* {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Địa chỉ<span class="text-danger"> *</span></label>
                                            <input name="address" value="{{ old('username', $user->address) }}  "
                                                placeholder="Nhập địa chỉ" formcontrolname="address"
                                                class="form-control input-custom ng-untouched ng-pristine ng-invalid" />
                                            @error('address')
                                                <small class="text-danger">* {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Quận<span class="text-danger"> *</span></label>
                                            <select name="district" class="form-control" name="">
                                                <option value="">
                                                    <--- chọn quận --->
                                                </option>
                                            </select>
                                            @error('district')
                                                <small class="text-danger">* {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="">Thành phố<span class="text-danger"> *</span></label>
                                            <select class="form-control">
                                                <option selected value="1">Đà Nẵng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tuổi <span class="text-danger"> *</span></label>
                                            <input type="text" name="age" formcontrolname="age" placeholder="Nhập tuổi"
                                                value="{{ old('username', $user->age) }} "
                                                class="form-control ng-dirty ng-valid ng-touched" />
                                            @error('age')
                                                <small class="text-danger">* {{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group"><button class="btn vn-btn-success">Lưu</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <!---->

            <!---->
        </div>
        <script>
            $(document).ready(function() {
                const user = @json($user);

                const district = ['Cẩm Lệ', 'Hải Châu', 'Liên Chiểu', 'Ngũ Hành Sơn', 'Sơn Trà', 'Thanh Khê'];
                district.forEach(element => {
                    $('select[name="district"]').append(`<option value="${element}">${element}</option>`)
                });
                $('.prof-sidebar-item').click(function() {
                    $('.prof-sidebar-item').removeClass('prof-sidebar-item-active');
                    $(this).addClass('prof-sidebar-item-active');
                    if ($(this).data('tab') == 'information') {
                        $('.card-show-content-information').removeClass('d-none');
                        $('.card-show-content-password').addClass('d-none');
                    } else {
                        $('.card-show-content-information').addClass('d-none');
                        $('.card-show-content-password').removeClass('d-none');
                    }
                });

                $(`select[name="district"] option[value="${user.district}"]`).attr('selected', true);

                // $('#address').on('input', function(e) {
                //     var data = e.target.value;
                //     $.ajax({
                //         url: "/api/address-check/autocomplete",
                //         type: "post",
                //         dataType: "text",
                //         data: {
                //             address: data
                //         },
                //         success: function(data) {
                //             var res = JSON.parse(data);

                //             var listAdrres = [];
                //             for (let index = 0; index < res.length; index++) {
                //                 listAdrres.push(res[index].address);
                //             }
                //             $("#address").autocomplete({
                //                 source: listAdrres
                //             });
                //         }
                //     });
                // });

            });
        </script>
        <style>
            .btn-logout {
                background: #fff !important;
                border: 1px solid #e2e2e2 !important;
                box-sizing: border-box;
                border-radius: 8px;
                color: #f23939 !important;
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
