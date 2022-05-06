@php
use App\Helper\Form;
if (!isset($data)) {
    $data = [];
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

    <form id="form" class="validate-form" action="{{ $link }}" method="post" enctype="multipart/form-data"
        data-single="true">
        {{-- <form id="form" class="validate-form dropzone" action="{{ $link }}" method="post" enctype="multipart/form-data"
        data-single="true"> --}}
        {{ csrf_field() }}
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">{{ !empty($data) ? "Cập nhập $title" : "Tạo $title" }}</h2>
            @if (!empty($data))
                <x-button-update />
            @else
                <x-button-create />
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
                                @php
                                    $countData = count(array_filter($formFields, function ($item) {
                                        return !isset($item['right']);
                                    }));
                                @endphp

                                @if ($countData > 1)
                                    @foreach ($formFields as $k => $tab)
                                        @if (!@$tab['right'] && ( @$tab['update'] || is_null(@$tab['update']) ))
                                            {!! Form::show($tab, $data) !!}
                                        @endif
                                    @endforeach
                                @else
                                    @foreach ($formFields as $k => $tab)
                                        @if (@$tab['right'])
                                            {!! Form::show($tab, $data) !!}
                                        @endif
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">

                    <div class="mt-3">

                        @if ($countData > 1)
                            @foreach ($formFields as $k => $tab)
                                @if (@$tab['right'])
                                    {!! Form::show($tab, $data) !!}
                                @endif
                            @endforeach
                        @endif

                    </div>
                    <x-button-active active="1" />
                </div>
            </div>
        </div>
    </form>
    @include('admin.errors.common')
@endsection
