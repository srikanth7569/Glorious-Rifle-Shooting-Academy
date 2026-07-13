<script>
    $(function () {
        // chart2();
        chart1();
    });


    //function chart2() {
    //
    //    var options = {
    //        chart: {
    //            height: 350,
    //            type: 'bar',
    //        },
    //        plotOptions: {
    //            bar: {
    //                dataLabels: {
    //                    position: 'top', // top, center, bottom
    //                },
    //            }
    //        },
    //        dataLabels: {
    //            enabled: true,
    //            formatter: function (val) {
    //                return val + "";
    //            },
    //            offsetY: -20,
    //            style: {
    //                fontSize: '12px',
    //                colors: ["#304758"]
    //            }
    //        },
    //        series: [{
    //            name: 'Inflation',
    //            data: <?php
    //            $i = 12;
    //            echo '[';
    //            foreach ($detail->barChart as $item) {
    //                echo $item;
    //                if ($i > 1) {
    //                    echo ',';
    //                }
    //                $i--;
    //            }
    //            echo ']';
    //            ?>
    //        }],
    //        xaxis: {
    //            categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    //            position: 'top',
    //            labels: {
    //                offsetY: -18,
    //
    //            },
    //            axisBorder: {
    //                show: false
    //            },
    //            axisTicks: {
    //                show: false
    //            },
    //            crosshairs: {
    //                fill: {
    //                    type: 'gradient',
    //                    gradient: {
    //                        colorFrom: '#D8E3F0',
    //                        colorTo: '#BED1E6',
    //                        stops: [0, 100],
    //                        opacityFrom: 0.4,
    //                        opacityTo: 0.5,
    //                    }
    //                }
    //            },
    //            tooltip: {
    //                enabled: true,
    //                offsetY: -35,
    //
    //            }
    //        },
    //        fill: {
    //            gradient: {
    //                shade: 'light',
    //                type: "horizontal",
    //                shadeIntensity: 0.25,
    //                gradientToColors: undefined,
    //                inverseColors: true,
    //                opacityFrom: 1,
    //                opacityTo: 1,
    //                stops: [50, 0, 100, 100]
    //            },
    //        },
    //        yaxis: {
    //            axisBorder: {
    //                show: false
    //            },
    //            axisTicks: {
    //                show: false,
    //            },
    //            labels: {
    //                show: false,
    //                formatter: function (val) {
    //                    return val + "";
    //                }
    //            }
    //
    //        },
    //        title: {
    //            text: 'Monthly Earning',
    //            floating: true,
    //            offsetY: 320,
    //            align: 'center',
    //            style: {
    //                color: '#444'
    //            }
    //        },
    //    };
    //
    //    var chart = new ApexCharts(
    //        document.querySelector("#chart2"),
    //        options
    //    );
    //
    //    chart.render();
    //
    //}

    function chart1() {
        var options = {
            chart: {
                height: 350,
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
                    name: 'Net Income',
                    data: <?php
                    $i = 12;
                    echo '[';
                    foreach ($detail->barChart as $item) {
                        echo $item['feePaid'];
                        if ($i > 1) {
                            echo ',';
                        }
                        $i--;
                    }


                    echo ']';
                    ?>
                },
                {
                    name: 'Salary Paid',
                    data: <?php
                    $i = 12;
                    echo '[';
                    foreach ($detail->barChart as $item) {
                        echo $item['salaryPaid'];
                        if ($i > 1) {
                            echo ',';
                        }
                        $i--;
                    }
                    echo ']';
                    ?>
                }
                // , {
                //     name: 'Free Cash Flow',
                //     data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
                // }

            ],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', "Nov", "Dec"],
            },
            yaxis: {
                title: {
                    text: 'Rs. '
                }
            },
            fill: {
                opacity: 1

            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return "Rs. " + val + " "
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

</script>
