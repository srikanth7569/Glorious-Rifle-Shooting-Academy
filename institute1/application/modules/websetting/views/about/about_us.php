<div class="card">
    <div class="card-header">
        <h4>About</h4>
    </div>
    <div class="card-body">
        <form enctype="multipart/form-data" method="post" action="" class="needs-validation"
              novalidate="">


            <input type="hidden" name="id" value="<?php if (!empty($about)) {
                echo $about->id;
            } ?>">
            <input type="hidden" name="old_slider1" value="<?php if (!empty($about)) {
                echo $about->slider1;
            } ?>">
            <input type="hidden" name="old_slider2" value="<?php if (!empty($about)) {
                echo $about->slider2;
            } ?>">
            <input type="hidden" name="old_slider3" value="<?php if (!empty($about)) {
                echo $about->slider3;
            } ?>">


            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider 1</label>
                        <div id="image-preview" style="width: auto" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="slider1" id="image-upload"/>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider 2</label>
                        <div id="image-preview1" style="width: auto" class="image-preview">
                            <label for="image-upload" id="image-label1">Choose File</label>
                            <input type="file" name="slider2" id="image-upload1"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Slider 3</label>
                        <div id="image-preview2" style="width: auto" class="image-preview">
                            <label for="image-upload" id="image-label2">Choose File</label>
                            <input type="file" name="slider3" id="image-upload2"/>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="section-title">Who we are</label>
                <textarea required name="who_we_are"
                          id="ckeditor"><?php if (!empty($about)) {
                        echo $about->who_we_are;
                    } ?>
                </textarea>
            </div>

            <div class="form-group">
                <label class="section-title">What we do</label>
                <textarea class="ckeditor" required name="what_we_do"
                          id="ckeditor"><?php if (!empty($about)) {
                        echo $about->what_we_do;
                    } ?>
                </textarea>
            </div>

            <div class="form-group">
                <label>Our Team</label>
                <select required name="team_members[]" multiple="" class="form-control select2">
                    <?php if (!empty($members)) {
                        $i = 0;
                        foreach ($members as $item) { ?>
                            <option
                                    value="<?php echo $item->id . '-' . $item->guestType ?>"><?php echo $item->name ?></option>
                            <?php $i++;
                        }
                    } ?>
                </select>
                <div class="invalid-feedback">
                    Please fill our team
                </div>
            </div>

            <div class="text-right">
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
            </div>


        </form>
    </div>
</div>


<script>
    $(function () {
        $.uploadPreview({
            input_field: "#image-upload1",   // Default: .image-upload
            preview_box: "#image-preview1",  // Default: .image-preview
            label_field: "#image-label1",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });

        $.uploadPreview({
            input_field: "#image-upload2",   // Default: .image-upload
            preview_box: "#image-preview2",  // Default: .image-preview
            label_field: "#image-label2",    // Default: .image-label
            label_default: "Choose File",   // Default: Choose File
            label_selected: "Change File",  // Default: Change File
            no_label: false,                // Default: false
            success_callback: null          // Default: null
        });
    });
</script>

<script>
    function removeAttr() {
        $("[name='slider1']").attr('required', false);
        $("[name='slider2']").attr('required', false);
        $("[name='slider3']").attr('required', false);
    }


</script>
<?php if (!empty($about)) {
    echo '<script>removeAttr()</script>';
} ?>
