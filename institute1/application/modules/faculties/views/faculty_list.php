<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" href="assets/frontend/css/star-rating.min.css">

<script src="assets/frontend/js/star-rating.min.js"></script>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Faculty List</h4>
                <?php if ($this->permission->check_label('faculties')->create()->access()) { ?>
                    <div class="card-header-action">
                        <a href="faculties/addFaculty" class="btn active">Add Faculty</a>
                    </div>
                <?php } ?>
            </div>
            <div class="card-body">


                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (!empty($faculties)) {
                            $i = 0;
                            foreach ($faculties as $item) {
                                $i++; ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                        <a href="faculties/facultyDetail/<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                    </td>
                                    <td><?php echo $item->mobile ?></td>
                                    <td><?php echo $item->email ?></td>
                                    <td><?php
                                        $total = count($item->facultyCourses);
                                        $i     = 0;
                                        foreach ($item->facultyCourses as $facultyCours) {


                                            echo $facultyCours;
                                            if (++$i !== $total) {

                                                echo " , ";
                                            }
                                        }

                                        ?></td>

                                    <td>

                                        <input readonly value="<?php echo $item->avg_rating ?>"
                                               class="rating-stars ratingbar"
                                               data-min="0"
                                               data-max="5"
                                               data-step="1">

                                    </td>

                                    <td>
                                        <?php if ($item->status == 1) { ?>
                                            <div style="cursor:pointer"
                                                 class="badge badge-primary">Approved
                                            </div>
                                        <?php } else { ?>

                                            <div style="cursor:pointer"
                                                 class="badge badge-warning">Pending
                                            </div>
                                        <?php } ?>
                                    </td>


                                    <td class="text-center">
                                        <div class="btn-group btn-group-sm">
                                            <?php if ($this->permission->check_label('faculties')->update()->access()) { ?>
                                                <a href="faculties/editFaculty/<?php echo $item->id ?>"
                                                   class="btn btn sm">
                                                    <span class="far fa-edit"></span>
                                                </a>
                                            <?php } ?>
                                            <?php if ($this->permission->check_label('faculties')->delete()->access()) { ?>
                                                <button class="btn btn-sm"
                                                        onclick="deleteFaculty('<?php echo $item->id ?>')">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            <?php } ?>
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
    function deleteFaculty(id) {
        $.ajax({
            url: 'faculties/deleteFaculty/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'faculties';
                } else {
                    // alert("")
                }

            }
        })

    }

    $(function () {
        $('.ratingbar').rating({
            showCaption: false,
            showClear: false,
            size: 'sm'
        });
    })
</script>
