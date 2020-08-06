$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $.ajax({
        url: '/getMembersNumber',
        type: 'POST',
        datatype: 'html',
        success: function (data) {
            if (data > 0){
                console.log("+")
                $('#selectAll').prop('checked', true)
            }
        },
    })

    $('#selectAll').on('change', function(e){
        // Находим все checkbox и ставим им состояние главного переключателя
        $('input[type="checkbox"]').not(this).prop('checked', this.checked);
        $.ajax({
            url: '/changeAllShow',
            type: 'POST',
            data: {
                show: this.checked
            },
            datatype: 'html',
            success: function (data) {
                // $('#btnList').text('All members (' + data + ')')
                console.log(data)
            },
        })
    });

    $('.show').bind('click', function () {
            // console.log($(this).attr('id')+" "+$(this).prop('checked'))

        $.ajax({
            url: '/changeShow',
            type: 'POST',
            data: {
                idMember: $(this).attr('id'),
                show: $(this).prop('checked')
            },
            datatype: 'html',
            success: function (data) {
                // $('#btnList').text('All members (' + data + ')')
                console.log(data)
            },
        })
    })

})

