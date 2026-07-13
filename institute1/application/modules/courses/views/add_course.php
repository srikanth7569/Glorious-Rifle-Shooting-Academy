<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Add Course Form</h4>
                <div class="card-header-action">
                    <a href="courses" class="btn active">Course List</a>
                </div>
            </div>
            <div class="card-body">
                <form action="courses/addCourse" enctype="multipart/form-data" method="post" class="needs-validation"
                      novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($courseDetail)) {
                        echo $courseDetail->id;
                    } ?>">


                    <input type="hidden" name="old_image" value="<?php if (!empty($courseDetail)) {
                        echo $courseDetail->image;
                    } ?>">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Title</label>
                                <input required type="text" value="<?php if (!empty($courseDetail)) {
                                    echo $courseDetail->title;
                                } ?>" name="title" class="form-control" placeholder="Course Title">
                                <div class="invalid-feedback">
                                    Please fill in course title
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Short Code</label>
                                <input required value="<?php if (!empty($courseDetail)) {
                                    echo $courseDetail->courseCode;
                                } ?>" type="text" name="courseCode" class="form-control" placeholder="GD">
                                <div class="invalid-feedback">
                                    Please fill in course short code
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Category</label>
                                <select required name="category_id" class="form-control select2">
                                    <option value="">Select Course Category</option>
                                    <?php if (!empty($categories)) {
                                        foreach ($categories as $category) { ?>
                                            <option <?php if (!empty($courseDetail)) {
                                                if ($courseDetail->category_id == $category->id) echo ' selected ';
                                            } ?> value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select course category
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course Image</label>
                                <div class="custom-file">
                                    <input required type="file" class="custom-file-input" name="image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Duration</label>
                                <input required value="<?php if (!empty($courseDetail)) {
                                    echo $courseDetail->duration;
                                } ?>" name="duration" type="number" class="form-control" placeholder="Course Duration">
                                <div class="invalid-feedback">
                                    Please fill course duration
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Duration Type</label>
                                <select name="duration_type" class="form-control select2">
                                    <option <?php if (!empty($courseDetail)) {
                                        if ($courseDetail->duration_type == 'Days') echo ' selected ';
                                    } ?> value="Days">Days
                                    </option>
                                    <option <?php if (!empty($courseDetail)) {
                                        if ($courseDetail->duration_type == 'Month') echo ' selected ';
                                    } ?> value="Month">Months
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Fees</label>
                                <input required value="<?php if (!empty($courseDetail)) {
                                    echo $courseDetail->fees;
                                } ?>" name="fees" type="number" class="form-control" placeholder="Course Fee">
                                <div class="invalid-feedback">
                                    Please fill course fee
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Status</label>
                                <select required name="status" id="" class="form-control select2">
                                    <option <?php if (!empty($courseDetail)) {
                                        if ($courseDetail->status == 1) echo ' selected ';
                                    } ?> value="1">
                                        Active
                                    </option>
                                    <option <?php if (!empty($courseDetail)) {
                                        if ($courseDetail->status == 0) echo ' selected ';
                                    } ?> value="0">
                                        Disable
                                    </option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select course status
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="row">
                        <div class="card-header">
                            <h4>More Detail</h4>
                            <div class="card-header-action">
                                <a href="#" class="btn btn-primary accordion-header collapsed" data-toggle="collapse"
                                   data-target="#panel-body-1">
                                    +
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="accordion">
                                <div class="accordion">
                                    <div class="accordion-body collapse" id="panel-body-1" data-parent="#accordion"
                                         style="">


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Lecture</label>
                                                    <input value="<?php if (!empty($courseDetail)) {
                                                        echo $courseDetail->no_of_lec;
                                                    } ?>" name="no_of_lec" type="number" class="form-control"
                                                           placeholder="No. of Lecture">
                                                    <div class="invalid-feedback">
                                                        Please fill course lecture
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Quizz</label>
                                                    <input value="<?php if (!empty($courseDetail)) {
                                                        echo $courseDetail->no_of_lec;
                                                    } ?>" name="no_of_quizz" type="number" class="form-control"
                                                           placeholder="No. of Quiz">
                                                    <div class="invalid-feedback">
                                                        Please fill course quizz
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Skill Level</label>
                                                    <select style="width: 100%" name="skill_level" id=""
                                                            class="form-control select2">
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->skill_level == 1) echo ' selected ';
                                                        } ?> value="1">
                                                            Basic
                                                        </option>
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->skill_level == 2) echo ' selected ';
                                                        } ?> value="2">
                                                            Advanced
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select skill level
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">

                                                <div class="form-group">
                                                    <label>Language</label>
                                                    <select style="width: 100%" name="language" id=""
                                                            class="form-control select2">
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->language == 1) echo ' selected ';
                                                        } ?> value="1">
                                                            English
                                                        </option>
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->language == 2) echo ' selected ';
                                                        } ?> value="2">
                                                            Urdu
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select language
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Assessments</label>
                                                    <select style="width: 100%" name="assessments" id=""
                                                            class="form-control select2">
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->assessments == 0) echo ' selected ';
                                                        } ?> value="1">
                                                            No
                                                        </option>
                                                        <option <?php if (!empty($courseDetail)) {
                                                            if ($courseDetail->assessments == 1) echo ' selected ';
                                                        } ?> value="2">
                                                            Yes
                                                        </option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Please select assessment
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="section-title">Description</label>
                                            <textarea class="ckeditor" name="description"
                                                      id="ckeditor1"><?php if (!empty($courseDetail)) {
                                                    echo $courseDetail->description;
                                                } ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="section-title">Learning Outcomes</label>
                                            <textarea class="ckeditor" name="learning_outcomes"
                                                      id="ckeditor"><?php if (!empty($courseDetail)) {
                                                    echo $courseDetail->learning_outcomes;
                                                } ?></textarea>
                                        </div>


                                        <?php
                                        if (!empty($courseDetail)) {
                                            ?>


                                            <div class="form-group">

                                                <label class="section-title">Curriculum</label>

                                                <div id="curriculum">
                                                    <?php


                                                    if (!empty($cc_chapter)) {
                                                        $i = 0;

                                                        $count = sizeof($cc_chapter);

                                                        echo "<script>row_counter=$count</script>";
                                                        foreach ($cc_chapter as $item) {


                                                            ?>


                                                            <div id="cc_row_<?php echo $i ?>" class="row mt-2">
                                                                <div class="col-md-5">

                                                                    <input value="<?php echo $item ?>"
                                                                           name="cc_chapter[]" type="text"
                                                                           placeholder="Chapter"
                                                                           class="form-control">


                                                                </div>
                                                                <div class="col-md-6">

                                                        <textarea placeholder="Chapter Detail"
                                                                  name="cc_chapter_detail[]"
                                                                  class="form-control" id="" cols="30"
                                                                  rows="10"><?php echo $cc_chapter_detail[$i] ?></textarea>


                                                                </div>
                                                                <div class="col-md-1">

                                                                    <button type="button"
                                                                            onclick="<?php echo $i == 0 ? 'addNewRow('.$i.')' : 'delNewRow('.$i.')' ?>"
                                                                            class="btn <?php echo $i == 0 ? 'btn-primary' : 'btn-danger' ?>  btn-sm"><?php echo $i == 0 ? '+' : '-' ?>
                                                                    </button>


                                                                </div>
                                                            </div>


                                                            <?php
                                                            $i++;
                                                        }
                                                    }
                                                    ?>

                                                </div>


                                            </div>


                                            <?php


                                        } else {
                                            ?>


                                            <div class="form-group">

                                                <label class="section-title">Curriculum</label>

                                                <div id="curriculum">

                                                    <div id="cc_row_1" class="row">
                                                        <div class="col-md-5">

                                                            <input name="cc_chapter[]" type="text" placeholder="Chapter"
                                                                   class="form-control">


                                                        </div>
                                                        <div class="col-md-6">

                                                        <textarea placeholder="Chapter Detail"
                                                                  name="cc_chapter_detail[]"
                                                                  class="form-control" id="" cols="30"
                                                                  rows="10"></textarea>


                                                        </div>
                                                        <div class="col-md-1">

                                                            <button type="button" onclick="addNewRow(1)"
                                                                    class="btn btn-primary btn-sm">+
                                                            </button>


                                                        </div>
                                                    </div>
                                                </div>


                                            </div>


                                            <?php
                                        }
                                        ?>


                                    </div>
                                </div>
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
        $("[name='image']").attr('required', false);
    }
</script>
<?php if (!empty($courseDetail)) {
    echo '<script>removeAttr()</script>';
} ?>


<script>

    let row_counter = 1;

    function addNewRow(row) {
        row_counter++;
        let data = '<div id="cc_row_' + row_counter +
            '" class="row mt-2">' +
            '<div class="col-md-5">' +
            '<input name="cc_chapter[]" type="text" placeholder="Chapter" class="form-control">' +
            '</div>' +
            '<div class="col-md-6">' +
            '<textarea placeholder="Chapter Detail" name="cc_chapter_detail[]" class="form-control" id="" cols="30" rows="10"></textarea>' +
            '</div>' +
            '<div class="col-md-1">' +
            '<button type="button" onclick="delNewRow(' + row_counter +
            ')" class="btn btn-danger btn-sm">-</button>' +
            '</div>' +
            '</div>';


        $('#curriculum').append(data);


    }


    function delNewRow(row) {

        $('#cc_row_' + row).remove();


    }


</script>


<script type="text/javascript" src="assets/js/page/ckeditor.js"></script>

