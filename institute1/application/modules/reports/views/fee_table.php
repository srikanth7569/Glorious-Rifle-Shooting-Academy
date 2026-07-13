<table class="table table-striped table-hover" id="save-stage" style="width:100%;">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Batch</th>
        <th class="text-right">CourseFee</th>
        <th class="text-right">Student Agreed Fee</th>
        <th class="text-right">Paid Fee</th>
        <th class="text-right">Due Fee</th>
    </tr>
    </thead>
    <tbody>

    <?php

    $courseTotal        = 0;
    $studentAgreedTotal = 0;
    $paidTotal          = 0;
    $dueTotal           = 0;
    if (!empty($fees)) {
        $i = 0;
        foreach ($fees as $item) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->name ?></td>
                <td><?php echo $item->mobile ?></td>
                <td><?php echo $item->courseTitle ?></td>
                <td><?php echo $item->batchTitle ?></td>
                <td class="text-right"><?php echo number_format($item->courseFee) ?></td>
                <td class="text-right"><?php echo number_format($item->student_agreed_fee) ?></td>
                <td class="text-right"><?php echo number_format($item->feePaid) ?></td>
                <td class="text-right"><?php echo abs($item->student_agreed_fee - $item->feePaid) ?></td>

                <?php
                $courseTotal        += $item->courseFee;
                $studentAgreedTotal += $item->student_agreed_fee;
                $paidTotal          += $item->feePaid;
                $dueTotal           += abs($item->student_agreed_fee - $item->feePaid);

                ?>
            </tr>
        <?php }
    } ?>


    </tbody>
    <tfoot>
    <tr>
        <th colspan="5" class="text-right">Total</th>
        <th class="text-right"><?php echo number_format($courseTotal) ?></th>
        <th class="text-right"><?php echo number_format($studentAgreedTotal) ?></th>
        <th class="text-right"><?php echo number_format($paidTotal) ?></th>
        <th class="text-right"><?php echo number_format($dueTotal) ?></th>
    </tr>
    </tfoot>
</table>
