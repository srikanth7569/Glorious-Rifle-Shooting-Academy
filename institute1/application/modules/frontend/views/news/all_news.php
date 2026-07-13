<section class="all_blogs">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">


        <div class="row">

            <div class="col-md-9">

                <?php if (!empty($news)) {
                    foreach ($news as $item) { ?>
                        <article class="col-sm-12">
                            <div class="content-inner">


                                <div class='post-formats-wrapper'>
                                    <a href="frontend/newsDetail/<?php echo $item->id ?>">
                                        <img width="870" height="445"
                                             alt="" src="<?php echo $item->img ?>"
                                        />
                                    </a>
                                </div>

                                <header class="entry-header">
                                    <div class="date-meta">
                                        <?php echo date('d', strtotime($item->created_at)) ?><i>
                                            <?php echo date('F', strtotime($item->created_at)) ?></i>
                                    </div>

                                    <div class="entry-contain">
                                        <h2 class="entry-title">
                                            <a href="frontend/newsDetail/<?php echo $item->id ?>">
                                                <?php echo $item->title ?>
                                            </a>
                                        </h2>

                                        <ul class="entry-meta row">
                                            <li class="author">
                                                <span>Posted by</span>
                                                <span class="vcard author author_name">
                                                                <a href="javascript:void(0)"><?php echo $item->firstname ?></a>
                                                            </span>
                                            </li>

                                            <li class="entry-category">
                                                <span>Categories</span>
                                                <a href="javascript:void(0)">Business</a></li>
                                        </ul>
                                    </div>
                                </header>

                                <div class="entry-summary">
                                    <p><?php echo $item->description ?> </p>
                                </div>
                                <div class="readmore">
                                    <a class="btn btn-sm btn-secondary" href="frontend/newsDetail/<?php echo $item->id ?>">Read
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
