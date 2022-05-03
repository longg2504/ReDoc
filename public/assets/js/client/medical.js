

$(document).ready(function () {
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
        for(let i = 0; i < symptomItems.length; i++) {
            symptoms.push(symptomItems[i].value);
        }
        console.log('listSymptoms=' + symptoms);
        $.ajax({
            type: 'POST',
            data: 'listSymptoms=' + symptoms,
            url: '/api/medical-check-up/diseases',
            success: (data) => {
               console.log(data);
            },
        });
        // for (var option of $('#framework').options) {
        //     // if (option.selected) {
        //     //     selected.push(option.value);
        //     // }
        //     console.log(option);
        // }
        // console.log($('#framework').val());
    });
    $('#framework').multiselect({
        buttonWidth: '800px',
        nonSelectedText: 'Choice symptoms',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
    });
});

