{{-- <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mt-5 col-span-12 dropzone">
    <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
        {{ $label }}
    </div>
    <div class="mt-5">
        <div class="mt-3">
            <label class="form-label">Upload Image</label>
            <div class="border-2 border-dashed dark:border-dark-5 rounded-md pt-4" id="dropzoneArea">
                <div class="dz-message">
                    <button type="button" class="dz-button">Kéo thả và click vào đây để upload ảnh
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="{{ $name }}" id="uploadPhoto" value="{{ isset($value) ? $value : old($name) }}"> --}}

@php
$image_url = '';

if (!empty($item_model)) {
    $image_url = \App\Helper\Common::getImage($item_model->image, 'thumb', $controllerName);
}

@endphp

<br>
<div class="form-group file_picture">
    <label for="{{ $name }}">{{ $label }}:</label>
    <input name="{{ $name }}" type="file"
        class="form-control @error($name) is-invalid @enderror file_picture_one" id="imageFile"
        accept=".png,.gif,.jpg,.jpeg">

    <div class="image-preview mb-4" id="imagePreview">
        <img src="@if (!empty($item_model)) {{ $image_url }} @endif" alt="Image Preview" class="image-preview__image" style="display:block;" />
        <span class="image-preview__default-text" style="display:none">Hình ảnh</span>
    </div>
</div>

<script type="text/javascript">

    function checkImage(url) {
        var request = new XMLHttpRequest();
        request.open("GET", url, true);
        request.send();
        request.onload = function() {
            status = request.status;
            if (request.status != 200) {
                $('.image-preview').empty();
            }
        }
    }

    let data = {!! json_encode($image_url) !!};

    // var myFile = new File([""], data);

    if (data == "") {
        $('.image-preview').empty();
    }

    checkImage(data);

</script>
