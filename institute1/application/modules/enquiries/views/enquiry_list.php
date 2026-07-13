<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Enquiry List</h4>
                <?php if ($this->permission->check_label('enquiries')->create()->access()) { ?>
                    <div class="card-header-action">
                        <a href="enquiries/addEnquiry" class="btn active">Add Enquiry</a>
                    </div>
                <?php } ?>
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
                            <th>For Course</th>
                            <th>Pref. Time</th>
                            <!--                            <th>Dept.</th>-->
                            <!--                            <th>Semester</th>-->
                            <th>Email Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($enquiries)) {
                            $i = 0;
                            foreach ($enquiries as $enquiry) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $enquiry->name ?></td>
                                    <td><?php echo $enquiry->email ?></td>
                                    <td><?php echo $enquiry->mobile ?></td>
                                    <td><?php echo $enquiry->cnic ?></td>
                                    <td><?php echo $enquiry->courseTitle ?></td>
                                    <td><?php echo $enquiry->preferredTime ?></td>
                                    <!--                                    <td>-->
                                    <?php //echo $enquiry->deptName ?><!--</td>-->
                                    <!--                                    <td>-->
                                    <?php //echo $enquiry->semester ?><!--</td>-->
                                    <td>
                                        <div class="pretty p-switch">
                                            <input onchange="sendEmail(<?php echo $enquiry->id ?>)" <?php if ($enquiry->email_status == 1) echo ' checked ' ?>
                                                   type="radio"
                                                   id="send_mail_<?php echo $enquiry->id ?>">
                                            <div class="state p-success">
                                                <label></label>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">

                                            <?php if ($this->permission->check_label('enquiries')->update()->access()) { ?>
                                                <a href="enquiries/editEnquiry/<?php echo $enquiry->id ?>"
                                                   class="btn btn sm">
                                                    <span class="far fa-edit"></span>
                                                </a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('enquiries')->delete()->access()) { ?>
                                                <button class="btn btn-sm"
                                                        onclick="deleteEnquiry('<?php echo $enquiry->id ?>')">
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
    function deleteEnquiry(id) {
        $.ajax({
            url: 'enquiries/deleteEnquiry/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'enquiries';
                } else {
                    // alert("")
                }

            }
        })

    }

    function sendEmail(enq_id) {

        $.ajax({
            url: 'email/sendEmailToEnquiry',
            type: 'post',
            data: {
                enq_id: enq_id
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                if (obj.success) {
                    show_toaster('Email Sent to ' + obj.email);
                } else {
                    show_toaster('Some Error Occurred', false);
                }
            }
        })


    }
</script>
