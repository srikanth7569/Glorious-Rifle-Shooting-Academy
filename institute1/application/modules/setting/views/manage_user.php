<div class="row">
    <div class="col-md-4">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Add User</h5>
            </div>
            <div class="card-body">

                <form action="setting/user/create_user" method="post" enctype="multipart/form-data">


                    <input type="hidden" name="id">
                    <input type="hidden" name="old_image">

                    <div class="form-group">
                        <label for="fee_type">First Name</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="first_name" type="text" class="form-control"
                                   placeholder="Enter First Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="fee_type">Last Name</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="last_name" type="text" class="form-control"
                                   placeholder="Enter Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fee_type">Email</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="email" type="email" class="form-control"
                                   placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fee_type">Password</label>
                        <div class="input-group">
                            <input autocomplete="off" required name="password" type="password" class="form-control"
                                   placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Picture:</label>

                        <div class="input-group">
                            <div class="custom-file">
                                <input required type="file" name="picture" class="custom-file-input"
                                       id="user_image">
                                <label class="custom-file-label" for="user_image">Choose file</label>
                            </div>
                        </div>
                        <!-- /.input group -->
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
                <div class="card-title">User List</div>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Last Login</th>
                        <th>IP Address</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;
                    if (!empty($user_list)) {
                        foreach ($user_list as $user) {
                            $i++; ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $user->firstname . ' ' . $user->lastname ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->last_login ?></td>
                                <td><?php echo $user->ip_address ?></td>
                                <td class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <button class="btn btn sm" onclick="getUserByID('<?php echo $user->id ?>')">
                                            <span class="fa fa-edit"></span>
                                        </button>
                                        <button class="btn btn-sm" onclick="deleteUser('<?php echo $user->id ?>')">
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
    function getUserByID(id) {

        $.ajax({
            url: 'setting/user/getUserByID/' + id,
            success: function (data) {
                let obj = jQuery.parseJSON(data);
                $("[name='first_name']").val(obj.firstname);
                $("[name='last_name']").val(obj.lastname);
                $("[name='email']").val(obj.email);
                $("[name='id']").val(obj.id);
                $("[name='old_image']").val(obj.image);
                $('#user_image').removeAttr('required');
            }
        })


    }

    function deleteUser(id) {

        $.ajax({
            url: 'setting/user/delete_user/' + id,
            success: function (data) {
                window.location = 'setting/user';
            }
        })
    }
</script>
