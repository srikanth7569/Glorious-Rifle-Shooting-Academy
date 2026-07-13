<form id="enquiry_form" action="enquiries/addEnquiry" method="post" class="needs-validation" novalidate="">
    <input type="hidden" name="id" value="<?php if (!empty($enquiryDetail)) {
        echo $enquiryDetail->id;
    } ?>">


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input required type="text" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->name;
                } ?>" name="name" class="form-control" placeholder="Name">
                <div class="invalid-feedback">
                    Please fill in your name
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Father Name</label>
                <input required type="text" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->father_name;
                } ?>" name="father_name" class="form-control" placeholder="Father Name">
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

                <input required name="dob" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->dob;
                } ?>" type="text" class="form-control datemask" placeholder="YYYY/MM/DD">
                <div class="invalid-feedback">
                    Please fill in your dob
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Email</label>
                <input required name="email" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->email;
                } ?>" type="email" class="form-control" placeholder="abc@gmail.com">
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
                <input required name="cnic" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->cnic;
                } ?>" type="text" class="form-control cnicmask" placeholder="33100-0000000-0">
                <div class="invalid-feedback">
                    Please fill in your cnic
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Mobile</label>
                <input required name="mobile" value="<?php if (!empty($enquiryDetail)) {
                    echo $enquiryDetail->mobile;
                } ?>" type="text" class="form-control phonemask" placeholder="0300-0000000">
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
                    <input class="form-check-input" type="radio" name="gender"
                           id="male" value="1" <?php if (!empty($enquiryDetail)) {
                        if ($enquiryDetail->gender == 1) echo ' checked ';
                    } ?>
                           checked="">
                    <label class="form-check-label" for="male">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender"
                           id="female" value="2" <?php if (!empty($enquiryDetail)) {
                        if ($enquiryDetail->gender == 2) echo ' checked ';
                    } ?> >
                    <label class="form-check-label" for="female">
                        Female
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">
                <label>Preferred Time</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-clock"></i>
                        </div>
                    </div>
                    <input required value="<?php if (!empty($enquiryDetail)) {
                        echo $enquiryDetail->preferredTime;
                    } ?>" name="preferredTime" type="text" class="form-control timepicker">
                    <div class="invalid-feedback">
                        Please fill in your preferred time
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Department</label>

                <select required name="department" class="form-control select2">
                    <option value="">Select Department</option>
                    <?php if (!empty($departments)) {
                        foreach ($departments as $department) { ?>
                            <option value="<?php echo $department->id ?>"><?php echo $department->title ?></option>
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
                <div class="invalid-feedback">
                    Please select your semester
                </div>
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
        <div class="invalid-feedback">
            Please select your course
        </div>
    </div>
    <div class="">
        <button class="btn  btn-primary" type="submit">Submit</button>
    </div>
</form>
