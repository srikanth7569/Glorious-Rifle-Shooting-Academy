<div id="pg-12-4" class="panel-grid panel-no-style">
    <div id="pgc-12-4-0" class="panel-grid-cell">
        <div id="panel-12-4-0-0" class="so-panel widget widget_heading panel-first-child"
             data-index="9">
            <div class="thim-widget-heading thim-widget-heading-base template-base">
                <div class="sc_heading   text-left">
                    <h3 style="text-transform: uppercase;" class="title">
                        Events
                    </h3>
                    <p class="sub-heading" style="">
                        Upcoming Education Events to feed your brain.
                    </p>
                    <span class="line">
                                        </span>
                </div>
            </div>
        </div>



        <div id="panel-12-4-0-1" class="so-panel widget widget_list-event panel-last-child"
             data-index="10">
            <div class="thim-widget-list-event thim-widget-list-event-base template-base">
                <div class="thim-list-event">
                    <a class="view-all" href="events/index.html">
                        View All
                    </a>
                    <!--  Events  -->


                    <?php if (!empty($events)) {
                        foreach ($events as $event) { ?>


                            <div class="item-event post-2952 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
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
                                         alt="event-2"
                                         title="event-2" width="450" height="233">
                                </div>
                                <div class="event-wrapper">
                                    <h5 class="title">
                                        <a href="web/eventDetail/<?php echo $event->id ?>">
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

                        <?php }
                    } ?>


                </div>
            </div>
        </div>
    </div>
</div>
