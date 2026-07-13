<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">About This Events</h1>
                    <p class="wow fadeInDown" data-wow-delay="0.2s">Global Grand Event on Digital Design</p>
                </div>
            </div>
        </div>
        <div class="row">


            <?php if (!empty($events)) {
                foreach ($events as $event) { ?>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <div class="about-item">
                            <img class="img-fluid" src="<?php echo $event->img ?>" alt="">
                            <div class="about-text">
                                <h3><a href="#"><?php echo $event->venue ?></a></h3>
                                <p><?php echo $event->paragraph_1; ?></p>
                                <a class="btn btn-common btn-rm" href="event/eventDetail/<?php echo $event->id ?>">Read
                                    More</a>
                            </div>
                        </div>
                    </div>

                <?php }
            } ?>

            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="about-item">
                    <img class="img-fluid" src="web_assets/img/about/img1.jpg" alt="">
                    <div class="about-text">
                        <h3><a href="#">Wanna Know Our Mission?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                        <a class="btn btn-common btn-rm" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="about-item">
                    <img class="img-fluid" src="web_assets/img/about/img2.jpg" alt="">
                    <div class="about-text">
                        <h3><a href="#">What you will learn?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                        <a class="btn btn-common btn-rm" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-4">
                <div class="about-item">
                    <img class="img-fluid" src="web_assets/img/about/img3.jpg" alt="">
                    <div class="about-text">
                        <h3><a href="#">What are the benifits?</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer commodo ligula eget dolor.</p>
                        <a class="btn btn-common btn-rm" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
