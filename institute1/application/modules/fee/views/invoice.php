<style type="text/css">
    @media print {
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
            float: left;
        }

        .col-sm-12 {
            width: 100%;
        }

        .col-sm-11 {
            width: 91.66666667%;
        }

        .col-sm-10 {
            width: 83.33333333%;
        }

        .col-sm-9 {
            width: 75%;
        }

        .col-sm-8 {
            width: 66.66666667%;
        }

        .col-sm-7 {
            width: 58.33333333%;
        }

        .col-sm-6 {
            width: 50%;
        }

        .col-sm-5 {
            width: 41.66666667%;
        }

        .col-sm-4 {
            width: 33.33333333%;
        }

        .col-sm-3 {
            width: 25%;
        }

        .col-sm-2 {
            width: 16.66666667%;
        }

        .col-sm-1 {
            width: 8.33333333%;
        }

        .col-sm-pull-12 {
            right: 100%;
        }

        .col-sm-pull-11 {
            right: 91.66666667%;
        }

        .col-sm-pull-10 {
            right: 83.33333333%;
        }

        .col-sm-pull-9 {
            right: 75%;
        }

        .col-sm-pull-8 {
            right: 66.66666667%;
        }

        .col-sm-pull-7 {
            right: 58.33333333%;
        }

        .col-sm-pull-6 {
            right: 50%;
        }

        .col-sm-pull-5 {
            right: 41.66666667%;
        }

        .col-sm-pull-4 {
            right: 33.33333333%;
        }

        .col-sm-pull-3 {
            right: 25%;
        }

        .col-sm-pull-2 {
            right: 16.66666667%;
        }

        .col-sm-pull-1 {
            right: 8.33333333%;
        }

        .col-sm-pull-0 {
            right: auto;
        }

        .col-sm-push-12 {
            left: 100%;
        }

        .col-sm-push-11 {
            left: 91.66666667%;
        }

        .col-sm-push-10 {
            left: 83.33333333%;
        }

        .col-sm-push-9 {
            left: 75%;
        }

        .col-sm-push-8 {
            left: 66.66666667%;
        }

        .col-sm-push-7 {
            left: 58.33333333%;
        }

        .col-sm-push-6 {
            left: 50%;
        }

        .col-sm-push-5 {
            left: 41.66666667%;
        }

        .col-sm-push-4 {
            left: 33.33333333%;
        }

        .col-sm-push-3 {
            left: 25%;
        }

        .col-sm-push-2 {
            left: 16.66666667%;
        }

        .col-sm-push-1 {
            left: 8.33333333%;
        }

        .col-sm-push-0 {
            left: auto;
        }

        .col-sm-offset-12 {
            margin-left: 100%;
        }

        .col-sm-offset-11 {
            margin-left: 91.66666667%;
        }

        .col-sm-offset-10 {
            margin-left: 83.33333333%;
        }

        .col-sm-offset-9 {
            margin-left: 75%;
        }

        .col-sm-offset-8 {
            margin-left: 66.66666667%;
        }

        .col-sm-offset-7 {
            margin-left: 58.33333333%;
        }

        .col-sm-offset-6 {
            margin-left: 50%;
        }

        .col-sm-offset-5 {
            margin-left: 41.66666667%;
        }

        .col-sm-offset-4 {
            margin-left: 33.33333333%;
        }

        .col-sm-offset-3 {
            margin-left: 25%;
        }

        .col-sm-offset-2 {
            margin-left: 16.66666667%;
        }

        .col-sm-offset-1 {
            margin-left: 8.33333333%;
        }

        .col-sm-offset-0 {
            margin-left: 0%;
        }

        .visible-xs {
            display: none !important;
        }

        .hidden-xs {
            display: block !important;
        }

        table.hidden-xs {
            display: table;
        }

        tr.hidden-xs {
            display: table-row !important;
        }

        th.hidden-xs,
        td.hidden-xs {
            display: table-cell !important;
        }

        .hidden-xs.hidden-print {
            display: none !important;
        }

        .hidden-sm {
            display: none !important;
        }

        .visible-sm {
            display: block !important;
        }

        table.visible-sm {
            display: table;
        }

        tr.visible-sm {
            display: table-row !important;
        }

        th.visible-sm,
        td.visible-sm {
            display: table-cell !important;
        }
    }
</style>

<html lang="en">
<head>
    <title>Fees Receipt</title>
    <base href="<?php echo base_url() ?>">
    <link rel="stylesheet" href="assets/css/app.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div id="content" class="col-lg-12 col-xs-12 ">
            <div class="invoice">
                <div class="row header text-center">
                    <div class="col-xs-2">
                        <img style="height:70px;width: 100px; " src="<?php echo $setting->logo ?>">
                    </div>
                    <div class="col-xs-8">
                        <strong style="font-size: 20px;"><?php echo $setting->institute_name ?></strong><br>
                        <?php echo $setting->address ?><br>
                        Phone: <?php echo $setting->phone ?><br>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <br/>
                        <address>
                            <strong><?php echo $detail->name ?></strong><br>
                            Father Name: <?php echo $detail->father_name ?><br>
                        </address>
                    </div>
                    <div class="col-sm-6 text-right">
                        <br/>
                        <address>
                            <strong>Date: <?php echo date('Y-m-d') ?></strong><br/>
                        </address>
                    </div>
                </div>
                <hr style="margin-top: 0;margin-bottom: 0;"/>
                <div class="row">

                    <table class="table table-striped" style="font-size: 8pt;">
                        <thead>
                        <tr>
                            <th>Course</th>
                            <th>Batch</th>
                            <th class="text text-right">Total Fees</th>
                            <th class="text text-center">Payment Id</th>
                            <th class="text text-center">Mode</th>
                            <th class="text-center">Date</th>
                            <th class="text text-right">Paid</th>
                            <th class="text text-right">Due</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="dark-gray">

                            <td><?php echo $detail->courseTitle ?></td>
                            <td><?php echo $detail->batchTitle ?></td>
                            <td class="text text-right"><?php echo number_format($detail->student_agreed_fee) ?></td>

                            <td colspan="3"></td>
                            <td class="text text-right"></td>
                            <td class="text text-right"></td>

                        </tr>


                        <?php
                        $total_fee_paid = 0;
                        foreach ($detail->FeeDetail as $item) {
                            $total_fee_paid += $item->amount;

                            ?>
                            <tr class="white-td">
                                <td colspan="3" class="text-right">
                                    <img src="assets/img/table-arrow.png"
                                         alt=""/>
                                </td>
                                <td class="text text-center">
                                    <?php echo $item->receiptNo ?>
                                </td>
                                <td class="text text-center">Cash</td>
                                <td class="text text-center">
                                    <?php echo $item->date ?>
                                </td>
                                <td class="text text-right"><?php echo number_format($item->amount) ?></td>
                                <td class="text text-right"><?php echo number_format($detail->student_agreed_fee - $total_fee_paid) ?>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<footer>
</footer>
<script type="text/javascript">
    window.addEventListener("load", window.print());
</script>
</body>
</html>
