<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <?php
    $this->db->select('logo,institute_name');
    $setting   = $this->db->get('setting')->row();
    $logo      = $setting->logo;
    $institute = $setting->institute_name;
    ?>
    <title><?php echo $institute ?></title>
    <base href="<?php echo base_url() ?>">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/bundles/pretty-checkbox/pretty-checkbox.min.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>
    <?php $this->load->view('includes/js') ?>
</head>
