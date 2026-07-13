<section class="all_courses">
    <?php $this->load->view('common/top_section') ?>

    <div class="container site-content">


        <div class="row">

            <div class="col-md-9">

                <div class="upper_bar">


                    <div class="switch_layout">
                        <a href="">
                            <span class="fa fa-th-large"></span>
                        </a>
                        <a href="">
                            <span class="fa fa-list-ul"></span>
                        </a>
                    </div>

                    <div class="course_index">
                        <span> Showing 1-9 of 18 results</span>
                    </div>


                    <div class="course_order">
                        <select name="" class="form-control" id="">
                            <option value="">Newly published</option>
                            <option value="">Alphabetical</option>
                            <option value="">Most members</option>
                        </select>
                    </div>

                    <div class="course_search">

                        <div class="input-group">
                            <input type="text" class="form-control form-control-sm" placeholder="Search our courses"
                                   autocomplete="off">

                            <div class="input-group-append">
                                <button class="btn btn-sm btn-primary1"><span class="fa fa-search"></span></button>
                            </div>
                        </div>

                    </div>


                </div>


                <div class="course_list">


                    <div class="row">


                        <?php if (!empty($allCourses)) {
                            foreach ($allCourses as $cours) { ?>

                                <div class="course_item col-md-4 text-center"
                                     style="box-shadow: none;padding-bottom: 40px">


                                    <div class="course-thumbnail">
                                        <a href="frontend/courseDetail/<?php echo $cours->id ?>">
                                            <img src="<?php echo $cours->image ?>" width="200"
                                                 style="width: 100%;height: auto"
                                                 height="200">
                                        </a>
                                        <a style="visibility: hidden" class="course-readmore"
                                           href="frontend/courseDetail/<?php echo $cours->id ?>">
                                            Read More
                                        </a>
                                    </div>


                                    <div class="thim-course-content">
                                        <div class="course-author">
                                            <img class="avatar"
                                                 style="height: 40px;width: 40px;margin-left: auto;margin-right: auto"
                                                 src="<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2-40x40.jpg' ?>"
                                                 width="40" height="40">
                                            <div class="author-contain">
                                                <div class="value">
                                                    <a href="frontend/facultyDetail/<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->id : 1 ?>">
                                                        <?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->name : 'Admin' ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="course-title">
                                            <a href="frontend/courseDetail/<?php echo $cours->id ?>">
                                                <?php echo $cours->title ?>
                                            </a>
                                        </h2>
                                        <div class="course-meta">
                                            <div class="course-students">
                                                <div class="value">
                                                    <i class="fa fa-group">
                                                    </i>
                                                    <?php echo $cours->totalStudent ?>
                                                </div>
                                            </div>

                                            <div class="course-comments-count">
                                                <div class="value">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                    <?php echo $cours->duration . ' ' . $cours->duration_type ?>
                                                </div>
                                            </div>
                                            <div class="course-price">
                                                <div class="value course-price">
                                                    <?php echo number_format($cours->fees) ?> RS.
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>

                            <?php }
                        } ?>
                    </div>


                </div>


            </div>


            <div class="col-md-3">


                <?php $this->load->view('common/aside_course_filter') ?>
                <?php $this->load->view('common/aside_course_categories') ?>
                <?php $this->load->view('common/aside_latest_courses') ?>


            </div>
        </div>


    </div>

</section>


