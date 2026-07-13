<style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
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
                                    itemprop="item" href="../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="Events">Events</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content">
            <div class="row">
                <main id="main" class="site-main col-sm-12 full-width">
                    <div class="list-tab-event">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-happening" data-toggle="tab">Happening</a></li>
                            <li><a href="#tab-upcoming" data-toggle="tab">Upcoming</a></li>
                            <li><a href="#tab-expired" data-toggle="tab">Expired</a></li>
                        </ul>
                        <div class="tab-content thim-list-event">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-happening">


                                <?php if (!empty($events)) {
                                    foreach ($events as $event) { ?>

                                        <div class="item-event post-<?php echo $event->id ?> tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                            <div class="time-from">
                                                <div class="date">
                                                    <?php echo date('d', strtotime($event->date)) ?>
                                                </div>
                                                <div class="month">
                                                    <?php echo date('M', strtotime($event->date)) ?>
                                                </div>
                                            </div>
                                            <div class="image"><img
                                                        src="<?php echo $event->image ?>"
                                                        alt="event-2" title="event-2" width="450" height="233"></div>
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


                            <div role="tabpanel" class="tab-pane fade" id="tab-upcoming">
                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="tab-expired">
                                <div class="item-event post-3062 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            15
                                        </div>
                                        <div class="month">
                                            December
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/06/course-6-450x233.jpg"
                                                alt="course-6" title="course-6" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="eduma-autumn-2019/index.html"> Eduma Autumn 2019</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                Venice, Italy
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                                auctor a ornare odio. Sed non mauris itae erat conuat</p></div>
                                    </div>
                                </div>
                                <div class="item-event post-3063 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            30
                                        </div>
                                        <div class="month">
                                            September
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/06/course-7-450x233.jpg"
                                                alt="course-7" title="course-7" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="summer-school-2019/index.html"> Summer School 2019</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                NewYork, USA
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                                auctor a ornare odio. Sed non mauris itae erat conuat</p></div>
                                    </div>
                                </div>
                                <div class="item-event post-2951 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            25
                                        </div>
                                        <div class="month">
                                            June
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/11/event-2-450x233.jpg"
                                                alt="event-2" title="event-2" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="eduma-summer-2019/index.html"> Eduma Summer 2019</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                Paris, French
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                                auctor a ornare odio. Sed non mauris itae erat conuat</p></div>
                                    </div>
                                </div>
                                <div class="item-event post-3208 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            23
                                        </div>
                                        <div class="month">
                                            December
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/12/event-3-450x233.jpg"
                                                alt="event-3" title="event-3" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="good-intentions-or-good-results/index.html"> Good
                                                Intentions or Good Results?</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                12:00 am - 5:00 pm
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                Birmingham, UK
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                                auctor a ornare odio. Sed non mauris itae erat conuat</p></div>
                                    </div>
                                </div>
                                <div class="item-event post-2948 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            30
                                        </div>
                                        <div class="month">
                                            September
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/11/event-7-450x233.jpg"
                                                alt="event-7" title="event-7" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="eduma-autumn-2019-2/index.html"> Eduma Autumn 2019</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                8:00 am - 5:00 pm
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                London, UK
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt
                                                auctor a ornare odio. Sed non mauris itae erat conuat</p></div>
                                    </div>
                                </div>
                                <div class="item-event post-3374 tp_event type-tp_event status-publish has-post-thumbnail hentry pmpro-has-access">
                                    <div class="time-from">
                                        <div class="date">
                                            15
                                        </div>
                                        <div class="month">
                                            August
                                        </div>
                                    </div>
                                    <div class="image"><img
                                                src="web_assets/uploads/2015/11/event-1-450x233.jpg"
                                                alt="event-1" title="event-1" width="450" height="233"></div>
                                    <div class="event-wrapper">
                                        <h5 class="title">
                                            <a href="education-autumn-tour-2016/index.html"> Education Autumn
                                                Tour 2016</a>
                                        </h5>
                                        <div class="meta">
                                            <div class="time">
                                                <i class="fa fa-clock-o"></i>
                                                7:00 am - 6:00 am
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-marker"></i>
                                                Berlin, Germany
                                            </div>
                                        </div>
                                        <div class="description">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the...</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <?php $this->load->view('web/includes/fixed_footer'); ?>

</div>
