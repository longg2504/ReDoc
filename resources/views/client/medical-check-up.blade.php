@extends('client.layout.index')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>

@endsection
@section('content')
    <style>
        .font-weight-600 {
            font-weight: 600;
        }

        .filter {
            transform: translateX(-5px);
        } 
        .dropdown-toggle::after{
            display: none;
        }
    </style>
    <div id="wrapper" class="container">
        <div class="breadcrumb-vn mt-2"><label class="font-weight-600">Trang chủ/</label><span>Tra cứu bệnh</span></div>
        
      
        <select id="framework" name="framework[]" multiple class="form-control">
            <option value=""></option>
        </select>
        <button class="btn btn-primary btn-search-diseases">Search</button>

        {{-- <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <h4 class="card-title">Tìm kiếm bệnh</h4>
                <div class="row">
                    <div class="form-check mr-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Đau đầu</label>
                    </div>
                    <div class="form-check mr-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Đau đầu</label>
                    </div>
                    <div class="form-check mr-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Đau đầu</label>
                    </div>
                    <div class="form-check mr-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Đau đầu</label>
                    </div>
                </div>

            </div>
        </div> --}}
        {{-- <div class="card text-left">
            <img class="card-img-top" src="holder.js/100px180/" alt="">
            <div class="card-body">
                <p class="card-text">có thể bạn đã bị những bênh dưới đây</p>
                <div class="card-columns">
                    <div class="row">
                        <div class="card mr-3 ml-3">
                            <img class="card-img-top"
                                src="https://vinmec-prod.s3.amazonaws.com/images/20190514_082820_373671_1738.jpg_wh1200.max-1800x1800.jpg"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title">Đau đầu</h4>
                                <p class="card-text">Đau đầu là cảm giác khó chịu nhất của mỗi người, có rất nhiều
                                    nguyên
                                    nhân gây ra....</p>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3">
                            <img class="card-img-top"
                                src="https://vinmec-prod.s3.amazonaws.com/images/20190514_082820_373671_1738.jpg_wh1200.max-1800x1800.jpg"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title">Đau đầu</h4>
                                <p class="card-text">Đau đầu là cảm giác khó chịu nhất của mỗi người, có rất nhiều
                                    nguyên
                                    nhân gây ra....</p>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3">
                            <img class="card-img-top"
                                src="https://vinmec-prod.s3.amazonaws.com/images/20190514_082820_373671_1738.jpg_wh1200.max-1800x1800.jpg"
                                alt="">
                            <div class="card-body">
                                <h4 class="card-title">Đau đầu</h4>
                                <p class="card-text">Đau đầu là cảm giác khó chịu nhất của mỗi người, có rất nhiều
                                    nguyên
                                    nhân gây ra....</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
