<div id="main-content">
    <section class="content-area">
        <div class="top_heading  _out">
            <div class="top_site_main "
                 style="color: #ffffff;background-image:url(web_assets/wp-content/themes/eduma/images/bg-page.jpg);">
                <span class="overlay-top-header" style="background:rgba(0,0,0,0.5);"></span>
                <div class="page-title-wrapper">
                    <div class="banner-wrapper container">
                        <h1>News</h1></div>
                </div>
            </div>
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <ul itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList"
                        id="breadcrumbs" class="breadcrumbs">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../index.html" title="Home"><span
                                        itemprop="name">Home</span></a></li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                                    itemprop="item" href="../blog/index.html" title="Blog"><span
                                        itemprop="name">News</span></a>
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name"
                                    title="Forensic team earns several"><?php echo $newsDetail->title ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div class="page-content">
                        <article id="post-54"
                                 class="post-54 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-designer tag-seo pmpro-has-access">
                            <div class="page-content-inner">
                                <header class="entry-header">
                                    <h1 class="entry-title"><?php echo $newsDetail->title ?></h1>
                                    <ul class="entry-meta">
                                        <li class="author">
                                            <span>Posted by</span>
                                            <span class="vcard author author_name"><a
                                                        href="javascript:void(0)"><?php echo $newsDetail->firstname ?></a></span>
                                        </li>
                                        <li class="entry-category">
                                            <span>Categories</span> <a href="javascript:void(0)"
                                                                       rel="category tag"><?php echo $newsDetail->categoryName ?></a>
                                        </li>
                                        <li class="entry-date">
                                            <span>Date</span>
                                            <span class="value"> <?php echo date('d-m-Y', strtotime($newsDetail->created_at)) ?></span>
                                        </li>
                                        <li class="comment-total">
                                            <span>Comments</span>
                                            <a href="index.html#respond">0 comment</a></li>
                                    </ul>
                                </header>
                                <div class='post-formats-wrapper'><a class="post-image" href="index.html"><img
                                                width="870" height="445"
                                                src="<?php echo $newsDetail->img ?>"
                                                class="attachment-full size-full wp-post-image" alt=""
                                                srcset="<?php echo $newsDetail->img ?> 870w, https://educationwp.thimpress.com/wp-content/uploads/2015/10/blog-1-300x153.jpg 300w, https://educationwp.thimpress.com/wp-content/uploads/2015/10/blog-1-768x393.jpg 768w"
                                                sizes="(max-width: 870px) 100vw, 870px"/></a></div>
                                <div class="entry-content">
                                    <?php echo $newsDetail->description ?>
                                </div>
                                <div class="entry-tag-share">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="post-tag"><span>Tag:</span><a
                                                        href="../tag/designer/index.html" rel="tag">Designer</a>, <a
                                                        href="../tag/seo/index.html" rel="tag">SEO</a></p></div>
                                        <div class="col-sm-6">
                                            <ul class="thim-social-share">
                                                <li class="heading">Share:</li>
                                                <li>
                                                    <div class="facebook-social"><a target="_blank"
                                                                                    class="facebook"
                                                                                    href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Feducationwp.thimpress.com%2Fforensic-team-earns-several%2F"
                                                                                    title="Facebook"><i
                                                                    class="fa fa-facebook"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="googleplus-social"><a target="_blank"
                                                                                      class="googleplus"
                                                                                      href="https://plus.google.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fforensic-team-earns-several%2F&amp;title=Forensic%20team%20earns%20several"
                                                                                      title="Google Plus"
                                                                                      onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;"
                                                                                      data-cf-modified-1be0e827b32fbd2b3719facd-=""><i
                                                                    class="fa fa-google"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="twitter-social"><a target="_blank"
                                                                                   class="twitter"
                                                                                   href="https://twitter.com/share?url=https%3A%2F%2Feducationwp.thimpress.com%2Fforensic-team-earns-several%2F&amp;text=Forensic%20team%20earns%20several"
                                                                                   title="Twitter"><i
                                                                    class="fa fa-twitter"></i></a></div>
                                                </li>
                                                <li>
                                                    <div class="pinterest-social"><a target="_blank"
                                                                                     class="pinterest"
                                                                                     href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Feducationwp.thimpress.com%2Fforensic-team-earns-several%2F&amp;description=Lorem%20Ipsum%20is%20simply%20dummy%20text%20of%20the%20printing%20and%20typesetting%20industry.%20Lorem%20Ipsum%20has%20been%20the%20industry%26%238217%3Bs%20standard%20dummy%20text%20ever%20since%20the%201500s%2C%20when%20an%20unknown%20printer%20took%20a%20galley%20of%20type%20and%20scrambled%20it%20to%20make%20a%20%26hellip%3B%20&amp;media=https%3A%2F%2Feducationwp.thimpress.com%2Fwp-content%2Fuploads%2F2015%2F10%2Fblog-1.jpg"
                                                                                     onclick="if (!window.__cfRLUnblockHandlers) return false; window.open(this.href); return false;"
                                                                                     title="Pinterest"
                                                                                     data-cf-modified-1be0e827b32fbd2b3719facd-=""><i
                                                                    class="fa fa-pinterest-p"></i></a></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thim-about-author">
                                    <div class="author-wrapper">
                                        <div class="author-avatar">
                                            <img alt="Admin bar avatar"
                                                 src="<?php echo $newsDetail->image ? $newsDetail->image : 'web_assets/uploads/2020/1/21232f297a57a5a743894a0e4a801fc3.jpg' ?>"
                                                 class="avatar avatar-110 photo" height="110" width="110"/>
                                        </div>
                                        <div class="author-bio">
                                            <div class="author-top">
                                                <a class="name" href="javascript:void(0)">
                                                    <?php echo $newsDetail->firstname ?> </a>
                                                <p class="job"><?php echo $newsDetail->firstname ?></p>
                                            </div>
                                            <ul class="thim-author-social">
                                                <li>
                                                    <a href="http://example.com/eduma-the-best-lms-wordpress/theme"
                                                       class="facebook"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="http://example.com/eduma-the-best-lms-wordpress/theme"
                                                       class="twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="http://example.com/eduma-the-best-lms-wordpress/theme"
                                                       class="google-plus"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                                <li>
                                                    <a href="http://example.com/eduma-the-best-lms-wordpress/theme"
                                                       class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                </li>
                                                <li>
                                                    <a href="http://example.com/eduma-the-best-lms-wordpress/theme"
                                                       class="youtube"><i class="fa fa-youtube"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-description">
                                            Hello, I’m a spider man, real spider man you alway see in your TV.
                                            Surprise, i’m also a photographer and a photography teacher. You
                                            know, in my films, i alway take a lot of photos of me_spider man.
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-navigation-post">
                                    <div class="prev-post">
                                        <p class="heading">Previous post</p>
                                        <h5 class="title">
                                            <a href="../becoming-a-better-designer/index.html">Becoming a better
                                                designer</a>
                                        </h5>
                                        <div class="date">
                                            20/10/2015
                                        </div>
                                    </div>
                                    <div class="next-post">
                                        <p class="heading">Next post</p>
                                        <h5 class="title">
                                            <a href="../admin-earns-scholarship/index.html">Admin earns
                                                scholarship</a>
                                        </h5>
                                        <div class="date">
                                            20/10/2015
                                        </div>
                                    </div>
                                </div>
                                <section class="related-archive">
                                    <h3 class="single-title">You may also like</h3>
                                    <div class="archived-posts">
                                        <div class="thim-carousel-wrapper" data-visible="3" data-itemtablet="2"
                                             data-itemmobile="1" data-pagination="1">
                                            <div class="post-3698 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
                                                <div class="category-posts clear">
                                                    <img src="web_assets/uploads/2016/01/blog-8-300x200.jpg"
                                                         alt="blog-8" title="blog-8" width="300" height="200">
                                                    <div class="rel-post-text">
                                                        <h5>
                                                            <a href="../online-learning-glossary/index.html"
                                                               title="Online Learning Glossary">Online Learning
                                                                Glossary</a>
                                                        </h5>
                                                        <div class="date">
                                                            20 January, 2016
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-3699 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-designer tag-seo pmpro-has-access">
                                                <div class="category-posts clear">
                                                    <img src="web_assets/uploads/2016/01/blog-5-300x200.jpg"
                                                         alt="blog-5" title="blog-5" width="300" height="200">
                                                    <div class="rel-post-text">
                                                        <h5>
                                                            <a href="../tips-to-succeed-in-an-online-course/index.html"
                                                               title="Tips to Succeed in an Online Course">Tips
                                                                to Succeed in an Online Course</a>
                                                        </h5>
                                                        <div class="date">
                                                            20 January, 2016
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-71 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course tag-thimpress tag-wordpress pmpro-has-access">
                                                <div class="category-posts clear">
                                                    <img src="web_assets/uploads/2015/10/blog-3-300x200.jpg"
                                                         alt="blog-3" title="blog-3" width="300" height="200">
                                                    <div class="rel-post-text">
                                                        <h5>
                                                            <a href="../introducing-dr-deniz-zeynep-2/index.html"
                                                               title="Introducing: Dr. Deniz Zeynep">Introducing:
                                                                Dr. Deniz Zeynep</a>
                                                        </h5>
                                                        <div class="date">
                                                            20 October, 2015
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>


                        <div id="comments" class="comments-area">
                            <div class="comment-respond-area">
                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Leave A Reply <small><a
                                                    rel="nofollow" id="cancel-comment-reply-link"
                                                    href="index.html#respond" style="display:none;">Cancel
                                                reply</a></small></h3>




                                    <?php $this->load->view('web/includes/comment_script') ?>


                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </main>
                <div id="sidebar" class="widget-area col-sm-3 sticky-sidebar" role="complementary">
                    <aside id="search-4" class="widget widget_search"><h4 class="widget-title">Search</h4>
                        <form role="search" method="get" class="search-form"
                              action="https://educationwp.thimpress.com/">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search &hellip;" value=""
                                       name="s"/>
                            </label>
                            <input type="submit" class="search-submit" value="Search"/>
                        </form>
                    </aside>
                    <aside id="categories-2" class="widget widget_categories"><h4 class="widget-title">
                            Categories</h4>
                        <ul>
                            <li class="cat-item cat-item-9"><a href="../category/blog/index.html">Blog</a>
                            </li>
                            <li class="cat-item cat-item-11"><a
                                        href="../category/business/index.html">Business</a>
                            </li>
                            <li class="cat-item cat-item-8"><a href="../category/design-branding/index.html">Design
                                    / Branding</a>
                            </li>
                            <li class="cat-item cat-item-1"><a
                                        href="../category/uncategorized/index.html">Uncategorized</a>
                            </li>
                        </ul>
                    </aside>
                    <aside id="courses-2" class="widget widget_courses">
                        <div class="thim-widget-courses thim-widget-courses-base template-list-sidebar-v3"><h4
                                    class="widget-title">Latest Courses</h4>
                            <div class="thim-course-list-sidebar">
                                <div class="lpr_course has-post-thumbnail">
                                    <div class="course-thumbnail"><img
                                                src="web_assets/uploads/2015/11/course-4-150x150.jpg"
                                                alt="LMS Interactive Content"/></div>
                                    <div class="thim-course-content">
                                        <h3 class="course-title">
                                            <a href="../courses/learnpress-101/index.html"> LMS Interactive
                                                Content</a>
                                        </h3>
                                        <div class="course-price" itemprop="offers" itemscope=""
                                             itemtype="http://schema.org/Offer">
                                            <div class="value  free-course" itemprop="price">
                                                Free
                                            </div>
                                            <meta itemprop="priceCurrency" content="USD"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="lpr_course has-post-thumbnail">
                                    <div class="course-thumbnail"><img
                                                src="web_assets/uploads/2015/06/course-1-150x150.jpg"
                                                alt="From Zero to Hero with Nodejs"/></div>
                                    <div class="thim-course-content">
                                        <h3 class="course-title">
                                            <a href="../courses/node/index.html"> From Zero to Hero with
                                                Nodejs</a>
                                        </h3>
                                        <div class="course-price" itemprop="offers" itemscope=""
                                             itemtype="http://schema.org/Offer">
                                            <div class="value  free-course" itemprop="price">
                                                Free
                                            </div>
                                            <meta itemprop="priceCurrency" content="USD"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="lpr_course has-post-thumbnail">
                                    <div class="course-thumbnail"><img
                                                src="web_assets/uploads/2015/12/course-16-150x150.jpg"
                                                alt="Learn Python &#8211; Interactive Python"/></div>
                                    <div class="thim-course-content">
                                        <h3 class="course-title">
                                            <a href="../courses/python/index.html"> Learn Python &#8211;
                                                Interactive Python</a>
                                        </h3>
                                        <div class="course-price" itemprop="offers" itemscope=""
                                             itemtype="http://schema.org/Offer">
                                            <div class="value " itemprop="price">
                                                &#36;69.00
                                            </div>
                                            <meta itemprop="priceCurrency" content="USD"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside id="single-images-2" class="widget widget_single-images">
                        <div class="thim-widget-single-images thim-widget-single-images-base template-base">
                            <div class="single-image text-left"><img src="web_assets/uploads/2015/12/ad.jpg"
                                                                     width="330" height="359" alt=""/></div>
                        </div>
                    </aside>
                    <aside id="list-post-2" class="widget widget_list-post">
                        <div class="thim-widget-list-post thim-widget-list-post-base template-base"><h4
                                    class="widget-title">Latest Posts</h4>
                            <div class="thim-list-posts sidebar">
                                <div class="item-post has_thumb post-3698 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course pmpro-has-access">
                                    <div class="article-image"><img width="150" height="150"
                                                                    src="web_assets/uploads/2016/01/blog-8-150x150.jpg"
                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-8-150x150.jpg 150w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-8-180x180.jpg 180w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-8-300x300.jpg 300w"
                                                                    sizes="(max-width: 150px) 100vw, 150px"/>
                                    </div>
                                    <div class="article-title-wrapper"><h5><a
                                                    href="../online-learning-glossary/index.html" class="article-title">Online
                                                Learning Glossary</a></h5>
                                        <div class="article-date"><span class="day">20</span><span
                                                    class="month">Jan</span><span class="year">2016</span></div>
                                    </div>
                                </div>
                                <div class="item-post has_thumb post-3699 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-designer tag-seo pmpro-has-access">
                                    <div class="article-image"><img width="150" height="150"
                                                                    src="web_assets/uploads/2016/01/blog-5-150x150.jpg"
                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-5-150x150.jpg 150w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-5-180x180.jpg 180w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-5-300x300.jpg 300w"
                                                                    sizes="(max-width: 150px) 100vw, 150px"/>
                                    </div>
                                    <div class="article-title-wrapper"><h5><a
                                                    href="../tips-to-succeed-in-an-online-course/index.html"
                                                    class="article-title">Tips to Succeed in an Online Course</a></h5>
                                        <div class="article-date"><span class="day">20</span><span
                                                    class="month">Jan</span><span class="year">2016</span></div>
                                    </div>
                                </div>
                                <div class="item-post has_thumb post-71 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-course tag-thimpress tag-wordpress pmpro-has-access">
                                    <div class="article-image"><img width="150" height="150"
                                                                    src="web_assets/uploads/2015/10/blog-3-150x150.jpg"
                                                                    class="attachment-thumbnail size-thumbnail wp-post-image"
                                                                    alt=""
                                                                    srcset="https://educationwp.thimpress.com/wp-content/uploads/2015/10/blog-3-150x150.jpg 150w, https://educationwp.thimpress.com/wp-content/uploads/2015/10/blog-3-180x180.jpg 180w, https://educationwp.thimpress.com/wp-content/uploads/2015/10/blog-3-300x300.jpg 300w"
                                                                    sizes="(max-width: 150px) 100vw, 150px"/>
                                    </div>
                                    <div class="article-title-wrapper"><h5><a
                                                    href="../introducing-dr-deniz-zeynep-2/index.html"
                                                    class="article-title">Introducing: Dr. Deniz Zeynep</a></h5>
                                        <div class="article-date"><span class="day">20</span><span
                                                    class="month">Oct</span><span class="year">2015</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
