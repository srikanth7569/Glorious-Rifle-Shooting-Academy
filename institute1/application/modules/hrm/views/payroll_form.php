<div class="card">
    <div class="card-header">
        <span class="fa fa-search mr-2"></span><h4>Search Criteria</h4>
    </div>
    <div class="card-body">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <select style="width: 100%" name="roleID" class="form-control select2"
                            id="roleID">
                        <option value="">Select Role</option>
                        <?php if (!empty($roles)) {
                            foreach ($roles as $item) { ?>
                                <option value="<?php echo $item->id ?>"><?php echo $item->title ?></option>
                            <?php }
                        } ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <select style="width: 100%" name="monthID" class="form-control select2"
                            id="monthID">
                        <option value="">Select Month</option>
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <option <?php if (date('m') == $i) echo ' selected ' ?>
                                    value="<?php echo date('m', strtotime(date('Y-' . $i . '-01'))) ?>">
                                <?php echo date('F', strtotime(date('Y-' . $i . '-01'))) ?></option>
                        <?php } ?>

                    </select>
                </div>
                <div class="col-md-4">
                    <select style="width: 100%" name="year" class="form-control select2"
                            id="year">
                        <option value="">Select Year</option>
                        <option value="<?php echo date('Y', strtotime('-1 year')) ?>"><?php echo date('Y', strtotime('-1 year')) ?></option>
                        <option selected value="<?php echo date('Y') ?>"><?php echo date('Y') ?></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button onclick="getEmployees()" class="btn btn-primary"><span class="fa fa-search mr-1"></span>Search
        </button>
    </div>
</div>


<div id="employee_list"></div>

<script>
    function getEmployees() {
        let roleID = $('#roleID').val();
        let monthID = $('#monthID').val();
        let year = $('#year').val();


        if (roleID == '') {
            alert('Select role');
            return;
        }
        if (monthID == '') {
            alert('Select Month');
            return;
        }
        if (year == '') {
            alert('Select Year');
            return;
        }

        $.ajax({
            url: 'hrm/payroll/getEmployeesRecord',
            type: 'post',
            data: {
                roleID: roleID,
                monthID: monthID,
                year: year
            },
            success: function (data) {
                $('#employee_list').html(data);
            }
        })
    }
</script>
