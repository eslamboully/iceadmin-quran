/* global $ */
$('#myModal').on('shown.bs.modal', function () {
    "use strict";
    $('#myInput').trigger('focus');
});