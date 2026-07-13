<div class="aside_blog_categories">
    <h4 class="title">Categories</h4>

    <?php

    $categories = $this->master_model->getCourseCategories();
    ?>


    <ul>

        <?php foreach ($categories as $category) { ?>
            <li>
                <a href="frontend/getBlogsByCategory/<?php echo $category->id ?>"><?php echo $category->name ?></a>
            </li>
        <?php } ?>
    </ul>
</div>
