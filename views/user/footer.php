        </div>
    </div>
</div>

        </body>

<footer style="background: rgb(27,27,27);" class="mt-auto">
    <div class="container-fluid row text-center m-0" style="background: rgb(44,44,44); color: rgb(114, 114, 114)">
        <h6 style="padding: 15px 0">© 2023 Youmee LLC. All rights reserved.</h6>
    </div>
</footer>

<script>

    window.addEventListener('load', function () {
        $(document).ready(function () {
            $('#subjectsTable').DataTable({
                // dom: 'Qfrtip',
                order: [[0, 'desc']],
                "bLengthChange": false,
                responsive: true,
                language: {
                    paginate: {
                        previous: '<',
                        next: '>',
                    }
                },
                columnDefs: [
                    { targets: [1, 11], orderable: false },
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: -1 },
                    { responsivePriority: 10001, targets: 3 },
                    { responsivePriority: 10001, targets: 4 },
                    { responsivePriority: 10001, targets: 5 },
                    { responsivePriority: 10001, targets: 6 },
                    { responsivePriority: 10001, targets: 7 },
                    { responsivePriority: 10001, targets: 8 },
                    { responsivePriority: 10001, targets: 9 },
                    { responsivePriority: 10001, targets: 10 },
                ]
            });

            $('#connectionsTable').DataTable({
                // dom: 'Qfrtip',
                "bLengthChange": false,
                language: {
                    paginate: {
                        previous: '<',
                        next: '>',
                    }
                },
            });

            // $('.dtsb-titleRow').remove();
            // $('.dtsb-searchBuilder').detach().appendTo('.filterBox');
            // let parent = $('.dataTables_filter').parent().parent();
            // $('.dataTables_filter').detach().appendTo($(parent));
        });


        var chartsDom = $('.test');
        $.each(chartsDom, function (i, k) {
            let myChart = echarts.init(k);
            let option;

            option = {
                color: ['#EB4228', '#F3B86B', '#F3E5B2', '#D1D690', '#A0AD63'],
                grid: {
                    width: 100
                },
                series: [
                    {
                        type: 'gauge',
                        startAngle: 180,
                        endAngle: 0,
                        center: ['50%', '55%'],
                        radius: '90%',
                        min: 0,
                        max: 1,
                        splitNumber: 8,
                        axisLine: {
                            lineStyle: {
                                width: 5,
                                color: [
                                    [0.2, '#EB4228'],
                                    [0.4, '#F3B86B'],
                                    [0.6, '#F3E5B2'],
                                    [0.8, '#D1D690'],
                                    [1, '#A0AD63']
                                ]
                            }
                        },
                        pointer: {
                            icon: 'path://M12.8,0.7l12,40.1H0.7L12.8,0.7z',
                            length: '12%',
                            width: 15,
                            offsetCenter: [0, '-40%'],
                            itemStyle: {
                                color: 'inherit'
                            }
                        },
                        axisTick: {
                            length: 10,
                            lineStyle: {
                                color: 'inherit',
                                width: 1,
                                opacity: 0.5
                            }
                        },
                        splitLine: {
                            length: 15,
                            lineStyle: {
                                color: 'inherit',
                                width: 2,
                                type: "solid",
                                opacity: 1
                            }
                        },
                        axisLabel: {
                            show: false
                        },
                        title: {
                            offsetCenter: [0, '-10%'],
                            fontSize: 15,
                            overflow: "breakAll"
                        },
                        detail: {
                            fontSize: 20,
                            offsetCenter: [0, 0],
                            valueAnimation: true,
                            formatter: function (value) {
                                return Math.round(value * 100) + '';
                            },
                            color: 'inherit'
                        },
                        data: [
                            {
                                value: 0.74,
                                name: '',

                                title: {
                                    show: true,
                                    offsetCenter: ["0", "30%"],
                                    overflow: "breakAll"
                                },
                            }
                        ]
                    }
                ]
            };

            option && myChart.setOption(option);
        })


    })

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.4/r-2.4.1/b-2.3.6/sb-1.4.2/sp-2.1.2/datatables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/echarts-gl/dist/echarts-gl.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--        <script src="node_modules/echarts" integrity="sha512-VdqgeoWrVJcsDXFlQEKqE5MyhaIgB9yXUVaiUa8DR2J4Lr1uWcFm+ZH/YnzV5WqgKf4GPyHQ64vVLgzqGIchyw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>-->
</body>
</html>