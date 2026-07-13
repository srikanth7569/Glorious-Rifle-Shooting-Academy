<!--<script src="assets/frontend/js/jquery.min.js"></script>-->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="assets/bundles/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="assets/bundles/izitoast/js/iziToast.min.js"></script>
<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>

<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/sliders/js/sliders.js"></script>
<script src="assets/frontend/js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs/lib/anime.min.js"></script>
<script src="assets/frontend/js/magicline.min.js"></script>
<script src="assets/frontend/custom/js/custom.js"></script>
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

<?php $this->load->view('includes/count_down') ?>
