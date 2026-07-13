<div id="pg-12-5" class="panel-grid panel-has-style">


    <div class="thim-bg-overlay siteorigin-panels-stretch panel-row-style panel-row-style-for-12-5"
         data-stretch-type="full">
        <div id="pgc-12-5-0" class="panel-grid-cell">


            <div id="panel-12-5-0-0" class="so-panel widget widget_heading panel-first-child"
                 data-index="11">
                <div class="panel-widget-style panel-widget-style-for-12-5-0-0">
                    <div class="thim-widget-heading thim-widget-heading-base template-base">
                        <div class="sc_heading   text-left">
                            <h3 style="text-transform: uppercase;color:#ffffff;" class="title">
                                Latest News
                            </h3>
                            <p class="sub-heading" style="color:#ffffff;">
                                Education news all over the world.
                            </p>
                            <span style="background-color:#ffffff" class="line"></span>
                        </div>
                    </div>
                </div>
            </div>


            <div id="panel-12-5-0-1" class="so-panel widget widget_carousel-post panel-last-child"
                 data-index="12">


                <div class="thim-widget-carousel-post thim-widget-carousel-post-base template-base">


                    <div class="thim-owl-carousel-post thim-carousel-wrapper" data-visible="3"
                         data-pagination="0" data-navigation="1" data-autoplay="0">
                        <?php if (!empty($news)) {
                            foreach ($news as $item) { ?>

                                <div class="item">
                                    <div class="image">
                                        <a href="web/newsDetail/<?php echo $item->id ?>">
                                            <img src="<?php echo $item->img ?>"
                                                 alt="Forensic team earns several" title="blog-1"
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
                                            <a href="web/newsDetail/<?php echo $item->id ?>">
                                                <?php echo $item->title ?>
                                            </a>
                                        </h4>
                                    </div>
                                </div>

                            <?php }
                        } ?>
                    </div>


                    <script type="1e0378d641c280536708df7d-text/javascript">
		jQuery(document).ready(function(){
			"use strict";

			if (jQuery("body").hasClass("vc_editor")) {
				jQuery('.thim-carousel-wrapper').each(function() {
					var item_visible = jQuery(this).data('visible') ? parseInt(
						jQuery(this).data('visible')) : 4,
						item_desktopsmall = jQuery(this).data('desktopsmall') ? parseInt(
							jQuery(this).data('desktopsmall')) : item_visible,
						itemsTablet = jQuery(this).data('itemtablet') ? parseInt(
							jQuery(this).data('itemtablet')) : 2,
						itemsMobile = jQuery(this).data('itemmobile') ? parseInt(
							jQuery(this).data('itemmobile')) : 1,
						pagination = !!jQuery(this).data('pagination'),
						navigation = !!jQuery(this).data('navigation'),
						autoplay = jQuery(this).data('autoplay') ? parseInt(
							jQuery(this).data('autoplay')) : false,
						navigation_text = (jQuery(this).data('navigation-text') &&
							jQuery(this).data('navigation-text') === '2') ? [
							'<i class=\'fa fa-long-arrow-left \'></i>',
							'<i class=\'fa fa-long-arrow-right \'></i>',
						] : [
							'<i class=\'fa fa-chevron-left \'></i>',
							'<i class=\'fa fa-chevron-right \'></i>',
						];

					jQuery(this).owlCarousel({
						items            : item_visible,
						itemsDesktop     : [1200, item_visible],
						itemsDesktopSmall: [1024, item_desktopsmall],
						itemsTablet      : [768, itemsTablet],
						itemsMobile      : [480, itemsMobile],
						navigation       : navigation,
						pagination       : pagination,
						lazyLoad         : true,
						autoPlay         : autoplay,
						navigationText   : navigation_text,
						afterAction    : function () {
							var width_screen = jQuery(window).width();
							var width_container = jQuery('#main-home-content').width();
							var elementInstructorCourses = jQuery('.thim-instructor-courses');

							if(elementInstructorCourses.length){
								if( width_screen > width_container ){
									var margin_left_value = ( width_screen - width_container ) / 2 ;
									jQuery('.thim-instructor-courses .thim-course-slider-instructor .owl-controls .owl-buttons').css('left',margin_left_value+'px');
								}
							}
						}
					});
				});
			}
		});




                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
