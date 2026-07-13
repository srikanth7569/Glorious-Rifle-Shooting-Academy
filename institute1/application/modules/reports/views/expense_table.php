<table class="table table-striped table-hover" id="save-stage" style="width:100%;">
    <thead>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Title</th>
        <th>Category</th>
        <th>Amount</th>
        <th>Description</th>
        <th>Created At</th>
        <th class="text-center">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php if (!empty($expenses)) {
        $i = 0;
        foreach ($expenses as $item) {
            $i++; ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item->date ?></td>
                <td><?php echo $item->title ?></td>
                <td><?php echo $item->expenseCategory ?></td>
                <td><?php echo $item->amount ?></td>
                <td><?php echo $item->description ?></td>
                <td><?php echo $item->created_at ?></td>
                <td class="text-center">
                    <div class="btn-group btn-group-sm">
                        <a href="expenses/editExpense/<?php echo $item->id ?>" class="btn btn sm">
                            <span class="far fa-edit"></span>
                        </a>
                        <button class="btn btn-sm"
                                onclick="deleteExpense('<?php echo $item->id ?>')">
                            <span class="far fa-trash-alt"></span>
                        </button>
                    </div>
                </td>
            </tr>
        <?php }
    } ?>


    </tbody>
</table>
