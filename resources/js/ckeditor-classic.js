import ClassicEditor from '@ckeditor/ckeditor5-editor-classic/src/classiceditor';

cash(".editor").each(function () {
    const el = this;
    ClassicEditor.create(el).catch((error) => {
        console.error(error);
    });
});
