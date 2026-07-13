/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

function show_toaster(msg, type = true) {

    if (type) {
        iziToast.success({
            title: 'Success',
            message: msg,
            position: 'topRight'
        });
    } else {
        iziToast.error({
            title: 'Error!',
            message: msg,
            position: 'topRight'
        });
    }

}

$(document).ready(function () {

    $('table').DataTable();


    //Datemask dd/mm/yyyy
    $('.datemask').inputmask('9999/99/99', {'placeholder': 'YYYY/MM/DD'});
    $('.phonemask').inputmask('0999-9999999', {'placeholder': '0300-0000000'});
    $('.cnicmask').inputmask('99999-9999999-9', {'placeholder': '33100-0000000-0'});
    //Datemask2 mm/dd/yyyy
    // $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'});
    //Money Euro
    // $('[data-mask]').inputmask();

});


//theme setting

function changeLayout() {
    let layout = $("input[name='layout']:checked").val();
    if (layout == "1") {
        $('body').removeClass();
        $('body').addClass('light');
        $('body').addClass('light-sidebar');
        $('body').addClass('theme-white');

        // $(".choose-theme li").removeClass("active");
        // $(".choose-theme li[title|='white']").addClass("active");
        // $(".selectgroup-input[value|='1']").prop("checked", true);

    } else {
        $('body').removeClass();
        $('body').addClass('dark');
        $('body').addClass('dark-sidebar');
        $('body').addClass('theme-black');

        // $(".choose-theme li").removeClass("active");
        // $(".choose-theme li[title|='black']").addClass("active");
        // $(".selectgroup-input[value|='2']").prop("checked", true);
    }

}

function changeSidebarColor() {
    let sb_color = $("input[name='sidebar_color']:checked").val();
    if (sb_color == "1") {
        $('body').removeClass('dark-sidebar');
        $('body').addClass('light-sidebar');
    } else {
        $('body').removeClass('light-sidebar');
        $('body').addClass('dark-sidebar');
    }
}

function doForProfile() {
    setTimeout(function () {
        $('body').addClass('sidebar-mini');
        $('.sidebar-mini .main-content').css('padding-left', '30px');
        $('#toggle_btn').attr('hidden', true);
        $('.sidebar-mini .navbar').css('left', '16px');
    }, 100);


}

$(function () {
    $.uploadPreview({
        input_field: "#image-upload",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose File",   // Default: Choose File
        label_selected: "Change File",  // Default: Change File
        no_label: false,                // Default: false
        success_callback: null          // Default: null
    });


});


