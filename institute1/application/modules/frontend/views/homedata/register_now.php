<div class="mt-5">


    <link rel="stylesheet" href="assets/frontend/custom/css/count_down.css">

    <div class="register_now" style="background-image: url('web_assets/images/register/register4_1.jpg')">


        <div class="container">


            <div class="row">
                <div class="col-md-8 mt-auto mb-auto text-center">

                    <p>Upcoming Batch
                        <a style="color: white" href="frontend/courseDetail/<?php if (!empty($upcomingBatch)) {
                            echo $upcomingBatch->courseID;
                        } ?>">

                            <?php if (!empty($upcomingBatch)) {
                                echo $upcomingBatch->courseTitle;
                            } ?>

                        </a>
                    </p>
                    <h2>Register Now</h2>


                    <input type="hidden" id="upcoming_batch_date"
                           value="<?php
                           echo date('Y/m/d ', strtotime($upcomingBatch ? $upcomingBatch->start_date : date('Y/m/d'))) . date('H:i:s', strtotime($upcomingBatch ? $upcomingBatch->batch_time : date('H:i:s')));
                           ?>">

                    <div class="text-center color-white" id="coming-soon-counter">

                    </div>


                </div>
                <div class="col-md-4 pull-right pt-4 pb-4">


                    <div class="register_now_form bg-white">

                        <h3 class="title">
                            <span>
                                Create your free account now and get your seat of <?php if (isset($upcomingBatch->courseTitle)) {
                                    echo $upcomingBatch->courseTitle;
                                } ?>
                            </span>
                        </h3>


                        <form class="p-4">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name*" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email*" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <input type="number" placeholder="Phone*" class="form-control"
                                       id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="submit_btn">
                                GET IT NOW
                            </button>
                        </form>


                    </div>
                </div>

            </div>
        </div>


    </div>


</div>


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


</script>
