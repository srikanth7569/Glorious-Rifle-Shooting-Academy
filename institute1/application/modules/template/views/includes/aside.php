<?php
$setting = $this->db->get('theme_setting')->row();

?>


<div class="settingSidebar">
    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
    </a>
    <div class="settingSidebar-body ps-container ps-theme-default">
        <div class=" fade show active">
            <div class="setting-panel-header">Setting Panel
            </div>

            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                    <label class="selectgroup-item">
                        <input type="radio" name="layout" <?php if ($setting->layout == 1) echo ' checked ' ?> value="1"
                               class="selectgroup-input select-layout">
                        <span class="selectgroup-button">Light</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="layout" <?php if ($setting->layout == 2) echo ' checked ' ?> value="2"
                               class="selectgroup-input select-layout">
                        <span class="selectgroup-button">Dark</span>
                    </label>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                    <label class="selectgroup-item">
                        <input type="radio" name="sidebar_color"
                               value="1" <?php if ($setting->sidebar_color == 1) echo ' checked ' ?>
                               class="selectgroup-input select-sidebar">
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                              data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="sidebar_color"
                               value="2" <?php if ($setting->sidebar_color == 2) echo ' checked ' ?>
                               class="selectgroup-input select-sidebar">
                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                              data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                    </label>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                    <ul class="choose-theme list-unstyled mb-0">
                        <li title="white" class="<?php if ($setting->theme_color == 'white') echo ' active ' ?>">
                            <div class="white"></div>
                        </li>
                        <li title="cyan" class="<?php if ($setting->theme_color == 'cyan') echo ' active ' ?>">
                            <div class="cyan"></div>
                        </li>
                        <li title="black" class="<?php if ($setting->theme_color == 'black') echo ' active ' ?>">
                            <div class="black"></div>
                        </li>
                        <li title="purple" class="<?php if ($setting->theme_color == 'purple') echo ' active ' ?>">
                            <div class="purple"></div>
                        </li>
                        <li title="orange" class="<?php if ($setting->theme_color == 'orange') echo ' active ' ?>">
                            <div class="orange"></div>
                        </li>
                        <li title="green" class="<?php if ($setting->theme_color == 'green') echo ' active ' ?>">
                            <div class="green"></div>
                        </li>
                        <li title="red" class="<?php if ($setting->theme_color == 'red') echo ' active ' ?>">
                            <div class="red"></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                    <label>
                        <span class="control-label p-r-20">Mini Sidebar</span>
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                               id="mini_sidebar_setting" <?php if ($setting->mini_sidebar == 1) echo ' checked ' ?> >
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
            </div>



            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-danger btn-restore-theme"><i class="fas fa-undo"></i> Reset</button>
                    <button onclick="saveSetting()" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        //    <?php //if ($setting->sidebar_color == 1) {
        //    echo '$(".sidebar-color input:radio").change()';
        //}
        //    ?>

        // $(".layout-color input:radio").change();
        // $(".sidebar-color input:radio").change();


        setTimeout(function () {
            // $(".choose-theme li").click();
            // $(".layout-color input:radio").change();
            // $(".layout-color input:radio").change();
            // changeLayout();
            changeSidebarColor();
            $('#mini_sidebar_setting').change();
        }, 300);

    });


    function saveSetting() {

        let layout = $("input[name='layout']:checked").val();
        let sb_color = $("input[name='sidebar_color']:checked").val();
        let theme_color = $(".choose-theme li.active").attr("title");
        let mini_sb = $('#mini_sidebar_setting').is(':checked') ? 1 : 0;


        // alert(theme_color);
        $.ajax({
            url: 'setting/updateThemeSetting',
            type: 'post',
            data: {
                layout: layout,
                sb_color: sb_color,
                theme_color: theme_color,
                mini_sb: mini_sb
            },
            success: function (data) {
                if (data) {
                    show_toaster('Setting is Updated');
                } else {
                    show_toaster('Some Error Occurred', false);
                }
            }
        });


    }

</script>
