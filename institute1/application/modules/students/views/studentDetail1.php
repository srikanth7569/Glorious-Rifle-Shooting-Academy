<!-- Font awesome -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<link rel="stylesheet" href="assets/frontend/css/star-rating.min.css">

<script src="assets/frontend/js/star-rating.min.js"></script>

<i class="glyphi"></i>
<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-4">
        <div class="card author-box">
            <div class="card-body">
                <div class="author-box-center">
                    <img alt="image" src="<?php echo $detail->image ? $detail->image : 'assets/img/users/user-1.png' ?>"
                         class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <div class="author-box-name">
                        <a href="#"><?php echo $detail->name ?></a>
                    </div>
                    <div class="author-box-job"><?php echo $detail->courseTitle ?></div>
                </div>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item listnoback">
                        <b>Admission No.</b> <a class="pull-right text-aqua"><?php echo $detail->regNo ?></a>
                    </li>
                    <li class="list-group-item listnoback">
                        <b>Batch</b> <a class="pull-right text-aqua"><?php echo $detail->batchTitle ?></a>
                    </li>
                    <li class="list-group-item listnoback">
                        <b>Gender</b> <a
                                class="pull-right text-aqua"><?php echo $detail->gender == 1 ? 'Male' : 'Female' ?></a>
                    </li>
                </ul>


            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Personal Details</h4>
            </div>
            <div class="card-body">
                <div class="py-4">
                    <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $detail->dob ?>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $detail->mobile ?>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                          <?php echo $detail->email ?>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Facebook
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">John Deo</a>
                        </span>
                    </p>
                    <p class="clearfix">
                        <span class="float-left">
                          Twitter
                        </span>
                        <span class="float-right text-muted">
                          <a href="#">@johndeo</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4>Skills</h4>
            </div>
            <div class="card-body">
                <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                    <li class="media">
                        <div class="media-body">
                            <div class="media-title">Java</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                                <div class="progress-bar bg-primary" data-width="70%"></div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <div class="media-title">Web Design</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                                <div class="progress-bar bg-warning" data-width="80%"></div>
                            </div>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-body">
                            <div class="media-title">Photoshop</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                            <div class="progress" data-height="6">
                                <div class="progress-bar bg-green" data-width="48%"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-8">
        <div class="card">
            <div class="padding-20">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                           aria-selected="true">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="faculty-tab2" data-toggle="tab" href="#faculty" role="tab"
                           aria-selected="false">Faculty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                           aria-selected="false">Fees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="blogs-tab2" data-toggle="tab" href="#blogs" role="tab"
                           aria-selected="false">Blogs</a>
                    </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">


                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <div class="row">
                            <div class="col-md-3 col-6 b-r">
                                <strong>Full Name</strong>
                                <br>
                                <p class="text-muted"><?php echo $detail->name ?></p>
                            </div>
                            <div class="col-md-3 col-6 b-r">
                                <strong>Mobile</strong>
                                <br>
                                <p class="text-muted"><?php echo $detail->mobile ?></p>
                            </div>
                            <div class="col-md-3 col-6 b-r">
                                <strong>Email</strong>
                                <br>
                                <p class="text-muted"><?php echo $detail->email ?></p>
                            </div>
                            <div class="col-md-3 col-6">
                                <strong class="text-center">Action</strong>
                                <br>


                                <div class="btn-group btn-group-sm">
                                    <a href="students/editStudent/<?php echo $detail->id ?>"
                                       class="btn btn sm">
                                        <span class="far fa-edit"></span>
                                    </a>
                                    <button class="btn btn-sm"
                                            onclick="deleteStudent('<?php echo $detail->id ?>')">
                                        <span class="far fa-trash-alt"></span></button>

                                </div>

                                <!--                                <p class="text-muted">-->
                                <?php //echo $detail->address?><!--</p>-->
                            </div>
                        </div>
                        <p class="m-t-30">Completed my graduation in Arts from the well known and
                            renowned institution
                            of India – SARDAR PATEL ARTS COLLEGE, BARODA in 2000-01, which was
                            affiliated
                            to M.S. University. I ranker in University exams from the same
                            university
                            from 1996-01.</p>
                        <div class="section-title">Education</div>
                        <ul>
                            <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                            <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                            <li>P.H.D., Shaurashtra University, Rajkot</li>
                        </ul>
                        <div class="section-title">Experience</div>
                        <ul>
                            <li>One year experience as Jr. Professor from April-2009 to march-2010
                                at B.
                                J. Arts College, Ahmedabad.
                            </li>
                            <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                Collage
                                from April - 2008 to April - 2011.
                            </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </li>
                        </ul>
                    </div>

                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">


                        <div class="table-responsive">

                            <table class="table table-striped" style="font-size: 8pt;">
                                <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Batch</th>
                                    <th class="text text-right">Total Fees</th>
                                    <th class="text text-center">Payment Id</th>
                                    <th class="text text-center">Mode</th>
                                    <th class="text-center">Date</th>
                                    <th class="text text-right">Paid</th>
                                    <th class="text text-right">Due</th>
                                    <th class="text-right">Return</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="dark-gray">

                                    <td><?php echo $detail->courseTitle ?></td>
                                    <td><?php echo $detail->batchTitle ?></td>
                                    <td class="text text-right"><?php echo number_format($detail->student_agreed_fee) ?></td>

                                    <td colspan="3"></td>
                                    <td class="text text-right"></td>
                                    <td class="text text-right"></td>
                                    <td class="text text-right"></td>

                                </tr>


                                <?php
                                $total_fee_paid = 0;

                                $row_id = 0;
                                foreach ($detail->FeeDetail as $item) {
                                    $row_id++;
                                    $total_fee_paid += $item->amount;

                                    ?>
                                    <tr class="white-td" id="<?php echo $row_id ?>">
                                        <td colspan="3" class="text-right">
                                            <img src="assets/img/table-arrow.png"
                                                 alt=""/>
                                        </td>
                                        <td class="text text-center">
                                            <?php echo $item->receiptNo ?>
                                        </td>
                                        <td class="text text-center">Cash</td>
                                        <td class="text text-center">
                                            <?php echo $item->date ?>
                                        </td>
                                        <td class="text text-right"><?php echo number_format($item->amount) ?></td>
                                        <td class="text text-right"><?php echo number_format($detail->student_agreed_fee - $total_fee_paid) ?>
                                        </td>
                                        <td class="text-center">
                                            <button onclick="returnFee('<?php echo $item->id ?>','<?php echo $row_id ?>')"
                                                    class="btn btn-danger btn-sm">
                                                <span class="fa fa-undo"></span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab2">

                        <div class="table-responsive">


                            <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th class="text-center">Your Rating</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php if (!empty($detail->facultyDetail)) {
                                    $i    = 0;
                                    $item = $detail->facultyDetail;
                                    $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <?php echo $item->name ?>
                                        </td>
                                        <td><?php echo $item->mobile ?></td>
                                        <td><?php echo $item->email ?></td>


                                        <td class="text-center">
                                            <input type="hidden" id="course_id" value="<?php echo $detail->courseID ?>">
                                            <input type="hidden" id="faculty_id" value="<?php echo $item->id ?>">
                                            <input readonly value="<?php echo $item->rating ?>"
                                                   class="rating-stars ratingbar"
                                                   data-min="0"
                                                   data-max="5"
                                                   data-step="1">


                                            <!--                                            <div>Average Rating:-->
                                            <!--                                                <span>-->
                                            <?php //echo $item->avg_rating ?><!--</span>-->
                                            <!--                                            </div>-->
                                        </td>
                                        <td class="text-center">
                                            <button onclick="show_rating_modal()" class="btn btn-sm btn-primary"><span
                                                        class="fa fa-star"> Rating</span></button>
                                        </td>


                                    </tr>
                                    <?php
                                } ?>


                                </tbody>
                            </table>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="blogs" role="tabpanel" aria-labelledby="blogs-tab2">

                        <div class="table-responsive">

                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                </tr>


                                <?php if (!empty($detail->blogs)) {
                                    foreach ($detail->blogs as $blog) {
                                        ?>

                                        <tr>
                                            <td><?php echo $blog->title ?>
                                                <div class="table-links">
                                                    <a href="websetting/blogs/blogDetail/<?php echo $blog->id ?>">View</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $blog->categoryName ?>
                                            </td>
                                            <td><?php echo date('d-m-Y', strtotime($blog->created_at)) ?></td>
                                            <td>3,587</td>
                                            <td>
                                                <?php if ($blog->status == 1) { ?>
                                                    <div style="cursor:pointer"
                                                         onclick="onChangeStatus('<?php echo $blog->id ?>')"
                                                         class="badge badge-primary">Published
                                                    </div>
                                                <?php } else { ?>

                                                    <div style="cursor:pointer"
                                                         onclick="onChangeStatus('<?php echo $blog->id ?>')"
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
        </div>
    </div>
</div>
<script>
    function deleteStudent(id) {
        $.ajax({
            url: 'students/deleteStudent/' + id,
            success: function (data) {
                if (data) {
                    window.location = 'students';
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

        // Rating change
        $('.ratingbar').on('rating:change', function (event, value, caption) {

            let course_id = $('#course_id').val();
            let faculty_id = $('#faculty_id').val();
            // var id = this.id;
            // var splitid = id.split('_');
            // var postid = splitid[1];


            $.ajax({
                url: 'faculties/userRating',
                type: 'post',
                data: {
                    f_id: faculty_id,
                    course_id: course_id,
                    rating: value
                },
                success: function (response) {
                    // $('#averagerating_' + postid).text(response);
                }
            });
        });


    });

    function saveRating() {
        let rating = $('#m_rating').val();
        let review = $('#m_review').val();
        let course_id = $('#course_id').val();
        let faculty_id = $('#faculty_id').val();

        $.ajax({
            url: 'faculties/userRating',
            type: 'post',
            data: {
                f_id: faculty_id,
                course_id: course_id,
                rating: rating,
                review: review
            },
            success: function (response) {
                if (response) {
                    $('#common_modal').modal('hide');
                    show_toaster('Thanks for your review');
                }
            }
        });


    }

    function show_rating_modal() {

        let course_id = $('#course_id').val();
        let faculty_id = $('#faculty_id').val();


        $.ajax({
            url: 'faculties/getUserRating',
            type: 'post',
            data: {
                course_id: course_id,
                faculty_id: faculty_id
            },
            success: function (data) {

                let inputs = '<div class="form-group">' +
                    '<input id="m_rating" class="rating-stars ratingbar" data-min="0" data-max="5" data-step="1">' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<textarea id="m_review" class="form-control" placeholder="Your awesome comments"></textarea>' +
                    '</div>' +
                    '<div class="form-group">' +
                    '<button onclick="saveRating()" class="btn btn-primary"> <span class="fa fa-save"></span> Submit</button>';


                $('#common_modal .modal-title').text('Your Review');
                $('#common_modal .modal-body').html(inputs);
                $('#common_modal .modal-footer').hide();
                $('#common_modal').modal('show');
                $('.ratingbar').rating({
                    showCaption: false,
                    showClear: false,
                    size: 'sm'
                });


                if (data) {
                    let obj = jQuery.parseJSON(data);
                    $('#m_rating').val(obj.rating);
                }
            }
        });


    }

    function returnFee(fid, row_id) {


        if (confirm('Are you sure ?')) {


            $.ajax({
                url: 'fee/delFee',
                type: 'post',
                data: {
                    fid: fid
                },
                success: function (data) {
                    if (data) {
                        $('#' + row_id).remove();
                    } else {
                        show_toaster('Some Error Occurred', false);
                    }

                }
            });


        }


    }
</script>
