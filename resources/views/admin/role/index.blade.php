@extends('admin/layout/' . $layout)

@section('subhead')
    <x-head-title />
@endsection

@section('subcontent')
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <x-title />
        <x-create-new />
    </div>
    <div class="intro-y box p-5 mt-5">
        <x-filter />
        @include('admin.role.list')
    </div>

    <x-modal />
@endsection
