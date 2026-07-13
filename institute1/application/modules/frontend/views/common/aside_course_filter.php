<div class="course_filter">


    <?php

    $course_categories = $this->master_model->getCourseCategories();


    $this->db->select('id,name');
    $instructors = $this->db->get('faculty')->result();

    ?>


    <form action="" method="POST" class="thim-course-filter">
        <h4 class="filter-title">Course categories</h4>
        <ul>

            <?php foreach ($course_categories as $category) {
                ?>
                <li>
                    <input id="cc_<?php echo $category->id ?>" name="course_category[]"
                           value="<?php echo $category->id ?>" type="checkbox">
                    <label for="cc_<?php echo $category->id ?>">
                        <?php echo $category->name ?>
                        <span>(<?php echo $this->db->where('courses.category_id', $category->id)->count_all_results('courses'); ?>)</span>
                    </label>
                </li>
            <?php } ?>
        </ul>
        <h4 class="filter-title">Instructors</h4>
        <ul>

            <?php foreach ($instructors as $instructor) { ?>

                <li class="instructor-item">
                    <input id="ins_<?php echo $instructor->id ?>" name="instructor[]"
                           value="<?php echo $instructor->id ?>"
                           type="checkbox">
                    <label for="ins_<?php echo $instructor->id ?>">
                        <?php echo $instructor->name ?>
                    </label>
                </li>
            <?php } ?>
        </ul>
        <h4 class="filter-title">Price</h4>
        <ul>
            <li>
                <input id="all" type="radio" name="course_type" value="0" checked>
                <label for="all">
                    All <span>(<?php echo $this->db->count_all('courses') ?>)</span>
                </label>
            </li>

            <li>
                <input id="free" type="radio" name="course_type" value="1">
                <label for="free">
                    Free <span>(<?php echo $this->db->where('fees', 0)->count_all_results('courses') ?>)</span>
                </label>
            </li>
            <li>
                <input id="paid" type="radio" name="course_type" value="2">
                <label for="paid">
                    Paid <span>(<?php echo $this->db->where('fees >', 0)->count_all_results('courses') ?>)</span>
                </label>
            </li>
        </ul>
        <div class="filter-submit">
            <button type="submit" class="form-control btn-success">Filter Results</button>
        </div>
    </form>


</div>
