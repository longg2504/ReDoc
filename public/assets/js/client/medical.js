$(document).ready(function () {
    var dataSelect2;
    $('.diseases').hide();
    $('.not-diseases').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".js-example-placeholder-multiple").select2({
        placeholder: "Chọn triệu chứng"
    });

    $.ajax({
        type: 'POST',
        url: '/api/medical-check-up/symptoms',
        success: (data) => {
            let arr = [];
            Object.keys(data).map(function (key, index) {
                arr.push({
                    id: key,
                    text: data[key]
                });
            });
            dataSelect2 = [{
                id: 'symptoms',
                text: 'Triệu chứng',
                children: arr
            }];
            $('.choice-symptoms').select2({
                data: dataSelect2
            });
        },
    });

    $('.btn-search-diseases').on('click', function () {
        let symptoms = $('select[name="symptoms[]"').val();
        $.ajax({
            type: 'POST',
            data: 'listSymptoms=' + symptoms.toString(),
            url: '/api/medical-check-up/diseases',
            success: (data) => {
                console.log("data: ", data);
                var url = '/storage/images/diseases/';

                $('.list-diseases').empty();
                $('.diseases').show();

                if (data.length > 0) {
                    if (data.length > 0) {
                        for (let i = 0; i < data.length; i++) {

                            console.log(data[i][0]);

                            $('.list-diseases').append(`
                                <a href="/diseases/${data[i][0].id}">
                                    <div class="card">
                                        <img class="card-img-top" src="${url + data[i][0].media.name}" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">${data[i][0].name}</h6>
                                        </div>
                                    </div>
                                </a>
                            `);

                        }
                    }
                }
            },
        });
    });
});

