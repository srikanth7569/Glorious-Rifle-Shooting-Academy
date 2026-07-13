<style id='woocommerce-inline-inline-css' type='text/css'>
    .woocommerce form .form-row .required {
        visibility: visible;
    }
</style>
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
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span
                                    itemprop="name" title="Why You Should Read Every Day">News</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div id="blog-archive" class="blog-content">
                        <div class="row">


                            <?php if (!empty($news)) {
                                foreach ($news as $item) { ?>
                                    <article id="post-<?php echo $item->id ?>"
                                             class="col-sm-12 post-<?php echo $item->id ?> post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
                                        <div class="content-inner">
                                            <div class='post-formats-wrapper'>
                                                <a class="post-image"
                                                   href="web/newsDetail/<?php echo $item->id ?>"><img
                                                            width="870" height="445"
                                                            src="<?php echo $item->img ?>"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            srcset="<?php echo $item->img ?> 870w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-7-300x153.jpg 300w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-7-768x393.jpg 768w"
                                                            sizes="(max-width: 870px) 100vw, 870px"/></a></div>
                                            <div class="entry-content">
                                                <header class="entry-header">
                                                    <div class="date-meta">
                                                        <?php echo date('d', strtotime($item->created_at)) ?><i>
                                                            <?php echo date('M', strtotime($item->created_at)) ?></i>
                                                    </div>
                                                    <div class="entry-contain">
                                                        <h2 class="entry-title"><a
                                                                    href="web/newsDetail/<?php echo $item->id ?>"
                                                                    rel="bookmark"><?php echo $item->title ?></a>
                                                        </h2>
                                                        <ul class="entry-meta">
                                                            <li class="author">
                                                                <span>Posted by</span>
                                                                <span class="vcard author author_name"><a
                                                                            href="javascript:void(0)"><?php echo $item->firstname ?></a></span>
                                                            </li>
                                                            <li class="entry-category">
                                                                <span>Categories</span> <a
                                                                        href="javascript:void(0)"
                                                                        rel="category tag"><?php echo $item->categoryName ?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </header>

                                                <div class="entry-summary">
                                                    <p><?php echo $item->description ?> </p>
                                                </div>
                                                <div class="readmore">
                                                    <a href="web/newsDetail/<?php echo $item->id ?>">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php }
                            } ?>


                        </div>
                    </div>
                    <div class="pagination loop-pagination">
                        <ul class='page-numbers'>
                            <li><span aria-current="page" class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="page/2/index.html">2</a></li>
                            <li><a class="page-numbers" href="page/3/index.html">3</a></li>
                            <li><a class="next page-numbers" href="page/2/index.html">&#62;</a></li>
                        </ul>
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


                    <?php $this->load->view('web/includes/latest_courses_3'); ?>
                    <?php $this->load->view('web/includes/side_banner'); ?>
                    <?php $this->load->view('web/includes/latest_posts_3'); ?>

                </div>
            </div>
        </div>
    </section>


    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
