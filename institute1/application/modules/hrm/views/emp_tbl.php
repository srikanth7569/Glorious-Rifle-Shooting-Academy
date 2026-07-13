<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <span class="fa fa-users mr-2"></span><h4>Staff List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($employees)) {
                            $i                  = 0;
                            $courseTotal        = 0;
                            $studentAgreedTotal = 0;
                            $paidTotal          = 0;
                            $dueTotal           = 0;
                            foreach ($employees as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->name ?></td>
                                    <td><?php echo $item->designation ?></td>
                                    <td><?php echo $item->mobile ?></td>
                                    <td><?php echo $item->email ?></td>
                                    <td><?php if ($item->salaryData) {
                                            if ($item->salaryData->status == 1) {
                                                echo '<span class="bg-green p-1">Generated</span>';
                                            }
                                        } else echo 'Not Generated' ?></td>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <?php if (empty($item->salaryData)) { ?>
                                                <a href="hrm/payroll/generatePayroll/<?php echo $item->id . '/' . $item->month . '/' . $item->year ?>"
                                                   class="btn btn-sm btn-primary">
                                                    <span class="fa fa-dollar-sign"></span>
                                                </a>
                                            <?php } else { ?>

                                                <button class="btn btn-sm btn-danger"
                                                        onclick="printInvoice('<?php echo $item->id ?>')">
                                                    <span class="fa fa-print"></span>
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>


                        </tbody>
                        <tfoot>

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
            'hrm/payroll/printInvoice/' + id + '/' + month + '/' + year,
            '_blank'
        );
    }
</script>
