<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('web/head') ?>


<body>

<!-- Header Area wrapper Starts -->
<?php $this->load->view('web/header') ?>


<!-- Header Area wrapper End -->

<!-- Coundown Section Start -->
<section class="countdown-timer section-padding">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="heading-count">
                    <h2 class="wow fadeInDown" data-wow-delay="0.2s">Event Will Start In</h2>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row time-countdown justify-content-center wow fadeInUp" data-wow-delay="0.2s">
                    <div id="clock" class="time-count"></div>
                </div>
                <a href="pricing.html" class="btn btn-common wow fadeInUp" data-wow-delay="0.3s">Add to My Calender</a>
            </div>
        </div>
    </div>
</section>
<!-- Coundown Section End -->

<!-- Services Section Start -->
<?php $this->load->view('web/services/services'); ?>
<!-- Services Section End -->


<!-- About Section Start -->
<?php $this->load->view('web/events/events'); ?>
<!-- About Section End -->

<!-- Counter Area Start-->
<?php $this->load->view('web/counter_area'); ?>
<!-- Counter Area End-->

<!-- Schedule Section Start -->
<?php $this->load->view('web/events/event_schedule'); ?>
<!-- Schedule Section End -->

<!-- Team Section Start -->
<?php $this->load->view('web/speakers') ?>
<!-- Team Section End -->

<!-- Gallary Section Start -->
<?php $this->load->view('web/gallery/gallery'); ?>
<!-- Gallary Section End -->

<!-- Ask Question Section Start -->
<?php $this->load->view('web/faq/faq'); ?>
<!-- Ask Question Section End -->

<!-- Sponsors Section Start -->
<?php $this->load->view('web/sponsors/sponsors') ?>
<!-- Sponsors Section End -->

<!-- Ticket Pricing Area Start -->
<?php $this->load->view('web/pricing/pricing'); ?>
<!-- Ticket Pricing Area End -->


<!-- Event Slides Section Start -->
<?php $this->load->view('web/events/event_guide'); ?>
<!-- Event Slides Section End -->

<!-- Blog Section Start -->
<?php $this->load->view('web/notice/notice_board'); ?>
<!-- Blog Section End -->

<!-- Subscribe Area Start -->
<?php $this->load->view('subscribe/subscribe'); ?>
<!-- Subscribe Area End -->

<!-- Map Section Start -->
<?php //$this->load->view('contact/map'); ?>
<!-- Map Section End -->

<!-- Contact Us Section -->
<?php $this->load->view('contact/contact_us'); ?>
<!-- Contact Us Section End -->

<!-- Footer Section Start -->
<?php $this->load->view('footer/footer'); ?>
<!-- Footer Section End -->

<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-info">
                    <p>© <a href="http://uideck.com" rel="nofollow">StepUp IT Solutions</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<div id="preloader">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php $this->load->view('web/js') ?>
</body>
</html>
