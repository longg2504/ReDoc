<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/login.css">
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
    <div class="auth-container">
        <div class="col-md-4 col-sm-12 col-xs-12 p-0 h-100">
            <div class="auth-left center p-5 h-100">
                <div class="frm login-form w-100">
                    <div class="logo text-center">
                        <a href="/"><img src="/assets/img/vncare-logo.svg" title="VNCARE" class="img-fluid" /></a>
                    </div>
                    <div class="page-title text-center mt-4 mb-4">ĐĂNG NHẬP</div>
                    <!---->
                    <form class="ng-untouched ng-pristine ng-valid">
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input placeholder="Nhập số điện thoại" type="text" formcontrolname="phoneNumber"
                                class="form-control input-custom ng-untouched ng-pristine ng-valid" />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <div class="input-group mb-3">
                                <input formcontrolname="password" placeholder="Nhập mật khẩu"
                                    class="form-control input-custom ng-untouched ng-pristine ng-valid"
                                    type="password" />
                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <div class="d-inline-flex remember-cb">
                                <input type="checkbox" formcontrolname="remember" id="remember"
                                    class="form-control-sm ng-untouched ng-pristine ng-valid" /><label for="remember"
                                    class="mb-03">Ghi nhớ</label>
                            </div>
                            <div class="font-weight-600"><a href="">Quên mật khẩu?</a></div>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-block btn-lg vn-btn-success">
                                <!---->
                                Đăng nhập
                            </button>
                            <button type="button" routerlink="/sign-up"
                                class="btn btn-block btn-lg vn-btn-outline-success mt-3" tabindex="0">Đăng ký</button>
                        </div>
                    </form>
                    <div class="text-center mt-4">
                        <p class="font-weight-600"><a href="">Đăng ký khám ngay</a></p>
                    </div>
                </div>
            </div>
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
</body>

</html>
