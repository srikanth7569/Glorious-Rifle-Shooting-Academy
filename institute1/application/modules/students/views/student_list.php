<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Student List</h4>
                <div class="card-header-action">
                    <a href="students/addStudent" class="btn active">Add Student</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>CNIC</th>
                            <th>Course</th>
                            <th>Batch</th>
                            <th>Dept.</th>
                            <th>Semester</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($students)) {
                            $i = 0;
                            foreach ($students as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <a href="students/studentDetail/<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                    </td>
                                    <td><?php echo $item->email ?></td>
                                    <td><?php echo $item->mobile ?></td>
                                    <td><?php echo $item->cnic ?></td>
                                    <td><?php echo $item->courseTitle ?></td>
                                    <td><?php echo $item->batchTitle ?></td>
                                    <td><?php echo $item->deptTitle ?></td>
                                    <td><?php echo $item->semester ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <a href="students/editStudent/<?php echo $item->id ?>"
                                               class="btn btn sm">
                                                <span class="far fa-edit"></span>
                                            </a>
                                            <button hidden class="btn btn-sm"
                                                    onclick="deleteStudent('<?php echo $item->id ?>')">
                                                <span class="far fa-trash-alt"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="onChangeStatus('<?php echo $item->id ?>')">
                                                <span class=" <?php echo $item->status == 1 ? 'far fa-thumbs-up' : 'far fa-thumbs-down' ?> "></span>
                                            </button>
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
    function deleteStudent(id) {
        $.ajax({
            url: 'students/deleteStudent/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'students';
                } else {
                    // alert("")
                }

            }
        })

    }

    function onChangeStatus(sid) {

        $.ajax({
            url: 'students/studentStatusChange',
            type: 'post',
            data: {
                sid: sid
            },
            success: function (data) {
                if (data) {
                    window.location = 'students';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }
</script>
