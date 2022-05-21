@extends('client.layout.index')

@section('content')
    <style>
        .font-weight-600 {
            font-weight: 600;
        }
        .img-diseases {
            height: 100px !important;
        }
    </style>
    <div id="wrapper" class="container">
        <div class="breadcrumb mt-3"><a href="/" class="no-underline">Trang chủ</a> <a href=""
                class="no-underline">Tra cứu bệnh</a></div>
        <div class="card text-left mt-4">
            <div class="card-body">
                <h6 class="card-title">Tìm kiếm bệnh theo triệu chứng</h6>
                <div class="row select-symptom mt-4 mb-4 ">
                    <div class="col-md-10  pr-0">
                        <select name="symptoms[]"
                            class="js-example-placeholder-multiple js-states form-control choice-symptoms"
                            multiple="multiple"></select>
                    </div>
                    <div class="col-md-2 pl-0">
                        <button class="btn btn-primary btn-block btn-search-diseases">Tìm kiếm</button>
                    </div>
                </div>
                <div class="diseases">
                    <h6 class="card-title">Có thể bạn đã mắc phải những bệnh dưới đây</h6>
                    <div class="card-columns list-diseases">

                    </div>
                </div>
                <div class="not-diseases">
                    <div class="alert alert-danger" role="alert">
                        <strong>Không tìm thấy bệnh nào theo các triệu chứng trên</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
