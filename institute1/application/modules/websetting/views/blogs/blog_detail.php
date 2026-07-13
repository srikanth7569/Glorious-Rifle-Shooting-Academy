<style>
    .article .article-header {
        height: 445px;
    }
</style>

<div class="col-md-12">

    <article class="article article-style-b">
        <div class="article-header">
            <div class="article-image"
                 data-background="<?php echo $blogDetail->img ? $blogDetail->img : 'assets/img/blog/img10.png' ?>">
            </div>
        </div>
        <div class="article-details">
            <div class="article-title">
                <h2>
                    <a href="websetting/blogs/blogDetail/<?php echo $blogDetail->id ?>"><?php echo $blogDetail->title ?></a>

                    <?php if ($blogDetail->status == 0) { ?>
                        <a class="pl-2" href="websetting/blogs/editBlog/<?php echo $blogDetail->id ?>"><span
                                    class="far fa-edit"></span></a>
                    <?php } ?>

                    <?php
                    $isAdmin = $this->session->userdata('isAdmin');

                    ?>

                    <?php if ($isAdmin) { ?>
                        <a class="pl-2" href="javascript:void(0)"
                           onclick="onChangeStatus('<?php echo $blogDetail->id ?>')">
                            <span class=" <?php echo $blogDetail->status == 1 ? 'far fa-thumbs-up' : 'far fa-thumbs-down' ?> "></span>
                        </a>
                    <?php } ?>


                </h2>
            </div>
            <p><?php echo $blogDetail->description ?></p>
        </div>
    </article>
</div>

<script>
    function onChangeStatus(blog_id) {

        $.ajax({
            url: 'websetting/blogs/blogStatusChange',
            type: 'post',
            data: {
                blog_id: blog_id
            },
            success: function (data) {
                if (data) {
                    window.location = 'websetting/blogs/blogDetail/' + blog_id;
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }
</script>
