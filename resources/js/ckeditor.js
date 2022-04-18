import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

(function (cash) {
    cash(".editorArea").each(function (index) {
        const el = this;
        ClassicEditor.create(el)
            .then( editor => {
                editor.model.document.on('change:data', () => {
                    cash('#hiddenTextArea_' + index).html(editor.getData());
                });
            })
            .catch((error) => {
                console.error(error);
            });
    });
})(cash);
