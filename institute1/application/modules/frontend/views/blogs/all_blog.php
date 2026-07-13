<section class="all_blogs">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">


        <div class="row">

            <div class="col-md-9">

                <?php if (!empty($blogs)) {
                    foreach ($blogs as $blog) { ?>
                        <article class="col-sm-12">
                            <div class="content-inner">


                                <div class='post-formats-wrapper'>
                                    <a href="frontend/blogDetail/<?php echo $blog->id ?>">
                                        <img width="870" height="445"
                                             alt="" src="<?php echo $blog->img ?>"
                                        />
                                    </a>
                                </div>

                                <header class="entry-header">
                                    <div class="date-meta">
                                        <?php echo date('d', strtotime($blog->created_at)) ?><i>
                                            <?php echo date('F', strtotime($blog->created_at)) ?></i>
                                    </div>

                                    <div class="entry-contain">
                                        <h2 class="entry-title">
                                            <a href="frontend/blogDetail/<?php echo $blog->id ?>">
                                                <?php echo $blog->title ?>
                                            </a>
                                        </h2>

                                        <ul class="entry-meta row">
                                            <li class="author">
                                                <span>Posted by</span>
                                                <span class="vcard author author_name">
                                                                <a href="javascript:void(0)"><?php echo $blog->authorDetail->name ?></a>
                                                            </span>
                                            </li>

                                            <li class="entry-category">
                                                <span>Categories</span>
                                                <a href="javascript:void(0)">Business</a></li>
                                        </ul>
                                    </div>
                                </header>

                                <div class="entry-summary">
                                    <p><?php echo $blog->description ?> </p>
                                </div>
                                <div class="readmore">
                                    <a class="btn btn-sm btn-secondary" href="frontend/blogDetail/<?php echo $blog->id ?>">Read
                                        More</a>
                                </div>


                            </div>
                        </article>
                    <?php }
                } ?>


            </div>

            <div class="col-md-3">


                <?php $this->load->view('common/aside_search') ?>
                <?php $this->load->view('common/aside_blog_categories') ?>
                <?php $this->load->view('common/aside_latest_courses') ?>
                <?php $this->load->view('common/aside_ad') ?>

                <?php $this->load->view('common/aside_latest_posts') ?>


            </div>
        </div>


    </div>


</section>
