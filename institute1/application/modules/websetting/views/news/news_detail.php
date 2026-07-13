<style>
    .article .article-header {
        height: 445px;
    }
</style>

<div class="col-md-12">

    <article class="article article-style-b">
        <div class="article-header">
            <div class="article-image"
                 data-background="<?php echo $newsDetail->img ? $newsDetail->img : 'assets/img/blog/img10.png' ?>">
            </div>
        </div>
        <div class="article-details">
            <div class="article-title">
                <h2>
                    <a href="javascript:void(0)"><?php echo $newsDetail->title ?></a>
                </h2>
            </div>
            <p><?php echo $newsDetail->description ?></p>
        </div>
    </article>
</div>

<script>
    function onChangeStatus(blog_id) {

        $.ajax({
            url: 'blogs/blogStatusChange',
            type: 'post',
            data: {
                blog_id: blog_id
            },
            success: function (data) {
                if (data) {
                    window.location = 'blogs/newsDetail/' + blog_id;
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }
</script>
