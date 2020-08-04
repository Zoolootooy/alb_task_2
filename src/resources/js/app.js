require('./bootstrap');
require('./datepicker');
require('./validate');

$(document).ready(function () {
    $('#birthdate').datepicker({}).change(function () {
        $(this).valid()  // triggers the validation test
    })

})
