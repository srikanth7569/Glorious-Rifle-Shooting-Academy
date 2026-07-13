<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Course List</h4>
                <?php if ($this->permission->check_label('courses')->create()->access()) { ?>
                    <div class="card-header-action">
                        <a href="courses/addCourse" class="btn active">Add Course</a>
                    </div>
                <?php } ?>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Course Title</th>
                            <th>Category</th>
                            <th>Duration</th>
                            <th>Fee</th>
                            <th class="text-center">Students</th>
                            <th class="text-center">Faculties</th>
                            <th class="text-center">Batches</th>
                            <th>Email Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($courses)) {
                            $i = 0;
                            foreach ($courses as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->title ?></td>
                                    <td><?php echo $item->categoryName ?></td>
                                    <td><?php echo $item->duration ?></td>
                                    <td><?php echo $item->fees ?></td>
                                    <td class="text-center"><?php echo number_format($item->totalStudent) ?></td>
                                    <td class="text-center"><?php echo number_format($item->totalFaculty) ?></td>
                                    <td class="text-center"><?php echo number_format($item->totalBatch) ?></td>

                                    <td>
                                        <div class="pretty p-switch">
                                            <input onchange="sendEmail('<?php echo $item->title ?>')" <?php if ($item->email_status == 1) echo ' checked ' ?>
                                                   type="radio"
                                                   id="send_mail_<?php echo $item->id ?>">
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <?php if ($this->permission->check_label('courses')->update()->access()) { ?>
                                                <a href="courses/editCourse/<?php echo $item->id ?>" class="btn btn sm">
                                                    <span class="far fa-edit"></span>
                                                </a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('courses')->delete()->access()) { ?>
                                                <button class="btn btn-sm"
                                                        onclick="deleteCourse('<?php echo $item->id ?>')">
                                                    <span class="far fa-trash-alt"></span>
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
    function deleteCourse(id) {
        $.ajax({
            url: 'courses/deleteCourse/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'courses';
                } else {
                    // alert("")
                }

            }
        })

    }


    function sendEmail(course_title) {

        $.ajax({
            url: 'email/sendEmailToSubscribers',
            type: 'post',
            data: {
                course_title: course_title
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                if (obj.success) {
                    show_toaster(obj.msg);
                } else {
                    show_toaster('Some Error Occurred', false);
                }
            }
        })


    }


</script>
