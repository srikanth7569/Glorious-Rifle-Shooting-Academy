<div class="row">
    <div class="col-md-4">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Menu</h4>
            </div>
            <div class="card-body">

                <form action="permission/permission_setup/save_menu" method="post">

                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="fee_type">Menu Title</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="menu_title" type="text" class="form-control"
                                   placeholder="Menu Title">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee_type">Module</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="module" type="text" class="form-control"
                                   placeholder="Module">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee_type">Parent Menu</label>
                        <div class="input-group">
                            <select name="parent_menu" class="select2" style="width: 100%;">
                                <option selected="selected" value="">Select Parent</option>

                                <?php
                                if (!empty($p_menu)) {
                                    foreach ($p_menu as $menu) {
                                        ?>
                                        <option value="<?php echo $menu->menu_id ?>"><?php echo $menu->menu_title ?></option>
                                    <?php }
                                } ?>
                            </select>
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                    </div>

                </form>


            </div>
        </div>
    </div>
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Menu List</h4>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Menu Title</th>
                        <th>Module</th>
                        <th>Parent Menu</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    if (!empty($menu_item_list)) {
                        foreach ($menu_item_list as $menu) {
                            $parent = $this->db->select('menu_title')->where('menu_id', $menu->parent_menu)->get('sec_menu_item')->row();

                            $i++; ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $menu->menu_title ?></td>
                                <td><?php echo $menu->module ?></td>
                                <td><?php echo @$parent->menu_title ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn sm"
                                                onclick="getMenuByID('<?php echo $menu->menu_id ?>')">
                                            <span class="fa fa-edit"></span>
                                        </button>
                                        <button class="btn btn-sm" onclick="deleteUser('<?php echo $menu->menu_id ?>')">
                                            <span class="fa fa-trash"></span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

<script>
    function getMenuByID(id) {

        $.ajax({
            url: 'permission/permission_setup/getMenuByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='menu_title']").val(obj.menu_title);
                $("[name='module']").val(obj.module);
                $("[name='parent_menu']").val(obj.parent_menu).trigger('change');
                $("[name='id']").val(obj.menu_id);
            }
        })


    }

    function deleteUser(id) {

        $.ajax({
            url: 'permission/permission_setup/delete_menu_item/' + id,
            success: function (data) {
                window.location = 'permission/permission_setup';
            }
        })
    }
</script>
