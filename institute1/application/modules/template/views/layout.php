<!doctype html>
<html lang="en">

<?php $this->load->view('includes/head') ?>


<body>
<div class="loader"></div>


<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>

        <?php $this->load->view('includes/header'); ?>

        <?php if (!isset($profile)) { ?>
            <?php $this->load->view('includes/sidebar'); ?>
        <?php } elseif ($profile == 1) {
            $this->load->view('includes/sidebar_teacher');
        } elseif ($profile == 2) {
            $this->load->view('includes/sidebar_student');
        } ?>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1><?php if (!empty($title)) {
                            echo $title;
                        } ?></h1>
                    <div class="section-header-breadcrumb">
                        <div class="breadcrumb-item active"><a href="dashboard/home">Dashboard</a></div>
                        <div class="breadcrumb-item"><a href="#"><?php echo ucwords($this->uri->segment(1)) ?></a></div>
                        <div class="breadcrumb-item"><a
                                    href="#"><?php echo ucwords($this->uri->segment(2) ? $this->uri->segment(2) : 'temp') ?></a>
                        </div>
                        <!--                        <div class="breadcrumb-item">DataTables</div>-->
                    </div>
                </div>
                <div class="section-body">


                    <?php if (isset($content)) {
                        $this->load->view($content);
                    } ?>
                </div>
            </section>
            <?php $this->load->view('includes/aside'); ?>
        </div>

        <?php $this->load->view('includes/footer'); ?>


    </div>
</div>


<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<?php $this->load->view('includes/modal') ?>
<script>
    $(document).ready(function () {
        <?php
        $msg_success = $this->session->flashdata('success');
        $msg_error = $this->session->flashdata('error');
        if ($msg_success) {?>
        show_toaster('<?php echo $msg_success?>');
        <?php
        } elseif ($msg_error) {?>
        show_toaster('<?php echo $msg_error?>', false);
        <?php
        } ?>

        $("form").submit(function () {
            $(this).find('input[type="submit"]').prop("disabled", true);
        });
    });


</script>

</body>

</html>
