<div id="pg-12-0" class="panel-grid panel-has-style">
    <div class="siteorigin-panels-stretch thim-fix-stretched panel-row-style panel-row-style-for-12-0"
         data-stretch-type="full-stretched">
        <div id="pgc-12-0-0" class="panel-grid-cell">
            <div id="panel-12-0-0-0"
                 class="so-panel widget widget_text panel-first-child panel-last-child"
                 data-index="0">
                <div class="textwidget">
                    <!--                    <script data-cfasync="false"-->
                    <!--                            src="web_assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
                    <!--                    <script type="1e0378d641c280536708df7d-text/javascript"-->
                    <!--                            src="web_assets/wp-content/plugins/revslider/public/assets/js/revolution.tools.min8895.js?rev=6.1.1"></script>-->
                    <!--                    <script type="1e0378d641c280536708df7d-text/javascript"-->
                    <!--                            src="web_assets/wp-content/plugins/revslider/public/assets/js/rs6.min8895.js?rev=6.1.1"></script>-->


                    <p class="rs-p-wp-fix"></p>
                    <rs-module-wrap id="rev_slider_6_1_wrapper" data-source="gallery"
                                    style="background:transparent;padding:0;background-repeat:no-repeat;background-size:cover;background-position:center center;">


                        <rs-module id="rev_slider_6_1" style="display:none;" data-version="6.1.1">
                            <rs-slides>


                                <?php if (!empty($sliders)) {
                                    foreach ($sliders as $slider) {
                                        ?>


                                        <!--   First Slider     -->
                                        <rs-slide data-key="rs-<?php echo $slider->id ?>" data-title="Slide"
                                                  data-thumb="web_assets/images/web.jpg"
                                                  data-anim="ei:d;eo:d;s:d;r:0;t:fade;sl:d;">
                                            <img src="<?php echo $slider->img ?>" title="Home"
                                                 data-lazyload="<?php echo $slider->img ?>"
                                                 class="rev-slidebg"
                                                 data-no-retina>
                                            <rs-layer style="margin-top: 100px; margin-left: 20px;"
                                                      id="slider-6-slide-<?php echo $slider->id ?>-layer-1"
                                                      class="thim-slider-sub-heading" data-type="text"
                                                      data-color="rgba(252, 252, 252, 1)"
                                                      data-xy="xo:15px;y:m;yo:-146px,-150px,-45px,-20px;"
                                                      data-text="s:24,24,20,16;l:30;fw:700,700,700,600;"
                                                      data-rsp_o="off" data-rsp_bd="off"
                                                      data-frame_0="o:1;tp:600;"
                                                      data-frame_0_chars="y:100%;o:1;rZ:-35deg;"
                                                      data-frame_0_mask="u:t;"
                                                      data-frame_1="tp:600;e:Power4.easeInOut;st:300;sp:1800;sR:300;"
                                                      data-frame_1_mask="u:t;"
                                                      data-frame_999="o:0;tp:600;e:Power2.easeIn;st:w;sp:100;sR:6200;"
                                                      style="z-index:5;"><?php echo $slider->description ?>
                                            </rs-layer>
                                            <h3 id="slider-6-slide-<?php echo $slider->id ?>-layer-2"
                                                class="rs-layer thim-slider-heading" data-type="text"
                                                data-color="rgba(255, 255, 255, 1)"
                                                data-xy="xo:15px;y:m;yo:-75px,-85px,10px,20px;"
                                                data-text="s:70,70,48,48;l:100;fw:700;" data-rsp_o="off"
                                                data-rsp_bd="off" data-frame_0="o:1;tp:600;"
                                                data-frame_0_chars="x:105%;o:1;rX:45deg;rY:0deg;rZ:90deg;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;e:Power4.easeInOut;st:200;sp:2000;sR:200;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;e:Power2.easeIn;st:w;sp:100;sR:6400;"
                                                style="z-index:6; margin-top: 80px; margin-left: 20px">
                                                <?php echo $slider->title ?>
                                                <!--                                                            STEPUP IT SOLUTIONS-->
                                            </h3>
                                            <rs-layer id="slider-6-slide-<?php echo $slider->id ?>-layer-4"
                                                      data-type="text"
                                                      data-color="rgba(191, 185, 184, 1)"
                                                      data-xy="x:c;y:b;yo:40px,40px,30px,20px;"
                                                      data-text="s:14;l:14;"
                                                      data-actions='o:click;a:scrollbelow;offset:0;sp:300;e:Linear.easeNone;'
                                                      data-basealign="slide" data-rsp_o="off"
                                                      data-rsp_bd="off" data-frame_0="tp:600;"
                                                      data-frame_1="tp:600;e:Power2.easeInOut;st:500;sR:500;"
                                                      data-frame_999="o:0;tp:600;e:nothing;st:w;sp:100;sR:8200;"
                                                      style="z-index:8;cursor:pointer;">
                                                <div class="thim-click-to-bottom">
                                                    <i class="fa  fa-chevron-down">
                                                    </i>
                                                </div>
                                            </rs-layer>
                                        </rs-slide>


                                    <?php }
                                } ?>

                            </rs-slides>
                            <rs-progress class="rs-bottom" style="visibility: hidden !important;">
                            </rs-progress>
                        </rs-module>


                        <script type="1e0378d641c280536708df7d-text/javascript">

					setREVStartSize({c: 'rev_slider_6_1',rl:[1240,1024,768,480],el:[],gw:[1200,960,768,481],gh:[500,400,400,320],layout:'fullscreen',offsetContainer:'',offset:'',mh:"0"});
					var	revapi6,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_6_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_6_1");
						}else{
							revapi6 = tpj("#rev_slider_6_1").show().revolution({
								jsFileLocation:"//educationwp.thimpress.com/web_assets/wp-content/plugins/revslider/public/assets/js/",
								sliderLayout:"fullscreen",
								visibilityLevels:"1240,1024,768,480",
								gridwidth:"1200,960,768,481",
								gridheight:"500,400,400,320",
								minHeight:"",
								lazyType:"single",
								spinner:"spinner2",
								responsiveLevels:"1240,1024,768,480",
								disableForceFullWidth:true,
								disableProgressBar:"on",
								navigation: {
									mouseScrollNavigation:false,
									onHoverStop:false,
									arrows: {
										enable:true,
										tmp:"<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
										style:"zeus",
										hide_onmobile:true,
										hide_under:1024,
										hide_onleave:true,
										left: {

										},
										right: {

										}
									}
								},
								fallbacks: {
									panZoomDisableOnMobile:true,
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}

					});


                        </script>
                        <script type="1e0378d641c280536708df7d-text/javascript">
					var htmlDivCss = ' #rev_slider_6_1_wrapper rs-loader.spinner2{ background-color: #FFFFFF !important; } '
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}


                        </script>
                        <!--                        <script type="1e0378d641c280536708df7d-text/javascript">-->
                        <!--					var htmlDivCss = unescape("%23rev_slider_6_1_wrapper%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A1000%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%27revicons%27%3B%0A%20%20font-size%3A20px%3B%0A%20%20color%3A%23ffffff%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%23rev_slider_6_1_wrapper%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_6_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A");-->
                        <!--					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');-->
                        <!--					if(htmlDiv) {-->
                        <!--						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;-->
                        <!--					}else{-->
                        <!--						var htmlDiv = document.createElement('div');-->
                        <!--						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';-->
                        <!--						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);-->
                        <!--					}-->
                        <!---->
                        <!--                        </script>-->


                        <!--                        <script type="1e0378d641c280536708df7d-text/javascript">-->
                        <!--					var htmlDivCss = unescape("%0A%0A%0A");-->
                        <!--					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');-->
                        <!--					if(htmlDiv) {-->
                        <!--						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;-->
                        <!--					}else{-->
                        <!--						var htmlDiv = document.createElement('div');-->
                        <!--						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';-->
                        <!--						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);-->
                        <!--					}-->
                        <!---->
                        <!--                        </script>-->
                    </rs-module-wrap>

                </div>
            </div>
        </div>
    </div>
</div>
