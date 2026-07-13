<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Add News Form</h4>
                <div class="card-header-action">
                    <a href="websetting/news" class="btn active">All News</a>
                </div>
            </div>
            <div class="card-body">
                <form action="websetting/news/addNews" enctype="multipart/form-data" method="post" class="needs-validation"
                      novalidate="">
                    <input type="hidden" name="id" value="<?php if (!empty($newsDetail)) {
                        echo $newsDetail->id;
                    } ?>">

                    <input type="hidden" name="old_image" value="<?php if (!empty($newsDetail)) {
                        echo $newsDetail->img;
                    } ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>News Title</label>
                                <input required type="text" value="<?php if (!empty($newsDetail)) {
                                    echo $newsDetail->title;
                                } ?>" name="title" class="form-control" placeholder="News Title">
                                <div class="invalid-feedback">
                                    Please fill in news title
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>News Category</label>
                                <select name="category_id" class="form-control select2">
                                    <option value="">Select News Category</option>
                                    <?php if (!empty($categories)) {
                                        foreach ($categories as $category) { ?>
                                            <option <?php if (!empty($newsDetail)) {
                                                if ($newsDetail->category == $category->id) echo ' selected ';
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
                                    <input type="file" name="image" id="image-upload" />
                                </div>


<!--                                <div class="custom-file">-->
<!--                                    <input required type="file" class="custom-file-input" name="image" id="customFile">-->
<!--                                    <label class="custom-file-label" for="customFile">Choose file</label>-->
<!--                                </div>-->
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="section-title">Description</label>
                        <textarea required name="description"
                                  id="ckeditor"><?php if (!empty($newsDetail)) {
                                echo $newsDetail->description;
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


    $.uploadPreview({
        input_field: "#image-upload",   // Default: .image-upload
        preview_box: "#image-preview",  // Default: .image-preview
        label_field: "#image-label",    // Default: .image-label
        label_default: "Choose File",   // Default: Choose File
        label_selected: "Change File",  // Default: Change File
        no_label: false,                // Default: false
        success_callback: null          // Default: null
    });



</script>
<?php if (!empty($newsDetail)) {
    echo '<script>removeAttr()</script>';
} ?>


<script type="text/javascript" src="assets/js/page/ckeditor.js"></script>

