<section class="all_events">
    <?php $this->load->view('common/top_section') ?>


    <div class="container site-content">

        <link rel="stylesheet" href="assets/frontend/css/lightbox.min.css">
        <link rel="stylesheet" href="assets/frontend/css/mdb.min.css">
        <script src="assets/frontend/js/lightbox.min.js"></script>


        <div class="row">
            <div class="col-md-12">

                <div id="mdb-lightbox-ui">


                    <!-- Root element of PhotoSwipe. Must have class pswp. -->
                    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                        <!-- Background of PhotoSwipe.
                                     It's a separate element, as animating opacity is faster than rgba(). -->
                        <div class="pswp__bg"></div>

                        <!-- Slides wrapper with overflow:hidden. -->
                        <div class="pswp__scroll-wrap">

                            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                            <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                            </div>

                            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                            <div class="pswp__ui pswp__ui--hidden">

                                <div class="pswp__top-bar">

                                    <!--  Controls are self-explanatory. Order can be changed. -->

                                    <div class="pswp__counter"></div>

                                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                                    <!--<button class="pswp__button pswp__button--share" title="Share"></button>-->

                                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                    <!-- element will get class pswp__preloader--active when preloader is running -->
                                    <div class="pswp__preloader">
                                        <div class="pswp__preloader__icn">
                                            <div class="pswp__preloader__cut">
                                                <div class="pswp__preloader__donut"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--
                                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                            <div class="pswp__share-tooltip"></div>
                                        </div>
                                           -->

                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>

                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>

                                <div class="pswp__caption">
                                    <div class="pswp__caption__center"></div>
                                </div>

                            </div>

                        </div>

                    </div>



                </div>

                <div class="mdb-lightbox no-margin" data-pswp-uid="1">

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(117).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(117).jpg"
                                 class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(123).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(118).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(118).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(132).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(132).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                    <figure class="col-md-4">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(133).jpg" data-size="1600x1067">
                            <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(133).jpg"
                                 class="img-fluid" />
                        </a>
                    </figure>

                </div>

            </div>
        </div>




    </div>
</section>

<script>
    // MDB Lightbox Init
    $(function () {
        // $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
</script>
