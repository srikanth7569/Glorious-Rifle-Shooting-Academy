loadCSS = function (href) {

    var cssLink = $("<link>");
    $("head").append(cssLink); //IE hack: append before setting href

    cssLink.attr({
        rel: "stylesheet",
        type: "text/css",
        href: href
    });


};


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

$(function () {
// Select2
    if (jQuery().select2) {
        $(".select2").select2();
    }

})

$(function () {
    $('#popluar_courses_carousel').owlCarousel({
        items: 4,
        navigation: false,
        pagination: false,
        lazyLoad: true,
        autoPlay: false,
        nav: false,
        dots: false,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: false,
                loop: false
            }
        }


    });

    $('#pc_btn_next').click(function () {
        $('#popluar_courses_carousel').trigger('next.owl.carousel');
    })
// Go to the previous item
    $('#pc_btn_pre').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $('#popluar_courses_carousel').trigger('prev.owl.carousel', [300]);
    })


    $('#latest_news').owlCarousel({
        items: 3,
        navigation: true,
        pagination: true,
        lazyLoad: true,
        autoPlay: false,
        dots: false,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    });

    $('#ln_btn_next').click(function () {
        $('#latest_news').trigger('next.owl.carousel');
    })
// Go to the previous item
    $('#ln_btn_pre').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        $('#latest_news').trigger('prev.owl.carousel', [300]);
    })


});


function showRegisterModal() {


    $('#common_modal_size').addClass('modal-lg');
    $('#common_modal').modal('show');
    $('#common_modal .modal-title').text('Get Registered');
    $('#common_modal .modal-body').text('Loading...');
    $('#common_modal .modal-footer').remove();
    $.ajax({
        url: 'frontend/getRegistered',
        success: function (data) {
            // loadCSS('assets/css/app.min.css');
            // loadCSS('assets/css/style.css');
            $('#common_modal .modal-body').html(data);
            $('#common_modal .modal-body').css('padding', '10px 40px 30px 40px');
            $('.datemask').inputmask('9999/99/99', {'placeholder': 'YYYY/MM/DD'});
            $('.phonemask').inputmask('0999-9999999', {'placeholder': '0300-0000000'});
            $('.cnicmask').inputmask('99999-9999999-9', {'placeholder': '33100-0000000-0'});


            $('#enquiry_form').removeAttr('novalidate');


            // Timepicker
            if (jQuery().timepicker && $(".timepicker").length) {
                $(".timepicker").timepicker({
                    icons: {
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down'
                    }
                });
            }


        }
    })


}

$(document).ready(function () {
    const headermain = $('#header2');
    const nav = $('#main_nav');
    const color_logo = $('#color_logo');
    const white_logo = $('#white_logo');
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
        if (currentScroll == 0) {


            $('#back-to-top').removeClass('active');


            // headermain.removeClass('d-none');
            // nav.addClass('navbar-dark');
            // headermain.addClass('bg-transparent');

            // color_logo.addClass('d-none');
            // white_logo.removeClass('d-none');

            // nav.removeClass('navbar-light');

            // return;
        }
        if (currentScroll > 0 && currentScroll < 150) {

            // nav.removeClass('navbar-dark');
            // headermain.removeClass('bg-transparent');
            //
            // headermain.addClass('bg-white');
            // nav.addClass('navbar-light');
            //
            // color_logo.removeClass('d-none');
            // white_logo.addClass('d-none');
            //
            //
            return;
        }

        if (currentScroll > lastScroll) {
            // down
            // headermain.removeClass('affix-top');
            headermain.addClass('d-none');

            $('#back-to-top').addClass('active');


            // headermain.removeClass('bg-white');
            // headermain.addClass('menu-hidden');

        } else if (currentScroll < lastScroll) {
            // up
            // nav.removeClass('navbar-dark');
            // headermain.removeClass('bg-transparent');

            // headermain.addClass('bg-white');

            if (currentScroll < 300) {

                headermain.removeClass('d-none');

            }
            // nav.addClass('navbar-light');

            // color_logo.removeClass('d-none');
            // white_logo.addClass('d-none');


            // headermain.removeClass('d-none');

        }
        lastScroll = currentScroll;
    });

});

//magic line

var myMagicLine = new magicLine(
    document.querySelectorAll('.myclass'),
    {
        mode: 'line',
        animationCallback: function (el, params) {
            anime({
                targets: el,
                left: params.left,
                top: params.top,
                width: params.width,
                height: params.height
            });
        }
    }
);
myMagicLine.init();


$(function () {

    $('#subscriber_form').on('submit', function (e) {
        e.preventDefault();
        let email = $('#subscriber_email').val();

        if (email == '') {
            show_toaster('Please Enter Your Email', false);
            return;
        }
        $.ajax({
            url: 'mytest/subscribe',
            type: 'post',
            data: {
                email: email
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                show_toaster(obj.message, obj.success);
                $('#subscriber_email').val('');
            }
        })

    });


})


window.fbAsyncInit = function () {
    FB.init({
        appId: '971732876616063', status: true, cookie: true
    });
};


(function (d) {
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = '//connect.facebook.net/en_US/all.js';
    ref.parentNode.insertBefore(js, ref);
}(document));


// (function (d, debug) {
//     var js, id = 'https://connect.facebook.net/en_US/sdk.js', ref = d.getElementsByTagName('script')[0];
//     if (d.getElementById(id)) {
//         return;
//     }
//     js = d.createElement('script');
//     js.id = id;
//     js.async = true;
//     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
//     ref.parentNode.insertBefore(js, ref);
// }(document, /*debug*/ false));

function postToFeed(title, desc, url, image_url) {
    var obj = {
        method: 'feed',
        link: url,
        picture: image_url,
        name: title,
        description: desc
    };

    function callback(response) {
    }

    FB.ui(obj, callback);
}


$(function () {
    $('.btnFBShare').click(function () {
        elem = $(this);
        postToFeed(elem.data('title'), elem.data('desc'), elem.prop('href'), elem.data('image'));
        return false;
    });
})




