<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1><?php echo $courseDetail->courseCategoryTitle ?></h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="web" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="web/allCourses" title="All courses"><span itemprop="name">All courses</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item"
                                    title="Programming Language"><span
                                        itemprop="name"><?php echo $courseDetail->courseCategoryTitle ?></span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name"><?php echo $courseDetail->title ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <article id="post-5286"
                             class="post-5286 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-programming-language course_tag-python course_tag-tutorial pmpro-has-access course">
                        <div class="entry-content">
                            <div id="lp-single-course" class="lp-single-course">
                                <div id="learn-press-course" class="course-summary learn-press">
                                    <h1 class="entry-title" itemprop="name"><?php echo $courseDetail->title ?></h1>
                                    <div class="course-meta">
                                        <div class="course-author">
                                            <img alt="Admin bar avatar"
                                                 src="<?php echo $courseDetail->courseFaculties[0]->img ?>"
                                                 class="avatar avatar-96 photo" height="96" width="96"/>
                                            <div class="author-contain">
                                                <label itemprop="jobTitle">Teacher</label>
                                                <div class="value" itemprop="name">
                                                    <a href="web/facultyDetail/<?php echo $courseDetail->courseFaculties[0]->id ?>"><?php echo $courseDetail->courseFaculties[0]->name ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="course-categories">
                                            <label>Categories</label>
                                            <div class="value">
                                                        <span class="cat-links"><a
                                                                    href="javascript:void(0)"
                                                                    rel="tag"><?php echo $courseDetail->courseCategoryTitle ?></a></span>
                                            </div>
                                        </div>
                                        <div class="course-review">
                                            <label>Review</label>


                                            <div class="value">
                                                <div class="review-stars-rated">
                                                    <ul class="review-stars">
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                        <li><span class="fa fa-star-o"></span></li>
                                                    </ul>


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
                                                <?php echo $courseDetail->fees . 'Rs' ?>
                                            </div>
                                        </div>
                                        <div class="lp-course-buttons">
                                            <form name="purchase-course"
                                                  class="purchase-course form-purchase-course " method="post"
                                                  enctype="multipart/form-data">
                                                <input type="hidden" name="purchase-course" value="5286"/>
                                                <input type="hidden" name="purchase-course-nonce"
                                                       value="b3e52ef845"/>
                                                <button class="lp-button button button-purchase-course thim-enroll-course-button">
                                                    Buy Now
                                                </button>
                                                <input type="hidden" name="redirect_to"
                                                       value="../../account/index975b.html?redirect_to=https://educationwp.thimpress.com/courses/python/?enroll-course=5286">
                                                <input type="hidden" name="single-purchase" value="yes"/>
                                                <input type="hidden" name="add-to-cart" value="5286"/>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="course-summary">
                                        <div class="course-thumbnail">
                                            <img width="870" style="height: 450px" height="500"
                                                 src="<?php echo $courseDetail->image ?>"
                                                 class="attachment-full size-full wp-post-image" alt="course-16"
                                                 title="course-16"/>
                                        </div>
                                        <div id="course-landing" class="course-landing-summary">
                                            <div id="learn-press-course-tabs" class="course-tabs">
                                                <ul class="nav nav-tabs">
                                                    <li role="presentation"
                                                        class="course-nav-tab-overview active">
                                                        <a href="#tab-overview" data-toggle="tab">
                                                            <i class="fa fa-bookmark"></i>
                                                            <span>Overview</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="course-nav-tab-curriculum">
                                                        <a href="#tab-curriculum" data-toggle="tab">
                                                            <i class="fa fa-cube"></i>
                                                            <span>Curriculum</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="course-nav-tab-instructor">
                                                        <a href="#tab-instructor" data-toggle="tab">
                                                            <i class="fa fa-user"></i>
                                                            <span>Instructor</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="course-nav-tab-reviews">
                                                        <a href="#tab-reviews" data-toggle="tab">
                                                            <i class="fa fa-comments"></i>
                                                            <span>Reviews</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane course-tab-panel-overview course-tab-panel active"
                                                         id="tab-overview">
                                                        <div class="course-description"
                                                             id="learn-press-course-description">
                                                            <div class="thim-course-content"
                                                                 style="text-align: justify">
                                                                <h4>COURSE DESCRIPTION</h4>


                                                                <?php echo $courseDetail->description ?>

                                                                <?php if ($courseDetail->learning_outcomes) { ?>
                                                                    <h4>Learning Outcomes</h4>
                                                                    <?php echo $courseDetail->learning_outcomes ?>
                                                                <?php } ?>


                                                            </div>
                                                            <div class="thim-course-info">
                                                                <h3 class="title">Course Features</h3>
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
                                                    <div class="tab-pane course-tab-panel-curriculum course-tab-panel"
                                                         id="tab-curriculum">
                                                        <div class="thim-curriculum-buttons">
                                                        </div>
                                                        <div class="course-curriculum"
                                                             id="learn-press-course-curriculum">
                                                            <div class="curriculum-scrollable">
                                                                <nav class="thim-font-heading learn-press-breadcrumb"
                                                                     itemprop="breadcrumb"><a
                                                                            href="../index.html">Courses</a><i
                                                                            class="fa-angle-right fa"></i><a
                                                                            href="../../course-category/programming-language/index.html">Programming
                                                                        Language</a><i
                                                                            class="fa-angle-right fa"></i><span
                                                                            class="item-name">Learn Python &#8211; Interactive Python</span>
                                                                </nav>
                                                                <ul class="curriculum-sections">
                                                                    <li class="section"
                                                                        id="section-section-1-14"
                                                                        data-id="section-1-14"
                                                                        data-section-id="14">
                                                                        <h4 class="section-header">
                                                                            <span class="collapse"></span>
                                                                            Section 1 <span class="meta">
