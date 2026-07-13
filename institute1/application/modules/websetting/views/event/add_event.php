<div class="card">
    <div class="card-header">
        <h4 class="card-title">Add Event</h4>
        <div class="card-header-action">
            <a href="websetting/event" class="btn active">Events</a>
        </div>
    </div>
    <div class="card-body">

        <form action="websetting/event/addEvent" method="post" enctype="multipart/form-data"
              class="needs-validation" novalidate="">

            <input type="hidden" name="id" value="<?php if (!empty($eventDetail)) {
                echo $eventDetail->id;
            } ?>">
            <input type="hidden" name="old_image" value="<?php if (!empty($eventDetail)) {
                echo $eventDetail->image;
            } ?>">

            <div class="form-group">
                <label>Title</label>
                <div class="input-group">
                    <input autocomplete="off" required value="<?php if (!empty($eventDetail)) {
                        echo $eventDetail->title;
                    } ?>" name="title"
                           type="text" class="form-control"
                           placeholder="Title">
                    <div class="invalid-feedback">
                        Please fill title
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Image</label>

                <div id="image-preview" style="width: auto" class="image-preview">
                    <label for="image-upload" id="image-label">Choose File</label>
                    <input type="file" name="image" id="image-upload"/>
                </div>

            </div>
            <div class="form-group">
                <label>Event Description</label>
                <textarea required class="form-control w-100" name="description" id="ckeditor"
                          rows="10"><?php if (!empty($eventDetail)) {
                        echo $eventDetail->description;
                    } ?></textarea>
                <div class="invalid-feedback">
                    Please fill Description
                </div>
            </div>

            <div class="form-group">
                <label>Event Content</label>
                <textarea required class="form-control w-100 ckeditor" name="event_content" id="ckeditor1"
                          rows="10"><?php if (!empty($eventDetail)) {
                        echo $eventDetail->event_content;
                    } ?></textarea>
                <div class="invalid-feedback">
                    Please fill event content
                </div>
            </div>

            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Host</label>
                        <select required name="members[]" multiple="" class="form-control select2">
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
                            Please fill course
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Add Host</label>
                        <a href="guests" class="btn btn-sm btn-primary"><span class="fa fa-plus"></span></a>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>Date</label>
                <div class="input-group">
                    <input value="<?php if (!empty($eventDetail)) {
                        echo $eventDetail->date;
                    } ?>" autocomplete="off" required name="date" type="text" class="form-control datepicker"
                           placeholder="Date">
                    <div class="invalid-feedback">
                        Please fill date
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Timing</label>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <input value="<?php if (!empty($eventDetail)) {
                                echo $eventDetail->start_time;
                            } ?>" autocomplete="off" required
                                   name="start_time" type="text"
                                   class="form-control timepicker"
                                   placeholder="Time">
                            <div class="invalid-feedback">
                                Please fill timing
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input value="<?php if (!empty($eventDetail)) {
                                echo $eventDetail->end_time;
                            } ?>" autocomplete="off" required
                                   name="end_time" type="text"
                                   class="form-control timepicker"
                                   placeholder="Time">
                            <div class="invalid-feedback">
                                Please fill timing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Location</label>
                <div class="input-group">
                    <input value="<?php if (!empty($eventDetail)) {
                        echo $eventDetail->location;
                    } ?>" autocomplete="off" required name="location"
                           type="text" class="form-control"
                           placeholder="Location">
                    <div class="invalid-feedback">
                        Please fill location
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cost</label>
                        <div class="input-group">
                            <input value="<?php if (!empty($eventDetail)) {
                                echo $eventDetail->cost;
                            } ?>" autocomplete="off" required name="cost"
                                   type="number" class="form-control"
                                   placeholder="Cost">
                            <div class="invalid-feedback">
                                Please fill cost
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Total Slots</label>
                        <div class="input-group">
                            <input value="<?php if (!empty($eventDetail)) {
                                echo $eventDetail->total_slots;
                            } ?>" autocomplete="off" required
                                   name="total_slots" type="number"
                                   class="form-control"
                                   placeholder="Total Slots">
                            <div class="invalid-feedback">
                                Please fill total slots
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- /.form group -->
            <div class="text-right">
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
            </div>

        </form>


    </div>
</div>
