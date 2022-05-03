@extends('client.layout.index')
@section('css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
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

        .dropdown-toggle::after {
            display: none;
        }

    </style>
    <div id="wrapper" class="container">
        <div class="breadcrumb-vn mt-2"><label class="font-weight-600">Trang chủ/</label><span>Tra cứu bệnh</span></div>


        <select id="framework" name="framework[]" multiple class="form-control">
            <option value=""></option>
        </select>
        <button class="btn btn-primary btn-search-diseases">Search</button>

        <div class="card mt-4 p-4 list-diseases">
            <div class="row diseases">
                
            </div>
        </div>






    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/client/medical.js') }}"></script>
@endsection
