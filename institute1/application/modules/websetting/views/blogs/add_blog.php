<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Add New Blog</h4>
                <div class="card-header-action">
                    <a href="websetting/blogs" class="btn active">My Blogs</a>
                </div>
            </div>
            <div class="card-body">
                <form action="websetting/blogs/addBlog" enctype="multipart/form-data" method="post"
                      class="needs-validation"
                      novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($blogDetail)) {
                        echo $blogDetail->id;
                    } ?>">

                    <input type="hidden" name="old_image" value="<?php if (!empty($blogDetail)) {
                        echo $blogDetail->img;
                    } ?>">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Blog Title</label>
                                <input required type="text" value="<?php if (!empty($blogDetail)) {
                                    echo $blogDetail->title;
                                } ?>" name="title" class="form-control" placeholder="Blog Title">
                                <div class="invalid-feedback">
                                    Please fill in blog title
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Blog Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="">Select Blog Category</option>
                                    <?php if (!empty($categories)) {
                                        foreach ($categories as $category) { ?>
                                            <option <?php if (!empty($blogDetail)) {
                                                if ($blogDetail->category == $category->id) echo ' selected ';
                                            } ?> value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                                        <?php }
                                    } ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select course category
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image</label>
                                <div id="image-preview" style="width: auto" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="section-title">Description</label>
                        <textarea required name="description"
                                  id="ckeditor"><?php if (!empty($blogDetail)) {
                                echo $blogDetail->description;
                            } ?></textarea>
                    </div>


                    <div class="">
                        <button class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function removeAttr() {
        $("[name='image']").attr('required', false);
    }


</script>
<?php if (!empty($blogDetail)) {
    echo '<script>removeAttr()</script>';
} ?>



