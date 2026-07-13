<div class="row">
    <div class="col-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add New Guest</h5>
            </div>
            <div class="card-body">

                <form action="guests/addGuest" method="post" enctype="multipart/form-data"
                      class="needs-validation" novalidate="">

                    <input type="hidden" name="id">
                    <input type="hidden" name="old_image">


                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="name" type="text" class="form-control"
                                   placeholder="Guest Name">
                            <div class="invalid-feedback">
                                Please fill category title
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <select required name="designation_id" class="form-control select2">
                            <option value="">Select Designation</option>
                            <?php if (!empty($designation)) {
                                foreach ($designation as $item) { ?>
                                    <option <?php if (!empty($facultyDetail)) {
                                        if ($facultyDetail->pos_id == $item->id) echo ' selected ';
                                    } ?> value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                                <?php }
                            } ?>
                        </select>
                        <div class="invalid-feedback">
                            Please select designation
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Image</label>

                        <div id="image-preview" style="width: auto" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="img" id="image-upload"/>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Detail</label>
                        <textarea required class="form-control w-100" name="description"
                                  rows="10"><?php if (!empty($eventDetail)) {
                                echo $eventDetail->event_content;
                            } ?></textarea>
                        <div class="invalid-feedback">
                            Please fill detail
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
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4>All Guests</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($guests)) {
                            $i = 0;
                            foreach ($guests as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $item->name ?></td>
                                    <td><?php echo $item->designation ?></td>
                                    <td><img src="<?php echo $item->img ?>" height="80" width="80" alt=""></td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn sm"
                                                    onclick="getGuestByID('<?php echo $item->id ?>')">
                                                <span class="far fa-edit"></span>
                                            </button>
                                            <button class="btn btn-sm"
                                                    onclick="delGuest('<?php echo $item->id ?>')">
                                                <span class="far fa-trash-alt"></span>
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
    function getGuestByID(id) {

        $.ajax({
            url: 'guests/getGuestByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='id']").val(obj.id);
                $("[name='name']").val(obj.name);
                $("[name='description']").val(obj.description);
                $("[name='old_image']").val(obj.img);
                $("[name='img']").attr('required', false);
                $("[name='designation_id']").val(obj.designation_id).trigger('change');
            }
        })


    }

    function delGuest(id) {
        $.ajax({
            url: 'guests/delGuest/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'guests';
                } else {
                    // alert("")
                }

            }
        })

    }
</script>
