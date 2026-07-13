<div class="container">


    <div class="row mt-5 mb-3">
        <div class="col-md-6">
            <h4>Popular Courses</h4>
        </div>
        <div class="col-md-6 text-right">
            <div class="btn-group btn-group-sm">
                <button id="pc_btn_pre" class="btn btn-sm btn-success"><span class="fa fa-chevron-left"></span>
                </button>
                <button id="pc_btn_next" class="btn btn-sm btn-success"><span class="fa fa-chevron-right"></span>
                </button>
            </div>
        </div>
    </div>

    <!--crousel goes here-->


    <div class="owl-carousel owl-theme" id="popluar_courses_carousel">


        <?php if (!empty($popularCourses)) {
            foreach ($popularCourses as $cours) { ?>


                <div class="course_item text-center">


                    <div class="course-thumbnail">
                        <a href="frontend/courseDetail/<?php echo $cours->id ?>">
                            <img src="<?php echo $cours->image ? $cours->image : 'web_assets/images/CPP.jpg' ?>"
                                 width="200"
                                 height="200">
                        </a>
                        <!--                        <a class="course-readmore"-->
                        <!--                           href="frontend/courseDetail/-->
                        <?php //echo $cours->id ?><!--">-->
                        <!--                            Read More-->
                        <!--                        </a>-->
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
                        <h3 class="course-title">
                            <a href="frontend/courseDetail/<?php echo $cours->id ?>">
                                <?php echo $cours->title ?>
                            </a>
                        </h3>
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
