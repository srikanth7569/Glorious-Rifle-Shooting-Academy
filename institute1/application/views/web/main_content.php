<?php $this->load->view('web/includes/pages/css/home_css') ?>
<?php $this->load->view('web/includes/pages/js/home_js') ?>

<div id="main-content">
    <div id="main-home-content" class="home-content home-page container" role="main">
        <div id="pl-12" class="panel-layout">

            <?php $this->load->view('web/includes/slider'); ?>
            <?php $this->load->view('web/includes/slider_upper'); ?>
            <?php $this->load->view('web/includes/popular_courses'); ?>
            <?php $this->load->view('web/includes/register_now'); ?>
            <?php $this->load->view('web/includes/events'); ?>
            <?php $this->load->view('web/includes/latest_news'); ?>
            <?php $this->load->view('web/includes/what_people_say'); ?>

        </div>
    </div>
    <?php $this->load->view('web/includes/footer'); ?>
</div>
