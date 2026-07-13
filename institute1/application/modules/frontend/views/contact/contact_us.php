<section class="contact_us">
    <?php $this->load->view('common/top_section') ?>


    <div class="container">


        <div class="row">


            <div class="col-md-6 first">


                <div class="heading">

                    <h3>Contact Info</h3>


                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <div class="col">
                        <span class="line"></span>
                    </div>
                </div>

                <div class="social">

                    <div class="row p-3">

                        <div class="col-md-6">
                            <div class="content-inner">
                                <div class="icon-box pull-left">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="pull-left">
                                    <h5 class="">Phone</h5>
                                    <p>0123456789</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="content-inner">
                                <div class="icon-box pull-left">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="pull-left">
                                    <h5 class="">Email</h5>
                                    <p>email@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="border-top: 1px solid #eee;">
                            <div class="col-md-6 mt-3">
                                <div class="content-inner">
                                    <div class="icon-box pull-left">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="pull-left">
                                        <h5 class="">Address</h5>
                                        <p>ABC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="col" style="border-top: 1px solid #eee;">
                            <div class="col-md-6 mt-3">

                                <ul class="social_link p-0">
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>


                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" target="_blank">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <div class="col-md-6 first">


                <div class="heading">

                    <h3>Send a Message</h3>


                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                    <div class="col">
                        <span class="line"></span>
                    </div>
                </div>


                <div class="form mb-3">

                    <form action="frontend/addMessage" method="post">


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input required name="name" type="text" placeholder="Name*" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input required name="email" type="email" placeholder="Email*" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">

                            <input type="text" name="subject" required placeholder="Subject" class="form-control">

                        </div>
                        <div class="form-group">
                            <textarea name="message" required placeholder="Message" class="form-control"
                                      id=""></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>

                    </form>

                </div>


            </div>


        </div>
    </div>


    <div class="subscriben" style="background-image: url(web_assets/uploads/2015/10/bg-register-now.jpg)">


        <div class="overlay">

            <div class="text-center">


                <div class="heading">

                    <h4 class="text-white mt-3">Subscribe to our News</h4>

                    <span class="line"></span>
                </div>


                <div class="col-md-12 subscribe_form">


                    <div class="row">

                        <div class="col-md-4"></div>
                        <div class="col-md-4">

                            <form id="subscriber_form" class="form-inline">
                                <div class="w-100 form-group input-group mx-sm-3 mb-2">
                                    <input type="email" name="email" id="subscriber_email" class="form-control"
                                           placeholder="Your email here">
                                    <div class="input-group-append">

                                        <button type="submit" class="btn btn-primary">
                                            Subscribe
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-4"></div>

                    </div>
                </div>


            </div>

        </div>


    </div>


</section>
