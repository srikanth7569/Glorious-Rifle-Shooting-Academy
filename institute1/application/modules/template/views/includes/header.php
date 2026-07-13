<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">


            <li id="toggle_btn"><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                            class="fas fa-bars"></i></a></li>


            <li><a href="javascript:void(0)" class="nav-link nav-link-lg fullscreen-btn">
                    <i class="fas fa-expand"></i>
                </a>
            </li>
        </ul>
    </div>

    <?php

    $this->db->where('status', 1);
    $messages = $this->db->get('messages')->result();
    ?>

    <ul class="navbar-nav navbar-right">



        <li class="">
            <a href=""  class="nav-link nav-link-lg ">
                <i class="fa fa-desktop"></i>
            </a>
        </li>


        <li class="dropdown dropdown-list-toggle">
            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep">
                <i class="far fa-envelope"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Messages
                    <div class="float-right">
                        <a href="javascript:void(0)">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">


                    <?php if (!empty($messages)) {
                        foreach ($messages as $message) { ?>
                            <a href="email/read/<?php echo $message->id ?>" class="dropdown-item">
                            <span class="dropdown-item-avatar text-white">
                        <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle">
                            </span>
                                <span class="dropdown-item-desc">
                        <span class="message-user"><?php echo $message->name ?></span>
                        <span class="time messege-text"><?php echo $message->subject ?></span>
                        <span class="time text-black-50"><?php echo humanTiming(strtotime($message->send_at)) ?> Ago</span>
                      </span>
                            </a>
                        <?php }
                    } ?>


                </div>
                <div class="dropdown-footer text-center">
                    <a href="email/inbox">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>

<!--for future purpose-->

        <li hidden class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                     class="nav-link notification-toggle nav-link-lg beep"><i
                        class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifications
                    <div class="float-right">
                        <a href="#">Mark All As Read</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </span>
                        <span class="dropdown-item-desc">
                    Template update is available now!
                    <span class="time text-primary">2 Min Ago</span>
                  </span>
                    </a>
                    <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </span>
                        <span class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <span class="time">10 Hours Ago</span>
                  </span>
                    </a>
                    <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </span>
                        <span class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <span class="time">12 Hours Ago</span>
                  </span>
                    </a>
                    <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </span>
                        <span class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <span class="time">17 Hours Ago</span>
                  </span>
                    </a>
                    <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </span>
                        <span class="dropdown-item-desc">
                    Welcome to Ality template!
                    <span class="time">Yesterday</span>
                  </span>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="assets/img/user.png" class="user-img-radious-style">
                <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Hello <?php echo $this->session->userdata('fullname') ?></div>
                <a href="setting/profile" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="setting/appSetting" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <a href="logout" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
