<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Course Category</h5>
            </div>
            <div class="card-body">

                <form action="master/addCourseCategory" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Title</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="title" type="text" class="form-control"
                                   placeholder="Title">
                            <div class="invalid-feedback">
                                Please fill category title
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

                        <?php if (!empty($course_categories)) {
                            $i = 0;
                            foreach ($course_categories as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->name ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getCourseCategoryByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="deleteCourseCategory('<?php echo $item->id ?>')">
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
    function getCourseCategoryByID(id) {

        $.ajax({
            url: 'master/getCourseCategoryByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='title']").val(obj.name);
            }
        })


    }

    function deleteCourseCategory(id) {
        $.ajax({
            url: 'master/deleteCourseCategory/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'master/courseCategory';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>

