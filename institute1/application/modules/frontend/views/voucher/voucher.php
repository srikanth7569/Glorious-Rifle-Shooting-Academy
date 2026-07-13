<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo base_url() ?>">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


</head>
<body>
<div class="row page">
    <div class="col-md-4">
        <div class="card border border-dark">
            <div class="card-body">


                <div CLASS="text-center">
                    <h5>StepUp IT Solution Faisalabad</h5>
                </div>
                <hr>
                <div class="text-center">
                    <h6>BANK CREDIT VOUCHER</h6>
                </div>
                <hr>
                <div class="text-center">
                    Bank : Bank of Punjab <br>
                    For Credit to <br>
                    GC Women University, Faisalabad <br>
                    A/C No. <span>6614-2</span>
                </div>
                <hr>


                <table class="table table-sm table-bordered">

                    <tbody>
                    <tr>
                        <td>Voucher #</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    <tr>
                        <td>Due Date</td>
                        <td><?php echo date('Y-m-d') ?></td>
                    </tr>
                    <tr>
                        <td>Reg. No.</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><?php echo ucwords('qaiser') ?></td>
                    </tr>
                    <tr>
                        <td>F-Name</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    <tr>
                        <td>NIC/B-Form#</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    <tr>
                        <td>Session</td>
                        <td><?php echo 'lkjhg' ?></td>
                    </tr>
                    </tbody>

                </table>
                <hr>

                <div class="text-center">Fee For Event: <?php echo 10000 ?></div>
                <hr>
                <table class="table table-sm table-bordered">
                    <tbody>
                    <?php
                    $total = 0;
                    //                    foreach ($alumni_detail->fee_details as $fee_detail) {
                    //                        $total += $fee_detail->amount;
                    ?>
                    <tr>
                        <td><?php echo 'ffee' ?></td>
                        <td><?php echo 100 ?></td>
                    </tr>
                    <!--                    --><?php //} ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td class="text-center">
                            <b>Total:</b>
                        </td>
                        <td>
                            <?php echo $total ?>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <hr>
                <div class="col-sm-12">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"></div>
                </div>

            </div>
        </div>


    </div>
</div>

</body>
</html>

