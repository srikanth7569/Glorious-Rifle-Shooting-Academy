<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1><?php echo $title ?></h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="All courses">All courses</span></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <article id="post-0"
                             class="post-0 post type-post status-publish format-standard hentry pmpro-has-access page type-page">
                        <div class="entry-content">
                            <div id="lp-archive-courses" data-all-courses-url="index.html">
                                <div class="thim-course-top switch-layout-container ">
                                    <div class="thim-course-switch-layout switch-layout">
                                        <a href="#" class="list switchToGrid switch-active"><i
                                                    class="fa fa-th-large"></i></a>
                                        <a href="#" class="grid switchToList"><i class="fa fa-list-ul"></i></a>
                                    </div>
                                    <div class="course-index">
                                        <span>Showing 1-9 of 18 results</span>
                                    </div>
                                    <div class="thim-course-order">
                                        <select name="orderby">
                                            <option value="newly-published">Newly published</option>
                                            <option value="alphabetical">Alphabetical</option>
                                            <option value="most-members">Most members</option>
                                        </select>
                                    </div>
                                    <div class="courses-searching">
                                        <form method="get" action="https://educationwp.thimpress.com/courses/">
                                            <input type="text" value="" name="s"
                                                   placeholder="Search our courses"
                                                   class="form-control course-search-filter"
                                                   autocomplete="off"/>
                                            <input type="hidden" value="course" name="ref"/>
                                            <input type="hidden" name="post_type" value="lp_course">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                            <span class="widget-search-close"></span>
                                        </form>
                                        <ul class="courses-list-search list-unstyled"></ul>
                                    </div>
                                </div>


                                <div id="thim-course-archive" class="thim-course-grid"
                                     data-cookie="grid-layout">


                                    <?php if (!empty($allCourses)) {
                                        foreach ($allCourses as $cours) { ?>

                                            <div id="post-5428"
                                                 class="course-grid-3 lpr_course post-5428 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-general pmpro-has-access course">
                                                <div class="course-item">
                                                    <div class="course-thumbnail">
                                                        <a class="thumb"
                                                           href="web/courseDetail/<?php echo $cours->id ?>">
                                                            <img src="<?php echo $cours->image ?>"
                                                                 alt="LMS Interactive Content" title="course-4"
                                                                 width="400"
                                                                 height="320">
                                                        </a>
                                                        <a class="course-readmore"
                                                           href="web/courseDetail/<?php echo $cours->id ?>">Read
                                                            More</a></div>
                                                    <div class="thim-course-content">
                                                        <div class="course-author" itemscope
                                                             itemtype="http://schema.org/Person">
                                                            <img style="height: 40px"
                                                                 src="<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2-40x40.jpg' ?>"
                                                                 alt="author-avatar" title="author-avatar">
                                                            <div class="author-contain">
                                                                <div class="value" itemprop="name">
                                                                    <a href="web/facultyDetail/<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->id : 1 ?>">
                                                                        <?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->name : 'Admin' ?>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h2 class="course-title">
                                                            <a href="web/courseDetail/<?php echo $cours->id ?>"
                                                               rel="bookmark">
                                                                <?php echo $cours->title ?>
                                                            </a>
                                                        </h2>
                                                        <div class="course-meta">
                                                            <div class="course-author" itemscope
                                                                 itemtype="http://schema.org/Person">
                                                                <img style="height: 40px"
                                                                     src="<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2-40x40.jpg' ?>"
                                                                     alt="author-avatar" title="author-avatar">
                                                                <div class="author-contain">
                                                                    <div class="value" itemprop="name">
                                                                        <a href="web/facultyDetail/<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->id : 1 ?>">
                                                                            <?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->name : 'Admin' ?>
                                                                        </a>
                                                                    </div>
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
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                            <li><span class="fa fa-star"></span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <span>(3 reviews)</span>
                                                                </div>
                                                            </div>
                                                            <div class="course-students">
                                                                <label>Students</label>
                                                                <div class="value"><i class="fa fa-group"></i>
                                                                    <?php echo $cours->totalStudent ?>
                                                                </div>
                                                                <span>students</span>
                                                            </div>
                                                            <div class="course-comments-count">
                                                                <div class="value"><i class="fa fa-comment"></i>3</div>
                                                            </div>
                                                            <div class="course-price" itemprop="offers" itemscope=""
                                                                 itemtype="http://schema.org/Offer">
                                                                <div class="value  free-course" itemprop="price">
                                                                    <?php echo number_format($cours->fees) ?> RS.
                                                                </div>
                                                                <meta itemprop="priceCurrency" content="USD"/>
                                                            </div>
                                                        </div>
                                                        <div class="course-description">
                                                            <p>A WordPress LMS Plugin to create WordPress Learning
                                                                Management System. Turn your WP to LMS WordPress with
                                                                Courses, Lessons, Quizzes & more.</p></div>
                                                        <div class="course-price" itemprop="offers" itemscope=""
                                                             itemtype="http://schema.org/Offer">
                                                            <div class="value  free-course" itemprop="price">
                                                                Free
                                                            </div>
                                                            <meta itemprop="priceCurrency" content="USD"/>
                                                        </div>
                                                        <div class="course-readmore">
                                                            <a href="web/courseDetail/<?php echo $cours->id ?>">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        <?php }
                                    } ?>


                                    <div id="post-5407"
                                         class="course-grid-3 lpr_course post-5407 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-backend pmpro-has-access course">
                                        <div class="course-item">
                                            <div class="course-thumbnail"><a class="thumb"
                                                                             href="become-a-php-master-and-make-money-fast/index.html"><img
                                                            src="web_assets/uploads/2015/06/course-2-400x320.jpg"
                                                            alt="Become a PHP Master and Make Money"
                                                            title="course-2"
                                                            width="400" height="320"></a><a
                                                        class="course-readmore"
                                                        href="become-a-php-master-and-make-money-fast/index.html">Read
                                                    More</a></div>
                                            <div class="thim-course-content">
                                                <div class="course-author" itemscope
                                                     itemtype="http://schema.org/Person">
                                                    <img src="web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3-40x40.jpg"
                                                         alt="author-avatar" title="author-avatar">
                                                    <div class="author-contain">
                                                        <div class="value" itemprop="name">
                                                            <a href="../profile/admin/index.html">Hinata
                                                                Hyuga</a></div>
                                                    </div>
                                                </div>
                                                <h2 class="course-title"><a
                                                            href="become-a-php-master-and-make-money-fast/index.html"
                                                            rel="bookmark">Become a PHP Master and Make
                                                        Money</a>
                                                </h2>
                                                <div class="course-meta">
                                                    <div class="course-author" itemscope
                                                         itemtype="http://schema.org/Person">
                                                        <img src="web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3-40x40.jpg"
                                                             alt="author-avatar" title="author-avatar">
                                                        <div class="author-contain">
                                                            <div class="value" itemprop="name">
                                                                <a href="../profile/admin/index.html">Hinata
                                                                    Hyuga</a></div>
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
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                    <li><span class="fa fa-star"></span></li>
                                                                </ul>
                                                            </div>
                                                            <span>(1 review)</span>
                                                        </div>
                                                    </div>
                                                    <div class="course-students">
                                                        <label>Students</label>
                                                        <div class="value"><i class="fa fa-group"></i>
                                                            37
                                                        </div>
                                                        <span>students</span>
                                                    </div>
                                                    <div class="course-comments-count">
                                                        <div class="value"><i class="fa fa-comment"></i>1</div>
                                                    </div>
                                                    <div class="course-price" itemprop="offers" itemscope=""
                                                         itemtype="http://schema.org/Offer">
                                                        <div class="value  has-origin" itemprop="price">
                                                            <span class="course-origin-price">&#36;80.00</span>
                                                            &#36;69.00
                                                        </div>
                                                        <meta itemprop="priceCurrency" content="USD"/>
                                                    </div>
                                                </div>
                                                <div class="course-description">
                                                    <p>This tutorial will introduce you to PHP, a server-side
                                                        scripting language you can use to make dynamic websites
                                                        and web applications.</p></div>
                                                <div class="course-price" itemprop="offers" itemscope=""
                                                     itemtype="http://schema.org/Offer">
                                                    <div class="value  has-origin" itemprop="price">
                                                        <span class="course-origin-price">&#36;80.00</span>
                                                        &#36;69.00
                                                    </div>
                                                    <meta itemprop="priceCurrency" content="USD"/>
                                                </div>
                                                <div class="course-readmore">
                                                    <a href="become-a-php-master-and-make-money-fast/index.html">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cssload-loading">
                                        <i></i><i></i><i></i><i></i>
                                    </div>
                                </div>
                                <nav class="learn-press-pagination navigation pagination">
                                    <ul class='page-numbers'>
                                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                                        <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                                        <li><a class="next page-numbers" href="page/2/index.html">2</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </article>
                </main>
                <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
                    <aside class="thim-course-filter-wrapper">
                        <form action="#" name="thim-course-filter" method="POST" class="thim-course-filter">
                            <h4 class="filter-title">Course categories</h4>
                            <ul class="list-cate-filter">
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="backend_36" value="36">
                                    <label for="backend_36">
                                        Backend <span>(3)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="css_29" value="29">
                                    <label for="css_29">
                                        CSS <span>(2)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="frontend_30"
                                           value="30">
                                    <label for="frontend_30">
                                        Frontend <span>(2)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="general_31" value="31">
                                    <label for="general_31">
                                        General <span>(2)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="it-software_44"
                                           value="44">
                                    <label for="it-software_44">
                                        IT &amp; Software <span>(2)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="photography_28"
                                           value="28">
                                    <label for="photography_28">
                                        Photography <span>(2)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter"
                                           id="programming-language_37" value="37">
                                    <label for="programming-language_37">
                                        Programming Language <span>(3)</span>
                                    </label>
                                </li>
                                <li class="term-item">
                                    <input type="checkbox" name="course-cate-filter" id="technology_34"
                                           value="34">
                                    <label for="technology_34">
                                        Technology <span>(2)</span>
                                    </label>
                                </li>
                            </ul>
                            <h4 class="filter-title">Instructors</h4>
                            <ul class="list-instructor-filter">
                                <li class="instructor-item">
                                    <input type="checkbox" name="course-instructor-filter" id="instructor-id_7"
                                           value="7">
                                    <label for="instructor-id_7">
                                        Keny White <span>(4)</span>
                                    </label>
                                </li>
                                <li class="instructor-item">
                                    <input type="checkbox" name="course-instructor-filter" id="instructor-id_1"
                                           value="1">
                                    <label for="instructor-id_1">
                                        Hinata Hyuga <span>(11)</span>
                                    </label>
                                </li>
                                <li class="instructor-item">
                                    <input type="checkbox" name="course-instructor-filter" id="instructor-id_11"
                                           value="11">
                                    <label for="instructor-id_11">
                                        John Doe <span>(3)</span>
                                    </label>
                                </li>
                            </ul>
                            <h4 class="filter-title">Price</h4>
                            <ul class="list-price-filter">
                                <li class="price-item">
                                    <input type="radio" id="price-filter_all" name="course-price-filter"
                                           value="all" checked>
                                    <label for="price-filter_all">
                                        All <span>(18)</span>
                                    </label>
                                </li>
                                <li class="price-item">
                                    <input type="radio" id="price-filter_free" name="course-price-filter"
                                           value="free">
                                    <label for="price-filter_free">
                                        Free <span>(3)</span>
                                    </label>
                                </li>
                                <li class="price-item">
                                    <input type="radio" id="price-filter_paid" name="course-price-filter"
                                           value="paid">
                                    <label for="price-filter_paid">
                                        Paid <span>(15)</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="filter-submit">
                                <button type="submit">Filter Results</button>
                            </div>
                        </form>
                    </aside>
                    <aside id="course-categories-3" class="widget widget_course-categories">
                        <div class="thim-widget-course-categories thim-widget-course-categories-base template-base-v3">
                            <h4 class="widget-title">All Courses</h4>
                            <ul>
                                <li>
                                    <a href="../course-category/backend/index.html">Backend</a>
                                </li>
                                <li>
                                    <a href="../course-category/css/index.html">CSS</a>
                                </li>
                                <li>
                                    <a href="../course-category/frontend/index.html">Frontend</a>
                                </li>
                                <li>
                                    <a href="../course-category/general/index.html">General</a>
                                </li>
                                <li>
                                    <a href="../course-category/it-software/index.html">IT &amp; Software</a>
                                </li>
                                <li>
                                    <a href="../course-category/photography/index.html">Photography</a>
                                </li>
                                <li>
                                    <a href="../course-category/programming-language/index.html">Programming
                                        Language</a>
                                </li>
                                <li>
                                    <a href="../course-category/technology/index.html">Technology</a>
                                </li>
                            </ul>
                        </div>
                    </aside>


                    <?php $this->load->view('web/includes/latest_courses_3') ?>


                    <aside id="single-images-7" class="widget widget_single-images">
                        <div class="thim-widget-single-images thim-widget-single-images-base template-base">
                            <div class="single-image text-left"><img
                                        src="web_assets/uploads/2015/12/ad.jpg"
                                        width="330" height="359" alt=""/></div>
                        </div>
                    </aside>


                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('web/includes/fixed_footer') ?>


</div>
