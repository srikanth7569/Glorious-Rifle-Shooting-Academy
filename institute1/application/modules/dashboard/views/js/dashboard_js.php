<script>

    "use strict";


    $(function () {
        chart1();
    });


    if ($("#message-list").length) {
        $("#message-list").css({
            height: 400
        }).niceScroll();
    }

    /* chart shadow */
    var draw = Chart.controllers.line.prototype.draw;
    Chart.controllers.lineShadow = Chart.controllers.line.extend({
        draw: function () {
            draw.apply(this, arguments);
            var ctx = this.chart.chart.ctx;
            var _stroke = ctx.stroke;
            ctx.stroke = function () {
                ctx.save();
                ctx.shadowColor = '#00000075';
                ctx.shadowBlur = 10;
                ctx.shadowOffsetX = 8;
                ctx.shadowOffsetY = 8;
                _stroke.apply(this, arguments);
                ctx.restore();
            }
        }
    });

    var ctx = document.getElementById('myChart').getContext("2d");
    var gradientStroke = ctx.createLinearGradient(500, 0, 0, 0);
    gradientStroke.addColorStop(0, 'rgba(55, 154, 80, 1)');
    gradientStroke.addColorStop(1, 'rgba(131, 210, 151, 1)');

    var gradientStroke2 = ctx.createLinearGradient(0, 0, 700, 0);
    gradientStroke2.addColorStop(0, 'rgba(255, 204, 128, 1)');
    gradientStroke2.addColorStop(0.5, 'rgba(255, 152, 0, 1)');
    gradientStroke2.addColorStop(1, 'rgba(239, 108, 0, 1)');


    var myChart = new Chart(ctx, {
        type: 'lineShadow',
        data: {
            // labels: ["2010", "2011", "2012", "2013", "2014", "2015", "2016"],
            labels: [
                <?php
                $i = 6;
                if (!empty($dashboardData['revenue_chart'])) {
                    foreach ($dashboardData['revenue_chart'] as $item) {
                        echo '"';
                        echo $item->month;
                        echo '"';
                        if ($i > 1) {
                            echo ',';
                        }
                        $i--;
                    }
                } ?>

            ],
            type: 'line',
            defaultFontFamily: 'Poppins',
            datasets: [{
                label: "Income",
                data: [

                    <?php
                    $i = 6;
                    if (!empty($dashboardData['revenue_chart'])) {
                        foreach ($dashboardData['revenue_chart'] as $item) {
                            echo $item->income;
                            if ($i > 1) {
                                echo ',';
                            }
                            $i--;
                        }
                    } ?>


                ],
                borderColor: gradientStroke2,
                pointBorderColor: gradientStroke2,
                pointBackgroundColor: gradientStroke2,
                pointHoverBackgroundColor: gradientStroke2,
                pointHoverBorderColor: gradientStroke2,
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 1,
                fill: false,
                borderWidth: 4,
            }, {
                label: "Expenses",
                data: [
                    <?php
                    $i = 6;
                    if (!empty($dashboardData['revenue_chart'])) {
                        foreach ($dashboardData['revenue_chart'] as $item) {
                            echo $item->expense;
                            if ($i > 1) {
                                echo ',';
                            }
                            $i--;
                        }
                    } ?>
                ],
                borderColor: gradientStroke,
                pointBorderColor: gradientStroke,
                pointBackgroundColor: gradientStroke,
                pointHoverBackgroundColor: gradientStroke,
                pointHoverBorderColor: gradientStroke,
                pointBorderWidth: 10,
                pointHoverRadius: 10,
                pointHoverBorderWidth: 1,
                pointRadius: 1,
                fill: false,
                borderWidth: 4,
            }]
        },
        options: {
            legend: {
                position: "bottom"
            },
            tooltips: {
                mode: 'index',
                titleFontSize: 12,
                titleFontColor: '#fff',
                bodyFontColor: '#fff',
                backgroundColor: '#000',
                titleFontFamily: 'Poppins',
                bodyFontFamily: 'Poppins',
                cornerRadius: 3,
                intersect: false,
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                        beginAtZero: true,
                        maxTicksLimit: 5,
                        padding: 20,
                    },
                    gridLines: {
                        drawTicks: false,
                        display: false
                    }

                }],
                xAxes: [{
                    gridLines: {
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        padding: 20,
                        fontColor: "rgba(0,0,0,0.5)",
                        fontStyle: "bold",
                    }
                }]
            }
        }
    });


    var ctx = document.getElementById("chart-1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April", "May"],
            datasets: [{
                label: 'Sales',
                data: [10, 35, 27, 55, 30],
                borderWidth: 2,
                backgroundColor: 'rgba(78, 214, 193, .8)',
                borderColor: 'transparent',
                pointBorderWidth: 0,
                pointRadius: 2,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
            },
                {
                    label: 'Budget',
                    data: [35, 20, 45, 35, 45],
                    borderWidth: 2,

                    backgroundColor: 'rgba(226, 226, 226, .9)',
                    borderColor: 'transparent',
                    pointBorderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
                }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        // display: false,
                        drawBorder: false,
                        color: '#f2f2f2',
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 10,
                        fontColor: "#9aa0ac", // Font Color
                        callback: function (value, index, values) {
                            return '$' + value;
                        }
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        tickMarkLength: 15,
                    },
                    ticks: {
                        fontColor: "#9aa0ac", // Font Color
                    }
                }]
            },
        }
    });

    var options = {
        chart: {
            height: 200,
            type: 'bar',
            toolbar: {
                show: false,
            }
        },
        plotOptions: {
            bar: {
                columnWidth: '40%',
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val + "%";
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#9aa0ac"]
            }
        },
        series: [{
            name: 'Income',
            data: [2.3, 3.1, 4.0, 5.1, 4.0, 3.6, 3.2]
        }],
        xaxis: {
            categories: ["S", "M", "T", "W", "T", "F", "S"],
            position: 'bottom',
            labels: {
                offsetY: -1,

            },
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },

            tooltip: {
                enabled: false,
                offsetY: -35,

            }
        },

        yaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function (val) {
                    return val + "%";
                }
            }

        },

    };


    var chart = new ApexCharts(
        document.querySelector("#chart2"),
        options
    );

    chart.render();


    function chart1() {
        var options = {
            chart: {
                height: 210,
                type: 'bar',
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    endingShape: 'rounded',
                    columnWidth: '55%',
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            series: [
                {
                    name: 'Fees',
                    data: [

                        <?php
                        $i = 31;
                        foreach ($dashboardData['bar_chart']->fees as $fee) {

                            echo $fee;

                            if ($i > 1) {
                                echo ',';
                            }
                            $i--;

                        } ?>


                    ]
                }, {
                    name: 'Expense',
                    data: [

                        <?php
                        $i = 31;
                        foreach ($dashboardData['bar_chart']->expenses as $item) {

                            echo $item;

                            if ($i > 1) {
                                echo ',';
                            }
                            $i--;

                        } ?>
                    ]
                }],
            xaxis: {
                categories: [
                    <?php
                    $j = 31;
                    for ($i = 1; $i <= 31; $i++) {
                        echo $i;
                        if ($j > 1) {
                            echo ',';
                        }
                        $j--;
                    }
                    ?>

                ],
            },
            yaxis: {
                title: {
                    text: '<?php echo $setting->currencySymbol?> (thousands)'
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "<?php echo $setting->currencySymbol?> " + val
                    }
                }
            }
        };

        var chart = new ApexCharts(
            document.querySelector("#chart1"),
            options
        );

        chart.render();


    }

    function printBatchReport(batchID) {
        $.ajax({
            url: 'batches/printDetail/' + batchID,
            success: function (data) {
                // let div
                var $myStyle = "";


                var winPrint = window.open('', '', 'left=0,top=0,width=auto,height=auto,toolbar=0,scrollbars=0,status=0');
                // $myStyle = document.getElementById(divName).innerHTML;
                $myStyle = data;
                winPrint.document.write($myStyle);
                winPrint.document.close();
                winPrint.focus();
                setTimeout(function () {
                    // window.location.reload();
                    // winPrint.close();

                    winPrint.print();
                }, 1000);

                setTimeout(function () {
                    // window.location.reload();
                    winPrint.close();

                }, 3000);
                // window.print();
                // window.open();
            }
        })

    }


</script>
