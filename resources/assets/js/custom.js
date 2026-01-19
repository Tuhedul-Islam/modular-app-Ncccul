$(function() {
	"use strict"; 
    
   
});
 
// document.querySelectorAll('.accordion-item').forEach(item => {
//     const button = item.querySelector('.accordion-button');
//     const collapseEl = item.querySelector('.accordion-collapse');

//     button.addEventListener('mouseenter', () => {
//         const collapseInstance = bootstrap.Collapse.getOrCreateInstance(collapseEl);
//         collapseInstance.show();
//     });

//     item.addEventListener('mouseleave', () => {
//         const collapseInstance = bootstrap.Collapse.getOrCreateInstance(collapseEl);
//         collapseInstance.hide();
//     });
// });
$(document).ready(function () {
    $(".nid-upload").hide();

    $(".nid_number").on("click", function () {
        $(".nid-upload").not($(this).closest(".nid-group").find(".nid-upload")).slideUp("fast");
        $(this).closest(".nid-group").find(".nid-upload").slideToggle("fast");
    });
});
$('.large_modal').on('shown.bs.modal', function () {
    $(this).find('.user_name').focus();
});