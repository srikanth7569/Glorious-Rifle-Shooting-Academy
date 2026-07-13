<section class="course_detail">
    <?php $this->load->view('common/top_section') ?>

    <div class="container site-content">


        <div class="row">
            <div class="col-md-9">
                <h4 class="title"><?php echo $courseDetail->title ?></h4>

                <div class="course-meta mb-0">
                    <div class="course-author">

                        <img src="<?php echo sizeof($courseDetail->courseFaculties) > 0 ? $courseDetail->courseFaculties[0]->img : '' ?>"
                             class="avatar" height="96" width="96"/>
                        <div class="author-contain">
                            <label>Teacher</label>
                            <div class="value">
                                <a href="frontend/facultyDetail/<?php echo sizeof($courseDetail->courseFaculties) > 0 ? $courseDetail->courseFaculties[0]->id : 1 ?>"><?php echo sizeof($courseDetail->courseFaculties) > 0 ? $courseDetail->courseFaculties[0]->name : '' ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="course-categories">
                        <label>Categories</label>
                        <div class="value">
                                            <span>
                                                <a href="javascript:void(0)">
                                                    <?php echo $courseDetail->courseCategoryTitle ?>
                                                </a>
                                            </span>
                        </div>
                    </div>

                    <div class="course-review">
                        <label>Review</label>

                        <div class="value">
                            <div class="review-stars-rated">


                                <ul class="review-stars filled"
                                    style="width: calc(100% - 2px)">

                                    <?php for ($i = 1; $i <= round($courseDetail->courseRating->avgRating); $i++) { ?>
                                        <li><span class="fa fa-star"></span></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <span>(<?php echo sizeof($courseDetail->courseRating->ratings) ?> review)</span>
                        </div>


                    </div>
                </div>


                <div class="course-payment">
                    <div class="course-price">
                        <div class="value ">
                            <?php echo number_format($courseDetail->fees) . 'Rs' ?>
                        </div>
                    </div>

                    <!--                    <div class="lp-course-button">-->
                    <!--                        <button class="btn btn-outline-primary">-->
                    <!--                            Buy Now-->
                    <!--                        </button>-->
                    <!--                    </div>-->
                </div>


                <div class="course_summary">
                    <div class="course-thumbnail">
                        <img width="870" style="height: 450px" height="500"
                             src="<?php echo $courseDetail->image ?>" alt="course-16"/>
                    </div>

                    <div class="">

                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#overview"
                                   role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#curriculum"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">Curriculum</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#instructor"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Instructor</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#reviews"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a>
                            </div>
                        </nav>


                        <div class="tab-content py-3  px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                 aria-labelledby="nav-home-tab">


                                <div class="tab_content">


                                    <div class="course-description">
                                        <div class="course-content">
                                            <h4 class="mb-2">COURSE DESCRIPTION</h4>

                                            <?php echo $courseDetail->description ?>

                                            <?php if ($courseDetail->learning_outcomes) { ?>
                                                <h4 class="mb-3 mt-2">Learning Outcomes</h4>
                                                <?php echo $courseDetail->learning_outcomes ?>
                                            <?php } ?>


                                        </div>


                                        <div class="course-info">
                                            <h4 class="title">Course Features</h4>
                                            <ul>
                                                <li class="lectures-feature">
                                                    <i class="fa fa-files-o"></i>
                                                    <span class="label">Lectures</span>
                                                    <span class="value"><?php echo $courseDetail->no_of_lec ?></span>
                                                </li>

                                                <li class="quizzes-feature">
                                                    <i class="fa fa-puzzle-piece"></i>
                                                    <span class="label">Quizzes</span>
                                                    <span class="value"><?php echo $courseDetail->no_of_quizz ?></span>
                                                </li>

                                                <li class="duration-feature">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span class="label">Duration</span>
                                                    <span class="value"><?php echo $courseDetail->duration . ' ' . $courseDetail->duration_type ?></span>
                                                </li>
                                                <li class="skill-feature">
                                                    <i class="fa fa-level-up"></i>
                                                    <span class="label">Skill level</span>
                                                    <span class="value"><?php echo $courseDetail->skill_level == 1 ? 'Basic' : 'Advanced' ?></span>
                                                </li>
                                                <li class="language-feature">
                                                    <i class="fa fa-language"></i>
                                                    <span class="label">Language</span>
                                                    <span class="value"><?php echo $courseDetail->language == 1 ? 'English' : 'Urdu' ?></span>
                                                </li>
                                                <li class="students-feature">
                                                    <i class="fa fa-users"></i>
                                                    <span class="label">Students</span>
                                                    <span class="value"><?php echo number_format($courseDetail->totalStudent) ?></span>
                                                </li>
                                                <li class="assessments-feature">
                                                    <i class="fa fa-check-square-o"></i>
                                                    <span class="label">Assessments</span>
                                                    <span class="value"><?php echo $courseDetail->assessments == 1 ? 'Yes' : 'No' ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane fade curriculum" id="curriculum" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">


                                <ul>

                                    <?php if (!empty($cc_chapter)) {
                                        $i = 0;
                                        foreach ($cc_chapter as $item) {

                                            if (!empty($item)) {

                                                ?>

                                                <li>


                                                    <div class="meta-left">

                                                <span class="cc_icon">
                                                    <i class="fa fa-file-o"></i>
                                                </span>
                                                        <div class="index">
                                                            <?php echo $item ?>
                                                        </div>
                                                    </div>

                                                    <div class="chapter_detail">

                                                        <?php echo $cc_chapter_detail[$i] ?>

                                                    </div>


                                                </li>

                                            <?php }
                                            $i++;
                                        }
                                    } ?>
                                </ul>


                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">


                                <div class="course-rating">
                                    <h3>Reviews</h3>
                                    <div class="average-rating">
                                        <p class="rating-title">Average Rating</p>
                                        <div class="rating-box">
                                            <div class="average-value">
                                                <?php echo $courseDetail->courseRating->avgRating ?>
                                            </div>


                                            <div class="value">
                                                <div class="review-stars-rated">


                                                    <ul class="review-stars filled"
                                                        style="width: calc(100% - 2px)">

                                                        <?php for ($i = 1; $i <= round($courseDetail->courseRating->avgRating); $i++) { ?>
                                                            <li><span class="fa fa-star"></span>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>


                                                </div>
                                            </div>
                                            <div class="review-amount">
                                                <?php echo sizeof($courseDetail->courseRating->ratings) ?>
                                                rating
                                            </div>
                                        </div>
                                    </div>


                                    <div class="detailed-rating">
                                        <p class="rating-title">Detailed Rating</p>
                                        <div class="rating-box" style="width: 330px">
                                            <div class="detailed-rating" style="width: 320px;">

                                                <?php

                                                $this->db->select('count(rating) as no_of_rating');
                                                $this->db->where('rating', 5);
                                                $this->db->where('course_id', $courseDetail->id);
                                                $five_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                $this->db->select('count(rating) as no_of_rating');
                                                $this->db->where('rating', 4);
                                                $this->db->where('course_id', $courseDetail->id);
                                                $four_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                $this->db->select('count(rating) as no_of_rating');
                                                $this->db->where('rating', 3);
                                                $this->db->where('course_id', $courseDetail->id);
                                                $three_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                $this->db->select('count(rating) as no_of_rating');
                                                $this->db->where('rating', 2);
                                                $this->db->where('course_id', $courseDetail->id);
                                                $two_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                $this->db->select('count(rating) as no_of_rating');
                                                $this->db->where('rating', 1);
                                                $this->db->where('course_id', $courseDetail->id);
                                                $one_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                $five_star_percent  = ($five_star / 5) * 100;
                                                $four_star_percent  = ($four_star / 5) * 100;
                                                $three_star_percent = ($three_star / 5) * 100;
                                                $two_star_percent   = ($two_star / 5) * 100;
                                                $one_star_percent   = ($one_star / 5) * 100;

                                                ?>


                                                <div class="row" style="padding: 0 30px 3px;">
                                                    <div class="col-md-4">
                                                        5 Stars
                                                    </div>
                                                    <div class="progress col"
                                                         style="display: inline-table;position: static;border: none;background-color: #e9ecef;border-radius: unset;padding-left: 0;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo $five_star_percent ?>%;background-color: #3fa1a8"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $five_star_percent . '%' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 0 30px 3px;">
                                                    <div class="col-md-4">
                                                        4 Stars
                                                    </div>
                                                    <div class="progress col"
                                                         style="display: inline-table;position: static;border: none;background-color: #e9ecef;border-radius: unset;padding-left: 0;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo $four_star_percent ?>%;background-color: #3fa1a8"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $four_star_percent . '%' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 0 30px 3px;">
                                                    <div class="col-md-4">
                                                        3 Stars
                                                    </div>
                                                    <div class="progress col"
                                                         style="display: inline-table;position: static;border: none;background-color: #e9ecef;border-radius: unset;padding-left: 0;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo $three_star_percent ?>%;background-color: #3fa1a8"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $three_star_percent . '%' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 0 30px 3px;">
                                                    <div class="col-md-4">
                                                        2 Stars
                                                    </div>
                                                    <div class="progress col"
                                                         style="display: inline-table;position: static;border: none;background-color: #e9ecef;border-radius: unset;padding-left: 0;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo $two_star_percent ?>%;background-color: #3fa1a8"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $two_star_percent . '%' ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding: 0 30px 3px;">
                                                    <div class="col-md-4">
                                                        1 Star
                                                    </div>
                                                    <div class="progress col"
                                                         style="display: inline-table;position: static;border: none;background-color: #e9ecef;border-radius: unset;padding-left: 0;">
                                                        <div class="progress-bar" role="progressbar"
                                                             style="width: <?php echo $one_star_percent ?>%;background-color: #3fa1a8"
                                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            <?php echo $one_star_percent . '%' ?>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="course-review">
                                    <div id="course-reviews" class="content-review">
                                        <ul>

                                            <?php foreach ($courseDetail->courseRating->ratings as $rating) { ?>

                                                <li>
                                                    <div class="review-container">
                                                        <div class="review-author">
                                                            <img src="<?php echo $rating->image ? $rating->image : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2.jpg' ?>"
                                                                 class="avatar"
                                                                 height="96" width="96"/>
                                                        </div>
                                                        <div class="review-text">
                                                            <h4 class="author-name">

                                                                <?php echo $rating->firstname ?> </h4>


                                                            <ul style="padding: 0;" class="d-inline">

                                                                <?php for ($i = 1; $i <= round($rating->rating); $i++) { ?>
                                                                    <li class="p-0 d-inline border-0">
                                                                        <span style="color: #3fa1a8;font-size: 13px;"
                                                                              class="fa fa-star"></span>
                                                                    </li>
                                                                <?php } ?>

                                                            </ul>


                                                            <div class="review-star d-none">
                                                                <div class="review-stars-rated">

                                                                    <ul class="review-stars filled"
                                                                        style="width: calc(100% - 2px)">
                                                                        <?php for ($i = 1; $i <= round($rating->rating); $i++) { ?>
                                                                            <li>
                                                                                <span class="fa fa-star"></span>
                                                                            </li>
                                                                        <?php } ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="description mt-3">
                                                                <p>
                                                                    <?php echo $rating->review ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            <?php } ?>


                                        </ul>
                                    </div>
                                </div>


                            </div>


                            <div class="tab-pane fade" id="instructor" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">


                                <div class="tab_content">

                                    <?php if (!empty($courseDetail->courseFaculties)) {
                                        foreach ($courseDetail->courseFaculties as $faculty) { ?>

                                            <div class="about-author">
                                                <div>
                                                    <div class="author-avatar">
                                                        <img src="<?php echo $faculty->img ?>"
                                                             class="avatar"
                                                             height="110" width="110"/>
                                                    </div>
                                                    <div class="author-bio">
                                                        <div class="author-top">
                                                            <a class="name"
                                                               href="javascript:void(0)">
                                                                <?php echo $faculty->name ?> </a>
                                                            <p class="job">Web Developer</p>
                                                        </div>

                                                        <ul class="author-social">
                                                            <li>
                                                                <a href="<?php echo $faculty->fb ?>"
                                                                   class="facebook"><i
                                                                            class="fa fa-facebook"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo $faculty->twitter ?>"
                                                                   class="twitter"><i
                                                                            class="fa fa-twitter"></i></a>
                                                            </li>

                                                            <li>
                                                                <a href="<?php echo $faculty->instagram ?>"
                                                                   class="linkedin"><i
                                                                            class="fa fa-instagram"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="author-description">
                                                        Hello, I’m a spider man, real spider man you
                                                        alway see in your TV. Surprise, i’m also a
                                                        photographer and a photography teacher. You
                                                        know, in my films, i alway take a lot of
                                                        photos of me_spider man.
                                                    </div>
                                                </div>
                                            </div>


                                        <?php }
                                    } ?>


                                </div>


                            </div>
                        </div>


                    </div>


                    <div class="share_links">
                        <ul class="thim-social-share">
                            <li class="heading">Share:</li>

                            <li>
                                <div class="facebook-social">


                                    <a href="<?php echo current_url() ?>" target="_blank"
                                       data-image="<?php echo base_url() . $courseDetail->image ?>"
                                       data-title="<?php echo $courseDetail->title ?>"
                                       data-desc="<?php echo $courseDetail->description ?>"
                                       class="btnFBShare facebook"><i class="fa fa-facebook"></i></a>


                                </div>
                            </li>


                            <li>
                                <div class="twitter-social">
                                    <a target="_blank" class="twitter"
                                       href="http://twitter.com/share?text=<?php echo $courseDetail->title ?>&url=<?php echo urlencode(current_url()) ?>"
                                       title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                            </li>


                            <li>
                                <div class="pinterest-social">
                                    <a target="_blank" class="pinterest"
                                       href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(current_url()) ?>&media=<?php echo $courseDetail->image ?>">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>


                </div>


                <div class="ralated_course">
                    <h3 class="related-title">
                        You May Like </h3>
                    <div>
                        <div class="owl-carousel owl-theme" id="you_may_like">


                            <?php
                            $related_courses = $this->courses_model->getAllCourses(null, $courseDetail->categoryID);
                            ?>

                            <?php foreach ($related_courses as $course_item) {

                                if ($course_item->id == $courseDetail->id) {
                                    continue;
                                }

                                ?>


                                <div class="lpr_course">

                                    <div class="course-item" style="border-bottom: 1px solid #e5e5e5;">
                                        <div class="course-thumbnail">
                                            <a class="thumb"
                                               href="frontend/courseDetail/<?php echo $course_item->id ?>">
                                                <img src="<?php echo $course_item->image ? $course_item->image : 'web_assets/uploads/2015/06/course-1-450x450.jpg' ?>"
                                                     width="450" height="450">
                                            </a>
                                        </div>


                                        <div class="course-content">
                                            <div class="course-author">


                                                <img style="height: 40px;width: 40px;margin-left: auto; margin-right: auto;"
                                                     src="<?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2.jpg' ?>"
                                                     class="avatar" height="40"
                                                     width="40"/>
                                                <div class="author-contain">
                                                    <div class="value">
                                                        <a href="frontend/facultyDetail/<?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->id : 1 ?>">
                                                            <?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->name : 'Admin' ?> </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h2 class="course-title">
                                                <a href="frontend/courseDetail/<?php echo $course_item->id ?>">
                                                    <?php echo $course_item->title ?>
                                                </a>
                                            </h2>


                                            <div class="course-meta">
                                                <div class="course-students">
                                                    <div class="value">
                                                        <i class="fa fa-group"></i>
                                                        <?php echo $course_item->totalStudent ?>
                                                    </div>
                                                </div>


                                                <div class="course-comments-count">
                                                    <div class="value">
                                                        <i class="fa fa-comment"></i>1
                                                    </div>
                                                </div>


                                                <div class="course-price">
                                                    <div class="value free-course">
                                                        <?php echo $course_item->fees ?>
                                                    </div>
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

            <div class="col-md-3">


                <?php $this->load->view('common/aside_course_categories') ?>
                <?php $this->load->view('common/aside_latest_posts') ?>
                <?php $this->load->view('common/aside_ad') ?>


            </div>
        </div>


    </div>
</section>
<script>


    $('#you_may_like').owlCarousel({
        items: 3,
        navigation: true,
        pagination: true,
        lazyLoad: true,
        autoPlay: false,
        dots: false,

        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: false
            }
        }
    });


</script>
