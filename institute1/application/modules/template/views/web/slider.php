<div id="main-slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#main-slide" data-slide-to="0" class="active"></li>
        <li data-target="#main-slide" data-slide-to="1"></li>
        <li data-target="#main-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">


        <?php if (!empty($sliders)) {
            $i=1;
            foreach ($sliders as $slider) { ?>

                <div class="carousel-item <?php if ($i==1) echo ' active '?>">
                    <img class="d-block w-100" src="<?php echo $slider->img ?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                        <h1 class="wow fadeInDown heading" data-wow-delay=".4s"><?php echo $slider->title ?></h1>
                        <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
                        <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore
                            More</a>
                    </div>
                </div>

                <?php $i++;}
        } ?>


        <div class="carousel-item">
            <img class="d-block w-100" src="web_assets/img/slider/slide1.jpg" alt="First slide">
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Design Thinking Conference</h1>
                <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
                <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="web_assets/img/slider/slide4.jpg" alt="Second slide">
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow bounceIn heading" data-wow-delay=".7s">22 Amazing Speakers</h1>
                <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="web_assets/img/slider/slide3.jpg" alt="Third slide">
            <div class="carousel-caption d-md-block">
                <p class="fadeInUp wow" data-wow-delay=".6s">Global Grand Event on Digital Design</p>
                <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
                <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
        <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
        <span class="sr-only">Next</span>
    </a>
</div>
