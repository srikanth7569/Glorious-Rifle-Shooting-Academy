<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/jquery/jquery.js'></script>


<!--sliders files-->
<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js'></script>

<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/revslider/public/assets/js/rs6.min.js'></script>


<!--<script data-cfasync="false" src="web_assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
<script type="1e0378d641c280536708df7d-text/javascript">
                    jQuery(".btn-mo").prop("disabled",false);

</script>
<!--<script src="web_assets/wp-content/plugins/miniorange-login-openid/includes/js/jquery.cookie.min.js"-->
<!--        type="1e0378d641c280536708df7d-text/javascript"></script>-->
<!--<script type="1e0378d641c280536708df7d-text/javascript">-->
<!--                function mo_openid_on_consent_change(checkbox,value){-->
<!---->
<!--                    if (value == 0) {-->
<!--                        jQuery('#mo_openid_consent_checkbox').val(1);-->
<!--                        jQuery(".btn-mo").attr("disabled",true);-->
<!--                        jQuery(".login-button").addClass("dis");-->
<!--                    }-->
<!--                    else {-->
<!--                        jQuery('#mo_openid_consent_checkbox').val(0);-->
<!--                        jQuery(".btn-mo").attr("disabled",false);-->
<!--                        jQuery(".login-button").removeClass("dis");-->
<!--                    }-->
<!--                }-->
<!---->
<!--                function moOpenIdLogin(app_name,is_custom_app) {-->
<!--                    var current_url = window.location.href;-->
<!--                    var cookie_name = "redirect_current_url";-->
<!--                    var d = new Date();-->
<!--                    d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));-->
<!--                    var expires = "expires="+d.toUTCString();-->
<!--                    document.cookie = cookie_name + "=" + current_url + ";" + expires + ";path=/";-->
<!---->
<!--                                        var base_url = 'index.html';-->
<!--                    var request_uri = 'index.html';-->
<!--                    var http = 'https:///';-->
<!--                    var http_host = 'educationwp.thimpress.com';-->
<!--                    var default_nonce = '7ea2d6f312';-->
<!--                    var custom_nonce = '718b03a02d';-->
<!---->
<!--                   if(is_custom_app == 'false'){-->
<!---->
<!--                        if ( request_uri.indexOf('wp-login.html') !=-1){-->
<!--                            var redirect_url = base_url + '/?option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';-->
<!---->
<!---->
<!--                        }else {-->
<!--                            var redirect_url = http + http_host + request_uri;-->
<!--                            if(redirect_url.indexOf('?') != -1){-->
<!--                                redirect_url = redirect_url +'&option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';-->
<!---->
<!--                            }-->
<!--                            else-->
<!--                            {-->
<!--                                redirect_url = redirect_url +'?option=getmosociallogin&wp_nonce=' + default_nonce + '&app_name=';-->
<!---->
<!--                            }-->
<!--                        }-->
<!--                    }-->
<!--                    else {-->
<!---->
<!--                        if ( request_uri.indexOf('wp-login.html') !=-1){-->
<!--                            var redirect_url = base_url + '/?option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';-->
<!---->
<!--                        }else {-->
<!--                            var redirect_url = http + http_host + request_uri;-->
<!--                            if(redirect_url.indexOf('?') != -1)-->
<!--                                redirect_url = redirect_url +'&option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';-->
<!--                            else-->
<!--                                redirect_url = redirect_url +'?option=oauthredirect&wp_nonce=' + custom_nonce + '&app_name=';-->
<!--                        }-->
<!---->
<!--                    }-->
<!---->
<!--                    window.location.href = redirect_url + app_name;-->
<!---->
<!--                }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</script>-->


<script type="1e0378d641c280536708df7d-text/javascript">(function() {function maybePrefixUrlField() {
	if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
		this.value = "http://" + this.value;
	}
}

var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
if (urlFields) {
	for (var j=0; j < urlFields.length; j++) {
		urlFields[j].addEventListener('blur', maybePrefixUrlField);
	}
}
})();







</script>

<script data-cfasync="false" type="text/javascript">
    window.onload = function () {
        var thim_preload = document.getElementById('preload');
        if (thim_preload) {
            setTimeout(function () {
                var body = document.getElementById('thim-body'),
                    len = body.childNodes.length,
                    class_name = body.className.replace(/(?:^|\s)thim-body-preload(?!\S)/, '').replace(/(?:^|\s)thim-body-load-overlay(?!\S)/, '');

                body.className = class_name;
                if (typeof thim_preload !== 'undefined' && thim_preload !== null) {
                    for (var i = 0; i < len; i++) {
                        if (body.childNodes[i].id !== 'undefined' && body.childNodes[i].id == 'preload') {
                            body.removeChild(body.childNodes[i]);
                            break;
                        }
                    }
                }
            }, 500);
        }
    };
