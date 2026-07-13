<style type="text/css" media="all" id="siteorigin-panels-layouts-head">/* Layout 91 */
    #pgc-91-0-0, #pgc-91-2-0 {
        width: 100%;
        width: calc(100% - (0 * 30px))
    }

    #pl-91 #panel-91-0-0-0, #pl-91 #panel-91-1-0-0, #pl-91 #panel-91-1-1-0, #pl-91 #panel-91-2-0-0 {
    }

    #pg-91-0 {
        margin-bottom: 14px
    }

    #pgc-91-1-0, #pgc-91-1-1 {
        width: 50%;
        width: calc(50% - (0.5 * 30px))
    }

    #pg-91-1 {
        margin-bottom: 94px
    }

    #pl-91 .so-panel {
        margin-bottom: 30px
    }

    #pl-91 .so-panel:last-child {
        margin-bottom: 0px
    }

    #panel-91-0-0-0 > .panel-widget-style {
        padding: 30px 0px 0px
    }

    @media (max-width: 767px) {
        #pg-91-0.panel-no-style, #pg-91-0.panel-has-style > .panel-row-style, #pg-91-1.panel-no-style, #pg-91-1.panel-has-style > .panel-row-style, #pg-91-2.panel-no-style, #pg-91-2.panel-has-style > .panel-row-style {
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column
        }

        #pg-91-0 > .panel-grid-cell, #pg-91-0 > .panel-row-style > .panel-grid-cell, #pg-91-1 > .panel-grid-cell, #pg-91-1 > .panel-row-style > .panel-grid-cell, #pg-91-2 > .panel-grid-cell, #pg-91-2 > .panel-row-style > .panel-grid-cell {
            width: 100%;
            margin-right: 0
        }

        #pgc-91-1-0 {
            margin-bottom: 30px
        }

        #pl-91 .panel-grid-cell {
            padding: 0
        }

        #pl-91 .panel-grid .panel-grid-cell-empty {
            display: none
        }

        #pl-91 .panel-grid .panel-grid-cell-mobile-last {
            margin-bottom: 0px
        }
    } </style>


