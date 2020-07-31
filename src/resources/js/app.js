require('./bootstrap');
require('./datepicker');
require('./validate');

$(document).ready(function () {
    $('#birthdate').datepicker()
    $('#birthdate').datepicker({
        minDate: 0,
    })

    $('#birthdate').datepicker({
        autoclose: true,
    }).change(function () {
        $(this).valid()  // triggers the validation test
    })
})
