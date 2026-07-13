<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Student List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>CourseFee</th>
                            <th>Student Agreed Fee</th>
                            <th>Paid Fee</th>
                            <th>Due Fee</th>

                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $courseTotal        = 0;
                        $studentAgreedTotal = 0;
                        $paidTotal          = 0;
                        $dueTotal           = 0;

                        if (!empty($students)) {
                            $i = 0;
                            foreach ($students as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <a href="students/studentDetail/<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                    </td>
                                    <td><?php echo $item->mobile ?></td>
                                    <td><?php echo $item->courseTitle ?></td>
                                    <td><?php echo $item->batchTitle ?></td>
                                    <td><?php echo number_format($item->courseFee) ?></td>
                                    <td><?php echo number_format($item->student_agreed_fee) ?></td>
                                    <td><?php echo number_format($item->feePaid) ?></td>
                                    <td><?php echo abs($item->student_agreed_fee - $item->feePaid) ?></td>

                                    <?php
                                    $courseTotal        += $item->courseFee;
                                    $studentAgreedTotal += $item->student_agreed_fee;
                                    $paidTotal          += $item->feePaid;
                                    $dueTotal           += abs($item->student_agreed_fee - $item->feePaid);

                                    ?>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <a href="fee/collectFee/<?php echo $item->id ?>"
                                               class="btn btn-sm btn-primary">
                                                <span class="fa fa-dollar-sign"></span>
                                            </a>
                                            <button class="btn btn-sm btn-danger"
                                                    onclick="printInvoice('<?php echo $item->id ?>')">
                                                <span class="fa fa-print"></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>


                        </tbody>
                        <tfoot>
                        <tr>
                            <th colspan="5" class="text-right">Total</th>
                            <th><?php echo number_format($courseTotal) ?></th>
                            <th><?php echo number_format($studentAgreedTotal) ?></th>
                            <th><?php echo number_format($paidTotal) ?></th>
                            <th><?php echo number_format($dueTotal) ?></th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function printInvoice(id) {
        let month = $('#monthID').val();
        let year = $('#year').val();
        window.open(
            'fee/printInvoice/' + id,
            '_blank'
        );
    }
</script>
