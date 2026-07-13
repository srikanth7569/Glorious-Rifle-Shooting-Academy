<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Department</h5>
            </div>
            <div class="card-body">

                <form action="master/addDepartment" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Department</label>
                        <div class="input-group">
                            <input  autocomplete="off" required name="title" type="text" class="form-control"
                                   placeholder="Department">
                            <div class="invalid-feedback">
                                Please fill department title
                            </div>
                        </div>
                    </div>

                    <!-- /.form group -->
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>


    </div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4>Department List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Department</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($departments)) {
                            $i = 0;
                            foreach ($departments as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->title ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getDepartmentByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="deleteDepartment('<?php echo $item->id ?>')">
                                                <span class="far fa-trash-alt"></span>
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
    function getDepartmentByID(id) {

        $.ajax({
            url: 'master/getDepartmentByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='title']").val(obj.title);
            }
        })


    }

    function deleteDepartment(id) {
        $.ajax({
            url: 'master/deleteDepartment/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'master/departments';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>

