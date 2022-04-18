</div>
<div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
    <div class="input-form col-span-12 mt-4">
        <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
        <div class="preview">
            <div class="editor">
                {!! isset($value) ? $value : old($name) !!}
            </div>
        </div>
    </div>
</div>
<div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
<textarea name="{{ $name }}" id="hiddenTextArea_0" class="hiddenTextArea">{!! isset($value) ? $value : old($name) !!}</textarea>
@section('script')
    <script src="{{ mix('dist/js/ckeditor-classic.js') }}"></script>
@endsection
