<div class="container mt-4">





    <h4 class="pull-left">Events</h4>
    <a href="frontend/events" style="" class="text-white btn btn-sm mb-2 btn-primary pull-right">View All</a>

    <div class="mt-5 events" style="clear: both">


        <?php if (!empty($events)) {
            foreach ($events as $event) { ?>


                <div class="item-event">

                    <div class="col-md-12">

                        <div class="row">


                            <div class="col-md-2">

                                <div class="time-from text-center">
                                    <div class="date">
                                        <?php echo date('d', strtotime($event->date)) ?>
                                    </div>
                                    <div class="month">
                                        <?php echo date('M', strtotime($event->date)) ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">

                                <div class="event-wrapper">
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
                                    <div class="description limit3">
                                        <?php echo $event->description ?>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-3">
                                <div class="image">
                                    <img src="<?php echo $event->image ?>" width="450" height="233">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            <?php }
        } ?>


    </div>


</div>
