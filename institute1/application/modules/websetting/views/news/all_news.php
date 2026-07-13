<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4>All News</h4>
            <div class="card-header-action">
                <a href="websetting/news/addNews" class="btn active">Add News</a>
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
                        <th class="text-center">Status</th>
                    </tr>


                    <?php if (!empty($news)) {
                        foreach ($news as $item) {
                            ?>

                            <tr>
                                <td>
                                    <a href="javascript:void(0)">
                                        <img alt="image"
                                             src="<?php echo $item->image ? $item->image : 'assets/img/users/user-1.png' ?>"
                                             class="rounded-circle" height="35" width="35"
                                             data-toggle="title" title="">
                                        <span class="d-inline-block ml-1"><?php echo $item->firstname ?></span>
                                    </a>
                                </td>
                                <td><?php echo $item->title ?>
                                    <div class="table-links">
                                        <a href="websetting/news/newsDetail/<?php echo $item->id ?>">View</a>
                                        <div class="bullet"></div>
                                        <a href="websetting/news/editNews/<?php echo $item->id ?>">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="javascript:void(0)" onclick="delNews('<?php echo $item->id ?>')"
                                           class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $item->categoryName ?>
                                </td>
                                <td><?php echo date('d-m-Y', strtotime($item->created_at)) ?></td>
                                <td>3,587</td>
                                <td class="text-center">
                                    <?php if ($item->status == 1) { ?>
                                        <div style="cursor:pointer" onclick="onChangeStatus('<?php echo $item->id ?>')"
                                             class="badge badge-primary">Published
                                        </div>
                                    <?php } else { ?>

                                        <div style="cursor:pointer" onclick="onChangeStatus('<?php echo $item->id ?>')"
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
    function onChangeStatus(news_id) {

        $.ajax({
            url: 'websetting/news/newsStatusChange',
            type: 'post',
            data: {
                news_id: news_id
            },
            success: function (data) {
                if (data) {
                    window.location = 'websetting/news';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }

    function delNews(id) {

        if (confirm('Are you sure ?')) {
            $.ajax({
                url: 'websetting/news/delNews/' + id,
                success: function (data) {

                    if (data) {
                        window.location = 'websetting/news';
                        show_toaster('Record Deleted');
                    } else {
                        show_toaster('Some Error Occurred', false);
                    }

                }
            })
        }

    }
</script>