<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>FAQ Page</h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="FAQs"> FAQs</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content no-padding-top">
            <div class="row">
                <main id="main" class="site-main col-sm-12 full-width">
                    <article id="post-91" class="post-91 page type-page status-publish hentry pmpro-has-access">
                        <div class="entry-content">
                            <div id="pl-91" class="panel-layout">
                                <div id="pg-91-0" class="panel-grid panel-no-style">
                                    <div id="pgc-91-0-0" class="panel-grid-cell">
                                        <div id="panel-91-0-0-0"
                                             class="so-panel widget widget_heading panel-first-child panel-last-child"
                                             data-index="0">
                                            <div class="panel-widget-style panel-widget-style-for-91-0-0-0">
                                                <div class="thim-widget-heading thim-widget-heading-base template-base">
                                                    <div class="sc_heading   text-center"><h3
                                                                style="text-transform: uppercase;" class="title">
                                                            Frequently Asked Questions</h3>
                                                        <p class="sub-heading" style="">Answer all of your
                                                            questions</p><span class="line"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pg-91-1" class="panel-grid panel-no-style">
                                    <div id="pgc-91-1-0" class="panel-grid-cell">
                                        <div id="panel-91-1-0-0"
                                             class="so-panel widget widget_accordion panel-first-child panel-last-child"
                                             data-index="1">
                                            <div class="thim-widget-accordion thim-widget-accordion-base template-base">
                                                <div class="thim-widget-accordion">
                                                    <h3 class="widget-title">Purchases & Refunds</h3>
                                                    <div id="accordion_5e7e15206542b" class="panel-group"
                                                         role="tablist" aria-multiselectable="true">


                                                        <?php if (!empty($faqs)) {
                                                            foreach ($faqs as $item) { ?>
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading" role="tab"
                                                                         id="heading_accordion<?php echo $item->id ?>">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" class="collapsed"
                                                                               data-toggle="collapse"
                                                                               data-parent="#accordion_5e7e15206542b"
                                                                               href="#collapse_accordion<?php echo $item->id ?>"
                                                                               aria-expanded="false"
                                                                               aria-controls="collapse_accordion<?php echo $item->id ?>">
                                                                                <?php echo $item->question ?>

                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapse_accordion<?php echo $item->id ?>"
                                                                         class="panel-collapse collapse" role="tabpanel"
                                                                         aria-labelledby="heading_accordion<?php echo $item->id ?>">
                                                                        <div class="panel-body">
                                                                            <?php echo $item->answer ?>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            <?php }
                                                        } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pgc-91-1-1" class="panel-grid-cell">
                                        <div id="panel-91-1-1-0"
                                             class="so-panel widget widget_accordion panel-first-child panel-last-child"
                                             data-index="2">
                                            <div class="thim-widget-accordion thim-widget-accordion-base template-base">
                                                <div class="thim-widget-accordion">
                                                    <h3 class="widget-title">Making Courses</h3>
                                                    <div id="accordion_5e7e1520654d9" class="panel-group"
                                                         role="tablist" aria-multiselectable="true">

                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab"
                                                                 id="heading_accordion_5e7e1520654d9_0">
                                                                <h4 class="panel-title">
                                                                    <a role="button" class="collapsed"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_5e7e1520654d9"
                                                                       href="#collapse_accordion_5e7e1520654d9_0"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapse_accordion_5e7e1520654d9_0">
                                                                        Changing account name </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_accordion_5e7e1520654d9_0"
                                                                 class="panel-collapse collapse" role="tabpanel"
                                                                 aria-labelledby="heading_accordion_5e7e1520654d9_0">
                                                                <div class="panel-body">
                                                                    Lorem Ipsum is simply dummy text of the
                                                                    printing and typesetting industry. Lorem
                                                                    Ipsum has been the industry's standard dummy
                                                                    text ever since the 1500s, when an unknown
                                                                    printer took a galley of type and scrambled
                                                                    it to make a type specimen book.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab"
                                                                 id="heading_accordion_5e7e1520654d9_1">
                                                                <h4 class="panel-title">
                                                                    <a role="button" class="collapsed"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_5e7e1520654d9"
                                                                       href="#collapse_accordion_5e7e1520654d9_1"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapse_accordion_5e7e1520654d9_1">
                                                                        How do I unsubscribe from EDUMA
                                                                        e-mails? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_accordion_5e7e1520654d9_1"
                                                                 class="panel-collapse collapse" role="tabpanel"
                                                                 aria-labelledby="heading_accordion_5e7e1520654d9_1">
                                                                <div class="panel-body">
                                                                    There are many variations of passages of
                                                                    Lorem Ipsum available, but the majority have
                                                                    suffered alteration in some form, by
                                                                    injected humour, or randomised words which
                                                                    don't look even slightly believable.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab"
                                                                 id="heading_accordion_5e7e1520654d9_2">
                                                                <h4 class="panel-title">
                                                                    <a role="button" class="collapsed"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_5e7e1520654d9"
                                                                       href="#collapse_accordion_5e7e1520654d9_2"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapse_accordion_5e7e1520654d9_2">
                                                                        How do I change my password? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_accordion_5e7e1520654d9_2"
                                                                 class="panel-collapse collapse" role="tabpanel"
                                                                 aria-labelledby="heading_accordion_5e7e1520654d9_2">
                                                                <div class="panel-body">
                                                                    It is a long established fact that a reader
                                                                    will be distracted by the readable content
                                                                    of a page when looking at its layout. The
                                                                    point of using Lorem Ipsum is that it has a
                                                                    more-or-less normal distribution of letters,
                                                                    as opposed to using 'Content here, content
                                                                    here', making it look like readable English.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab"
                                                                 id="heading_accordion_5e7e1520654d9_3">
                                                                <h4 class="panel-title">
                                                                    <a role="button" class="collapsed"
                                                                       data-toggle="collapse"
                                                                       data-parent="#accordion_5e7e1520654d9"
                                                                       href="#collapse_accordion_5e7e1520654d9_3"
                                                                       aria-expanded="false"
                                                                       aria-controls="collapse_accordion_5e7e1520654d9_3">
                                                                        Why aren&#039;t my courses showing in my
                                                                        account? </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse_accordion_5e7e1520654d9_3"
                                                                 class="panel-collapse collapse" role="tabpanel"
                                                                 aria-labelledby="heading_accordion_5e7e1520654d9_3">
                                                                <div class="panel-body">
                                                                    <b>Missing mobile purchase</b><br>
                                                                    If you purchased a course on iOS or Android,
                                                                    it's possible that the course was not
                                                                    registered to your account. Please email
                                                                    your purchase receipt to <a
                                                                            href="../cdn-cgi/l/email-protection.html"
                                                                            class="__cf_email__"
                                                                            data-cfemail="224a474e525b4d5762474657414d0c414d4f0c">[email&#160;protected]</a><br>
                                                                    <b>Multiple e-mail accounts</b><br>
                                                                    If you use multiple e-mail accounts, or have
                                                                    a Facebook or Google account, try logging in
                                                                    with the associate e-mail addresses.
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="pg-91-2" class="panel-grid panel-no-style">
                                    <div id="pgc-91-2-0" class="panel-grid-cell">
                                        <div id="panel-91-2-0-0"
                                             class="so-panel widget widget_text panel-first-child panel-last-child"
                                             data-index="3">
                                            <div class="thim-border-top panel-widget-style panel-widget-style-for-91-2-0-0">
                                                <div class="textwidget">
                                                    <div class="thim-contact-faqs text-center">
                                                        <h4>Didn't find the answer?</h4>
                                                        <div role="form" class="wpcf7" id="wpcf7-f4-p91-o3"
                                                             lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form action="https://educationwp.thimpress.com/faqs/#wpcf7-f4-p91-o3"
                                                                  method="post" class="wpcf7-form"
                                                                  novalidate="novalidate">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7"
                                                                           value="4"/>
                                                                    <input type="hidden" name="_wpcf7_version"
                                                                           value="5.1.6"/>
                                                                    <input type="hidden" name="_wpcf7_locale"
                                                                           value="en_US"/>
                                                                    <input type="hidden" name="_wpcf7_unit_tag"
                                                                           value="wpcf7-f4-p91-o3"/>
                                                                    <input type="hidden"
                                                                           name="_wpcf7_container_post"
                                                                           value="91"/>
                                                                </div>
                                                                <p><span
                                                                            class="wpcf7-form-control-wrap your-name"><input
                                                                                type="text" name="your-name" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Name *"/></span></p>
                                                                <p><span
                                                                            class="wpcf7-form-control-wrap your-email"><input
                                                                                type="email" name="your-email" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Email *"/></span></p>
                                                                <p><span
                                                                            class="wpcf7-form-control-wrap your-subject"><input
                                                                                type="text" name="your-subject" value=""
                                                                                size="40"
                                                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Subject *"/></span></p>
                                                                <p><span
                                                                            class="wpcf7-form-control-wrap your-message"><textarea
                                                                                name="your-message" cols="40" rows="10"
                                                                                class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                                                                aria-required="true"
                                                                                aria-invalid="false"
                                                                                placeholder="Message *"></textarea></span>
                                                                </p>
                                                                <p><input type="submit" value="Submit"
                                                                          class="wpcf7-form-control wpcf7-submit"/>
                                                                </p>
                                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </section>
    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
