<div>


    <style>
        .ml9 {
            position: relative;
            font-weight: 200;
            /*font-size: 4em;*/
        }

        .ml9 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .ml9 .letter {
            transform-origin: 50% 100%;
            display: inline-block;
            line-height: 1em;
        }


        .ml12 {
            font-weight: 200;
            /*font-size: 1.8em;*/
            text-transform: uppercase;
            /*letter-spacing: 0.2em;*/
        }

        .ml12 .letter {
            display: inline-block;
            line-height: 1em;
        }

        @media (max-width: 767px) {
            .ml12 {
                font-size: 36px !important;
                line-height: 42px !important;
            }
        }

        @media (max-width: 767px) {
            .h3sm {
                font-size: 20px !important;
                line-height: 42px !important;
            }

            .teaser h3 {
                padding: 0;
                min-width: 33%;
            }
        }


    </style>
    <div class="slider" id="slider" data-width="100">
        <button class="control_next">&rarr;</button>
        <button class="control_prev">&larr;</button>
        <ul>

            <?php if (!empty($sliders)) {
                foreach ($sliders as $slider) { ?>
                    <li>
                        <div class="slide" style="background-image: url('<?php echo $slider->img ?>')">
                            <div class="shadow slider_overlay">
                                <div class="teaser">
                                    <!--                                    <h3 class="h3sm animated bounce"-->
                                    <!--                                        data-animation="animated bounceInLeft">-->
                                    <?php //echo $slider->description ?><!--</h3>-->


                                    <h3 class="h3sm ml9">
  <span class="text-wrapper">
    <span class="letters"><?php echo $slider->description ?></span>
  </span>
                                    </h3>


                                    <h2 class="ml12"><?php echo $slider->title ?></h2>
                                    <!--                                    <p>StepUp ITs</p>-->


                                </div>
                            </div>
                        </div>
                    </li>
                <?php }
            } ?>


        </ul>
        <div class="progress">
            <div class="bar"></div>
        </div>
    </div>
</div>


<script>

</script>
