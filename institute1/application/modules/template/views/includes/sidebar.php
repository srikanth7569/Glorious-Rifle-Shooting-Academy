<div class="main-sidebar pb-3 sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <?php
            $this->db->select('logo,institute_name');
            $setting   = $this->db->get('setting')->row();
            $logo      = $setting->logo;
            $institute = $setting->institute_name;
            ?>

            <a href="dashboard/home">
                <img alt="image" src="<?php echo $logo ?>" class="header-logo"/>
                <span class="logo-name"><?php echo $institute ?></span>
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="<?php if ($this->uri->segment(1) == 'dashboard') echo ' active ' ?>">
                <a class="nav-link" href="dashboard/home">
                    <i class="fas fa-home"></i><span>Dashboard</span>
                </a>
            </li>


            <?php if ($this->permission->check_label('enquiries')->read()->access()) { ?>

                <li class="<?php if ($this->uri->segment(1) == 'enquiries') echo ' active ' ?>"><a class="nav-link "
                                                                                                   href="enquiries"><i
                                class="far fa-lightbulb"></i><span>Enquiries</span></a></li>
            <?php } ?>


            <?php if ($this->permission->check_label('students')->read()->access()) { ?>

                <li class="<?php if ($this->uri->segment(1) == 'students') echo ' active ' ?>">
                    <a class="nav-link" href="students">
                        <i class
                           ="fas fa-user-friends"></i><span>Students</span></a></li>
            <?php } ?>


            <?php if ($this->permission->check_label('batches')->read()->access()) { ?>

                <li class="<?php if ($this->uri->segment(1) == 'batches') echo ' active ' ?>"><a class="nav-link "
                                                                                                 href="batches"><i
                                class="fas fa-book-open"></i><span>Batches</span></a></li>
            <?php } ?>



            <?php if ($this->permission->check_label('faculties')->read()->access()) { ?>

                <li class="<?php if ($this->uri->segment(1) == 'faculties') echo ' active ' ?>"><a class="nav-link "
                                                                                                   href="faculties"><i
                                class="fas fa-user-check"></i><span>Faculties</span></a></li>
            <?php } ?>


            <?php if ($this->permission->check_label('courses')->read()->access()) { ?>


                <li class="<?php if ($this->uri->segment(1) == 'courses') echo ' active ' ?>"><a class="nav-link "
                                                                                                 href="courses"><i
                                class="fas fa-graduation-cap"></i><span>Courses</span></a></li>
            <?php } ?>

            <?php if ($this->permission->check_label('emails')->read()->access()) { ?>


                <li class="<?php if ($this->uri->segment(1) == 'email') echo ' active ' ?>"><a class="nav-link "
                                                                                               href="email/inbox"><i
                                class="fas fa-envelope-open"></i><span>Email</span></a></li>
            <?php } ?>



            <?php if ($this->permission->check_label('masters')->read()->access()) { ?>


                <li class="dropdown <?php if ($this->uri->segment(1) == 'master') echo ' active ' ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-pencil-alt"></i><span>Masters</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'courseCategory') echo ' active ' ?>"><a
                                    class="nav-link" href="master/courseCategory">Course Category</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'expenseCategory') echo ' active ' ?>"><a
                                    class="nav-link" href="master/expenseCategory">Expense Category</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'enquiryStatus') echo ' active ' ?>"><a
                                    class="nav-link" href="master/enquiryStatus">Enquiry Status</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'designations') echo ' active ' ?>"><a
                                    class="nav-link" href="master/designations">Designation</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'departments') echo ' active ' ?>"><a
                                    class="nav-link" href="master/departments">Department</a></li>

                        <li class="<?php if ($this->uri->segment(1) == 'guests') echo ' active ' ?>"><a
                                    class="nav-link" href="guests">Guests</a></li>
                    </ul>
                </li>

            <?php } ?>



            <?php if ($this->permission->check_label('fee')->read()->access()) { ?>
                <li class="<?php if ($this->uri->segment(1) == 'fee') echo ' active ' ?>"><a class="nav-link "
                                                                                             href="fee"><i
                                class="fas fa-tag"></i><span>Collect Fee</span></a></li>
            <?php } ?>

            <?php if ($this->permission->check_label('hrm')->read()->access()) { ?>

                <li class="dropdown <?php if ($this->uri->segment(1) == 'hrm') echo ' active ' ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-sitemap"></i><span>HRM</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'payroll') echo ' active ' ?>"><a
                                    class="nav-link" href="hrm/payroll">Payroll</a></li>
                    </ul>
                </li>
            <?php } ?>



            <?php if ($this->permission->check_label('expenses')->read()->access()) { ?>

                <li class="<?php if ($this->uri->segment(1) == 'expenses') echo ' active ' ?>"><a class="nav-link "
                                                                                                  href="expenses"><i
                                class="fas fa-dollar-sign"></i><span>Expenses</span></a></li>
            <?php } ?>



            <?php if ($this->permission->check_label('reports')->read()->access()) { ?>


                <li class="dropdown <?php if ($this->uri->segment(1) == 'reports') echo ' active ' ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-alt"></i><span>Reports</span></a>
                    <ul class="dropdown-menu">
                        <?php if ($this->permission->check_label('fee_report')->read()->access()) { ?>

                            <li class="<?php if ($this->uri->segment(2) == 'getFeeReport') echo ' active ' ?>"><a
                                        class="nav-link" href="reports/getFeeReport">Fee Report</a></li>
                        <?php } ?>

                        <?php if ($this->permission->check_label('expense_report')->read()->access()) { ?>

                            <li class="<?php if ($this->uri->segment(2) == 'getExpenseReport') echo ' active ' ?>"><a
                                        class="nav-link" href="reports/getExpenseReport">Expense Report</a></li>
                        <?php } ?>
                    </ul>
                </li>

            <?php } ?>




            <?php if ($this->permission->check_label('settings')->read()->access()) { ?>


                <li class="dropdown <?php if ($this->uri->segment(1) == 'setting' || $this->uri->segment(1) == 'permission') echo ' active ' ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Settings</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'appSetting') echo ' active ' ?>">
                            <a class="nav-link"
                               href="setting/appSetting">App
                                Setting</a></li>


                        <li class="<?php if ($this->uri->segment(2) == 'emailSetting') echo ' active ' ?>">
                            <a class="nav-link"
                               href="setting/emailSetting">Email
                                Template</a></li>


                        <li class="<?php if ($this->uri->segment(2) == 'currency') echo ' active ' ?>">
                            <a class="nav-link"
                               href="setting/currency">Currency</a></li>


                        <li class="<?php if ($this->uri->segment(2) == 'user') echo ' active ' ?>"><a class="nav-link"
                                                                                                      href="setting/user">Users</a>
                        </li>
                        <li class="<?php if ($this->uri->segment(2) == 'permission_setup') echo ' active ' ?>"><a
                                    class="nav-link" href="permission/permission_setup">Menu</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'role') echo ' active ' ?>"><a class="nav-link"
                                                                                                      href="permission/role">Roles</a>
                        </li>

                        <li class="<?php if ($this->uri->segment(3) == 'user_access_role') echo ' active ' ?>"><a
                                    class="nav-link" href="permission/role/user_access_role">User Access Role</a></li>


                    </ul>
                </li>

            <?php } ?>


            <!--web setting-->

            <?php if ($this->permission->check_label('web_settings')->read()->access()) { ?>


                <li class="dropdown <?php if ($this->uri->segment(1) == 'websetting') echo ' active ' ?>">
                    <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Web Settings</span></a>
                    <ul class="dropdown-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'slider') echo ' active ' ?>">
                            <a class="nav-link"
                               href="websetting/slider">Slider</a></li>


                        <li class="<?php if ($this->uri->segment(2) == 'event') echo ' active ' ?>">
                            <a class="nav-link"
                               href="websetting/event">Events</a>
                        </li>

                        <li class="<?php if ($this->uri->segment(2) == 'event') echo ' active ' ?>">
                            <a class="nav-link"
                               href="websetting/news">News</a>
                        </li>

                        <?php if ($this->permission->check_label('blogs')->read()->access()) { ?>

                            <li class="<?php if ($this->uri->segment(2) == 'blogs') echo ' active ' ?>">
                                <a class="nav-link "
                                   href="websetting/blogs">
                                    Blogs</a></li>
                        <?php } ?>


                        <?php if ($this->permission->check_label('about')->read()->access()) { ?>

                            <li class="<?php if ($this->uri->segment(2) == 'about') echo ' active ' ?>">
                                <a class="nav-link "
                                   href="websetting/about">
                                    About Us</a></li>
                        <?php } ?>

                        <?php if ($this->permission->check_label('faqs')->read()->access()) { ?>

                            <li class="<?php if ($this->uri->segment(2) == 'faqs') echo ' active ' ?>">
                                <a class="nav-link "
                                   href="websetting/faqs">
                                    Faqs</a></li>
                        <?php } ?>


                    </ul>
                </li>

            <?php } ?>


        </ul>
    </aside>
</div>
