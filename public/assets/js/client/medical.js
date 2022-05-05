

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
            data: 'listSymptoms=' + symptoms,
            url: '/api/medical-check-up/diseases',
            success: (data) => {
                console.log(data);
                if (data.length > 0) {
                    $('.list-diseases').empty();
                    $('.diseases').show();
                    for (let i = 0; i < data.length; i++) {
                        if (data[i].length > 0) {
                            $('.list-diseases').append(`
                                <a href="/diseases/${data[i][0].diseases.id}">
                                    <div class="card">
                                        <img class="card-img-top" src="https://tamanhhospital.vn/wp-content/uploads/2021/08/bsi-tham-kham-benh-nhan.jpg" alt="">
                                        <div class="card-body">
                                            <h6 class="card-title">${data[i][0].diseases.name}</h6>
                                            <p class="card-text">bệnh này là bệnh............</p>
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

