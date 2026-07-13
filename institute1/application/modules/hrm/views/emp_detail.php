<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class=" row">
                            <div class="col-md-2">
                                <div class="row">
                                    <img width="125" height="125" class="profile-user-img img-responsive img-circle"
                                         src="<?php if (isset($employeeDetails)) {
                                             echo $employeeDetails->img;
                                         } else echo 'assets/img/user.png' ?>"
                                         alt="No Image">
                                </div>
                            </div>

                            <div class="col-md-10">
                                <div class="row">
                                    <table class="table mb0 font13 table-sm">
                                        <tbody>
                                        <tr>
                                            <th class="bozero">Name</th>
                                            <td class="bozero"><?php if (!empty($employeeDetails)) {
                                                    echo $employeeDetails->name;
                                                } ?></td>

                                            <th class="bozero">Staff ID</th>
                                            <td class="bozero">9004</td>
                                        </tr>

                                        <tr>
                                            <th>Phone</th>
                                            <td><?php echo $employeeDetails->mobile ?></td>
                                            <th>Email</th>
                                            <td><?php echo $employeeDetails->email ?></td>
                                        </tr>
                                        <tr>
                                            <th>EPF No</th>
                                            <td>564544</td>
                                            <th>Role</th>
                                            <td><?php echo $employeeDetails->designation ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-md-3">

        <div class="card">
            <div class="card-header"><h4>Courses</h4></div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i = 0;
                    foreach ($employeeDetails->courses as $item) {
                        $i++; ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $item->title ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-header"><h4>Students</h4></div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th class="text-right">Total Fee</th>
                        <th class="text-right">Paid Fee(<?php echo date('F', strtotime(date('Y-' . $month . '-01'))) ?>)
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i          = 0;
                    $total_paid = 0;
                    $total      = 0;
                    foreach ($employeeDetails->students as $student) {
                        $total      += $student->student_agreed_fee;
                        $total_paid += $student->feeCollected;

                        $i++; ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $student->name ?></td>
                            <td class="text-right"><?php echo number_format($student->student_agreed_fee) ?></td>
                            <td class="text-right"><?php echo number_format($student->feeCollected) ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th colspan="2" class="text-right">Total</th>
                        <th class="text-right"><?php echo number_format($total) ?></th>
                        <th class="text-right"><?php echo number_format($total_paid) ?></th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4>Payroll Summary</h4>
            </div>
            <div class="card-body">
                <form action="hrm/payroll/generatePayroll/<?php echo $emp_id . '/' . $month . '/' . $year ?>"
                      method="post">

                    <table class="table">
                        <tbody>
                        <tr>
                            <td style="width: 50%">Basic Salary</td>
                            <td style="width: 50%">
                                <input required id="basic_salary" name="basic_salary" type="number" readonly
                                       value="<?php echo $employeeDetails->salaryPayable ?>"
                                       class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>Deduction</td>
                            <td><input required value="0" onchange="onChange()" onkeyup="onChange()" id="deduction"
                                       name="deduction" type="number" class="form-control form-control-sm">
                            </td>
                        </tr>
                        <tr>
                            <td>Gross Salary</td>
                            <td>
                                <input required id="gross_salary" name="gross_salary" readonly type="number"
                                       class="form-control form-control-sm">
                            </td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <td><input required value="0" onchange="onChange()" onkeydown="onChange()" id="tax"
                                       name="tax"
                                       type="number"
                                       class="form-control form-control-sm"></td>
                        </tr>
                        <tr>
                            <td>Net Salary</td>
                            <td><input required id="net_salary" name="net_salary" readonly type="number"
                                       class="form-control form-control-sm"></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="2" class="text-right">
                                <button class="btn btn-primary">Submit</button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function () {

        setTimeout(function () {
            onChange();
        }, 300);

    });

    function onChange() {
        let basic_salary = $('#basic_salary').val();
        let deduction = $('#deduction');
        let gross_salary = $('#gross_salary');
        let tax = $('#tax');
        let net_salary = $('#net_salary');

        if (deduction.val() < 0) {
            deduction.val(0);
        }

        gross_salary.val(parseFloat(basic_salary) - parseFloat(deduction.val()));


        net_salary.val(parseFloat(gross_salary.val()) - parseFloat(tax.val()));


    }
</script>
