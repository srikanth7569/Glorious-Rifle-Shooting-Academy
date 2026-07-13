<?php

$setting = $this->db->get('setting')->row();

?>

<footer id="colophon" class="has-footer-bottom" style="margin-bottom: 420px">
    <div class="footer">
        <div class="container">
            <div class="row">
                <aside id="siteorigin-panels-builder-9"
                       class="widget widget_siteorigin-panels-builder footer_widget">

                    <div id="pl" class="panel-layout">
                        <div id="pg-0" class="panel-grid panel-no-style">
                            <div id="pgc-0-0" class="panel-grid-cell">
                                <div id="panel-0-0-0"
                                     class="so-panel widget widget">
                                    <div class="textwidget">
                                        <div class="thim-footer-location">
                                            <p>
                                                <img src="web_assets/images/steuplogo.png"
                                                     alt="Stepup it Solutions Logo" width="225"
                                                     height="80"/>
                                            </p>
                                            <p class="info">
                                                <i class="fa fa-phone">
                                                </i>
                                                <a href="tel:<?php echo $setting->phone ?>">
                                                    <?php echo $setting->phone ?>
                                                </a>
                                            </p>
                                            <p class="info">
                                                <i class="fa fa-envelope"></i>
                                                <a href="mailto:<?php echo $setting->email ?>">
                                                                <span>
                                                                    <?php echo $setting->email ?>
                                                                </span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div id="panel-0-0-1"
                                     class="so-panel widget widget_social panel-last-child" data-index="1">
                                    <div class="thim-widget-social">
                                        <div class="thim-social" style="margin:5px 0 0">
                                            <ul class="social_link">
                                                <li>
                                                    <a class="facebook hasTooltip"
                                                       href="<?php echo $setting->fb_link ?>">
                                                        <i class="fa fa-facebook">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="twitter hasTooltip"
                                                       href="<?php echo $setting->twitter_link ?>">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="pgc-0-1" class="panel-grid-cell">
                                <div id="panel-0-1-0"
                                     class="so-panel widget widget_nav_menu panel-last-child">
                                    <h3 class="widget-title">Company</h3>
                                    <div class="menu-company-container">
                                        <ul id="menu-company" class="menu">
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/aboutUs" class="tc-menu-inner">
                                                    About Us
                                                </a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/blog" class="tc-menu-inner">Blog</a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/contactUs" class="tc-menu-inner">
                                                    Contact
                                                </a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/become_a_teacher" class="tc-menu-inner">
                                                    Become a Teacher
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="pgc-0-2" class="panel-grid-cell">
                                <div id="panel-0-2-0"
                                     class="so-panel widget widget_nav_menu panel-last-child">
                                    <h3 class="widget-title">Links</h3>
                                    <div class="menu-links-container">
                                        <ul id="menu-links" class="menu">
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/allCourses"
                                                   class="tc-menu-inner">Courses</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/events" class="tc-menu-inner">Events</a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/gallery"
                                                   class="tc-menu-inner">Gallery</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="web/faqs" class="tc-menu-inner">FAQs</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div id="pgc-0-3" class="panel-grid-cell">
                                <div id="panel-0-3-0"
                                     class="so-panel widget widget_nav_menu panel-last-child">
                                    <h3 class="widget-title">Support</h3>
                                    <div class="menu-support-container">
                                        <ul id="menu-support" class="menu">
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">Documentation</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">Forums
                                                </a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)" class="tc-menu-inner">Language Packs</a>
                                            </li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)" class="tc-menu-inner">Release Status</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div id="pgc-0-4" class="panel-grid-cell">
                                <div id="panel-0-4-0"
                                     class="so-panel widget widget_nav_menu panel-last-child">
                                    <h3 class="widget-title">Recommend</h3>
                                    <div class="menu-recommend-container">
                                        <ul id="menu-recommend" class="menu">
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">WordPress</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">LearnPress</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">WooCommerce</a></li>
                                            <li id="menu-item"
                                                class="menu-item tc-menu-depth-0">
                                                <a href="javascript:void(0)"
                                                   class="tc-menu-inner">bbPress</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>


    <div class="copyright-area">
        <div class="container">
            <div class="copyright-content">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-copyright">
                            <a href="javascript:void(0)">
                                <!--                                Education-->
                                <!--                                WordPress Theme-->
                            </a>
                            <!--                            by -->
                            <a class="color_primary"
                               href="http://www.almahirhub.com/"
                               target="_blank">IOMS.</a> Powered by
                            Almahirhub.</p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <aside id="nav_menu-14" class="widget widget_nav_menu">
                            <div class="menu-privacy-container">
                                <ul id="menu-privacy" class="menu">
                                    <li id="menu-item"
                                        class="menu-item tc-menu-depth-0">
                                        <a href="javascript:void(0)" class="tc-menu-inner">Privacy</a></li>
                                    <li id="menu-item"
                                        class="menu-item tc-menu-depth-0">
                                        <a href="javascript:void(0)" class="tc-menu-inner">Terms</a></li>
                                    <li id="menu-item"
                                        class="menu-item tc-menu-depth-0">
                                        <a href="javascript:void(0)" class="tc-menu-inner">Sitemap</a></li>
                                    <li id="menu-item"
                                        class="menu-item tc-menu-depth-0">
                                        <a href="javascript:void(0)"
                                           class="tc-menu-inner">Purchase</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
