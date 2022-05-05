</div>
@include('ckfinder::setup')
</div>
<div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
    <div class="input-form col-span-12 mt-4">
        <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
        <textarea name="{{ $name }}" id="hiddenTextArea_0" class="hiddenTextArea">{!! isset($value) ? $value : old($name) !!}</textarea>
    </div>
</div>

@section('script')
<script src={{ url('ckeditor/ckeditor.js') }}></script>
<script>
CKEDITOR.replace( 'hiddenTextArea_0', {
    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
});
</script>
@endsection
