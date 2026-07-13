<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Batch Form</h4>
                <div class="card-header-action">
                    <a href="batches" class="btn active">Batch List</a>
                </div>
            </div>


            <div class="card-body">
                <form action="batches/addBatch" method="post" class="needs-validation" novalidate="">
                    <input type="hidden" id="id" name="id" value="<?php if (!empty($batchDetail)) {
                        echo $batchDetail->id;
                    } ?>">

                    <input type="hidden" id="duration">
                    <input type="hidden" id="duration_type">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Batch Title</label>
                                <input required type="text" value="<?php if (!empty($batchDetail)) {
                                    echo $batchDetail->title;
                                } ?>" name="title" class="form-control" placeholder="Batch Title">
                            </div>
                            <div class="invalid-feedback">
                                Please fill in batch title
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Course</label>
                                <select onchange="onCourseChange()" required name="course_id" id="course_id"
                                        class="form-control select2">
                                    <option value="">Select Course</option>
                                    <?php if (!empty($courses)) {
                                        foreach ($courses as $item) { ?>
                                            <option <?php if (!empty($batchDetail)) {
                                                if ($batchDetail->course_id == $item->id) echo ' selected ';
                                            } ?> value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select course
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Start Date</label>
                                <input onchange="getEndDate()" required id="start_date" name="start_date"
                                       value="<?php if (!empty($batchDetail)) {
                                           echo $batchDetail->start_date;
                                       } ?>" type="text" class="form-control datepicker">
                                <div class="invalid-feedback">
                                    Please fill course start date
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Expected End Date</label>
                                <input required id="end_date" name="end_date" value="<?php if (!empty($batchDetail)) {
                                    echo $batchDetail->end_date;
                                } ?>" type="text" class="form-control datepicker">
                                <div class="invalid-feedback">
                                    Please fill course end date
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                    </div>
                                    <input required value="<?php if (!empty($batchDetail)) {
                                        echo $batchDetail->batch_time;
                                    } ?>" name="batch_time" type="text" class="form-control timepicker">
                                    <div class="invalid-feedback">
                                        Please fill course timing
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Faculty</label>
                                <select required id="faculty" name="faculty" class="form-control select2">
                                    <option value="">Select Faculty</option>
                                    <?php if (!empty($faculties)) {
                                        foreach ($faculties as $faculty) { ?>
                                            <option <?php if (!empty($batchDetail)) {
                                                if ($batchDetail->faculty == $faculty->id) echo ' selected ';
                                            } ?>
                                                    value="<?php echo $faculty->id ?>"><?php echo $faculty->name ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select faculty
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Faculty Agreed Fee(%)</label>
                                <input required value="<?php if (!empty($batchDetail)) {
                                    echo $batchDetail->faculty_agreed_fees;
                                } ?>" name="faculty_agreed_fees" type="number" class="form-control"
                                       placeholder="Course Duration">
                                <div class="invalid-feedback">
                                    Please fill faculty agreed fee
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"
                                  placeholder="Description"><?php if (!empty($batchDetail)) {
                                echo $batchDetail->description;
                            } ?></textarea>
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

    function onCourseChange() {

        let courseID = $('#course_id').val();


        $.ajax({
            url: 'batches/getCourseByID',
            type: 'post',
            data: {
                courseID: courseID
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                let duration_type = obj.duration_type;
                let duration = obj.duration;
                $('#end_date').val(obj.end_date);
                $('#duration').val(duration);
                $('#duration_type').val(duration_type);
            }
        });

        let edit_id = $("#id").val();
        if (edit_id == '') {
            getFacultiesByCourseID(courseID);
        }


    }

    function getFacultiesByCourseID(id) {

        $.ajax({
            url: 'batches/getFacultiesByCourseID',
            type: 'post',
            data: {
                courseID: id
            },
            success: function (data) {
                let faculties = '<option>Select Faculty</option>';
                let obj = jQuery.parseJSON(data);
                obj.forEach(x => {
                    faculties += '<option value="' + x.id +
                        '">' + x.name +
                        '</option>';

                });


                $('#faculty').html(faculties);
                $('#faculty').select2();

            }
        })


    }

    function getEndDate() {
        let st_date = $('#start_date').val();
        let duration = $('#duration').val();
        let duration_type = $('#duration_type').val();

        if (duration == '') {
            return;
        }

        $.ajax({
            url: 'batches/getBatchEndDate',
            type: 'post',
            data: {
                startDate: st_date,
                duration: duration,
                duration_type: duration_type
            },
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $('#end_date').val(obj);
            }
        })

    }


</script>
