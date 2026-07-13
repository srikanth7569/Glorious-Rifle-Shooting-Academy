<div id="pg-12-3" class="panel-grid panel-has-style">
    <div class="thim-bg-overlay siteorigin-panels-stretch panel-row-style panel-row-style-for-12-3"
         data-stretch-type="full">


        <div id="pgc-12-3-0" class="panel-grid-cell">
            <div id="panel-12-3-0-0" class="so-panel widget widget_text panel-first-child"
                 data-index="6">


                <div class="textwidget">
                    <div class="thim-get-100s">
                        <p class="get-100s">
                            Get 100s of online
                            <span class="thim-color">
                                                    Courses For Free
                                                </span>
                        </p>
                        <h2>Register Now</h2>
                    </div>
                </div>


            </div>


            <div id="panel-12-3-0-1" class="so-panel widget widget_countdown-box panel-last-child"
                 data-index="7">

                <input type="hidden" id="upcoming_batch_date"
                       value="<?php echo date('Y/m/d ', strtotime($upcomingBatch->start_date ? $upcomingBatch->start_date : date('Y/m/d'))) . date('H:i:s', strtotime($upcomingBatch->batch_time ? $upcomingBatch->batch_time : date('H:i:s'))) ?>">



                <div class="thim-widget-countdown-box thim-widget-countdown-box-base template-base">
                    <div class="text-left color-white" id="coming-soon-counter5e7e16855a6f5">

                    </div>

                    <!--          Timer in jQuery         -->
                    <script data-cfasync="true" type="1e0378d641c280536708df7d-text/javascript">
                                         (function($) {
                                         'use strict';
                                         $(document).ready(function() {
                                           $("#coming-soon-counter5e7e16855a6f5").mbComingsoon({
                                            expiryDate  : new Date($('#upcoming_batch_date').val()),
                                             localization: {
                                             days   : "days",
                                             hours  : "hours",
                                             minutes: "minutes",
                                             seconds: "seconds",
                                              },speed:100,
                                               });
                                               setTimeout(function() {
                                               jQuery(window).resize();
                                               }, 200);
                                               });})(jQuery);



                    </script>

                </div>
            </div>
        </div>



        <div id="pgc-12-3-1" class="panel-grid-cell">
            <div id="panel-12-3-1-0"
                 class="so-panel widget widget_text panel-first-child panel-last-child"
                 data-index="8">



                <div class="textwidget">
                    <div class="thim-register-now-form">
                        <h3 class="title">
                                                <span>
                                                    Create your free account now and get immediate access to 100s of online courses.
                                                </span>
                        </h3>
                        <div role="form" class="wpcf7" id="wpcf7-f85-p12-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="" method="post" class="wpcf7-form"
                                  novalidate="novalidate">
                                <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="85"/>
                                    <input type="hidden" name="_wpcf7_version" value="5.1.6"/>
                                    <input type="hidden" name="_wpcf7_locale" value="en_US"/>
                                    <input type="hidden" name="_wpcf7_unit_tag"
                                           value="wpcf7-f85-p12-o1"/>
                                    <input type="hidden" name="_wpcf7_container_post" value="12"/>
                                </div>
                                <p>
                                                        <span class="wpcf7-form-control-wrap your-name">
                                                            <input type="text" name="your-name" value="" size="40"
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                   aria-required="true" aria-invalid="false"
                                                                   placeholder="Your Name *"/>
                                                        </span>
                                </p>
                                <p>
                                                        <span class="wpcf7-form-control-wrap your-email">
                                                            <input
                                                                    type="email" name="your-email" value="" size="40"
                                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                    aria-required="true" aria-invalid="false"
                                                                    placeholder="Email *"/>
                                                        </span>
                                </p>
                                <p>
                                                        <span class="wpcf7-form-control-wrap phone">
                                                            <input type="tel" name="phone" value="" size="40"
                                                                   class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel"
                                                                   aria-required="true" aria-invalid="false"
                                                                   placeholder="Phone *"/>
                                                        </span>
                                </p>
                                <p>
                                    <input type="submit" value="Get It Now"
                                           class="wpcf7-form-control wpcf7-submit"/>
                                </p>
                                <div class="wpcf7-response-output wpcf7-display-none">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
