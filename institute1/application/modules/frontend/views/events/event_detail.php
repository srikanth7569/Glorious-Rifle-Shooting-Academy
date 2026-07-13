<section class="event_detail">
    <?php $this->load->view('common/top_section') ?>


    <link rel="stylesheet" href="assets/frontend/custom/css/count_down.css">


    <div class="container site-content pt-3">


        <div class="row">


            <div class="col-sm-9">


                <div class="event_summary">

                    <div class="entry-title">

                        <h1><?php echo $eventDetail->title ?></h1>

                    </div>

                    <div class="event-top">

                        <div class="before_div" style="position: relative">

                            <div class="thumbnail">
                                <img style="width: 100%;height: auto;" src="<?php echo $eventDetail->image ?>" alt=""
                                     width="870"
                                     height="500">
                            </div>
                            <div class="count_down">


                                <input
                                        type="hidden"
                                        id="upcoming_batch_date"
                                        value="<?php
                                        echo date('Y/m/d ', strtotime($eventDetail->date)) . date('H:i:s', strtotime($eventDetail->start_time));
                                        ?>">

                                <div class="tp_event_counter">


                                    <div class="color-white" id="coming-soon-counter">

                                    </div>
                                </div>

                                <!--                                <div class="tp_event_counter"-->
                                <!--                                     data-time="-->
                                <?php //echo date('M j, Y ', strtotime($eventDetail->date)) . date('H:i:s', strtotime($eventDetail->start_time)) ?><!--">-->
                                <!--                                </div>-->
                            </div>
                        </div>

                        <div class="event-content">
                            <div class="entry-content pull-left">
                                <h4>EVENT DESCRIPTION</h4>
                                <?php echo $eventDetail->description ?>
                                <h4>EVENT CONTENT</h4>

                                <?php echo $eventDetail->event_content ?>
                            </div>

                            <div class="event-info pull-right">
                                <div class="info-box">
                                    <p class="heading">
                                        <i class="fa fa-clock-o"></i>Start Time </p>
                                    <p><?php echo $eventDetail->start_time ?></p>
                                    <p><?php echo date('d-m-Y', strtotime($eventDetail->date)) ?></p>
                                </div>
                                <div class="info-box">
                                    <p class="heading">
                                        <i class="fa fa-flag"></i>Finish Time </p>
                                    <p><?php echo $eventDetail->end_time ?></p>
                                    <p><?php echo date('d-m-Y', strtotime($eventDetail->date)) ?></p>
                                </div>
                                <div class="info-box">
                                    <p class="heading">
                                        <i class="fa fa-map-marker"></i>Address </p>
                                    <p><?php echo $eventDetail->location ?></p>
                                </div>
                            </div>


                        </div>


                        <div class="share_links mb-5">
                            <ul class="thim-social-share">
                                <li class="heading">Share:</li>

                                <li>
                                    <div class="facebook-social">


                                        <a href="<?php echo urlencode(current_url()) ?>" target="_blank"
                                           data-image="<?php echo base_url() . $eventDetail->image ?>"
                                           data-title="<?php echo $eventDetail->title ?>"
                                           data-desc="<?php echo $eventDetail->description ?>"
                                           class="btnFBShare facebook"><i class="fa fa-facebook"></i></a>


                                    </div>
                                </li>

                                <li>
                                    <div class="googleplus-social">
                                        <a target="_blank" class="googleplus"
                                           href="#"
                                           title="Google Plus">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="twitter-social">
                                        <a target="_blank" class="twitter"
                                           href=""
                                           title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="pinterest-social">
                                        <a target="_blank" class="pinterest"
                                           href="#">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <br>


                        <div class="event-organizers" style="clear: both">
                            <h3 class="title">Event Participants</h3>
                            <div class="carousel-container">


                                <div id="event_members" class="owl-carousel owl-theme">


                                    <?php foreach ($eventDetail->members as $member) { ?>
                                        <div class="item text-center">
                                            <div class="thumbnail">
                                                <img class="ml-auto mr-auto" src="<?php echo $member->img ? $member->img : 'web_assets/uploads/2015/11/team-7-110x110.jpg' ?>"
                                                     alt="" style="height: 110px;width: 110px;"
                                                     width="110" height="110">
                                            </div>

                                            <a class="name"
                                               href="../../our_team/belinda/index.html"><?php echo $member->name ?></a>
                                            <p class="agency"><?php echo $member->designation ?></p>
                                        </div>
                                    <?php } ?>


                                </div>
                            </div>
                        </div>


                    </div>


                </div>


            </div>

            <div class="col-sm-3">


                <style>


                    .book-event {
                        padding: 10px;
                    }

                    .book_title {
                        background-color: #3fa1a8;
                        margin: 0;
                        text-transform: uppercase;
                        font-size: 18px;
                        font-weight: 700;
                        line-height: 72px;
                        padding: 0;
                        position: relative;
                        text-align: center;
                    }

                    .event_register_area {

                        padding: 16px 20px 0;
                        border: 1px solid #eee;
                        border-top: 0;
                    }

                    .info-event {
                        padding: 0;
                    }

                    .info-event li {
                        text-transform: none;
                        font-size: 15px;
                        font-weight: 400;
                        line-height: 52px;
                        clear: both;
                        border-bottom: 1px solid #eee;
                        overflow: hidden;
                    }

                    ul li input[type=number] {
                        width: 55px;
                        line-height: 30px;
                        border: 1px solid #eee;
                        padding: 0 0 0 10px;
                        font-size: 15px;
                        font-weight: 400;
                        text-align: center;
                    }

                    input:focus {
                        border: none;
                        outline: 0;
                        box-shadow: none;
                    }

                    .label {
                        display: inline-block;
                    }

                    .value {
                        display: inline-block;
                        font-weight: 700;
                        float: right;
                    }

                    .event_payment {
                        display: flex;
                        align-items: center;
                        margin: 10px 0;
                        list-style: none;
                        padding: 10px;
                        border-radius: 3px;
                        background-color: #eee;
                    }

                    input[type=radio] {
                        border-color: #ccc;
                    }

                    .event_register_footer {
                        text-align: center;
                        padding: 40px 0;
                    }

                    .event_auth_button {
                        background-color: #3fa1a8;
                        border: 0;
                        border-radius: 2px;
                        color: #fff;
                        font-family: Montserrat, "Helvetica Neue", sans-serif;
                        font-weight: 700;
                        letter-spacing: .046875em;
                        line-height: 1;
                        padding: .84375em .875em .78125em;
                        text-transform: uppercase;
                    }

                    .event_auth_button:hover {
                        color: #fff;
                    }
                </style>


                <div class="book-event">
                    <h3 class="book_title">Buy Ticket</h3>
                    <div class="event_register_area">


                        <form class="event_register" method="POST">
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
                                    <div style="color: #3fa1a8;" class="value">
                                        Rs.<?php echo number_format($eventDetail->cost) ?>/Slot
                                    </div>
                                </li>

                                <li>


                                    <div class="label">Quantity</div>
                                    <div class="value">
                                        <input type="number" class="" name="qty" value="1"
                                               min="1"
                                               id="event_register_qty"/>
                                    </div>
                                </li>
                                <li class="event-payment">
                                    <div class="label">Pay with</div>


                                    <div class="event_payment">
                                        <input id="payment_with_paypal" class="mr-2" type="radio"
                                               name="payment_method"
                                               value="paypal" checked/>
                                        <label for="payment_with_paypal">
                                            <img width="115" height="50"
                                                 src="web_assets/images/paypal.png"/></label>
                                    </div>


                                </li>
                            </ul>


                            <div class="event_register_footer">

                                <form action="">


                                </form>
                                <form action="frontend/payment/create_payment" method="post">
                                    <input type="hidden" name="event_price"
                                           value="<?php echo $eventDetail->cost ?>"/>
                                    <button class="event_register_submit event_auth_button" type="submit">Checkout
                                    </button>
                                </form>


                                <!--                                <a href="frontend/payment/create_payment"-->
                                <!--                                   class="event_register_submit event_auth_button">Checkout</a>-->
                                <!--                                <p></p>-->
                                <!--                                <p style="color: #666;">-->
                                <!--                                    You must login to our site to book this event! </p>-->
                            </div>
                        </form>
                    </div>
                </div>


            </div>


        </div>


    </div>
</section>


<script>
    (function ($) {
        'use strict';
        $(document).ready(function () {
            $("#coming-soon-counter").mbComingsoon({
                expiryDate: new Date($('#upcoming_batch_date').val()),
                localization: {
                    days: "days",
                    hours: "hours",
                    minutes: "minutes",
                    seconds: "seconds",
                }, speed: 100,
            });
            setTimeout(function () {
                jQuery(window).resize();
            }, 200);
        });
    })(jQuery);


    $(function () {
        $('#event_members').owlCarousel({
            items: 4,
            navigation: true,
            pagination: true,
            lazyLoad: true,
            autoPlay: false,

            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        });

    })


</script>
