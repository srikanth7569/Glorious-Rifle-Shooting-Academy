<?php

$setting = $this->db->get('setting')->row();

?>


<header id="masthead" class="site-header affix-top bg-custom-sticky sticky-header header_overlay header_v1">
    <div id="toolbar" class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="toolbar-container">
                        <aside id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                <div class="thim-have-any-question">
                                    Have any question?
                                    <div class="mobile"><i class="fa fa-phone"></i>
                                        <a href="tel:<?php echo $setting->phone ?>"
                                           class="value"><?php echo $setting->phone ?></a>
                                    </div>
                                    <div class="email"><i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo $setting->email ?>"><span
                                                    class="__cf_email__"
                                                    data-cfemail=""><?php echo $setting->email ?></span></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside id="login-popup-3" class="widget widget_login-popup">
                            <div class="thim-widget-login-popup thim-widget-login-popup-base template-base">
                                <div class="thim-link-login thim-login-popup">
                                    <a class="register js-show-popup"
                                       href="account/index0ddc.html?action=register">Register</a>
                                    <a class="" href="login">Login</a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="thim-nav-wrapper container">
        <div class="row">
            <div class="navigation col-sm-12">
                <div class="tm-table">
                    <div class="width-logo table-cell sm-logo">
                        <a href="web" title="STEPUP IT SOLUTIONS" rel="home" class="no-sticky-logo">
                            <img src="web_assets/images/steuplogo.png" alt="STEPUP IT SOLUTIONS">
                        </a>
                        <a href="web" rel="home" class="sticky-logo">
                            <img src="web_assets/images/mainlogo.png" alt="IOMS">
                        </a>
                    </div>


                    <?php $this->load->view('web/includes/nav_bar') ?>


                    <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
