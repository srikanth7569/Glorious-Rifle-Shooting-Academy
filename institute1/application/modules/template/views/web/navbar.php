<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar"
                    aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
            </button>
            <a href="" class=""><img height="28px" width="189px" src="web_assets/img/gcwuf.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="#header-wrap">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#schedules">
                        schedules
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">
                        Alumni
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">
                        Gallery
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">
                        Faq
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sponsors">
                        Volunteers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">
                        Notice
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-map">
                        Contact
                    </a>
                </li>

                <?php if ($this->session->userdata('id')) { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="logout">
                            Logout
                        </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            Login
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
        <li>
            <a class="page-scrool" href="#header-wrap">Home</a>
        </li>
        <li>
            <a class="page-scrool" href="#about">About</a>
        </li>
        <li>
            <a class="page-scroll" href="#schedules">schedules</a>
        </li>
        <li>
            <a class="page-scroll" href="#team">Speakers</a>
        </li>
        <li>
            <a class="page-scroll" href="#gallery">Gallery</a>
        </li>
        <li>
            <a class="page-scroll" href="#faq">Faq</a>
        </li>
        <li>
            <a class="page-scroll" href="#sponsors">Sponsors</a>
        </li>
        <li>
            <a class="page-scroll" href="#pricing">pricing</a>
        </li>
        <li>
            <a class="page-scroll" href="#contact-map">Contact</a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</nav>
