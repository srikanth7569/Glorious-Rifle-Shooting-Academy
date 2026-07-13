<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>Profile</h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="Profile"> Profile</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content">
            <div class="row">
                <main id="main" class="site-main col-sm-12 full-width">
                    <article id="post-8" class="post-8 page type-page status-publish hentry pmpro-has-access">
                        <div class="entry-content">
                            <div class="learnpress">



                                <div class="learn-press-user-profile profile-container"
                                     id="learn-press-user-profile">



                                    <div class="user-tab">
                                        <div class="user-info">
                                            <div class="author-avatar">
                                                <img alt="Admin bar avatar"
                                                    src="<?php echo $facultyDetail->img ? $facultyDetail->img : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3.jpg' ?> "
                                                    class="avatar avatar-270 photo"
                                                    height="270" width="270"/>
                                            </div>
                                            <div class="user-information">
                                                <ul class="thim-author-social">
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
                                                <p>Hello, I’m a spider man, real spider man you alway see in
                                                    your TV. Surprise, i’m also a photographer and a photography
                                                    teacher. You know, in my films, i alway take a lot of photos
                                                    of me_spider man.</p>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="profile-tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="courses active">

                                                <a href="javascript:void(0)"
                                                   data-slug="javascript:void(0)">
                                                    <i class="fa fa-book"></i><span class="text">Courses</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div id="learn-press-profile-content" class="tab-content">
                                            <div id="profile-content-courses">
                                                <!--                                                <div id="your-profile">-->
                                                <!--                                                    <ul class="learn-press-subtabs">-->
                                                <!--                                                        <li class="section-tab owned current">-->
                                                <!--                                                            <span>Owned</span>-->
                                                <!--                                                        </li>-->
                                                <!--                                                        <li class="section-tab purchased">-->
                                                <!--                                                            <a href="courses/purchased/index.html">Purchased</a>-->
                                                <!--                                                        </li>-->
                                                <!--                                                    </ul>-->
                                                <!--                                                </div>-->
                                                <div class="learn-press-subtab-content">
                                                    <h3 class="profile-heading">
                                                        My Courses </h3>
                                                    <ul class="lp-sub-menu">
                                                        <li class="all"><span>All</span></li>
                                                        <!--                                                        <li class="publish"><a-->
                                                        <!--                                                                    href="courses/owned/indexae52.html?filter-status=publish">Publish</a>-->
                                                        <!--                                                        </li>-->
                                                        <!--                                                        <li class="pending"><a-->
                                                        <!--                                                                    href="courses/owned/index8e29.html?filter-status=pending">Pending</a>-->
                                                        <!--                                                        </li>-->
                                                    </ul>


                                                    <div class="thim-course-grid profile-courses-list">


                                                        <?php foreach ($facultyDetail->courses as $cours) { ?>


                                                            <div id="post-<?php echo $cours->id ?>"
                                                                 class="course-grid-3 lpr_course post-<?php echo $cours->id ?> lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-css pmpro-has-access course">

                                                                <div class="course-item">
                                                                    <div class="course-thumbnail">
                                                                        <a class="thumb"
                                                                           href="web/courseDetail/<?php echo $cours->id ?>">
                                                                            <img src="<?php echo $cours->image ? $cours->image : 'web_assets/uploads/2015/06/course-6-400x320.jpg' ?>"
                                                                                 alt="<?php echo $cours->title ?>"
                                                                                 title="course-6" width="400"
                                                                                 height="320">
                                                                        </a>
                                                                        <a class="course-readmore"
                                                                           href="web/courseDetail/<?php echo $cours->id ?>">Read
                                                                            More
                                                                        </a>
                                                                    </div>
                                                                    <div class="thim-course-content">
                                                                        <div class="course-author" itemscope
                                                                             itemtype="http://schema.org/Person">
                                                                            <img style="height: 40px"
                                                                                 src="<?php echo $facultyDetail->img ? $facultyDetail->img : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3-40x40.jpg' ?>"
                                                                                 alt="author-avatar"
                                                                                 title="author-avatar">
                                                                            <div class="author-contain">
                                                                                <div class="value" itemprop="name">
                                                                                    <a href="javascript:void(0)">
                                                                                        <?php echo $facultyDetail->name ?>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <h2 class="course-title"><a
                                                                                    href="web/courseDetail/<?php echo $cours->id ?>"
                                                                                    rel="bookmark">
                                                                                <?php echo $cours->title ?>

                                                                            </a></h2>
                                                                        <div class="course-meta">
                                                                            <div class="course-author" itemscope
                                                                                 itemtype="http://schema.org/Person">
                                                                                <img style="height: 40px"
                                                                                     src="<?php echo $facultyDetail->img ? $facultyDetail->img : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3-40x40.jpg' ?>"
                                                                                     alt="author-avatar"
                                                                                     title="author-avatar">
                                                                                <div class="author-contain">
                                                                                    <div class="value"
                                                                                         itemprop="name">
                                                                                        <a href="javascript:void(0)">
                                                                                            <?php echo $facultyDetail->name ?>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="course-review">
                                                                                <label>Review</label>
                                                                                <div class="value">
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
                                                                                            style="width: calc(0% - 2px)">
                                                                                            <li><span
                                                                                                        class="fa fa-star"></span>
                                                                                            </li>
                                                                                            <li><span
                                                                                                        class="fa fa-star"></span>
                                                                                            </li>
                                                                                            <li><span
                                                                                                        class="fa fa-star"></span>
                                                                                            </li>
                                                                                            <li><span
                                                                                                        class="fa fa-star"></span>
                                                                                            </li>
                                                                                            <li><span
                                                                                                        class="fa fa-star"></span>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <span>(0 review)</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="course-students">
                                                                                <label>Students</label>
                                                                                <div class="value">
                                                                                    <i class="fa fa-group"></i>
                                                                                    <?php echo $cours->totalStudent ?>
                                                                                </div>
                                                                                <span>students</span>
                                                                            </div>
                                                                            <div class="course-comments-count">
                                                                                <div class="value">
                                                                                    <i class="fa fa-comment"></i>
                                                                                    0
                                                                                </div>
                                                                            </div>
                                                                            <div class="course-price"
                                                                                 itemprop="offers" itemscope=""
                                                                                 itemtype="http://schema.org/Offer">
                                                                                <div class="value "
                                                                                     itemprop="price">
                                                                                    <?php echo number_format($cours->fees) ?>
                                                                                </div>
                                                                                <meta itemprop="priceCurrency"
                                                                                      content="PK"/>
                                                                            </div>
                                                                        </div>
                                                                        <div class="course-description">
                                                                            <p>In this course, We'll learn how to
                                                                                create websites by structuring and
                                                                                styling your pages with HTML and
                                                                                CSS.</p></div>
                                                                        <div class="course-price" itemprop="offers"
                                                                             itemscope=""
                                                                             itemtype="http://schema.org/Offer">
                                                                            <div class="value " itemprop="price">
                                                                                <?php echo number_format($cours->fees) ?>
                                                                            </div>
                                                                            <meta itemprop="priceCurrency"
                                                                                  content="PK"/>
                                                                        </div>
                                                                        <div class="course-readmore">
                                                                            <a href="web/courseDetail/<?php echo $cours->id ?>">Read
                                                                                More</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        <?php } ?>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </main>
            </div>
        </div>
    </section>

    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
