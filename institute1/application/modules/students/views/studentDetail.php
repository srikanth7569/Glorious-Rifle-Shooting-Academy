<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle"
                         src="<?php echo $detail->image ? $detail->image : 'assets/img/user.png' ?>"
                         alt="User profile picture">
                    <h3 class="profile-username text-center"><?php echo $detail->name ?></h3>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item listnoback">
                            <b>Admission No.</b> <a class="pull-right text-aqua"><?php echo $detail->regNo ?></a>
                        </li>
                        <li class="list-group-item listnoback">
                            <b>Course</b> <a class="pull-right text-aqua"><?php echo $detail->courseTitle ?></a>
                        </li>
                        <li class="list-group-item listnoback">
                            <b>Batch</b> <a class="pull-right text-aqua"><?php echo $detail->batchTitle ?></a>
                        </li>
                        <li class="list-group-item listnoback">
                            <b>Gender</b> <a
                                    class="pull-right text-aqua"><?php echo $detail->gender == 1 ? 'Male' : 'Female' ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-pills" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab"
                           aria-controls="profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="fee-tab3" data-toggle="tab" href="#fee3" role="tab"
                           aria-controls="fee" aria-selected="false">Fee</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade active show" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-striped">
                                <tbody>
                                <tr>
                                    <td style="width: 75%">Admission Date</td>
                                    <td>
                                        <?php echo date('Y-m-d', strtotime($detail->created_at)) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date Of Birth</td>
                                    <td><?php echo $detail->dob ?></td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td><?php echo $detail->mobile ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $detail->email ?></td>
                                </tr>
                                <tr>
                                    <td>Department</td>
                                    <td><?php echo $detail->deptName ?></td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td><?php echo $detail->semester ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="fee3" role="tabpanel" aria-labelledby="fee-tab3">
                        <table class="table table-striped" style="font-size: 8pt;">
                            <thead>
                            <tr>
                                <th>Course</th>
                                <th>Batch</th>
                                <th class="text text-right">Total Fees</th>
                                <th class="text text-center">Payment Id</th>
                                <th class="text text-center">Mode</th>
                                <th class="text-center">Date</th>
                                <th class="text text-right">Paid</th>
                                <th class="text text-right">Due</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="dark-gray">

                                <td><?php echo $detail->courseTitle ?></td>
                                <td><?php echo $detail->batchTitle ?></td>
                                <td class="text text-right"><?php echo number_format($detail->student_agreed_fee) ?></td>

                                <td colspan="3"></td>
                                <td class="text text-right"></td>
                                <td class="text text-right"></td>

                            </tr>


                            <?php
                            $total_fee_paid = 0;
                            foreach ($detail->FeeDetail as $item) {
                                $total_fee_paid += $item->amount;

                                ?>
                                <tr class="white-td">
                                    <td colspan="3" class="text-right">
                                        <img src="assets/img/table-arrow.png"
                                             alt=""/>
                                    </td>
                                    <td class="text text-center">
                                        <?php echo $item->receiptNo ?>
                                    </td>
                                    <td class="text text-center">Cash</td>
                                    <td class="text text-center">
                                        <?php echo $item->date ?>
                                    </td>
                                    <td class="text text-right"><?php echo number_format($item->amount) ?></td>
                                    <td class="text text-right"><?php echo number_format($detail->student_agreed_fee - $total_fee_paid) ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
