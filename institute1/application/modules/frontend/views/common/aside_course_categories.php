<div class="aside_course_categories">

    <?php
    $this->db->limit(8);
    $courses = $this->db->get('courses')->result(); ?>

    <h4 class="title">All Courses</h4>
    <ul>
        <?php foreach ($courses as $item) { ?>
            <li>
                <a href="frontend/courseDetail/<?php echo $item->id ?>"><?php echo $item->title ?></a>
            </li>
        <?php } ?>

        <a href="frontend/allCourses/">View More</a>
    </ul>


</div>
