<div class="aside_latest_courses">
    <h4 class="title">Latest Posts</h4>


    <div class="row">
        <?php


        $posts = $this->blogs_model->getLatestBlogs(3);


        foreach ($posts as $post) {
            ?>


            <div class="col-sm-12">
                <div class="course-thumbnail">
                    <img src="<?php echo $post->img ? $post->img : 'web_assets/uploads/2015/11/course-4-150x150.jpg' ?>">
                </div>

                <div class="course-content_">
                    <h3 class="course-title">
                        <a href="frontend/blogDetail/<?php echo $post->id ?>"> <?php echo $post->title ?></a>
                    </h3>
                    <div style="font-size: 12px;font-weight: 700;line-height: 12px;color: #666;">

                        <?php echo date('Y-m-d', strtotime($post->created_at)) ?>

                    </div>


                </div>

            </div>

        <?php } ?>

    </div>
</div>
