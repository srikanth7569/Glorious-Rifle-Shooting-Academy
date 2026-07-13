<div class="aside_latest_courses">
    <h4 class="title">Latest Courses</h4>


    <?php
    $this->db->limit(3);
    $this->db->order_by('created_at');
    $courses = $this->db->get('courses')->result();
    ?>


    <div class="row">
        <?php foreach ($courses as $cours) { ?>
            <div class="mb-3 col-sm-12">
                <div class="course-thumbnail mb-2">
                    <img src="<?php echo $cours->image ? $cours->image : 'web_assets/uploads/2015/11/course-4-150x150.jpg' ?> ">
                </div>

                <div class="course-content_">
                    <h3 class="course-title">
                        <a href="frontend/courseDetail/<?php echo $cours->id ?>"> <?php echo $cours->title ?></a>
                    </h3>
                    <div class="course-price">
                        <?php echo $cours->fees ?>
                    </div>


                </div>

            </div>
        <?php } ?>
    </div>


</div>
