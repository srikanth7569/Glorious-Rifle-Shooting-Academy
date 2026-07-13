<div class="row">
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body card-type-3">
                <div class="row">
                    <div class="col">
                        <h6 class="text-muted mb-0">Monthly Fee Collection</h6>
                        <span class="font-weight-bold mb-0"><?php echo number_format($dashboardData['monthlyFeeCollection']) . ' ' . $setting->currencySymbol ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="card-circle l-bg-orange text-white">
                            <i class="fas fa-book-open"></i>
                        </div>
                    </div>
                </div>

                <?php
                $a   = round($dashboardData['monthlyFeeCollection']);
                $b   = round($dashboardData['lastMonthFeeCollection']);
                $l_g = false;
                $c_g = false;
                if ($a > $b) {
                    $fee_percent = round($b / $a != 0 ? $a : 1) * 100;
                    $c_g         = true;
                    $l_g         = false;
                } else {
                    if ($b == 0) {
                        $b = 1;
                    }
                    $fee_percent = round($a / $b) * 100;
                    $c_g         = false;
                    $l_g         = true;
                }

                ?>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-<?php echo $l_g ? 'danger' : 'success' ?> mr-2"><i
                                class="fa fa-arrow-<?php echo $c_g ? 'up' : 'down' ?>"></i> <?php echo round($fee_percent) ?>%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body card-type-3">
                <div class="row">
                    <div class="col">
                        <h6 class="text-muted mb-0">Monthly Expenses</h6>
                        <span class="font-weight-bold mb-0"><?php echo number_format($dashboardData['monthlyExpenses']) . ' ' . $setting->currencySymbol ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="card-circle l-bg-cyan text-white">
                            <i class="fas fa-briefcase"></i>
                        </div>
                    </div>
                </div>


                <?php
                $a   = round($dashboardData['monthlyExpenses']);
                $b   = round($dashboardData['lasMonthExpenses']);
                $l_g = false;
                $c_g = false;
                if ($a > $b) {
                    $exp_percent = round($b / $a != 0 ? $a : 1) * 100;
                    $c_g         = true;
                    $l_g         = false;
                } else {
                    if ($b == 0) {
                        $b = 1;
                    }
                    $exp_percent = round($a / $b) * 100;
                    $c_g         = false;
                    $l_g         = true;
                }

                ?>


                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-<?php echo $l_g ? 'danger' : 'success' ?> mr-2"><i
                                class="fa fa-arrow-<?php echo $c_g ? 'up' : 'down' ?>"></i> <?php echo round($exp_percent) ?>%</span>
                    <span class="text-nowrap">Since last month</span>
                </p>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6">
        <div class="card">
            <div class="card-body card-type-3">
                <div class="row">
                    <div class="col">
                        <h6 class="text-muted mb-0">Total Students</h6>
                        <span class="font-weight-bold mb-0"><?php echo number_format($dashboardData['students']) ?></span>
                    </div>
                    <div class="col-auto">
                        <div class="card-circle l-bg-green text-white">
                            <i class="fas fa-phone"></i>
                        </div>
                    </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i
                                class="fa fa-arrow-up"></i> <?php echo number_format($dashboardData['lastMonthStudentEnroll']) ?></span>
                    <span class="text-nowrap">Last month enrolled</span>
                </p>
            </div>
        </div>
    </div>
    <!--    <div class="col-xl-4 col-lg-6">-->
    <!--        <div class="card">-->
    <!--            <div class="card-body card-type-3">-->
    <!--                <div class="row">-->
    <!--                    <div class="col">-->
    <!--                        <h6 class="text-muted mb-0">Earning</h6>-->
    <!--                        <span class="font-weight-bold mb-0">$8,965</span>-->
    <!--                    </div>-->
    <!--                    <div class="col-auto">-->
    <!--                        <div class="card-circle l-bg-purple text-white">-->
    <!--                            <i class="fas fa-dollar-sign"></i>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <p class="mt-3 mb-0 text-muted text-sm">-->
    <!--                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 5.4%</span>-->
    <!--                    <span class="text-nowrap">Since last month</span>-->
    <!--                </p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Revenue Chart of Month <?php echo date('F') ?></h4>
            </div>
            <div class="card-body">
                <div class="recent-report__chart">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Revenue Chart of Session <?php echo date('Y') . ' - ' . date('Y', strtotime('+1 year')) ?></h4>
            </div>
            <div class="card-body" style="height: 305px">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Earning Details</h4>
            </div>
            <div class="card-body" style="height: 305px">
                <h4 class="header-title">Earning Reports</h4>
                <p class="text-muted">1 <?php echo date('M', strtotime(date('Y-01-01'))) ?> - <?php echo date('t M') ?>
                    Data</p>
                <h2 class="mb-3"><i
                            class="mdi mdi-currency-usd text-primary"></i><?php echo $setting->currencySymbol . ' ' . number_format($dashboardData['earning_report']->totalEarnings) ?>
                </h2>
                <div class="row mb-1">
                    <div class="col-6">
                        <p class="text-muted mb-1">This Month</p>
                        <h3 class="mt-0 font-20"><?php echo $setting->currencySymbol . ' ' . number_format($dashboardData['earning_report']->thisMonth) ?>
                        </h3>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-1">Last Month</p>
                        <h3 class="mt-0 font-20"><?php echo $setting->currencySymbol . ' ' . number_format($dashboardData['earning_report']->lastMonth) ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Batch Details</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Batch</th>
                            <th>Course</th>
                            <th class="text-center">Students</th>
                            <th>Fee Progress</th>
                            <th>Start Date</th>
                            <th>Action</th>
                        </tr>


                        <?php
                        $i = 0;
                        foreach ($dashboardData['batchEarning'] as $item) {

                            $i++;
                            ?>


                            <tr>
                                <td><?php echo $i ?></td>
                                <td>
                                    <a href="batches/batchDetail/<?php echo $item->batchID ?>"><?php echo $item->title ?></a>
                                </td>
                                <td><?php echo $item->courseTitle ?></td>
                                <td class="text-center"><?php echo $item->totalStudents ?></td>

                                <?php $percent = ($item->totalCollectedFees / $item->totalPayableFees) * 100;

                                if (round($percent) > 0 and round($percent) <= 25) {
                                    $bg = 'bg-danger';
                                } elseif (round($percent) > 25 and round($percent) <= 50) {
                                    $bg = 'bg-orange';
                                } elseif (round($percent) > 50 and round($percent) <= 75) {
                                    $bg = 'bg-purple';
                                } elseif (round($percent) > 75 and round($percent) <= 100) {
                                    $bg = 'bg-success';
                                }

                                ?>

                                <td class="align-middle">
                                    <div class="progress" data-height="4" data-toggle="tooltip"
                                         title="<?php echo round($percent) . ' %' ?>">
                                        <div class="progress-bar <?php echo $bg ?>"

                                             style="width: <?php echo round($percent) ?>%"></div>
                                    </div>
                                </td>
                                <td><?php echo $item->start_date ?></td>
                                <td>
                                    <button onclick="printBatchReport(<?php echo $item->batchID; ?>)"
                                            class="btn btn-primary btn-sm btn-action" data-toggle="tooltip"
                                            title="Print">
                                        <span class="fas fa-print"></span></button>
                                </td>
                            </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('js/dashboard_js') ?>



