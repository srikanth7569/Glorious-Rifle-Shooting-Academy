<!doctype html>
<html lang="en">
<?php $this->load->view('includes/head') ?>
<body>


<?php $this->load->view('includes/header2') ?>

<div class="main bg-white">


    <?php if (isset($content)) {
        $this->load->view($content);
    } ?>


    <?php $this->load->view('includes/footer') ?>
</div>
<?php $this->load->view('template/includes/modal') ?>


<?php $this->load->view('includes/bottom_footer') ?>
<a href="#" id="back-to-top"
   onclick="document.body.scrollTop=0;document.documentElement.scrollTop=0;event.preventDefault()">
    <i class="fa fa-chevron-up" aria-hidden="true"></i>
</a>
</body>
</html>
