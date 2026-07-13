<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <?php
            $this->db->select('logo,institute_name');
            $setting   = $this->db->get('setting')->row();
            $logo      = $setting->logo;
            $institute = $setting->institute_name;
            ?>

            <a href="#">
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

            <li class="<?php if ($this->uri->segment(1) == 'blogs') echo ' active ' ?>">
                <a class="nav-link "
                   href="websetting/blogs"><i
                            class="far fa-lightbulb"></i><span>My Blogs</span></a></li>

        </ul>
    </aside>
</div>
