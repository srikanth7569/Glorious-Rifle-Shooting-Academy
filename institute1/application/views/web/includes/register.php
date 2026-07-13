<div class="thim-register">
    <h4 class="title">Register a new account</h4>


    <?php $courses = $this->courses_model->getCourses();
    $departments   = $this->master_model->getDepartments();
    ?>


    <form id="register_form" class="auto_login" name="registerformpopup"
          action="web/addEnquiry" method="post"
          novalidate="novalidate">
        <input type="hidden" id="register_security" name="register_security" value="6a184dd0ec"/>
        <input type="hidden" name="_wp_http_referer" value="/"/>

        <div class="row">
            <div class="col-md-6">
                <p>
                    <input required type="text" name="name" placeholder="Name" class="input required">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input required type="text" name="father_name" placeholder="Father Name" class="input required">
                </p>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <p>
                    <input required type="text" name="dob" placeholder="Date of Birth" class="input required datemask">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input required type="email" name="email" placeholder="abc@gmail.com" class="input required">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p>
                    <input required type="text" name="cnic" placeholder="CNIC" class="input required cnicmask">
                </p>
            </div>
            <div class="col-md-6">
                <p>
                    <input required type="text" name="mobile" placeholder="Mobile" class="input required phonemask">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">

                    <label>Gender</label>

                    <select required name="gender" class="form-control select2">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Preferred Time</label>
                    <div class="input-group">
                        <input required name="preferredTime" type="text" class="form-control timepicker">
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Department</label>

                    <select name="department" class="form-control required input select2">
                        <option value="">Select Department</option>
                        <?php if (!empty($departments)) {
                            foreach ($departments as $department) { ?>
                                <option value="<?php echo $department->id ?>"><?php echo $department->title ?></option>
                            <?php }
                        } ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Semester</label>

                    <select required name="semester" class="form-control select2">
                        <option value="">Select Semester</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                        <option value="5th">5th</option>
                        <option value="6th">6th</option>
                        <option value="7th">7th</option>
                        <option value="8th">8th</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Course</label>

            <select required name="courseID" class="form-control select2">
                <option value="">Select Course</option>
                <?php if (!empty($courses)) {
                    foreach ($courses as $item) { ?>
                        <option <?php if (!empty($enquiryDetail)) {
                            if ($enquiryDetail->courseID == $item->id) echo ' selected ';
                        } ?>
                                value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                    <?php }
                } ?>
            </select>
        </div>

        <p>
            <input type="hidden" name="redirect_to" value="index.html"/>
            <input type="hidden" name="modify_user_notification" value="1">
        </p>


        <p class="submit">
            <input type="submit" name="wp-submit" class="button button-primary button-large"
                   value="Sign up"/>
        </p>
    </form>
    <p class="link-bottom">Are you a member? <a class="login" href="account/index.html">Login now</a>
    </p>
    <div class="popup-message"></div>
</div>


<script>
    let ajaxurl = "web";

    function hideModal(e) {
        if ($(e.target).attr('id') === 'thim-popup-login') {
            $('body').removeClass('thim-popup-active');
            $('#thim-popup-login').removeClass();
        }
    }


    // register_form.onsubmit = function (e) {
    //     e.preventDefault();
    //
    //
    //     let formData = new FormData(this);
    //
    //     $.ajax({
    //         url: ajaxurl + '/addEnquiry',
    //         type: 'post',
    //         body: new FormData(register_form),
    //         success: function () {
    //             hideModal(e);
    //         }
    //     });
    //
    // };


    $("#register_form").submit(function (e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.

        var form = $(this);
        var url = form.attr('action');

        $.ajax({
            type: "POST",
            url: ajaxurl + '/addEnquiry',
            data: form.serialize(), // serializes the form's elements.
            success: function (data) {
                $('body').removeClass('thim-popup-active');
                $('#thim-popup-login').removeClass();
                show_toaster(data) // show response from the php script.
            }
        });


    });


</script>

<script>

    // register_form.onsubmit = async (e) => {
    //     e.preventDefault();
    //
    //     let response = await fetch(ajaxurl, {
    //         method: 'POST',
    //         body: new FormData(register_form)
    //     });
    //
    //     let result = await response.json();
    //
    //
    //     alert(result.toString());
    // };
</script>
