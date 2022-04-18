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

    <form id="form" class="validate-form dropzone" action="{{ $link }}" method="post" enctype="multipart/form-data"
        data-single="true">
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

                                @foreach ($formFields as $k => $tab)
                                    {!! Form::show($tab, $data) !!}
                                @endforeach

                                @php
                                    $item['name'] = 'setting_value';
                                    $item['label'] = 'Setting value';
                                @endphp

                                @if (empty($data))

                                    <div id="settingValue" class="form-group">
                                        <label for="{{ $item['name'] }}">{{ $item['label'] }}:</label>
                                        <input value="{{ old($item['name'], @$item_model->{$item['name']}) }}"
                                            name="{{ $item['name'] }}" type="text" class="form-control"
                                            id="{{ $item['name'] }}">
                                    </div>

                                @else

                                    @switch($data->type)
                                        @case(1)
                                            <div id="settingValue" class="form-group">
                                                <br>
                                                <label for="{{ $item['name'] }}">{{ $item['label'] }}:</label><br>
                                                <input value="{{ $data->setting_value }}" name="{{ $item['name'] }}"
                                                    type="text" class="form-control" id="{{ $item['name'] }}">
                                            </div>
                                        @break
                                        @case(2)
                                            <div id="settingValue" class="form-group">
                                                <br>
                                                <label for="setting_value">Setting value:</label><br>
                                                <textarea name="setting_value" id="ck_1" rows="10"
                                                    cols="80">{!! $data->setting_value !!}</textarea>
                                            </div>
                                        @break
                                        @case(3)

                                            <div id="settingValue" class="form-group">
                                                <br>
                                                <label for="imageFile">Setting value</label><br>
                                                <div class="custom-file">
                                                    <input type="file" id="imageFile" name="setting_value"
                                                        accept=".png,.gif,.jpg,.jpeg">
                                                </div>
                                                <div id="error" class="text-danger"></div>
                                            </div>
                                            <div class="image-preview mb-4" id="imagePreview">
                                                <img src="{{ \App\Helper\Common::showThumb($folderUpload, $data->setting_value) }}"
                                                    alt="Image Preview" class="image-preview__image" style="display:block;" />
                                                <span class="image-preview__default-text" style="display:none">Hình ảnh</span>
                                            </div>

                                        @break
                                        @default

                                    @endswitch
                                @endif

                                <div class="image-preview mb-4" id="imagePreview">
                                </div>

                                @php
                                    $check = explode('/', $_SERVER['REQUEST_URI']);

                                    if ($check[count($check) - 1] == 'create') {
                                        echo '<input type="submit" value="Tạo" class="btn btn-success float-right">';
                                    } else {
                                        echo '<input type="submit" value="Cập nhật" class="btn btn-success float-right">';
                                    }

                                @endphp
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
                    <x-button-active active="1" />
                </div>
            </div>
        </div>
    </form>
    @include('admin.errors.common')
@endsection

@section('script')

    <script type="text/javascript">
        let data = {!! json_encode($data) !!};

        if (data == "") {
            data = data;
        } else {
            data = data.setting_value;
        }

        $('#settingValue').empty();
        $('.image-preview').empty();

        $text = $(`
        <br>
        <label for="setting_value">Setting value:</label><br>
        <input value="${data}" name="setting_value" type="text" class="form-control" id="setting_value">
    `)

        $textarea = $(`
        <br>
        <label for="setting_value">Setting value:</label><br>
        <textarea name="setting_value" id="ck_1" rows="10" cols="80">${data}</textarea>
    `)

        $file = $(`
        <br>
        <label for="imageFile">Setting value</label><br><br>
        <div class="custom-file">
            <input type="file" id="imageFile" name="setting_value" value="/storage/images/setting/thumb/${data}"
                accept=".png,.gif,.jpg,.jpeg">
        </div>
        <div id="error" class="text-danger"></div>
        <div class="image-preview mb-4" id="imagePreview">
            <img src="/storage/images/setting/thumb/${data}"
                alt="Image Preview" class="image-preview__image" style="display:block;" />
            <span class="image-preview__default-text" style="display:none">Hình ảnh</span>
        </div>
    `)

        let currentId = $('select[name="type"]').val();

        switch (currentId) {

            case "1":
                $('#settingValue').append($text)
                break;

            case "2":
                $('#settingValue').append($textarea)
                // CKEDITOR.replace("ck_1", options);
                break;

            case "3":
                $('#settingValue').append($file)
                break;

            default:
                $('#settingValue').append($text)
                break;
        }

        var myFile = new File([""], `/storage/images/setting/thumb/${data}`);

        if (!myFile.exists) {
            $('.image-preview').empty();
        }

        $('select').on('change', function() {

            let id = this.value;

            $('#settingValue').empty();
            $('.image-preview').empty();

            switch (id) {

                case "1":
                    $('#settingValue').append($text)
                    break;

                case "2":
                    $('#settingValue').append($textarea)
                    var editor = CKEDITOR.instances.ck_1;
                    if (editor) {
                        editor.destroy(true);
                    }
                    CKEDITOR.replace("ck_1", options);
                    break;

                case "3":
                    var myFile = new File([""], `/storage/images/setting/thumb/${data}`);

                    $('#settingValue').append($file)

                    if (!myFile.exists) {
                        $('.image-preview').empty();
                    }

                    break;

                default:
                    $('#settingValue').append($text)
                    break;
            }
        });
    </script>

@endsection
