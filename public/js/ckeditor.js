// import SimpleUploadAdapter from '@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter';
const SimpleUploadAdapter = require("@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter");

ClassicEditor
    .create(document.querySelector('#editor_0'), {
        plugins: [SimpleUploadAdapter],
        simpleUpload: {
            uploadUrl: 'redoc.test/upload',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    })
    .then(editor => {

        editor.model.document.on('change:data', (evt, data) => {
            $('#hiddenTextArea_0').val(editor.getData());
        });
    })
    .catch(error => {
        console.error(error);
    });
