</div>
<div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
    <div class="input-form col-span-12 mt-4">
        <label for="{{ $name }}" class="form-label w-full flex flex-col sm:flex-row">{{ $label }}</label>
        <div class="preview">
            <div class="editor" id="editor_0">
                {!! isset($value) ? $value : old($name) !!}
            </div>
        </div>
    </div>
</div>
<div class="border border-gray-200 dark:border-dark-5 rounded-md p-5 mb-5">
<textarea name="{{ $name }}" id="hiddenTextArea_0" class="hiddenTextArea">{!! isset($value) ? $value : old($name) !!}</textarea>
@section('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#hiddenTextArea_0' ), {
                ckfinder: {
                    uploadUrl: '{{ route('admin.upload.ckeditor') }}'
                }
            })
            .then( editor => {
                editor.model.document.on('change:data', (evt, data) => {
                    // console.log(editor.getData());
                    // document.querySelector( '#hiddenTextArea_0' ).value = editor.getData();
                    // // var check = $('.ck ck-editor__main').html();
                    var node = document.getElementsByClassName('ck ck-editor__main');
                    console.log(node[0].innerHTML);
                    // document.querySelector( '#hiddenTextArea_0' ).innerHTML = node[0].innerHTML;
                    $.ajax({
                        url: '{{ route('admin.posts.update', 1) }}',
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            content: node[0].innerHTML,
                            id: 1,
                            title: 123,
                            category_id: 10,
                            active: 1,
                        },
                        success: function(data) {
                            console.log(data);
                        }
                    });
                });
            } )
            .catch( error => {
                console.log( error );
            } );
    </script>
@endsection
