<section class="blog_detail">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">


        <div class="row">

            <div class="col-md-9">

                <header class="entry-header">
                    <h1 class="entry-title"><?php echo $blogDetail->title ?></h1>


                    <ul class="entry-meta row">
                        <li class="author">
                            <span>Posted by</span>
                            <span class="vcard author author_name">
                                <a href="javascript:void(0)">
                                                <?php echo $blogDetail->authorDetail->name ?>
                                </a>
                            </span>
                        </li>

                        <li class="entry-category">
                            <span>Categories</span>
                            <a href="javascript:void(0)">Business</a>
                        </li>
                        <li class="entry-date">
                            <span>Date</span>
                            <span class="value"> <?php echo date('Y-m-d', strtotime($blogDetail->created_at)) ?></span>
                        </li>
                    </ul>
                </header>


                <div class='post-wrapper'>
                    <a class="post-image" href="javascript:void(0)">
                        <img width="870" height="445" src="<?php echo $blogDetail->img ?>"
                             alt=""/>
                    </a>
                </div>

                <div class="entry-content">
                    <p><?php echo $blogDetail->description ?></p>
                </div>

                <div class="tag-share">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="post-tag"><span>Tag:</span>
                                <a href="javascript:void(0)" rel="tag">WordPress</a>
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <ul class="social-share pull-right">
                                <li class="heading">Share:</li>
                                <li>
                                    <div class="facebook-social">
                                        <a target="_blank" class="facebook"
                                           href=""
                                           title="Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="googleplus-social">
                                        <a target="_blank" class="googleplus"
                                           href=""
                                           title="Google Plus">
                                            <i class="fa fa-google">
                                            </i>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="twitter-social">
                                        <a target="_blank" class="twitter"
                                           href=""
                                           title="Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                </li>


                                <li>
                                    <div class="pinterest-social">
                                        <a target="_blank" class="pinterest"
                                           href=""
                                           title="Pinterest">
                                            <i class="fa fa-pinterest-p"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>




                <div class="about-author">
                    <div class="author-wrapper">
                        <div class="author-avatar">
                            <img alt="Admin bar avatar"
                                 src="web_assets/uploads/2020/12/athony1-thumb.jpg"
                                 class="avatar photo" height="110" width="110"/>
                        </div>

                        <div class="author-bio">
                            <div class="author-top">
                                <a class="name" href="">
                                    <?php echo $blogDetail->authorDetail->name ?> </a>
                                <p class="job">Author</p>
                            </div>

                            <ul class="author-social">
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i
                                                class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="google-plus"><i
                                                class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="author-description">
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text
                            ever since the 1500s, when an unknown printer took a galley of type
                            and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s.
                        </div>
                    </div>
                </div>





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
