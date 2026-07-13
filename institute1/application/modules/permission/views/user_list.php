<table class="table table-bordered table-hover" id="RoleTbl">

    <thead>
    <tr>
        <th><?php echo "Sr." ?></th>
        <th><?php echo "User Name" ?></th>
        <th><?php echo "Role" ?></th>
        <th></th>
    </tr>
    </thead>

    <tbody>
    <?php $sl = 1; ?>
    <?php if (!empty($user_role_list)) {
        foreach ($user_role_list as $value) { ?>
            <tr>
                <td><?php echo $sl++; ?></td>
                <td><?php echo $value->firstname; ?><?php echo $value->lastname; ?></td>
                <td><?php echo $value->role_name; ?></td>
                <td class="text-center">
                    <div class="btn-group btn-group-sm">
                        <a href="<?php echo base_url("dashboard/role/edit_access_role/$value->role_acc_id") ?>"
                           class="btn btn-outline-secondary " data-skin="dark" data-toggle="kt-tooltip"
                           data-placement="top" title="" data-original-title="Edit">
                            <i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url("permission/role/delete_access_role/$value->role_acc_id") ?>"
                           onclick="return confirm('<?php echo("Are you sure?") ?>')"
                           class="btn btn-outline-secondary " data-skin="dark" data-toggle="kt-tooltip"
                           data-placement="top" title="" data-original-title="Delete">
                            <i class="fa fa-trash" aria-hidden="true"></i></a>
                    </div>
                </td>
            </tr>
        <?php }
    } ?>

    </tbody>
</table>



