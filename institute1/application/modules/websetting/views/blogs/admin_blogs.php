<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>All Posts</h4>

            <div class="card-header-action">
                <a href="websetting/blogs/addBlog" class="btn active">Add Blog</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">


                <table class="table table-striped">
                    <tr>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Views</th>
                        <th>Status</th>
                    </tr>


                    <?php if (!empty($blogs)) {
                        foreach ($blogs as $blog) {
                            ?>

                            <tr>
                                <td>
                                    <a href="<?php echo $blog->author_type == 2 ? 'students/studentDetail/' . $blog->authorDetail->id : 'faculties/facultyDetail/' . $blog->authorDetail->id ?>">
                                        <img alt="image"
                                             src="<?php echo $blog->authorDetail->image ? $blog->authorDetail->image : 'assets/img/users/user-1.png' ?>"
                                             class="rounded-circle" height="35" width="35"
                                             data-toggle="title" title="">
                                        <span class="d-inline-block ml-1"><?php echo $blog->authorDetail->name ?></span>
                                    </a>
                                </td>
                                <td><?php echo $blog->title ?>
                                    <div class="table-links">
                                        <a href="websetting/blogs/blogDetail/<?php echo $blog->id ?>">View</a>
                                        <div class="bullet"></div>
                                        <a href="websetting/blogs/editBlog/<?php echo $blog->id ?>">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="javascript:void(0)" onclick="delBlog('<?php echo $blog->id ?>')"
                                           class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $blog->categoryName ?>
                                </td>
                                <td><?php echo date('d-m-Y', strtotime($blog->created_at)) ?></td>
                                <td>3,587</td>
                                <td>
                                    <?php if ($blog->status == 1) { ?>
                                        <div style="cursor:pointer" onclick="onChangeStatus('<?php echo $blog->id ?>')"
                                             class="badge badge-primary">Published
                                        </div>
                                    <?php } else { ?>

                                        <div style="cursor:pointer" onclick="onChangeStatus('<?php echo $blog->id ?>')"
                                             class="badge badge-warning">Pending
                                        </div>
                                    <?php } ?>
                                </td>
                            </tr>

                        <?php }
                    } ?>

                </table>
            </div>


        </div>
    </div>
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
                    window.location = 'websetting/blogs';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }


    function delBlog(id) {

        if (confirm('Are you sure ?')) {
            $.ajax({
                url: 'websetting/blogs/delBlog/' + id,
                success: function (data) {

                    if (data) {
                        window.location = 'websetting/blogs';
                        show_toaster('Record Deleted');
                    } else {
                        show_toaster('Some Error Occurred', false);
                    }

                }
            })
        }

    }


</script>
