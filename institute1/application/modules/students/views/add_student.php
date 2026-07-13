<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Student Form</h4>
                <div class="card-header-action">
                    <a href="students" class="btn active">Student List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="students/addStudent" method="post" class="needs-validation" novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($studentDetail)) {
                        echo $studentDetail->id;
                    } ?>">


                    <?php if (empty($studentDetail)) { ?>

                        <div class="section-title">Registration Type</div>

                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input onclick="showEnquiry(0)" value="0" type="radio" id="rb_direct" name="regType"
                                       class="custom-control-input" checked>
                                <label class="custom-control-label" for="rb_direct">Direct</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input onclick="showEnquiry(1)" value="1" type="radio" id="rb_enquiry" name="regType"
                                       class="custom-control-input">
                                <label class="custom-control-label" for="rb_enquiry">Enquiry</label>
                            </div>
                        </div>
                    <?php } ?>

                    <div hidden id="enquiry_div" class="form-group">
                        <label>Enquiry</label>
                        <select style="width: 100%" onchange="getEnquiryByID()" class="form-control select2"
                                name="enquiry" id="enquiry">
                            <option value="">Select Enquiry</option>
                            <?php if (!empty($enquiries)) {
                                foreach ($enquiries as $enquiry) { ?>
                                    <option value="<?php echo $enquiry->id ?>"><?php echo $enquiry->name ?></option>
                                <?php }
                            } ?>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" required value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->name;
                                } ?>" name="name" class="form-control" placeholder="Name">
                                <div class="invalid-feedback">
                                    Please fill in your name
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name</label>
                                <input type="text" value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->father_name;
                                } ?>" name="father_name" required class="form-control" placeholder="Father Name">
                                <div class="invalid-feedback">
                                    Please fill in your father name
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input name="dob" value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->dob;
                                } ?>" type="text" required class="form-control datemask">
                                <div class="invalid-feedback">
                                    Please fill in your dob
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" required value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->email;
                                } ?>" type="email" class="form-control">
                                <div class="invalid-feedback">
                                    Please fill in your email
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CNIC</label>
                                <input id="cnic" name="cnic" value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->cnic;
                                } ?>" type="text" required class="form-control cnicmask">
                                <div class="invalid-feedback">
                                    Please fill in your cnic
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input name="mobile" required value="<?php if (!empty($studentDetail)) {
                                    echo $studentDetail->mobile;
                                } ?>" type="text" class="form-control phonemask">
                                <div class="invalid-feedback">
                                    Please fill in your mobile
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" value="1" type="radio" name="gender"
                                           id="male" <?php if (!empty($studentDetail)) {
                                        if ($studentDetail->gender == 1) echo ' checked ';
                                    } ?>
                                           checked="">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="female" value="2" <?php if (!empty($studentDetail)) {
                                        if ($studentDetail->gender == 2) echo ' checked ';
                                    } ?> >
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department</label>
                                <select required name="department" id="" class="form-control select2">
                                    <option value="">Select Department</option>
                                    <?php if (!empty($departments)) {
                                        foreach ($departments as $department) { ?>
                                            <option <?php if (!empty($studentDetail)) {
                                                if ($studentDetail->department == $department->id) echo ' selected ';
                                            } ?>
                                                    value="<?php echo $department->id ?>"><?php echo $department->title ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your department
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Semester</label>
                                <select required name="semester" id="" class="form-control select2">
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
                                <div class="invalid-feedback">
                                    Please select your semester
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-title">Admission Info</div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course</label>

                                <select onchange="getFee()" required name="courseID" id="courseID"
                                        class="form-control select2">
                                    <option value="">Select Course</option>
                                    <?php if (!empty($courses)) {
                                        foreach ($courses as $item) { ?>
                                            <option <?php if (!empty($studentDetail)) {
                                                if ($studentDetail->courseID == $item->id) echo ' selected ';
                                            } ?>
                                                    value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your course
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Batch</label>

                                <select required name="batchID" id="" class="form-control select2">
                                    <option value="">Select Batch</option>
                                    <?php if (!empty($batches)) {
                                        foreach ($batches as $item) { ?>
                                            <option <?php if (!empty($studentDetail)) {
                                                if ($studentDetail->batchID == $item->id) echo ' selected ';
                                            } ?>
                                                    value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your batch
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Fee</label>
                                <input id="course_fee" type="number" readonly class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Student Agreed Fee</label>
                                <input onkeyup="checkFee()" required name="student_agreed_fee" id="student_agreed_fee"
                                       value="<?php if (!empty($studentDetail)) {
                                           echo $studentDetail->student_agreed_fee;
                                       } ?>" type="number" class="form-control">
                                <div class="invalid-feedback">
                                    Please fill in agreed fee
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <button id="btn_submit" class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>


    function checkFee() {
        let courseFee = $('#course_fee').val();
        let student_agreed_fee = $('#student_agreed_fee').val();

        if (parseFloat(student_agreed_fee) > parseFloat(courseFee)) {
            $('#btn_submit').prop('disabled', true);
        } else {
            $('#btn_submit').prop('disabled', false);
        }


    }

    function getFee() {
        let courseID = $('#courseID').val();

        if (courseID == '') {
            return;
        }

        $.ajax({
            url: 'students/getFeeByCourseID/' + courseID,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $('#course_fee').val(obj.fees);
            }
        });


        let id = $("[name='id']").val();

        if (id == '') {
            getBatchesByCourseID(courseID);
        }

    }

    function getEnquiryByID() {

        let id = $('#enquiry').val();
        $.ajax({
            url: 'students/getEnquiryByID',
            type: 'post',
            data: {
                enquiryID: id
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);

                $("[name='name']").val(obj.name);
                $("[name='father_name']").val(obj.father_name);
                $("[name='dob']").val(obj.dob);
                $("[name='email']").val(obj.email);
                $("[name='cnic']").val(obj.cnic);
                $("[name='mobile']").val(obj.mobile);
                $("[name='department']").val(obj.department).trigger('change');
                $("[name='semester']").val(obj.semester).trigger('change');
                $("[name='courseID']").val(obj.courseID).trigger('change');

                getFee();


            }
        })


    }


    function getBatchesByCourseID(courseID) {

        $.ajax({
            url: 'students/getBatchesByCourseID',
            type: "post",
            data: {
                courseID: courseID
            },
            success: function (data) {
                let batches = '<option>Select Batch</option>';
                let obj = jQuery.parseJSON(data);

                obj.forEach(x => {
                    batches += '<option value="' + x.id +
                        '">' + x.title +
                        '</option>';
                });

                $("[name='batchID']").html(batches);
                $("[name='batchID']").select2();
            }
        })

    }

    function showEnquiry(type) {

        let enquiry = $('#enquiry_div');
        if (type == 0) {
            //direct
            enquiry.attr('hidden', true);

        } else {
            //enquiry
            enquiry.attr('hidden', false);
        }

    }


    $(document).ready(function () {
        getFee();
    })

</script>
