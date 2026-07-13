<!DOCTYPE html>
<html>

<?php $this->load->view('includes/head') ?>
<body class="hold-transition register-page">

<div class="register-box">
    <div class="register-logo">
        <a href="javascript:void(0)"><b>GCWUF</b>Alumni</a>
    </div>

    <div class="card">
        <div class="card-body card-body">
            <p class="login-box-msg">Register a New Alumni</p>

            <form action="login/registration" enctype="multipart/form-data" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Reg/ Roll:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <!--                            <input required name="reg_no" type="text" class="form-control"-->
                                <!--                                   data-inputmask='"mask": "9999-GCWUF-9999"' data-mask placeholder="Registration No.">-->
                                <input name="reg_no" type="text" class="form-control" placeholder="Registration No.">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                </div>
                                <input required name="name" type="text" class="form-control" placeholder="Student Name">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Father Name:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                </div>
                                <input required name="father_name" type="text" class="form-control"
                                       placeholder="Student Name">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>DOB:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input required name="dob" type="text" class="form-control"
                                       data-inputmask-alias="datetime"
                                       data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Gender:</label>
                            <div class="form-inline">
                                <div class="form-check">
                                    <input class="form-check-input" value="0" type="radio" name="gender">
                                    <label class="form-check-label">Male</label>
                                </div>
                                <div class="form-check ml-2">
                                    <input class="form-check-input" value="1" type="radio" name="gender" checked="">
                                    <label class="form-check-label">Female</label>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>NIC:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                </div>
                                <input required name="nic" type="text" class="form-control"
                                       data-inputmask='"mask": "99999-9999999-9"'
                                       data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input required name="contact" type="text" class="form-control"
                                       data-inputmask='"mask": "0999-9999999"' data-mask>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-user"></i></span>
                                </div>
                                <input required name="email" placeholder="Email" type="email" class="form-control">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Picture:</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="picture" class="custom-file-input"
                                           id="user_image">
                                    <label class="custom-file-label" for="user_image">Choose file</label>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Session:</label>

                            <div class="input-group">
                                <select required name="session" class="select2" style="width: 100%;">
                                    <option selected="selected" value="">Select Session</option>

                                    <?php
                                    $year = 1970;
                                    for ($i = 1; $i <= 50; $i++) {
                                        $year++; ?>
                                        <option value="<?php echo $year ?>"><?php echo $year ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>CV:</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="cv" type="file" class="custom-file-input" id="user_cv">
                                    <label class="custom-file-label" for="user_cv">Choose file</label>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Fee Group:</label>

                            <div class="input-group">
                                <select required name="fee_group" class="select2" style="width: 100%;">
                                    <option selected="selected" value="">Select Fee Group</option>

                                    <?php
                                    $year = 2000;

                                    if (!empty($fee_master)) {
                                        foreach ($fee_master as $item) {
                                            ?>
                                            <option value="<?php echo $item->group_id ?>"><?php echo $item->group_title ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Program:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                                </div>
                                <input required name="program" placeholder="Program" type="text" class="form-control">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Comment:</label>

                            <div class="input-group">
                            <textarea name="comment" class="form-control" rows="3"
                                      placeholder="Enter some comments"></textarea>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>

            </form>


            <a href="login" class="text-center">I already have registered</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->
<?php $this->load->view('includes/js') ?>
</body>
</html>

