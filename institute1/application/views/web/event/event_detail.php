<style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>

<link rel='stylesheet' id='wpems-countdown-css-css'
      href='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/countdown/css/jquery.countdown.css'
      type='text/css' media='all'/>
<link rel='stylesheet' id='wpems-owl-carousel-css-css'
      href='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/owl-carousel/css/owl.carousel.css'
      type='text/css' media='all'/>
<link rel='stylesheet' id='wpems-magnific-popup-css-css'
      href='web_assets/wp-content/plugins/wp-events-manager/inc/libraries/magnific-popup/css/magnific-popup.css'
      type='text/css' media='all'/>
<link rel='stylesheet' id='wpems-fronted-css-css'
      href='web_assets/wp-content/plugins/wp-events-manager/assets/css/frontend/events.min.css' type='text/css'
      media='all'/>
<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>Events</h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../index.html" title="Events"><span
                                        itemprop="name">Events</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="Elegant Light Box Paper Cut Dioramas">Elegant Light Box Paper Cut Dioramas</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <article id="tp_event-2952"
                             class="tp_single_event post-2952 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                        <div class="summary entry-summary">
                            <div class="entry-title">
                                <h1><?php echo $eventDetail->title ?>

                                </h1>
                            </div>
                            <div class="tp-event-top">
                                <div class="entry-thumbnail">
                                    <img width="870" height="500"
                                         src="<?php echo $eventDetail->image ?>"
                                         class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                         alt=""
                                         srcset="https://educationwp.thimpress.com/wp-content/uploads/2015/11/event-2.jpg 870w, https://educationwp.thimpress.com/wp-content/uploads/2015/11/event-2-300x172.jpg 300w, https://educationwp.thimpress.com/wp-content/uploads/2015/11/event-2-768x441.jpg 768w"
                                         sizes="(max-width: 870px) 100vw, 870px"/></div>
                                <div class="entry-countdown">
                                    <div class="tp_event_counter"
                                         data-time="<?php echo date('M j, Y ', strtotime($eventDetail->date)) . date('H:i:s', strtotime($eventDetail->start_time)) ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="tp-event-content">
                                <div class="entry-content">
                                    <h4>EVENT DESCRIPTION</h4>
                                    <?php echo $eventDetail->description ?>
                                    <h4>EVENT CONTENT</h4>

                                    <?php echo $eventDetail->event_content ?>
                                </div>


                                <div class="tp-event-info">
                                    <div class="tp-info-box">
                                        <p class="heading">
                                            <i class="thim-color fa fa-clock-o"></i>Start Time </p>
                                        <p><?php echo $eventDetail->start_time ?></p>
                                        <p><?php echo date('d-m-Y', strtotime($eventDetail->date)) ?></p>
                                    </div>
                                    <div class="tp-info-box">
                                        <p class="heading">
                                            <i class="thim-color fa fa-flag"></i>Finish Time </p>
                                        <p><?php echo $eventDetail->end_time ?></p>
                                        <p><?php echo date('d-m-Y', strtotime($eventDetail->date)) ?></p>
                                    </div>
                                    <div class="tp-info-box">
                                        <p class="heading">
                                            <i class="thim-color fa fa-map-marker"></i>Address </p>
                                        <p><?php echo $eventDetail->location ?></p>
                                        <div class="entry-location">
                                            <div class="event-google-map-canvas"
                                                 style="height: 210px; width: 100%"
                                                 id="map-canvas-d6dc007546cd0185268a34ee5b105565"
                                                 data-address="Vancouver, Canada" data-zoom="14"
                                                 data-api-key="AIzaSyDNnrBbNMIqC2x_wTYJNEzHYSrMqQF-YVo"
                                                 data-marker-icon="https://educationwp.thimpress.com/wp-content/themes/eduma/images/map_icon.png"
                                                 data-marker-at-center="1"></div>
                                        </div>
                                    </div>
                                </div>




                            </div>




                            <div class="tp-event-organizers">
                                <h3 class="title">Event Participants</h3>
                                <div class="thim-carousel-container">
                                    <div class="thim-carousel-wrapper" data-visible="4" data-navigation="1">
                                        <div class="item">
                                            <div class="thumbnail"><img
                                                        src="web_assets/uploads/2015/11/team-7-110x110.jpg"
                                                        alt="team-7" title="team-7" width="110" height="110"></div>
                                            <a class="name" href="../../our_team/belinda/index.html">Belinda</a>
                                            <p class="regency">Js Developer</p>
                                        </div>
                                        <div class="item">
                                            <div class="thumbnail"><img
                                                        src="web_assets/uploads/2015/11/team-3-110x110.jpg"
                                                        alt="team-3" title="team-3" width="110" height="110"></div>
                                            <a class="name"
                                               href="../../our_team/christian/index.html">Christian</a>
                                            <p class="regency">Creative Director</p>
                                        </div>
                                        <div class="item">
                                            <div class="thumbnail"><img
                                                        src="web_assets/uploads/2015/11/team-8-110x110.jpg"
                                                        alt="team-8" title="team-8" width="110" height="110"></div>
                                            <a class="name" href="../../our_team/jane-nguyen/index.html">Jane
                                                Nguyen</a>
                                            <p class="regency">Copyrighter</p>
                                        </div>
                                        <div class="item">
                                            <div class="thumbnail"><img
                                                        src="web_assets/uploads/2015/11/team-4-110x110.jpg"
                                                        alt="team-4" title="team-4" width="110" height="110"></div>
                                            <a class="name" href="../../our_team/ryze-faker/index.html">Ryze
                                                Faker</a>
                                            <p class="regency">Co-Founder</p>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="tp-event-single-share">
                                <ul class="thim-social-share">
                                    <li class="heading">Share:</li>
                                    <li>
                                        <div class="facebook-social"><a target="_blank" class="facebook"
                                                                        href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feducationwp.thimpress.com%2Fevents%2Felegant-light-box-paper-cut-dioramas-1%2F"
                                                                        title="Facebook"><i
                                                        class="fa fa-facebook"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="googleplus-social"><a target="_blank" class="googleplus"
                                                                          href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fevents%2Felegant-light-box-paper-cut-dioramas-1%2F&amp;title=Elegant%20Light%20Box%20Paper%20Cut%20Dioramas"
                                                                          title="Google Plus"
                                                                          onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;"
                                                                          data-cf-modified-9e3ec2edc30434fb0eeb4d40-=""><i
                                                        class="fa fa-google"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="twitter-social"><a target="_blank" class="twitter"
                                                                       href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fevents%2Felegant-light-box-paper-cut-dioramas-1%2F&amp;text=Elegant%20Light%20Box%20Paper%20Cut%20Dioramas"
                                                                       title="Twitter"><i
                                                        class="fa fa-twitter"></i></a></div>
                                    </li>
                                    <li>
                                        <div class="pinterest-social"><a target="_blank" class="pinterest"
                                                                         href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Feducationwp.thimpress.com%2Fevents%2Felegant-light-box-paper-cut-dioramas-1%2F&amp;description=Morbi%20accumsan%20ipsum%20velit.%20Nam%20nec%20tellus%20a%20odio%20tincidunt%20auctor%20a%20ornare%20odio.%20Sed%20non%20mauris%20itae%20erat%20conuat&amp;media=https%3A%2F%2Feducationwp.thimpress.com%2Fwp-content%2Fuploads%2F2015%2F11%2Fevent-2.jpg"
                                                                         onclick="if (!window.__cfRLUnblockHandlers) return false; window.open(this.href); return false;"
                                                                         title="Pinterest"
                                                                         data-cf-modified-9e3ec2edc30434fb0eeb4d40-=""><i
                                                        class="fa fa-pinterest-p"></i></a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>


                    <?php $this->load->view('web/includes/comment_script') ?>


                </main>




                <div id="sidebar" class="widget-area col-sm-3 sidebar-events sticky-sidebar"
                     role="complementary">






                    <div class="widget_book-event">
                        <h3 class="book-title">Buy Ticket</h3>
                        <div class="event_register_area">
                            <form name="event_register" class="event_register" method="POST">
                                <ul class="info-event">
                                    <li>
                                        <div class="label">Total Slots</div>
                                        <div class="value"><?php echo number_format($eventDetail->total_slots) ?></div>
                                    </li>
                                    <li>
                                        <div class="label">Booked Slots</div>
                                        <div class="value"><?php echo number_format($eventDetail->booked_slots) ?></div>
                                    </li>
                                    <li class="event-cost">
                                        <div class="label">Cost</div>
                                        <div class="value">Rs.<?php echo number_format($eventDetail->cost) ?>/Slot
                                        </div>
                                    </li>
                                    <li>
                                        <div class="label">Quantity</div>
                                        <div class="value">
                                            <input type="number" name="qty" value="1" min="1" max="150"
                                                   id="event_register_qty"/>
                                        </div>
                                    </li>
                                    <li class="event-payment">
                                        <div class="label">Pay with</div>
                                        <div class="event_auth_payment_methods">
                                            <input id="payment_method_paypal" type="radio" name="payment_method"
                                                   value="paypal" checked/>
                                            <label for="payment_method_paypal"><img width="115" height="50"
                                                                                    src="web_assets/wp-content/plugins/wp-events-manager/inc/gateways/paypal/paypal.png"/></label>
                                        </div>
                                    </li>
                                </ul>


                                <div class="event_register_foot">
                                    <input type="hidden" name="event_id" value="2952"/>
                                    <input type="hidden" name="action" value="event_auth_register"/>
                                    <input type="hidden" id="event_auth_register_nonce"
                                           name="event_auth_register_nonce" value="0faae0c1e4"/><input
                                            type="hidden" name="_wp_http_referer"
                                            value="/events/elegant-light-box-paper-cut-dioramas-1/"/> <a
                                            href="../../account/index3e7c.html?redirect_to=https%3A%2F%2Feducationwp.thimpress.com%2Fevents%2Felegant-light-box-paper-cut-dioramas-1%2F"
                                            class="event_register_submit event_auth_button">Login Now</a>
                                    <p></p>
                                    <p class="login-notice">
                                        You must login to our site to book this event! </p>
                                </div>
                            </form>
                        </div>
                    </div>








                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