</script>
<script type="1e0378d641c280536708df7d-text/javascript">
			window.addEventListener('load', function () {
				/**
				 * Fix issue there is an empty spacing between image and title of owl-carousel
				 */
				setTimeout(function () {
					var $ = jQuery;
					var $carousel = $('.thim-owl-carousel-post').each(function () {
						$(this).find('.image').css('min-height', 0);
						$(window).trigger('resize');
					});
				}, 500);
			});


</script>


<script type="1e0378d641c280536708df7d-text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;

</script>
<script type="1e0378d641c280536708df7d-text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}






</script>
<script type="1e0378d641c280536708df7d-text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/educationwp.thimpress.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":0};
/* ]]> */






</script>

<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/contact-form-7/includes/js/scripts.js'></script>-->



<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>-->



<!--<script type="1e0378d641c280536708df7d-text/javascript">-->
<!--/* <![CDATA[ */-->
<!--var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/educationwp.thimpress.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};-->
<!--/* ]]> */-->
<!--</script>-->

<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>-->


<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>-->
<script type="1e0378d641c280536708df7d-text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */






</script>
<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>-->
<script type="1e0378d641c280536708df7d-text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_8653f1d19ec105315cba116db9d7fe2e","fragment_name":"wc_fragments_8653f1d19ec105315cba116db9d7fe2e","request_timeout":"5000"};
/* ]]> */






</script>
<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>-->
<!--<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/jquery/ui/core.min.js'></script>-->
<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/underscore.min.js'></script>
<script type="1e0378d641c280536708df7d-text/javascript">
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */






</script>
<!--<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/wp-util.min.js'></script>-->
<!--<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/backbone.min.js'></script>-->


<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/countdown/js/jquery.plugin.min.js'></script>


<script type="1e0378d641c280536708df7d-text/javascript">
/* <![CDATA[ */
var WPEMS = {"gmt_offset":"0","current_time":"Mar 27, 2020 15:06:00 +0000","l18n":{"labels":["Years","Months","Weeks","Days","Hours","Minutes","Seconds"],"labels1":["Year","Month","Week","Day","Hour","Minute","Second"]},"ajaxurl":"https:\/\/educationwp.thimpress.com\/wp-admin\/admin-ajax.php","something_wrong":"Something went wrong","register_button":"0e3b0e9d95"};
/* ]]> */






</script>

<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/countdown/js/jquery.countdown.min.js'></script>


<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/owl-carousel/js/owl.carousel.min.js'></script>
<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/magnific-popup/js/jquery.magnific-popup.min.js'></script>
<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/plugins/wp-events-manager/assets/js/frontend/events.min.js'></script>
<!--<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/comment-reply.min.js'></script>-->


<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/themes/eduma/assets/js/main.min.js'></script>


<!--<script type="1e0378d641c280536708df7d-text/javascript">-->
<!--/* <![CDATA[ */-->
<!--var thim_js_translate = {"login":"Username","password":"Password","close":"Close"};-->
<!--/* ]]> */-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</script>-->
<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/themes/eduma/assets/js/custom-script-v2.js'></script>

<script type="1e0378d641c280536708df7d-text/javascript"
        src='web_assets/wp-content/themes/eduma/assets/js/thim-scripts.js'></script>

<!--<script type="1e0378d641c280536708df7d-text/javascript" src='web_assets/wp-includes/js/wp-embed.min.js'></script>-->
<!--<script type="1e0378d641c280536708df7d-text/javascript">-->
<!--/* <![CDATA[ */-->
<!--var panelsStyles = {"fullContainer":"body"};-->
<!--/* ]]> */-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</script>-->
<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/siteorigin-panels/js/styling-21014.min.js'></script>-->



<!--<script type="1e0378d641c280536708df7d-text/javascript"-->
<!--        src='web_assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms.min66f2.js?ver=4.7.5'></script>-->
<script type="1e0378d641c280536708df7d-text/javascript">
    document.body.className = document.body.className.replace("siteorigin-panels-before-js","");






</script>
<!--<script type="1e0378d641c280536708df7d-text/javascript"  src="web_assets/custom/js/rocket-loader.min.js"></script>-->
<script src="web_assets/custom/js/rocket-loader.min.js"
        data-cf-settings="1e0378d641c280536708df7d-|49" defer=""></script>

<!--<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"-->
<!--        data-cf-settings="1e0378d641c280536708df7d-|49" defer=""></script>-->

<script src="assets/js/app.min.js"></script>
<script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/bundles/inputmask/min/jquery.inputmask.bundle.min.js"></script>

<!--<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>-->
<script src="assets/bundles/izitoast/js/iziToast.min.js"></script>

<script src="assets/js/scripts.js"></script>

<script src="assets/js/custom.js"></script>

<script>
    $(document).ready(function () {
        <?php
        $msg_success = $this->session->flashdata('success');
        $msg_error = $this->session->flashdata('error');
        if ($msg_success) {?>
        show_toaster('<?php echo $msg_success?>');
        <?php
        } elseif ($msg_error) {?>
        show_toaster('<?php echo $msg_error?>', false);
        <?php
        } ?>

        $("form").submit(function () {
            $(this).find('input[type="submit"]').prop("disabled", true);
        });
    });


</script>
