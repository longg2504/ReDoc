@php
use App\Helper\Form;
if (!isset($data) || !isset($data['listPermission'])) {
    $link = route('admin.' . $controllerName . '.store');
} else {
    $link = route('admin.' . $controllerName . '.update', ['id' => $data['id']]);
}
@endphp

@extends('admin/layout/' . $layout)

@section('subhead')
    <x-head-title />
@endsection

@section('subcontent')

    <form id="form" class="validate-form dropzone" action="{{ $link }}" method="post" enctype="multipart/form-data"
        data-single="true">
        {{ csrf_field() }}
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                {{ !isset($data) || !isset($data['listPermission']) ? "Tạo $title" : "Cập nhập $title" }}</h2>
            @if (!isset($data) || !isset($data['listPermission']))
                <x-button-create />
            @else
                <x-button-update />
            @endif
            <x-back />
        </div>

        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <div class="intro-y col-span-12 lg:col-span-8">
                <div class="post intro-y overflow-hidden box py-3 px-4 box pr-10 placeholder-theme-8">

                    <x-title-form />

                    <div class="post__content tab-content">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
                                @foreach ($formFields as $k => $tab)

                                    @if (!@$tab['right'] && (@$tab['update'] || is_null(@$tab['update'])))
                                        {!! Form::show($tab, $data) !!}
                                    @endif

                                @endforeach

                                @if (!empty($data) && isset($data['listPermission']))
                                    <label class="control-label" for="permission">Gán quyền:</label>
                                    <span class="text-red" style="font-weight: 600">*</span>
                                    <div class="row">
                                        @php

                                            $rolePermission = [];
                                            if (!empty($data) || !isset($data['listPermission'])) {
                                                $rolePermission = $data
                                                    ->permissions()
                                                    ->pluck('name')
                                                    ->toArray();
                                            }

                                        @endphp
                                        @if (!empty($data->listPermission))

                                            @foreach ($data->listPermission as $key => $value)
                                                <div class="col-sm-12">
                                                    <label class="text-uppercase">
                                                        <strong><i><u>{{ trans('permissions.' . $key . '.name') }}</u></i></strong>
                                                    </label>
                                                </div>
                                                @foreach ($value as $k => $v)
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label style="cursor: pointer;">
                                                                <input type="checkbox"
                                                                    name="permission[{{ $key . '_' . $k }}]"
                                                                    value="{{ $v }}"
                                                                    {{ in_array($v, $rolePermission) ? 'checked' : '' }} />
                                                                {{ trans('permissions.' . $v) }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="clearfix"></div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <span class="help-block text-red validation_error hide validation_permission"></span>
                                @else
                                    <label class="control-label" for="permission">Gán quyền:</label>
                                    <span class="text-red" style="font-weight: 600">*</span>
                                    <div class="row">

                                        @if (!empty($data))

                                            @foreach ($data as $key => $value)

                                                <div class="col-sm-12">
                                                    <label class="text-uppercase">
                                                        <strong><i><u>{{ trans('permissions.' . $key . '.name') }}</u></i></strong>
                                                    </label>
                                                </div>

                                                @foreach ($value as $k => $v)
                                                    <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label style="cursor: pointer;">
                                                                <input type="checkbox"
                                                                    name="permission[{{ $key . '_' . $k }}]"
                                                                    value="{{ $v }}" checked />
                                                                {{ trans('permissions.' . $v) }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <div class="clearfix"></div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <span class="help-block text-red validation_error hide validation_permission"></span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">

                    <div class="mt-3">

                        @foreach ($formFields as $k => $tab)

                            @if (@$tab['right'])
                                {!! Form::show($tab, $data) !!}
                            @endif

                        @endforeach
                    </div>
                    <x-button-active active="0" />
                </div>
            </div>
        </div>
    </form>
    @include('admin.errors.common')
@endsection
