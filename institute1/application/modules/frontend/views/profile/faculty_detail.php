<section class="faculty_detail">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">

        <div class="row">


            <div class="col-md-3">


                <div class="user-tab">
                    <div class="user-info">
                        <div class="author-avatar">
                            <img alt="Admin bar avatar"
                                 src="<?php echo $facultyDetail->img ? $facultyDetail->img : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3.jpg' ?> "
                                 class="avatar avatar-270 photo"
                                 height="270" width="270"/>
                        </div>
                        <div class="user-information">
                            <ul class="author-social text-center">
                                <li>
                                    <a href="<?php echo $facultyDetail->fb ?>"
                                       class="facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $facultyDetail->twitter ?>"
                                       class="twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo $facultyDetail->instagram ?>"
                                       class="google-plus"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                            <h3 class="author-name"><?php echo $facultyDetail->name ?></h3>
                            <p class="mr-2" style="text-align: justify">Hello, I’m a spider man, real spider man you alway see in
                                your TV. Surprise, i’m also a photographer and a photography
                                teacher. You know, in my films, i alway take a lot of photos
                                of me_spider man.</p>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-md-9">

                <h4 style="margin-bottom: 30px">My Courses</h4>

                <div class="row">


                    <?php foreach ($facultyDetail->courses as $cours) { ?>


                        <div class="col-md-4 course-item text-center">


                            <div class="course-thumbnail">
                                <a class="thumb" href="frontend/courseDetail/<?php echo $cours->id ?>">
                                    <img src="<?php echo $cours->image ? $cours->image : 'web_assets/uploads/2015/06/course-6-400x320.jpg' ?>"
                                         alt="<?php echo $cours->title ?>"
                                         width="400"
                                         height="320">
                                </a>
                            </div>


                            <div class="course-content">


                                <div class="course-author">
                                    <img style="height: 40px"
                                         src="<?php echo $facultyDetail->img ? $facultyDetail->img : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3-40x40.jpg' ?>"
                                         alt="author-avatar"
                                         title="author-avatar">


                                    <div>
                                        <div class="value">
                                            <a href="javascript:void(0)">
                                                <?php echo $facultyDetail->name ?>
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
                                            <i class="fa fa-group"></i>
                                            <?php echo $cours->totalStudent ?>
                                        </div>
                                    </div>
                                    <div class="course-comments-count">
                                        <div class="value">
                                            <i class="fa fa-comment"></i>
                                            0
                                        </div>
                                    </div>
                                    <div class="course-price pull-right">
                                        <div class="value">
                                            <?php echo number_format($cours->fees) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php } ?>

                </div>


            </div>


        </div>


    </div>

</section>
