<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add Slider</h5>
            </div>
            <div class="card-body">

                <form action="websetting/slider/addSlider" method="post" enctype="multipart/form-data"
                      class="needs-validation" novalidate="">

                    <input type="hidden" name="id">
                    <input type="hidden" name="old_image">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Upper Title</label>
                                <div class="input-group">
                                    <input placeholder="Title" required class="form-control" name="description" id=""/>
                                    <div class="invalid-feedback">
                                        Please fill upper title
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lower Title</label>
                                <div class="input-group">
                                    <input autocomplete="off" required name="title" type="text" class="form-control"
                                           placeholder="Title">
                                    <div class="invalid-feedback">
                                        Please fill title
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>Image</label>
                        <div style="width: auto;height: 80px" id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="img" id="image-upload"/>
                        </div>


                    </div>


                    <!-- /.form group -->
                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>


    </div>


    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Slider List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($sliders)) {
                            $i = 0;
                            foreach ($sliders as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->title ?></td>
                                    <td><?php echo $item->description ?></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getCourseCategoryByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="onChangeStatus('<?php echo $item->id ?>')">
                                                <span class=" <?php echo $item->status == 1 ? 'far fa-thumbs-up' : 'far fa-thumbs-down' ?> "></span>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php }
                        } ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function getCourseCategoryByID(id) {

        $.ajax({
            url: 'websetting/slider/getSliderByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='title']").val(obj.title);
                $("[name='description']").val(obj.description);
                $("[name='old_image']").val(obj.img);
            }
        });


    }

    function onChangeStatus(id) {

        $.ajax({
            url: 'websetting/slider/sliderStatusChange',
            type: 'post',
            data: {
                id: id
            },
            success: function (data) {
                if (data) {
                    window.location = 'websetting/slider';
                } else {
                    show_toaster('Some Error Occurred', false);
                }

            }
        })

    }

</script>

