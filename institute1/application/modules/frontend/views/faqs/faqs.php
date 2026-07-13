<section class="faqs">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">


        <div class="heading text-center">

            <h4 class="title">Frequently Asked Questions</h4>
            <p class="sub_heading">
                Answer all of your questions
            </p>
            <span class="line"></span>


        </div>


        <div class="row mb-5">
            <div class="col-md-6">


                <h3 class="widget-title">Purchases & Refunds</h3>
                <hr>


                <div id="accordion1">


                    <?php if (!empty($faqs)) {
                        foreach ($faqs as $faq) { ?>
                            <div class="card mb-1">
                                <div class="card-header" id="heading_<?php echo $faq->id ?>">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse_<?php echo $faq->id ?>"
                                                aria-expanded="true" aria-controls="collapse_<?php echo $faq->id ?>">
                                            <?php echo $faq->question ?>
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapse_<?php echo $faq->id ?>" class="collapse"
                                     aria-labelledby="heading_<?php echo $faq->id ?>"
                                     data-parent="#accordion1">
                                    <div class="card-body">
                                        <?php echo $faq->answer ?>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>


            </div>
            <div class="col-md-6">


                <h3 class="widget-title">Making Course</h3>
                <hr>


                <div id="accordion">
                    <div class="card mb-1">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                                squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                                butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>


        <div class="contact-faq text-center">

            <h4>Didn't find the answer?</h4>

            <form action="frontend/addMessage" method="post">

                <div class="row">
                    <div class="col-md-6">


                        <div class="form-group">

                            <input required name="name" type="text" class="form-control " placeholder="Name*">

                        </div>

                    </div>
                    <div class="col-md-6">


                        <div class="form-group">

                            <input type="email" required name="email" class="form-control" placeholder="Email*">

                        </div>

                    </div>
                </div>


                <div class="form-group">

                    <input required type="text" name="subject" class="form-control" placeholder="Subject*">


                </div>

                <div class="form-group">


                    <textarea required placeholder="Message*" name="message" class="form-control"></textarea>
                </div>

                <button type="submit" class="pull-left btn btn-success text-white">Submit</button>

            </form>


        </div>


    </div>
</section>
