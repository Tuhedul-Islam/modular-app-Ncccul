// $(function() {
// 	"use strict";

//     $('.datepicker').pickadate({
//         selectMonths: true,
//         selectYears: true
//     }),
//     $('.timepicker').pickatime()


   
//         $('#date-time').bootstrapMaterialDatePicker({
//             format: 'YYYY-MM-DD HH:mm'
//         });
//         $('#date').bootstrapMaterialDatePicker({
//             time: false
//         });
//         $('#time').bootstrapMaterialDatePicker({
//             date: false,
//             format: 'HH:mm'
//         });
   


// });
$(function() {
    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 20,           // current year ±20 years
        format: 'yyyy-mm-dd',      // Laravel compatible
        min: new Date(2000, 0, 1), // earliest date selectable
        max: new Date(2020, 11, 31) // latest date selectable
    });

    var start_picker = $('#start_date').pickadate('picker');
    var end_picker   = $('#end_date').pickadate('picker');

    // End date must be after start date
    start_picker.on('set', function(event) {
        if(event.select) {
            end_picker.set('min', start_picker.get('select'));
        }
    });
});
