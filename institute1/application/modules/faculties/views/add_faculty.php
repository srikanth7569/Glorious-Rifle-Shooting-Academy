<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Faculty Form</h4>
                <div class="card-header-action">
                    <a href="faculties" class="btn active">Faculty List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="faculties/addFaculty" method="post" enctype="multipart/form-data" class="needs-validation"
                      novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($facultyDetail)) {
                        echo $facultyDetail->id;
                    } ?>">

                    <input type="hidden" name="old_image" value="<?php if (!empty($facultyDetail)) {
                        echo $facultyDetail->img;
                    } ?>">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input required type="text" value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->name;
                                } ?>" name="name"
                                       class="form-control" placeholder="Name">
                                <div class="invalid-feedback">
                                    Please fill faculty name
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Father Name</label>
                                <input required type="text" value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->father_name;
                                } ?>" name="father_name"
                                       class="form-control" placeholder="Father Name">
                                <div class="invalid-feedback">
                                    Please fill in father name
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input required type="email" value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->email;
                                } ?>" name="email"
                                       class="form-control" placeholder="Email">
                                <div class="invalid-feedback">
                                    Please fill in faculty email
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input required type="password" name="password" class="form-control"
                                       placeholder="Password">
                                <div class="invalid-feedback">
                                    Please fill in password
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input required type="text" value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->mobile;
                                } ?>" name="mobile"
                                       class="form-control phonemask" placeholder="Mobile">
                                <div class="invalid-feedback">
                                    Please fill in mobile
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="d-block">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="male" value="1" <?php if (!empty($facultyDetail)) {
                                        if ($facultyDetail->gender == 1) echo ' checked ';
                                    } ?>
                                           checked="">
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender"
                                           id="female" value="2" <?php if (!empty($facultyDetail)) {
                                        if ($facultyDetail->gender == 2) echo ' checked ';
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
                                <label>Date of Birth</label>
                                <input required type="text" value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->dob;
                                } ?>" name="dob"
                                       class="form-control datemask">
                                <div class="invalid-feedback">
                                    Please fill dob
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input required type="file" class="custom-file-input" name="img" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" class="form-control"><?php if (!empty($facultyDetail)) {
                                echo $facultyDetail->address;
                            } ?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">


                            <div class="form-group">
                                <label>Course</label>
                                <select required name="course[]" multiple="" class="form-control select2">
                                    <option value="">Select Course</option>
                                    <?php if (!empty($courses)) {
                                        $i = 0;
                                        foreach ($courses as $item) { ?>
                                            <option <?php if (!empty($facultyDetail)) {

                                                if (isset($selected_course[$i])) {
                                                    if ($selected_course[$i] == $item->id) echo ' selected ';
                                                }
                                            } ?> value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                            <?php $i++;
                                        }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please fill course
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Qualification</label>
                                <input required value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->qualification;
                                } ?>" type="text"
                                       name="qualification" class="form-control"
                                       placeholder="Qualification">
                                <div class="invalid-feedback">
                                    Please fill faculty qualification
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Experience in Years</label>
                                <input required value="<?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->experience;
                                } ?>" type="number" name="experience"
                                       class="form-control" placeholder="Experience">
                                <div class="invalid-feedback">
                                    Please fill experience
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of Join</label>
                                <input readonly <?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->doj;
                                } ?> type="text" name="doj" class="form-control datepicker">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Designation</label>
                        <select required name="pos_id" class="form-control select2">
                            <option value="">Select Designation</option>
                            <?php if (!empty($designation)) {
                                foreach ($designation as $item) { ?>
                                    <option <?php if (!empty($facultyDetail)) {
                                        if ($facultyDetail->pos_id == $item->id) echo ' selected ';
                                    } ?> value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                <?php }
                            } ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select designation
                        </div>
                    </div>

                    <div class="section-title">Social Links</div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Facebook</label>
                                <input <?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->fb;
                                } ?> type="text" name="fb" class="form-control" placeholder="http://www.abc.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Twitter</label>
                                <input <?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->twitter;
                                } ?> type="text" name="twitter" class="form-control" placeholder="http://www.abc.com">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Instagram</label>
                                <input <?php if (!empty($facultyDetail)) {
                                    echo $facultyDetail->instagram;
                                } ?> type="text" name="instagram" class="form-control" placeholder="http://www.abc.com">
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <button class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function removeAttr() {
        $("[name='img']").attr('required', false);
    }
</script>
<?php if (!empty($facultyDetail)) {
    echo '<script>removeAttr()</script>';
} ?>
