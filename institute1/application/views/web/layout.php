<!DOCTYPE html>
<html lang="en-US">
<?php $this->load->view('web/includes/head') ?>
<body id="thim-body">


<div id="preload">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>


<div class="mobile-menu-wrapper">
    <div class="mobile-menu-inner">
        <div class="icon-wrapper">
            <div class="menu-mobile-effect navbar-toggle close-icon" data-effect="mobile-effect">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
        </div>

        <?php $this->load->view('web/includes/menu') ?>
    </div>
</div>
<div id="wrapper-container" class="wrapper-container">
    <div class="content-pusher">
        <!--        Header   -->
        <?php $this->load->view('web/includes/header'); ?>

        <!--  Main Content     -->


        <?php
        if (!empty($content)) {
            $this->load->view($content);
        }
        ?>


        <?php $this->load->view('web/includes/footer_bottom'); ?>
    </div>
    <a href="#" id="back-to-top">
        <i class="fa fa-chevron-up" aria-hidden="true"></i>
    </a>
</div>


<div id="thim-popup-login">
    <div class="popup-login-wrapper">
        <div class="thim-login-container has-shortcode">
            <br>
            <div class="thim-popup-inner">


                <?php $this->load->view('web/includes/login'); ?>
                <?php $this->load->view('web/includes/register'); ?>


            </div>
            <span class="close-popup"><i class="fa fa-times" aria-hidden="true"></i></span>
            <div class="cssload-container">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
    </div>
</div>




<!--<div class="tp-preview-images">-->
<!--    <img src="web_assets/wp-content/plugins/tp-chameleon/inc/eduma-01.jpg" alt="preview image">-->
<!--</div>-->


<!--<div id="tp_chameleon_list_google_fonts"></div>-->
<!--<div class="gallery-slider-content"></div>-->

<?php $this->load->view('web/includes/css') ?>
<?php //$this->load->view('web/includes/js') ?>


<!--<div class="tp_chameleon_overlay">-->
<!--    <div class="tp_chameleon_progress">-->
<!--        <div class="tp_chameleon_heading">Processing!</div>-->
<!--    </div>-->
<!--</div>-->
</body>
</html>


