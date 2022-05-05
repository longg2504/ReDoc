

$(document).ready(function () {
    $('.list-diseases').hide();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: '/api/medical-check-up/symptoms',
        success: (data) => {
            $('.multiselect-container li a').remove();
            for (let i = 0; i < data.length; i++) {
                let html = ` <li>
                                <a tabindex="0">
                                    <label class="checkbox"><input name='symptom[]' type="checkbox" value="${data[i].id}"> ${data[i].name}</label>
                                </a>
                            </li>`
                $('.multiselect-container').append(html);
            }
        },
    });

    $('.btn-search-diseases').on('click', function () {
        let symptoms = [];
        let symptomItems = $('input[name="symptom[]"]:checked');
        for (let i = 0; i < symptomItems.length; i++) {
            symptoms.push(symptomItems[i].value);
        }
        $.ajax({
            type: 'POST',
            data: 'listSymptoms=' + symptoms,
            url: '/api/medical-check-up/diseases',
            success: (data) => {
                console.log(data);
                if (data.length > 0) {
                    $('.list-diseases').show();
                    for (let i = 0; i < data.length; i++) {
                        if (data[i].length > 0) {
                            $('.diseases').append(`
                            <div class="col-md-4">
                                <a href="/diseases/${data[i][0].diseases.id}">
                                    <img class="img-fluid"
                                        src="https://vinmec-prod.s3.amazonaws.com/images/20190514_082820_373671_1738.jpg_wh1200.max-1800x1800.jpg"
                                        alt="" srcset="">
                                    <h4 class="card-title">${data[i][0].diseases.name}</h4>
                                    <p class="card-text"></p>
                                </a>
                            </div>
                        `);
                        }
                    }
                }
            },
        });

    });
    $('#framework').multiselect({
        buttonWidth: '800px',
        nonSelectedText: 'Lựa chọn triệu chứng',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
    });
});

