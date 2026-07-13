<!doctype html>
<html lang="en">
<?php $this->load->view('includes/head') ?>
<body>


<?php $this->load->view('includes/header2') ?>

<div class="main bg-white">


    <?php $this->load->view('homedata/main_slider') ?>
    <?php $this->load->view('homedata/popular_courses') ?>
    <?php $this->load->view('homedata/register_now') ?>
    <?php $this->load->view('homedata/coming_events') ?>
    <?php $this->load->view('homedata/latest_news') ?>
    <?php $this->load->view('homedata/people_say') ?>
    <?php $this->load->view('homedata/subscribe') ?>


    <?php $this->load->view('includes/footer') ?>


</div>






<?php $this->load->view('includes/bottom_footer') ?>
<a href="#" id="back-to-top"
   onclick="document.body.scrollTop=0;document.documentElement.scrollTop=0;event.preventDefault()">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
<?php $this->load->view('template/includes/modal') ?>

</body>
</html>
