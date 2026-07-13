<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-4">
        <div class="card author-box">
            <div class="card-body">
                <div class="author-box-center">
                    <img alt="image" src="<?php echo $detail->img ? $detail->img : 'assets/img/users/user-1.png'; ?>"
                         class="rounded-circle author-box-picture">
                    <div class="clearfix"></div>
                    <div class="author-box-name">
                        <a href="#"><?php echo $detail->name ?></a>
                    </div>
                    <div class="author-box-job">Web Developer</div>
                </div>
                <div class="text-center">
                    <div class="author-box-description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur voluptatum alias
                            molestias
                            minus quod dignissimos.
                        </p>
                    </div>
                    <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold">Follow Hasan On</div>
                    </div>
                    <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <div class="w-100 d-sm-none"></div>
                </div>
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
                          30-05-1998
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
                        <a class="nav-link" id="students-tab2" data-toggle="tab" href="#students" role="tab"
                           aria-selected="false">Students</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="batches-tab2" data-toggle="tab" href="#batches" role="tab"
                           aria-selected="false">Batches</a>
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
                                <p class="text-muted">(123) 456 7890</p>
                            </div>
                            <div class="col-md-3 col-6 b-r">
                                <strong>Email</strong>
                                <br>
                                <p class="text-muted"><?php echo $detail->email ?></p>
                            </div>
                            <div class="col-md-3 col-6">
                                <strong>Location</strong>
                                <br>
                                <p class="text-muted"><?php echo $detail->address ?></p>
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
                            <li><?php echo $detail->qualification ?></li>
                        </ul>
                        <div class="section-title">Experience</div>
                        <ul>
                            <li><?php echo $detail->experience . ' Years' ?>
                            </li>
                            <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                Collage
                                from April - 2008 to April - 2011.
                            </li>
                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry.
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade table-responsive" id="students" role="tabpanel"
                         aria-labelledby="students-tab2">

                        <table class="table table-striped table-sm table-hover" id="save-stage" style="width:100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <!--                                <th>Email</th>-->
                                <!--                                <th>Mobile</th>-->
                                <!--                                <th>CNIC</th>-->
                                <th>Course</th>
                                <th>Batch</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (!empty($detail->students)) {
                                $i = 0;
                                foreach ($detail->students as $item) {
                                    $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <a href="students/studentDetail/<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                        </td>
                                        <!--                                        <td>-->
                                        <?php //echo $item->email ?><!--</td>-->
                                        <!--                                        <td>-->
                                        <?php //echo $item->mobile ?><!--</td>-->
                                        <!--                                        <td>-->
                                        <?php //echo $item->cnic ?><!--</td>-->
                                        <td><?php echo $item->courseTitle ?></td>
                                        <td><?php echo $item->batchTitle ?></td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="students/editStudent/<?php echo $item->id ?>"
                                                   class="btn btn sm">
                                                    <span class="far fa-edit"></span>
                                                </a>
                                                <button hidden class="btn btn-sm"
                                                        onclick="deleteStudent('<?php echo $item->id ?>')">
                                                    <span class="far fa-trash-alt"></span>
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
                    <div class="tab-pane fade" id="batches" role="tabpanel" aria-labelledby="batches-tab2">

                        <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Batch Title</th>
                                <th>Course</th>
                                <th>Batch Time</th>
                                <th class="text-center">Total Students</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php if (!empty($detail->batches)) {
                                $i = 0;
                                foreach ($detail->batches as $item) {
                                    $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <a href="batches/batchDetail/<?php echo $item->id ?>"><?php echo $item->title ?></a>
                                        </td>
                                        <td><?php echo $item->courseTitle ?></td>
                                        <td><?php echo $item->batch_time ?></td>
                                        <td class="text-center"><?php echo $item->totalStudents ?></td>
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
</div>
