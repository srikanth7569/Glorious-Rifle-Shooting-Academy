<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Expense Category</h5>
            </div>
            <div class="card-body">

                <form action="master/addExpenseCategory" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Title</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="title" type="text" class="form-control"
                                   placeholder="Title">
                        </div>
                        <div class="invalid-feedback">
                            Please fill expense title
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
                <h4>Category List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($expense_categories)) {
                            $i = 0;
                            foreach ($expense_categories as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->name ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getExpenseCategoryByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="deleteExpenseCategory('<?php echo $item->id ?>')">
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
    function getExpenseCategoryByID(id) {

        $.ajax({
            url: 'master/getExpenseCategoryByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='title']").val(obj.name);
            }
        })


    }

    function deleteExpenseCategory(id) {
        $.ajax({
            url: 'master/deleteExpenseCategory/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'master/expenseCategory';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>

