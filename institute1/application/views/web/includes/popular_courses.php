<div id="pg-12-2" class="panel-grid panel-has-style">
    <div class="panel-row-style panel-row-style-for-12-2">
        <div id="pgc-12-2-0" class="panel-grid-cell">
            <div id="panel-12-2-0-0" class="so-panel widget widget_heading panel-first-child"
                 data-index="4">
                <div class="thim-widget-heading thim-widget-heading-base template-base">
                    <div class="sc_heading   text-left">
                        <h3 style="text-transform: uppercase;" class="title">
                            Popular Courses
                        </h3>
                        <span class="line"></span>
                    </div>
                </div>
            </div>


            <div id="panel-12-2-0-1" class="so-panel widget widget_courses panel-last-child"
                 data-index="5">

                <div class="thim-widget-courses thim-widget-courses-base template-slider-v3">
                    <div class="thim-carousel-wrapper thim-course-carousel thim-course-grid"
                         data-visible="4" data-pagination="0" data-navigation="1" data-autoplay="0">
                        <!--    Course 1      -->


                        <?php if (!empty($popularCourses)) {
                            foreach ($popularCourses as $cours) { ?>


                                <div class="course-item" style="box-shadow: 2px 0 15px grey">
                                    <div class="course-thumbnail">
                                        <a href="web/courseDetail/<?php echo $cours->id ?>">
                                            <img src="<?php echo $cours->image ?>"
                                                 alt="LMS Interactive Content" title="course-4" width="400"
                                                 height="300">
                                        </a>
                                        <a class="course-readmore" href="web/courseDetail/<?php echo $cours->id ?>">
                                            Read More
                                        </a>
                                    </div>
                                    <div class="thim-course-content">
                                        <div class="course-author"
                                        >
                                            <img src="<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->img : 'web_assets/uploads/2020/7/9c081444f942cc8fe0ddf55631b584e2-40x40.jpg' ?>"
                                                 width="40" height="40"
                                                 alt="author-avatar" title="author-avatar">
                                            <div class="author-contain">
                                                <div class="value" itemprop="name">
                                                    <a href="web/facultyDetail/<?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->id : 1 ?>">
                                                        <?php echo sizeof($cours->courseFaculties) > 0 ? $cours->courseFaculties[0]->name : 'Admin' ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="course-title">
                                            <a href="web/courseDetail/<?php echo $cours->id ?>" rel="bookmark">
                                                <?php echo $cours->title ?>
                                            </a>
                                        </h2>
                                        <div class="course-meta">
                                            <div class="course-students">
                                                <label>Students</label>
                                                <div class="value">
                                                    <i class="fa fa-group">
                                                    </i>
                                                    <?php echo $cours->totalStudent ?>
                                                </div>
                                                <span>students</span>
                                            </div>
                                            <div class="course-comments-count">
                                                <div class="value">
                                                    <i class="fa fa-calendar">
                                                    </i>
                                                    <?php echo $cours->duration . ' ' . $cours->duration_type ?>
                                                </div>
                                            </div>
                                            <div class="course-price" itemprop="offers" itemscope=""
                                                 itemtype="http://schema.org/Offer">
                                                <div class="value course-price" itemprop="price">
                                                    <?php echo number_format($cours->fees) ?> RS.
                                                </div>
                                                <meta itemprop="priceCurrency" content="PK"/>
                                            </div>
                                        </div>
                                        <div class="course-price" itemprop="offers" itemscope=""
                                             itemtype="http://schema.org/Offer">
                                            <div class="value  free-course" itemprop="price">
                                                20$
                                            </div>
                                            <meta itemprop="priceCurrency" content="PK"/>
                                        </div>
                                        <div class="course-readmore">
                                            <a href="web/courseDetail/<?php echo $cours->id ?>">Read More</a>
                                        </div>
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
						navigationText   : navigation_text
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
