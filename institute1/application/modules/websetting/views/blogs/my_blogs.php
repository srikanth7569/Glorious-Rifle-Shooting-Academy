<style>
    p {
        width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Blogs</h4>
                <div class="card-header-action">
                    <a href="websetting/blogs/addBlog" class="btn active">Add Blog</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <div class="row">


                        <?php if (!empty($blogs)) {
                            foreach ($blogs as $blog) { ?>


                                <div class="col-12 col-sm-6 col-md-6 col-lg-3">

                                    <article class="article article-style-b">
                                        <div class="article-header">
                                            <div class="article-image"
                                                 data-background="<?php echo $blog->img ? $blog->img : 'assets/img/blog/img10.png' ?>">
                                            </div>
                                        </div>
                                        <div class="article-details">
                                            <div class="article-title">
                                                <h2>
                                                    <a href="websetting/blogs/blogDetail/<?php echo $blog->id ?>"><?php echo $blog->title ?></a>
                                                </h2>
                                            </div>
                                            <p><?php echo $blog->description ?></p>
                                            <div class="article-cta">
                                                <a href="websetting/blogs/blogDetail/<?php echo $blog->id ?>">Read More
                                                    <i class="fas fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            <?php }
                        } ?>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function deleteCourse(id) {
        $.ajax({
            url: 'courses/deleteCourse/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'courses';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>
