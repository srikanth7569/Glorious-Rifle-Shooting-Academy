<div class="row">


    <?php $this->load->view('common'); ?>
    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="card">
            <div class="boxs mail_listing">
                <div class="inbox-body no-pad">
                    <section class="mail-list">
                        <div class="mail-sender">
                            <div class="mail-heading">
                                <h4 class="vew-mail-header">
                                    <b><?php echo $detail->subject ?></b>
                                </h4>
                            </div>
                            <hr>
                            <div class="media">
                                <a href="#" class="table-img m-r-15">
                                    <img alt="image" src="assets/img/users/user-2.png" class="rounded-circle" width="35"
                                         data-toggle="tooltip" title="Sachin Pandit">
                                </a>
                                <div class="media-body">
                                    <span class="date pull-right"><?php echo date('h:i A d M Y', strtotime($detail->send_at)) ?></span>
                                    <h5 style="color: #007bff"><?php echo $detail->name ?></h5>
                                    <small class="text-muted">From: <?php echo $detail->email ?></small>
                                </div>
                            </div>
                        </div>
                        <div class="view-mail p-t-20">
                            <p><?php echo $detail->message ?></p>
                        </div>


                        <div class="replyBox m-t-20">
                            <p class="p-b-20">click here to
                                <a href="email/compose/<?php echo $detail->id ?>">Reply</a>
                                <!--                                <a href="#">Forward</a>-->
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
