<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">-->
<link rel="stylesheet" href="assets/frontend/custom/css/menu.css">

<!-- header start -->
<div class="header-classic" style="position: absolute;
    z-index: 2;
    right: 0;
    left: 0;">
    <nav class="navbar navbar-dark text-white bg-dark">
        <div class="container">
            <div class="mr-auto d-none d-sm-block" style="font-size: 12px;">
                Have any question ?
                <span class="ml-3 fa fa-phone"></span> 123456789
                <span class="ml-3 fa fa-envelope"></span> abc@gmail.com
            </div>


            <div class="ml-auto" style="font-size: 12px;">
                <a href="javascript:void(0)" onclick="showRegisterModal()" class="mr-1"
                   style="color: white">Register</a> |
                <a href="login" style="color: white" class="ml-1"> Login</a>
            </div>


        </div>
    </nav>
    <!-- top header close -->
    <!-- navigation start -->
    <div id="header2" class="container" style="margin-top: 14px;
    border-radius: 10px;
    position: fixed;
    left: 5%;
    right: 5%;">


        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


                <nav class="navbar navbar-expand-lg navbar-classic">


                    <a class="navbar-brand" href="frontend">
                        <img id="white_logo" src="assets/frontend/images/steuplogo.png" height="50" alt="">
                    </a>


                    <button class="navbar-toggler collapsed mr-3" type="button" data-toggle="collapse"
                            data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="bg-white icon-bar top-bar mt-0"></span>
                        <span class="bg-white icon-bar middle-bar"></span>
                        <span class="bg-white icon-bar bottom-bar"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbar-classic">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">


                            <li class="nav-item">
                                <a class="nav-link" href="frontend">Home</a>
                            </li>


                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="menu-4" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Courses
                                </a>
                                <ul style="left: 10%" class="dropdown-menu mega-dropdown-menu" aria-labelledby="menu-4">


                                    <li class="row">

                                        <ul class="col-md-4">
                                            <li>
                                                <a class="dropdown-item" href="frontend/allCourses">
                                                    All Courses</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="frontend/basicDevelopment">
                                                    Basic Development</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="frontend/advanceDevelopment">
                                                    Advance Development
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="frontend/advanceDevelopment">
                                                    Graphics Designing
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="frontend/becomeInstructor">
                                                    Become an Instructor</a>
                                            </li>
                                        </ul>


                                        <ul class="col-md-4 text-center">
                                            <li>
                                                <a class="dropdown-item" href="#">

                                                    <img style="width: 200px;height: 200px;"
                                                         src="web_assets/uploads/2015/11/course-4-450x450.jpg"
                                                         alt="" width="450"
                                                         height="450">


                                                </a>

                                                <a style="font-size: 12px;padding: 6px 21px;width: 80%;" href=""
                                                   class="btn btn-secondary">Online LMS</a>

                                            </li>
                                        </ul>
                                        <ul class="col-md-4">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <img style="width: 200px;height: 300px"
                                                         src="web_assets/uploads/2016/02/megamenu.jpg"
                                                         width="252" height="359" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="menu-2" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="menu-1">
                                    <li><a class="dropdown-item" href="frontend/aboutUs">
                                            Why StepUp IT Solutions</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">
                                            Brand Ambassadors</a>
                                    </li>
                                    <li><a class="dropdown-item" href="frontend/gallery">
                                            Gallery</a>
                                    </li>
                                    <li><a class="dropdown-item" href="frontend/blogs">
                                            Blog</a>
                                    </li>

                                </ul>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="frontend/events">Events</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="frontend/news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="frontend/contactUs">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a onclick="showSearch()" class="nav-link" href="javascript:void(0)"><span
                                            class="fa fa-search"></span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- navigation close -->
</div>


<?php $this->load->view('includes/search') ?>


<!-- header close -->

<script>
    $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });


    function showSearch() {
        $('#search_course').removeClass('d-none');
    }

    function hideSearch() {
        $('#search_course').addClass('d-none');
    }
</script>
