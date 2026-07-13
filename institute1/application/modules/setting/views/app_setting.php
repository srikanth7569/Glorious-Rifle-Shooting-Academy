<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Setting Form</h4>
            </div>
            <div class="card-body">
                <form action="setting/appSetting" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php if (!empty($settingDetail)) {
                        echo $settingDetail->id;
                    } ?>">

                    <input type="hidden" name="old_image" value="<?php if (!empty($settingDetail)) {
                        echo $settingDetail->logo;
                    } ?>">


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Institute Name</label>
                                <input type="text" value="<?php if (!empty($settingDetail)) {
                                    echo $settingDetail->institute_name;
                                } ?>" name="institute_name" class="form-control" placeholder="Institute Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" value="<?php if (!empty($settingDetail)) {
                                    echo $settingDetail->email;
                                } ?>" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="number" value="<?php if (!empty($settingDetail)) {
                                    echo $settingDetail->phone;
                                } ?>" name="phone" class="form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address"
                                          class="form-control"><?php if (!empty($settingDetail)) {
                                        echo $settingDetail->address;
                                    } ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="logo" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Reg. No. Prefix</label>
                                <input name="regNoPrefix" value="<?php if (!empty($settingDetail)) {
                                    echo $settingDetail->regNoPrefix;
                                } ?>" type="text" class="form-control" placeholder="SIFSD01">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Receipt No. Prefix</label>
                                <input name="receiptNoPrefix" value="<?php if (!empty($settingDetail)) {
                                    echo $settingDetail->receiptNoPrefix;
                                } ?>" type="text" class="form-control" placeholder="SIFSD01">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Currency</label>
                                <select required class="select2 w-100" name="currency" id="">
                                    <option value="">Select Currency</option>

                                    <?php if (!empty($currencyList)) {
                                        foreach ($currencyList as $item) { ?>
                                            <option <?php if (!empty($settingDetail)) {
                                                if ($item->id == $settingDetail->currency) echo ' selected ';
                                            } ?>
                                                    value="<?php echo $item->id ?>"><?php echo $item->name . ' ' . $item->code . ' ' . $item->symbol ?></option>
                                        <?php }
                                    } ?>
                                </select>
                            </div>
                        </div>


                    </div>
                    <div class="">
                        <button class="btn  btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
