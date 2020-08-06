require('./bootstrap');
require('./validate');
require('./datepicker');
require('./memberShowHide');

$(document).ready(function () {
    $('#birthdate').datepicker({}).change(function () {
        $(this).valid()  // triggers the validation test
    })

})
