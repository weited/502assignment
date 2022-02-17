
$("#displayAbn").change(function () {
    if ($(this).val() == "host") {
        $('#abnNumberDiv').show();
        $('#abnNumber').attr('required', '');
        $('#abnNumber').attr('data-error', 'This field is required.');

    } else {
        $('#abnNumberDiv').hide();
        $('#abnNumber').removeAttr('required');
        $('#abnNumber').removeAttr('data-error');

    }
});
$("#displayAbn").trigger("change");



