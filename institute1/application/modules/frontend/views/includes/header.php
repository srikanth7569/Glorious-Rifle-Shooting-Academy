<header class="sticky-header" id="header">
    <nav class="navbar navbar-dark text-white bg-dark">
        <div class="container">
            <div class="mr-auto d-none d-sm-block" style="font-size: 12px;">
                Have any question ?
                <span class="ml-3 fa fa-phone"></span> 123456789
                <span class="ml-3 fa fa-envelope"></span> abc@gmail.com
            </div>
            <div class="ml-auto" style="font-size: 12px;">
                Login
            </div>
        </div>
    </nav>


    <div class="container">




        <nav id="main_nav" class="navbar  navbar-expand-sm navbar-dark bg-transparent">

            <div class="container ">

                <a class="navbar-brand" href="#">
                    <img id="color_logo" class="d-none" src="assets/frontend/images/mainlogo.png" height="50" alt="">
                    <img id="white_logo" src="assets/frontend/images/steuplogo.png" height="50" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse  navbar-collapse" id="navbarSupportedContent">













                    <ul class="navbar-nav ml-auto main_ul myclass ">
                        <li class="nav-item active">
                            <a class="nav-link" href="frontend">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Courses</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="frontend/allCourses">All Courses</a>
                                <a class="dropdown-item" href="frontend/basicDevelopment">Basic Development</a>
                                <a class="dropdown-item" href="frontend/advanceDevelopment">Advance Development</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="frontend/becomeInstructor">Become Instructor</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                About Us
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="frontend/aboutUs">Why Stepup IT Solution</a>
                                <a class="dropdown-item" href="#">Brand Ambassadors</a>
                                <a class="dropdown-item" href="frontend/gallery">Gallery</a>
                                <a class="dropdown-item" href="frontend/blogs">Blog</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="frontend/events">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="frontend/news">News</a>
                        </li>

                        <li class="nav-item mr-2">
                            <a class="nav-link" href="frontend/contactUs">Contact</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><span class="fa fa-search"></span></a>
                        </li>
                    </ul>





                </div>
            </div>
        </nav>
    </div>


    <style type="text/css">
        /* Required styling */
        .init-magic-line,
        .magic-line-inner {
            position: relative;
        }

        .magic-line {
            z-index: -1;
            position: absolute;
        }

        .magic-line-css-transition {
            transition: all .2s ease-in-out;
        }

        /* DEMO STYLES */


        .magic-line-menu,
        .magic-line-inner,
        .magic-line-inner ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .magic-line-inner ul {
            list-style: none;
        }

        .magic-line-menu a,
        .magic-line-menu-pill a {
            font-weight: 700;
            color: #182848;
            cursor: pointer;
            text-align: center;
            padding: 10px 20px;
            display: block;
        }

        .magic-line {
            border-radius: 4px;
            background: #FFF;
        }
    </style>

    <script>


        var myMagicLine = new magicLine(
            document.querySelectorAll('.myclass'),
            {
                mode: 'line',
                navElements: 'a',
                animationCallback: function (el, params) {
                    anime({
                        targets: el,
                        left: params.left,
                        top: params.top,
                        width: params.width,
                        height: params.height
                    });
                }
            }
        );
        myMagicLine.init();

    </script>


</header>
