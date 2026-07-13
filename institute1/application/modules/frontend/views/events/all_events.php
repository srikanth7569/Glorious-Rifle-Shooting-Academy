<section class="all_events">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">


        <div class="row" id="tabs">
            <div class="col-xs-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                           role="tab" aria-controls="nav-home" aria-selected="true">Happening</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                           role="tab" aria-controls="nav-profile" aria-selected="false">Upcoming</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                           role="tab" aria-controls="nav-contact" aria-selected="false">Expired</a>
                    </div>
                </nav>


                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<!---->
<!--                        <style>-->
<!---->
<!--                            @media screen and (max-width: 667px) {-->
<!--                                .item_event .event_wrapper {-->
<!--                                    clear: both;-->
<!--                                    float: none !important;-->
<!--                                    padding: 0 50px 0 0 !important;-->
<!--                                    width: 100% !important;-->
<!--                                }-->
<!--                            }-->
<!---->
<!--                        </style>-->


                        <div class="tab_content">

                            <?php if (!empty($events)) {
                                foreach ($events as $event) { ?>

                                    <div class="item_event">
                                        <div class="time-from">
                                            <div class="date">
                                                <?php echo date('d', strtotime($event->date)) ?>
                                            </div>
                                            <div class="month">
                                                <?php echo date('M', strtotime($event->date)) ?>
                                            </div>
                                        </div>
                                        <div class="image">
                                            <img src="<?php echo $event->image ?>"
                                                 width="450" height="233">
                                        </div>


                                        <div class="event_wrapper">


                                            <h5 class="title">
                                                <a href="frontend/eventDetail/<?php echo $event->id ?>">
                                                    <?php echo $event->title ?>
                                                </a>
                                            </h5>

                                            <div class="meta">
                                                <div class="time">
                                                    <i class="fa fa-clock-o"></i>
                                                    <?php echo $event->start_time . ' - ' . $event->end_time ?>
                                                </div>
                                                <div class="location">
                                                    <i class="fa fa-map-marker"></i>
                                                    <?php echo $event->location ?>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <p>
                                                    <?php echo $event->description ?>
                                                </p>
                                            </div>
                                        </div>


                                    </div>

                                <?php }
                            } ?>


                        </div>


                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                        occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                        dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                        consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                        tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                        adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat
                        ex.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
                        occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
                        dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
                        consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
                        tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
                        adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat
                        ex.
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
