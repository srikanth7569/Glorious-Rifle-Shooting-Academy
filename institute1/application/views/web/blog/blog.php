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
                        <h1>Blog</h1></div>
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
                                    itemprop="name" title="Why You Should Read Every Day">Blog</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container site-content sidebar-right">
            <div class="row">
                <main id="main" class="site-main col-sm-9 alignleft">
                    <div id="blog-archive" class="blog-content">
                        <div class="row">


                            <?php if (!empty($blogs)) {
                                foreach ($blogs as $blog) { ?>
                                    <article id="post-<?php echo $blog->id ?>"
                                             class="col-sm-12 post-<?php echo $blog->id ?> post type-post status-publish format-standard has-post-thumbnail hentry category-business tag-wordpress pmpro-has-access">
                                        <div class="content-inner">
                                            <div class='post-formats-wrapper'>
                                                <a class="post-image"
                                                   href="web/blogDetail/<?php echo $blog->id ?>"><img
                                                            width="870" height="445"
                                                            src="<?php echo $blog->img ?>"
                                                            class="attachment-full size-full wp-post-image" alt=""
                                                            srcset="<?php echo $blog->img ?> 870w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-7-300x153.jpg 300w, https://educationwp.thimpress.com/wp-content/uploads/2016/01/blog-7-768x393.jpg 768w"
                                                            sizes="(max-width: 870px) 100vw, 870px"/></a></div>
                                            <div class="entry-content">
                                                <header class="entry-header">
                                                    <div class="date-meta">
                                                        <?php echo date('d', strtotime($blog->created_at)) ?><i>
                                                            <?php echo date('M', strtotime($blog->created_at)) ?></i>
                                                    </div>
                                                    <div class="entry-contain">
                                                        <h2 class="entry-title"><a
                                                                    href="web/blogDetail/<?php echo $blog->id ?>"
                                                                    rel="bookmark"><?php echo $blog->title ?></a>
                                                        </h2>
                                                        <ul class="entry-meta">
                                                            <li class="author">
                                                                <span>Posted by</span>
                                                                <span class="vcard author author_name"><a
                                                                            href="../author/minhluu/index.html"><?php echo $blog->authorDetail->name ?></a></span>
                                                            </li>
                                                            <li class="entry-category">
                                                                <span>Categories</span> <a
                                                                        href="../category/business/index.html"
                                                                        rel="category tag">Business</a></li>
                                                        </ul>
                                                    </div>
                                                </header>

                                                <div class="entry-summary">
                                                    <p><?php echo $blog->description ?> </p>
                                                </div>
                                                <div class="readmore">
                                                    <a href="web/blogDetail/<?php echo $blog->id ?>">Read More</a>
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
                <?php $this->load->view('web/includes/aside') ?>
            </div>
        </div>
    </section>
    <?php $this->load->view('web/includes/fixed_footer') ?>
</div>