<span class="step">3</span>
</span>
                                                                        </h4>
                                                                        <ul class="section-content">
                                                                            <li class="course-item course-item-lp_lesson course-item-8935 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>1.1
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson-1-6/index.html">
                                                                                    Lesson 1: Get Started </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-8936 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>1.2
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson-22/index.html">
                                                                                    Lesson 2: Syntax </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-8937 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>1.3
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson-3-6/index.html">
                                                                                    Lesson 3: Variables </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="section"
                                                                        id="section-section-2-15"
                                                                        data-id="section-2-15"
                                                                        data-section-id="15">
                                                                        <h4 class="section-header">
                                                                            <span class="collapse"></span>
                                                                            Section 2 <span class="meta">
<span class="step">3</span>
</span>
                                                                        </h4>
                                                                        <ul class="section-content">
                                                                            <li class="course-item course-item-lp_lesson course-item-8938 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>2.1
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson4/index.html">
                                                                                    Lesson 4: File handing </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-8939 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>2.2
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson-5-6/index.html">
                                                                                    Lesson 5: Python MySQL </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-8940 item-locked course-lesson"
                                                                                data-type="lp_lesson">
                                                                                <div class="meta-left">
                                                                                            <span class="course-format-icon"><i
                                                                                                        class="fa fa-file-o"></i></span>
                                                                                    <div class="index"><span
                                                                                                class="label">Lecture</span>2.3
                                                                                    </div>
                                                                                </div>
                                                                                <a class="lesson-title course-item-title button-load-item"
                                                                                   href="lessons/lesson-6-6/index.html">
                                                                                    Lesson 6: Python MongDB </a>
                                                                                <div class="course-item-meta">
                                                                                    <i class="fa item-meta course-item-status trans"></i>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="tab-pane course-tab-panel-instructor course-tab-panel"
                                                         id="tab-instructor">


                                                        <?php if (!empty($courseDetail->courseFaculties)) {
                                                            foreach ($courseDetail->courseFaculties as $faculty) { ?>

                                                                <div class="thim-about-author">
                                                                    <div class="author-wrapper">
                                                                        <div class="author-avatar">
                                                                            <img alt="Admin bar avatar"
                                                                                 src="<?php echo $faculty->img ?>"
                                                                                 class="avatar avatar-110 photo"
                                                                                 height="110" width="110"/></div>
                                                                        <div class="author-bio">
                                                                            <div class="author-top">
                                                                                <a class="name"
                                                                                   href="../../profile/admin/index.html">
                                                                                    <?php echo $faculty->name ?> </a>
                                                                                <p class="job">Web Developer</p>
                                                                            </div>
                                                                            <ul class="thim-author-social">
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
                                                    <div class="tab-pane course-tab-panel-reviews course-tab-panel"
                                                         id="tab-reviews">
                                                        <div class="course-rating">
                                                            <h3>Reviews</h3>
                                                            <div class="average-rating"
                                                                 itemprop="aggregateRating" itemscope=""
                                                                 itemtype="http://schema.org/AggregateRating">
                                                                <p class="rating-title">Average Rating</p>
                                                                <div class="rating-box">
                                                                    <div class="average-value"
                                                                         itemprop="ratingValue"><?php echo $courseDetail->courseRating->avgRating ?>
                                                                    </div>


                                                                    <div class="value">
                                                                        <div class="review-stars-rated">


                                                                            <ul class="review-stars">
                                                                                <li>
                                                                                    <span
                                                                                            class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li><span
                                                                                            class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li><span
                                                                                            class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li><span
                                                                                            class="fa fa-star-o"></span>
                                                                                </li>
                                                                                <li><span
                                                                                            class="fa fa-star-o"></span>
                                                                                </li>
                                                                            </ul>


                                                                            <ul class="review-stars filled"
                                                                                style="width: calc(100% - 2px)">

                                                                                <?php for ($i = 1; $i <= round($courseDetail->courseRating->avgRating); $i++) { ?>
                                                                                    <li><span class="fa fa-star"></span>
                                                                                    </li>
                                                                                <?php } ?>
                                                                            </ul>


                                                                        </div>
                                                                    </div>
                                                                    <div class="review-amount"
                                                                         itemprop="ratingCount">
                                                                        <?php echo sizeof($courseDetail->courseRating->ratings) ?>
                                                                        rating
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="detailed-rating">
                                                                <p class="rating-title">Detailed Rating</p>
                                                                <div class="rating-box">
                                                                    <div class="detailed-rating">

                                                                        <?php

                                                                        $this->db->select('count(rating) as no_of_rating');
                                                                        $this->db->where('rating', 5);
                                                                        $five_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                                        $this->db->select('count(rating) as no_of_rating');
                                                                        $this->db->where('rating', 4);
                                                                        $four_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                                        $this->db->select('count(rating) as no_of_rating');
                                                                        $this->db->where('rating', 3);
                                                                        $three_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                                        $this->db->select('count(rating) as no_of_rating');
                                                                        $this->db->where('rating', 2);
                                                                        $two_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                                        $this->db->select('count(rating) as no_of_rating');
                                                                        $this->db->where('rating', 1);
                                                                        $one_star = $this->db->get('teacher_rating')->row()->no_of_rating;

                                                                        $five_star_percent  = ($five_star / 5) * 100;
                                                                        $four_star_percent  = ($four_star / 5) * 100;
                                                                        $three_star_percent = ($three_star / 5) * 100;
                                                                        $two_star_percent   = ($two_star / 5) * 100;
                                                                        $one_star_percent   = ($one_star / 5) * 100;

                                                                        ?>

                                                                        <div class="stars">
                                                                            <div class="key">

                                                                                <?php echo $five_star ?> Stars
                                                                            </div>
                                                                            <div class="bar">
                                                                                <div class="full_bar">
                                                                                    <div style="width:'<?php echo $five_star_percent ?>'% "></div>
                                                                                </div>
                                                                            </div>
                                                                            <span><?php echo $five_star_percent ?>%</span>
                                                                        </div>

                                                                        <div class="stars">
                                                                            <div class="key">
                                                                                <?php echo $four_star ?> Stars
                                                                            </div>
                                                                            <div class="bar">
                                                                                <div class="full_bar">
                                                                                    <div style="width:'<?php echo $four_star_percent ?>'% "></div>
                                                                                </div>
                                                                            </div>
                                                                            <span><?php echo $four_star_percent ?>%</span>
                                                                        </div>
                                                                        <div class="stars">
                                                                            <div class="key">
                                                                                <?php echo $three_star ?> Stars
                                                                            </div>
                                                                            <div class="bar">
                                                                                <div class="full_bar">
                                                                                    <div style="width:<?php echo $three_star_percent ?>% "></div>
                                                                                </div>
                                                                            </div>
                                                                            <span><?php echo $three_star_percent ?>%</span>
                                                                        </div>
                                                                        <div class="stars">
                                                                            <div class="key">
                                                                                <?php echo $two_star ?> Stars
                                                                            </div>
                                                                            <div class="bar">
                                                                                <div class="full_bar">
                                                                                    <div style="width:'<?php echo $two_star_percent ?>'% "></div>
                                                                                </div>
                                                                            </div>
                                                                            <span><?php echo $two_star_percent ?>%</span>
                                                                        </div>
                                                                        <div class="stars">
                                                                            <div class="key">
                                                                                <?php echo $one_star ?> Star
                                                                            </div>
                                                                            <div class="bar">
                                                                                <div class="full_bar">
                                                                                    <div style="width:'<?php echo $one_star_percent ?>'% "></div>
                                                                                </div>
                                                                            </div>
                                                                            <span><?php echo $one_star_percent ?>%</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="review-stars-rated">
                                                                <div class="review-stars empty"></div>
                                                                <div class="review-stars filled"
                                                                     style="width:100%;"></div>
                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>
                                                        <div class="course-review">
                                                            <div id="course-reviews" class="content-review">
                                                                <ul class="course-reviews-list">

                                                                    <?php foreach ($courseDetail->courseRating->ratings as $rating) { ?>

                                                                        <li>
                                                                            <div class="review-container"
                                                                                 itemprop="review" itemscope
                                                                                 itemtype="http://schema.org/Review">
                                                                                <div class="review-author">
                                                                                    <img alt="Admin bar avatar"
                                                                                         src="<?php echo $rating->image ? $rating->image : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2.jpg' ?>"
                                                                                         class="avatar avatar-96 photo"
                                                                                         height="96" width="96"/>
                                                                                </div>
                                                                                <div class="review-text">
                                                                                    <h4 class="author-name"
                                                                                        itemprop="author">
                                                                                        <?php echo $rating->firstname ?> </h4>
                                                                                    <div class="review-star">
                                                                                        <div class="review-stars-rated">
                                                                                            <ul class="review-stars">
                                                                                                <li><span
                                                                                                            class="fa fa-star-o"></span>
                                                                                                </li>
                                                                                                <li><span
                                                                                                            class="fa fa-star-o"></span>
                                                                                                </li>
                                                                                                <li><span
                                                                                                            class="fa fa-star-o"></span>
                                                                                                </li>
                                                                                                <li><span
                                                                                                            class="fa fa-star-o"></span>
                                                                                                </li>
                                                                                                <li><span
                                                                                                            class="fa fa-star-o"></span>
                                                                                                </li>
                                                                                            </ul>
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
                                                                                    <p class="review-title">
                                                                                    </p>
                                                                                    <div class="description"
                                                                                         itemprop="reviewBody">
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
                                                </div>
                                            </div>
                                            <div class="thim-course-menu-landing">
                                                <div class="container">
                                                    <ul class="thim-course-landing-tab">
                                                        <li role="presentation"
                                                            class="course-nav-tab-overview active">
                                                            <a href="#tab-overview">Overview</a>
                                                        </li>
                                                        <li role="presentation"
                                                            class="course-nav-tab-curriculum">
                                                            <a href="#tab-curriculum">Curriculum</a>
                                                        </li>
                                                        <li role="presentation"
                                                            class="course-nav-tab-instructor">
                                                            <a href="#tab-instructor">Instructor</a>
                                                        </li>
                                                        <li role="presentation" class="course-nav-tab-reviews">
                                                            <a href="#tab-reviews">Reviews</a>
                                                        </li>
                                                    </ul>
                                                    <div class="thim-course-landing-button">
                                                        <div class="course-price">
                                                            <div class="value ">
                                                                <?php echo $courseDetail->fees . 'Rs' ?>
                                                            </div>
                                                        </div>
                                                        <div class="lp-course-buttons">
                                                            <form name="purchase-course"
                                                                  class="purchase-course form-purchase-course "
                                                                  method="post" enctype="multipart/form-data">
                                                                <input type="hidden" name="purchase-course"
                                                                       value="5286"/>
                                                                <input type="hidden"
                                                                       name="purchase-course-nonce"
                                                                       value="b3e52ef845"/>
                                                                <button class="lp-button button button-purchase-course thim-enroll-course-button">
                                                                    Buy Now
                                                                </button>
                                                                <input type="hidden" name="redirect_to"
                                                                       value="../../account/index975b.html?redirect_to=https://educationwp.thimpress.com/courses/python/?enroll-course=5286">
                                                                <input type="hidden" name="single-purchase"
                                                                       value="yes"/>
                                                                <input type="hidden" name="add-to-cart"
                                                                       value="5286"/>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="social_share">
                                            <ul class="thim-social-share">
                                                <li class="heading">Share:</li>
                                                <li>
                                                    <div class="facebook-social">
                                                        <a target="_blank" class="facebook"
                                                                                    href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fpython%2F"
                                                                                    title="Facebook">
                                                            <i
                                                                    class="fa fa-facebook"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="googleplus-social"><a target="_blank"
                                                                                      class="googleplus"
                                                                                      href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fpython%2F&amp;title=Learn%20Python%20%26%238211%3B%20Interactive%20Python"
                                                                                      title="Google Plus"
                                                                                      onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;"
                                                                                      data-cf-modified-445c433d6a04103c270568d7-=""><i
                                                                    class="fa fa-google"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="twitter-social"><a target="_blank"
                                                                                   class="twitter"
                                                                                   href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fpython%2F&amp;text=Learn%20Python%20%26%238211%3B%20Interactive%20Python"
                                                                                   title="Twitter"><i
                                                                    class="fa fa-twitter"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="pinterest-social"><a target="_blank"
                                                                                     class="pinterest"
                                                                                     href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Feducationwp.thimpress.com%2Fcourses%2Fpython%2F&amp;description=Lorem%20Ipsum%20is%20simply%20dummy%20text%20of%20the%20printing%20and%20typesetting%20industry.%20Lorem%20Ipsum%20has%20been%20the%20industry%26%23039%3Bs%20standard%20dummy%20text%20ever%20since%20the%201500s%2C%20when%20an%20unknown%20printer%20took%20a%20galley%20of%20type%20and%20scrambled%20it%20to%20make%20a%20type%20specimen%20book.&amp;media=https%3A%2F%2Feducationwp.thimpress.com%2Fwp-content%2Fuploads%2F2015%2F12%2Fcourse-16.jpg"
                                                                                     onclick="if (!window.__cfRLUnblockHandlers) return false; window.open(this.href); return false;"
                                                                                     title="Pinterest"
                                                                                     data-cf-modified-445c433d6a04103c270568d7-=""><i
                                                                    class="fa fa-pinterest-p"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>

                                        <?php $this->load->view('web/includes/comment_script') ?>


                                    </div>
                                    <div class="thim-ralated-course  ">
                                        <h3 class="related-title">
                                            You May Like </h3>
                                        <div class="thim-course-grid">
                                            <div class="thim-carousel-wrapper" data-visible="3"
                                                 data-itemtablet="2" data-itemmobile="1" data-pagination="1">


                                                <?php
                                                $related_courses = $this->courses_model->getAllCourses(null, $courseDetail->categoryID);
                                                ?>

                                                <?php foreach ($related_courses as $course_item) {

                                                    if ($course_item->id == $courseDetail->id) {
                                                        continue;
                                                    }

                                                    ?>


                                                    <article class="lpr_course">


                                                        <div class="course-item">
                                                            <div class="course-thumbnail">
                                                                <a class="thumb"
                                                                   href="web/courseDetail/<?php echo $course_item->id ?>">
                                                                    <img src="<?php echo $course_item->image ? $course_item->image : 'web_assets/uploads/2015/06/course-1-450x450.jpg' ?>"
                                                                         alt="From Zero to Hero with Nodejs"
                                                                         title="course-1" width="450" height="450">
                                                                </a>
                                                                <a class="course-readmore"
                                                                   href="web/courseDetail/<?php echo $course_item->id ?>">Read
                                                                    More</a></div>
                                                            <div class="thim-course-content">
                                                                <div class="course-author">
                                                                    <img alt="Admin bar avatar"
                                                                         src="<?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2.jpg' ?>"
                                                                         class="avatar avatar-40 photo" height="40"
                                                                         width="40"/>
                                                                    <div class="author-contain">
                                                                        <div class="value">
                                                                            <a href="web/facultyDetail/<?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->id : 1 ?>">
                                                                                <?php echo sizeof($course_item->courseFaculties) > 0 ? $course_item->courseFaculties[0]->name : 'Admin' ?> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h2 class="course-title">
                                                                    <a rel="bookmark"
                                                                       href="web/courseDetail/<?php echo $course_item->id ?>">
                                                                        <?php echo $course_item->title ?>
                                                                    </a>
                                                                </h2>
                                                                <div class="course-meta">
                                                                    <div class="course-students">
                                                                        <label>Students</label>
                                                                        <div class="value"><i
                                                                                    class="fa fa-group"></i>
                                                                            <?php echo $course_item->totalStudent ?>
                                                                        </div>
                                                                    </div>
                                                                    <div class="course-comments-count">
                                                                        <div class="value"><i
                                                                                    class="fa fa-comment"></i>1
                                                                        </div>
                                                                    </div>
                                                                    <div class="course-price" itemprop="offers"
                                                                         itemscope
                                                                         itemtype="http://schema.org/Offer">
                                                                        <div class="value free-course"
                                                                             itemprop="price">
                                                                            <?php echo $course_item->fees ?>
                                                                        </div>
                                                                        <meta itemprop="priceCurrency"
                                                                              content="PK"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script data-cfasync="false"
                                    src="web_assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script type="445c433d6a04103c270568d7-text/javascript">
            function moOpenIdLogin(app_name, is_custom_app) {
				                var base_url = '../../index.html';
                var request_uri = 'index.html';
                var http = 'https:///';
                var http_host = 'educationwp.thimpress.com';
                if (is_custom_app == 'false') {
                    if (request_uri.indexOf('wp-login.html') != -1) {
                        var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                    } else {
                        var redirect_url = http + http_host + request_uri;
                        if (redirect_url.indexOf('?') != -1) {
                            redirect_url = redirect_url + '&option=getmosociallogin&app_name=';
                        } else {
                            redirect_url = redirect_url + '?option=getmosociallogin&app_name=';
                        }
                    }
                } else {
                    var current_url = window.location.href;
                    var cname = 'redirect_current_url';
                    var d = new Date();
                    d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                    var expires = 'expires=' + d.toUTCString();
                    document.cookie = cname + '=' + current_url + ';' + expires + ';path=/';   //path = root path(/)
                    if (request_uri.indexOf('wp-login.html') != -1) {
                        var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                    } else {
                        var redirect_url = http + http_host + request_uri;
                        if (redirect_url.indexOf('?') != -1)
                            redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                        else
                            redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                    }
                }
                var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                redirect_url = redirect_url + app_name + '&redirect_to=' + encodeURIComponent(redirect_to);
                window.location.href = redirect_url;
            }






















































































                            </script>
                            <script type="445c433d6a04103c270568d7-text/javascript">
            function moOpenIdLogin(app_name, is_custom_app) {
				                var base_url = '../../index.html';
                var request_uri = 'index.html';
                var http = 'https:///';
                var http_host = 'educationwp.thimpress.com';
                if (is_custom_app == 'false') {
                    if (request_uri.indexOf('wp-login.html') != -1) {
                        var redirect_url = base_url + '/?option=getmosociallogin&app_name=';

                    } else {
                        var redirect_url = http + http_host + request_uri;
                        if (redirect_url.indexOf('?') != -1) {
                            redirect_url = redirect_url + '&option=getmosociallogin&app_name=';
                        } else {
                            redirect_url = redirect_url + '?option=getmosociallogin&app_name=';
                        }
                    }
                } else {
                    var current_url = window.location.href;
                    var cname = 'redirect_current_url';
                    var d = new Date();
                    d.setTime(d.getTime() + (2 * 24 * 60 * 60 * 1000));
                    var expires = 'expires=' + d.toUTCString();
                    document.cookie = cname + '=' + current_url + ';' + expires + ';path=/';   //path = root path(/)
                    if (request_uri.indexOf('wp-login.html') != -1) {
                        var redirect_url = base_url + '/?option=oauthredirect&app_name=';
                    } else {
                        var redirect_url = http + http_host + request_uri;
                        if (redirect_url.indexOf('?') != -1)
                            redirect_url = redirect_url + '&option=oauthredirect&app_name=';
                        else
                            redirect_url = redirect_url + '?option=oauthredirect&app_name=';
                    }
                }
                var redirect_to = jQuery('#loginform input[name="redirect_to"]').val();
                redirect_url = redirect_url + app_name + '&redirect_to=' + encodeURIComponent(redirect_to);
                window.location.href = redirect_url;
            }






















































































                            </script>
                        </div>
                    </article>
                </main>
                <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">


                    <?php ?><?php
                    $this->db->limit(8);
                    $courses = $this->db->get('courses')->result(); ?>

                    <aside id="course-categories-3" class="widget widget_course-categories">
                        <div class="thim-widget-course-categories thim-widget-course-categories-base template-base-v3">
                            <h4 class="widget-title">All Courses</h4>
                            <ul>


                                <?php foreach ($courses as $item) { ?>

                                    <li>
                                        <a href="web/courseDetail/<?php echo $item->id ?>"><?php echo $item->title ?></a>
                                    </li>

                                <?php } ?>

                                <a class="button" href="web/allCourses/">View More</a>

                            </ul>
                        </div>
                    </aside>


                    <aside id="courses-7" class="widget widget_courses">
                        <div class="thim-widget-courses thim-widget-courses-base template-list-sidebar-v3"><h4
                                    class="widget-title">Latest News</h4>
                            <div class="thim-course-list-sidebar">


                                <?php $news = $this->news_model->getNews(3); ?>


                                <?php foreach ($news as $item) { ?>
                                    <div class="lpr_course has-post-thumbnail">
                                        <div class="course-thumbnail"><img
                                                    src="<?php echo $item->img ?>"
                                                    alt="LMS Interactive Content"/></div>
                                        <div class="thim-course-content">
                                            <h3 class="course-title">
                                                <a href="web/newsDetail/<?php echo $item->id ?>"> <?php echo $item->title ?></a>
                                            </h3>
                                        </div>
                                    </div>

                                <?php } ?>


                            </div>
                        </div>
                    </aside>


                    <aside id="single-images-7" class="widget widget_single-images">
                        <div class="thim-widget-single-images thim-widget-single-images-base template-base">
                            <div class="single-image text-left"><img
                                        src="web_assets/uploads/2015/12/ad.jpg" width="330" height="359"
                                        alt=""/></div>
                        </div>
                    </aside>


                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('web/includes/fixed_footer') ?>


</div>
