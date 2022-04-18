import Dropzone from "dropzone";
import Toastify from "toastify-js";

(function (cash) {
    "use strict";

    // Dropzone
    Dropzone.autoDiscover = false;
    cash(".dropzone").each(function () {
        let options = {
            url: "/file-upload",
            headers: {
                'X-CSRF-TOKEN': cash('meta[name="csrf-token"]').attr('content')
            },
            accept: (file, done) => {
                console.log("Uploaded");
                done();
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            renameFile: function (file) {
                var dt = new Date();
                var time = dt.getTime();
                return time + file.name;
            },
            addRemoveLinks: true,
            success: function(file, response){
                //Here you can get your response.
                cash('#uploadPhoto').val('/images/' + response.success);
                console.log(file);
                console.log(response);
            },
            init: function () {
                const myDropzone = this;
                cash(this).on('submit', ()=> {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                })

                let thumbnailUrl;
                if(cash('#uploadPhoto').val()){
                    thumbnailUrl = cash('#uploadPhoto').val();
                }
                if (thumbnailUrl) {
                    //Populate any existing thumbnails
                    const info = thumbnailUrl.split("/");
                    let mockFile = {
                        name: info[info.length - 1],
                        size: 12345,
                        type: 'image/jpeg',
                        status: Dropzone.ADDED,
                        url: thumbnailUrl
                    };

                    // Call the default addedfile event handler
                    myDropzone.emit("addedfile", mockFile);

                    // And optionally show the thumbnail of the file:
                    myDropzone.emit("thumbnail", mockFile, thumbnailUrl);

                    myDropzone.emit("complete", mockFile)

                    myDropzone.files.push(mockFile);

                    this.on("removedfile", function (file) {
                        const name = file.name;
                        axios.post('/file-upload/destroy', {filename: name}).then((data) => {
                            console.log("File has been successfully removed!!", data);
                        });
                    });
                }
            }
        };

        if (cash(this).data("single")) {
            options.maxFiles = 1;
        }

        if (cash(this).data("file-types")) {
            options.accept = (file, done) => {
                if (
                    cash(this)
                        .data("file-types")
                        .split("|")
                        .indexOf(file.type) === -1
                ) {
                    alert("Error! Files of this type are not accepted");
                } else {
                    done();
                }
            };
        }

       const dz = new Dropzone("div#dropzoneArea", options);

        dz.on("maxfilesexceeded", (file) => {
            Toastify({
                node: cash("#failed-notification-content")
                    .clone()
                    .removeClass("hidden")[0],
                duration: 3000,
                newWindow: false,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        });
        dz.on("removedfile", (file) => {
            cash('#uploadPhoto').val('');
            const name = file.upload.filename;
            console.log(name)
            axios.post('/file-upload/destroy', {filename: name}).then((data) => {
                console.log("File has been successfully removed!!", data);
            });
        });
    });
})(cash);
