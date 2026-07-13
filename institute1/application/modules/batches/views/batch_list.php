<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Batch List</h4>

                <?php if ($this->permission->check_label('batches')->create()->access()) { ?>
                    <div class="card-header-action">
                        <a href="batches/addBatch" class="btn active">Add Batch</a>
                    </div>
                <?php } ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Batch Title</th>
                            <th>Course</th>
                            <th>Batch Time</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Faculty</th>
                            <th>Faculty %</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($batches)) {
                            $i = 0;
                            foreach ($batches as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <a href="batches/batchDetail/<?php echo $item->id ?>"><?php echo $item->title ?></a>
                                    </td>
                                    <td><?php echo $item->courseTitle ?></td>
                                    <td><?php echo $item->batch_time ?></td>
                                    <td><?php echo $item->start_date ?></td>
                                    <td><?php echo $item->end_date ?></td>
                                    <td><?php echo $item->facultyName ?></td>
                                    <td><?php echo $item->faculty_agreed_fees.' %' ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <?php if ($this->permission->check_label('batches')->update()->access()) { ?>

                                                <a href="batches/editBatch/<?php echo $item->id ?>" class="btn btn sm">
                                                    <span class="far fa-edit"></span>
                                                </a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('batches')->delete()->access()) { ?>
                                                <button hidden class="btn btn-sm"
                                                        onclick="deleteBatch('<?php echo $item->id ?>')">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                                <button class="btn btn-sm"
                                                        onclick="onChangeStatus('<?php echo $item->id ?>')">
                                                    <span class=" <?php echo $item->status == 1 ? 'far fa-thumbs-up' : 'far fa-thumbs-down' ?> "></span>
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteBatch(id) {
        $.ajax({
            url: 'batches/deleteBatch/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'batches';
                } else {
                    // alert("")
                }

            }
        })

    }

    function onChangeStatus(id) {

        $.ajax({
            url: 'batches/batchStatusChange',
            type: 'post',
            data: {
                id: id
            },
            success: function (data) {
                if (data) {
                    window.location = 'batches';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }
</script>
