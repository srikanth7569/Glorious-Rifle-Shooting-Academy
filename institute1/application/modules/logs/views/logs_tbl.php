<table id="logs_table" class="table table-sm table-bordered table-hover bg-white">
    <thead>
    <tr>
        <th class="text-center">Sr.</th>
        <th class="text-center">Date</th>
        <th class="text-center">User</th>
        <th>Action Page</th>
        <th>Action Done</th>
        <th>Remarks</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($logsinfo)) {
        $i=0;
        foreach ($logsinfo as $item) {
            $i++;
            ?>
            <tr>
                <td class="text-center"><?php echo $i; ?></td>
                <td class="text-center"><?php echo date('j M h:i A',strtotime($item->entry_date)); ?></td>
                <td class="text-center"><?php echo $item->user_name; ?></td>
                <td><?php echo $item->action_page; ?></td>
                <td><?php echo $item->action_done; ?></td>
                <td><?php echo $item->remarks; ?></td>

            </tr>
        <?php }
    } ?>
    </tbody>
    <tfoot>

    </tfoot>
</table>

<script>


    $(document).ready(function () {
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();

        loadMyDataTable_without_search_and_button(
            $("#logs_table"),
            [4,5],
            "Logs Recorded",
            "From: " + from_date + " To: " + to_date
        )
    });

</script>
