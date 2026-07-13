<div class="mt-4">


    <div class="latest_news" style="background-image: url('web_assets/images/register/newsletter.jpg')">

        <div class="container">


            <div class="row">
                <div class="col-md-6">
                    <div class="heading">
                        <h4>Latest News</h4>

                    </div>
<!--                    <div class="sub_heading">-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.-->
<!--                    </div>-->
                </div>
                <div class="col-md-6 text-right mt-4">
                    <div class="btn-group btn-group-sm">
                        <button id="ln_btn_pre" class="btn btn-sm btn-primary"><span
                                class="fa fa-chevron-left"></span>
                        </button>
                        <button id="ln_btn_next" class="btn btn-sm btn-primary"><span
                                class="fa fa-chevron-right"></span></button>
                    </div>
                </div>
            </div>


            <div id="latest_news" class="owl-carousel owl-theme mt-4">


                <?php if (!empty($news)) {
                    foreach ($news as $item) { ?>

                        <div class="item">
                            <div class="image">
                                <a href="frontend/newsDetail/<?php echo $item->id ?>">
                                    <img src="<?php echo $item->img ?>"
                                         width="450" height="267">
                                </a>
                            </div>
                            <div class="content">
                                <div class="info">
                                    <div class="author">
                                        <span><?php echo $item->firstname ?></span>
                                    </div>
                                    <div class="date">
                                        <?php echo date('d-m-Y', strtotime($item->created_at)) ?>
                                    </div>
                                </div>
                                <h4 class="title">
                                    <a href="frontend/newsDetail/<?php echo $item->id ?>">
                                        <?php echo $item->title ?>
                                    </a>
                                </h4>
                            </div>
                        </div>

                    <?php }
                } ?>
            </div>

        </div>

    </div>


</div>
