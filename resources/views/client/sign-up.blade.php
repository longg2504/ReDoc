<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <div  class="auth-container">
        <div  class="col-md-4 p-0">
            <div  class="auth-left center p-5 h-100">
                <div  class="frm login-form w-100">
                    <div  class="logo text-center">
                        <a   href="/"><img  src="/assets/img/vncare-logo.svg" title="VNCARE" class="img-fluid" /></a>
                    </div>
                    <div  class="page-title text-center mt-4 mb-4">ĐĂNG KÝ</div>
                    <form  class="ng-invalid ng-dirty ng-touched">
                        <div  class="form-group">
                            <label >Họ và tên<span  class="text-danger"> *</span></label>
                            <input  placeholder="Nhập họ và tên" formcontrolname="fullName" class="form-control input-custom ng-untouched ng-pristine ng-invalid" />
                        </div>
                        <div  class="form-group">
                            <label >Số điện thoại<span  class="text-danger"> *</span></label>
                            <input  placeholder="Nhập số điện thoại" type="text" formcontrolname="phoneNumber" class="form-control input-custom ng-dirty ng-valid ng-touched" />
                        </div>
                        <div  class="form-group">
                            <label >Mật khẩu<span  class="text-danger"> *</span></label>
                            <div  class="input-group mb-3">
                                <input  formcontrolname="password" placeholder="Nhập mật khẩu" class="form-control input-custom ng-dirty ng-valid ng-touched" type="password" />
                            </div>
                        </div>
                        <div  class="form-group">
                            <label >Xác nhận mật khẩu<span  class="text-danger"> *</span></label>
                            <div  class="input-group mb-3">
                                <input  placeholder="Nhập xác nhận mật khẩu" formcontrolname="passwordConfirm" class="form-control input-custom ng-untouched ng-pristine ng-invalid" type="password" />
                                
                            </div>

                        </div>
                        <div  class="form-group small">
                            <span  class="text-danger">Lưu ý: </span>
                            <p  class="mb-0">Họ tên phải là tên trên các giấy tờ tùy thân như CMND/ CCCD/ Hộ chiếu.</p>
                            <p  class="mb-0">Mật khẩu phải có độ dài ít nhất 6 ký tự bao gồm ít nhất:</p>
                            <ul >
                                <li >1 ký tự hoa</li>
                                <li >1 ký tự thường</li>
                                <li >1 ký tự số</li>
                            </ul>
                        </div>
                        <div  class="form-group d-inline-flex confirm-content">
                            <input  type="checkbox" formcontrolname="isAccept" id="isAccept" class="form-control-sm ng-untouched ng-pristine ng-invalid" />
                            <label  for="isAccept" class="mb-03">Tôi đã đọc và đồng ý với <a  href="/sign-up">điều khoản sử dụng.</a></label>
                        </div>
                        <div  class="form-group mt-4">
                            <button  type="submit" class="btn btn-block btn-lg vn-btn-success">
                                Đăng ký tài khoản
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div  class="col-md-8"><div  class="auth-right"></div></div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>