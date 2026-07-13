<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Template</h5>
            </div>
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">

                    <input type="hidden" name="id">

                    <div class="form-group">
                        <label>Type</label>
                        <!--                        <div class="input-group">-->
                        <select required name="type" id="type" class="form-control select2 w-100">
                            <option value="1">For Enquiry</option>
                            <option value="2">For Subscriber</option>
                        </select>
                        <!--                        </div>-->
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="subject" type="text" class="form-control"
                                   placeholder="Subject">
                            <div class="invalid-feedback">
                                Please fill subject
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Message</label>
                        <textarea required class="form-control w-100" name="message" id="ckeditor"
                                  rows="10"></textarea>
                        <div class="invalid-feedback">
                            Please fill message
                        </div>
                    </div>

                    <p class="text-danger">
                        Add variables for Dynamic Value. <br>
                        {{student_name}}

                        {{student_mobile}}

                        {{student_cnic}}

                        {{student_course}}
                    </p>


                    <!-- /.form group -->
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>


    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Template List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Type</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($templates)) {
                            $i = 0;
                            foreach ($templates as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->type == 1 ? 'Enquiry' : 'Subscriber'; ?></td>
                                    <td><?php echo $item->subject ?></td>
                                    <td><?php echo $item->message ?></td>
                                    <td>
                                        <div class="pretty p-switch">
                                            <input <?php if ($item->status == 1) echo ' checked ' ?>
                                                    onchange="emailTemplateStatusChange(<?php echo $item->id ?>)"
                                                    type="checkbox"/>
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getTemplateByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="deleteEmailTemplate('<?php echo $item->id ?>')">
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
    function getTemplateByID(id) {

        $.ajax({
            url: 'setting/getTemplateByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='subject']").val(obj.subject);
                $("[name='type']").val(obj.type).trigger('change');
                CKEDITOR.instances.ckeditor.setData(obj.message);

            }
        })


    }

    function deleteEmailTemplate(id) {
        $.ajax({
            url: 'setting/deleteEmailTemplate/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'setting/emailSetting';
                } else {
                    // alert("")
                }

            }
        })

    }

    function emailTemplateStatusChange(id) {

        $.ajax({
            url: 'setting/emailTemplateStatusChange',
            type: 'post',
            data: {
                id: id
            },
            success: function (data) {
                if (data) {
                    window.location = 'setting/emailSetting';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }


</script>

