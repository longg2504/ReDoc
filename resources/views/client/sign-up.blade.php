<!doctype html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/login.css">
    <script src="{{ asset('js/sweetalert.all.js') }}"></script>
</head>
<style>
    .auth-container {
        padding: 0;
        background-image: url(/assets/img/bg-login.jpg);
        background-size: 100%;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        width: 100%;
        height: 100%;
        margin: 0;
    }

</style>

<body>
    @include('sweetalert::alert')
    <div class="auth-container">
        <div class="col-md-4 p-0">
            <div class="auth-left center p-5 h-100">
                <div class="frm login-form w-100">
                    <div class="logo text-center">
                        <a href="/"><img src="/assets/img/vncare-logo.svg" title="VNCARE" class="img-fluid" /></a>
                    </div>
                    <div class="page-title text-center mt-4 mb-4">ĐĂNG KÝ</div>
                    <form action="{{ route('client.postRegister') }}" method='post'
                        class="ng-invalid ng-dirty ng-touched">
                        @csrf
                        <div class="form-group">
                            <label>Tên tài khoản<span class="text-danger"> *</span></label>
                            <input name="username" placeholder="Nhập tên tài khoản" formcontrolname="fullName"
                                class="form-control input-custom ng-untouched ng-pristine ng-invalid" />
                            @error('username')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email<span class="text-danger"> *</span></label>
                            <input name="email" placeholder="Nhập email" formcontrolname="email"
                                class="form-control input-custom ng-untouched ng-pristine ng-invalid" />
                            @error('email')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ<span class="text-danger"> *</span></label>
                            <input name="address" placeholder="Nhập địa chỉ" formcontrolname="address"
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
                                <option value="2">Liên Chiểu</option>
                                <option value="3">Sơn Trà</option>
                                <option value="4">Cẩm lệ</option>
                                <option value="5">Ngũ Hành</option>
                                <option value="6">Sơn Thanh Khê</option>
                            </select>
                            @error('district')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Thành phố<span class="text-danger"> *</span></label>
                            <select name="" class="form-control" name="">\
                                <option value="1">Đà Nẵng</option>
                            </select>
                            @error('city')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tuổi<span class="text-danger"> *</span></label>
                            <input name="age" type="number" placeholder="Nhập tuổi" formcontrolname="age"
                                class="form-control input-custom ng-untouched ng-pristine ng-invalid" />
                            @error('age')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu<span class="text-danger"> *</span></label>
                            <div class="input-group mb-3">
                                <input name="password" formcontrolname="password" placeholder="Nhập mật khẩu"
                                    class="form-control input-custom ng-dirty ng-valid ng-touched" type="password" />
                            </div>
                            @error('password')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Xác nhận mật khẩu<span class="text-danger"> *</span></label>
                            <div class="input-group mb-3">
                                <input name="repassword" placeholder="Nhập xác nhận mật khẩu"
                                    formcontrolname="passwordConfirm"
                                    class="form-control input-custom ng-untouched ng-pristine ng-invalid"
                                    type="password" />
                            </div>
                            @error('repassword')
                                <small class="text-danger">* {{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-block btn-lg vn-btn-success">
                                Đăng ký tài khoản
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="auth-right"></div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
        const district = ['Cẩm Lệ', 'Hải Châu', 'Liên Chiểu', 'Ngũ Hành Sơn', 'Sơn Trà', 'Thanh Khê'];
        district.forEach(element => {
            $('select[name="district"]').append(`<option value="${element}">${element}</option>`)
        });
    </script>
</body>

</html>
