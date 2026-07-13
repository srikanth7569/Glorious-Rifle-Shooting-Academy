<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="detail-tab3" data-toggle="tab" href="#detail3" role="tab"
                           aria-controls="detail" aria-selected="true">Detail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="students-tab3" data-toggle="tab" href="#students3" role="tab"
                           aria-controls="students" aria-selected="false">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="earning_report-tab3" data-toggle="tab" href="#earning_report3"
                           role="tab"
                           aria-controls="earning_report" aria-selected="false">Earning Report</a>
                    </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTabContent2">
                    <div class="tab-pane fade active show" id="detail3" role="tabpanel" aria-labelledby="detail-tab3">
                        <div class="table-responsive">
                            <table class="table table-hover table-sm table-striped">
                                <tbody>
                                <tr>
                                    <td style="width: 75%">Batch Title</td>
                                    <td>
                                        <?php echo $detail->title ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Course</td>
                                    <td><?php echo $detail->courseTitle ?></td>
                                </tr>
                                <tr>
                                    <td>Fees</td>
                                    <td><?php echo $detail->courseFee ?></td>
                                </tr>
                                <tr>
                                    <td>Timing</td>
                                    <td><?php echo $detail->batch_time ?></td>
                                </tr>
                                <tr>
                                    <td>Start Date</td>
                                    <td><?php echo $detail->start_date ?></td>
                                </tr>
                                <tr>
                                    <td>Expected End Date</td>
                                    <td><?php echo $detail->end_date ?></td>
                                </tr>
                                <tr>
                                    <td>Faculty</td>
                                    <td><?php echo $detail->name ?></td>
                                </tr>
                                <tr>
                                    <td>Faculty Agreed Fee</td>
                                    <td><?php echo $detail->faculty_agreed_fees . ' %' ?></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="students3" role="tabpanel" aria-labelledby="students-tab3">
                        <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <!--                                <th>Email</th>-->
                                <th>Mobile</th>
                                <!--                                <th>CNIC</th>-->
                                <th>Course</th>
                                <!--                                <th>Batch</th>-->
                                <th class="text-right">CourseFee</th>
                                <th class="text-right">Student Agreed Fee</th>
                                <th class="text-right">Paid Fee</th>
                                <th class="text-right">Due Fee</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php

                            $courseTotal        = 0;
                            $studentAgreedTotal = 0;
                            $paidTotal          = 0;
                            $dueTotal           = 0;
                            if (!empty($detail->students)) {
                                $i = 0;
                                foreach ($detail->students as $item) {
                                    $i++; ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td>
                                            <a href="students/studentDetail/<?php echo $item->id ?>"><?php echo $item->name ?></a>
                                        </td>
                                        <!--                                        <td>-->
                                        <?php //echo $item->email ?><!--</td>-->
                                        <td><?php echo $item->mobile ?></td>
                                        <!--                                        <td>-->
                                        <?php //echo $item->cnic ?><!--</td>-->
                                        <td><?php echo $item->courseTitle ?></td>
                                        <!--                                        <td>-->
                                        <?php //echo $item->batchTitle ?><!--</td>-->

                                        <td class="text-right"><?php echo number_format($item->courseFee) ?></td>
                                        <td class="text-right"><?php echo number_format($item->student_agreed_fee) ?></td>
                                        <td class="text-right"><?php echo number_format($item->feePaid) ?></td>
                                        <td class="text-right"><?php echo abs($item->student_agreed_fee - $item->feePaid) ?></td>

                                        <?php
                                        $courseTotal        += $item->courseFee;
                                        $studentAgreedTotal += $item->student_agreed_fee;
                                        $paidTotal          += $item->feePaid;
                                        $dueTotal           += abs($item->student_agreed_fee - $item->feePaid);

                                        ?>


                                    </tr>
                                <?php }
                            } ?>


                            </tbody>
                            <tfoot>
                            <tr>
                                <th colspan="4" class="text-right">Total</th>
                                <th class="text-right"><?php echo number_format($courseTotal) ?></th>
                                <th class="text-right"><?php echo number_format($studentAgreedTotal) ?></th>
                                <th class="text-right"><?php echo number_format($paidTotal) ?></th>
                                <th class="text-right"><?php echo number_format($dueTotal) ?></th>
                            </tr>
                            </tfoot>
                        </table>


                    </div>
                    <div class="tab-pane fade" id="earning_report3" role="tabpanel"
                         aria-labelledby="earning_report-tab3">


                        <div class="offset-2  col-md-8">
                            <div class="">
                                <div class="card-header">
                                    <h4>Earning</h4>
                                </div>
                                <div class="card-body">
                                    <div class="recent-report__chart">
                                        <div id="chart1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page Specific JS File -->
<?php $this->load->view('chart'); ?>
