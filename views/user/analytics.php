<?php
include('header.php');
use yii\helpers\Url;
use app\models\Subject;
?>

<style>
    .truncate {
        max-width:50px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .dt-control:before {
        margin-right: 5px!important;
    }

    .dt-button-collection .active {
        background: rgb(119, 154, 161)!important;
    }

    #analyticsTable_wrapper {
        height: 90vh;
        overflow-y: scroll;
    }

</style>

<div class="row d-flex mx-auto px-0">
    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12" >
        <div class="d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 align-items-center">
            <h3 class="d-flex centeredTitle ms-2 me-5 my-0" style="color: #003C46"><img src="/images/analysis_1.png" alt="" width="30" class="me-2">Analytics</h3>
            <div class="d-flex text-center justify-content-center align-items-center ms-5">
                <span class="genderFilter d-flex justify-content-center" style="color: white; width: 45px; background: rgb(119, 154, 161); height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: medium; cursor: pointer" data-gender="null">All</span><i class="fa-solid fa-mars genderFilter fa-xl p-2" data-gender="1" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i> <i class="fa-solid fa-venus genderFilter fa-xl p-2" data-gender="2" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i> <i class="fa-solid fa-transgender genderFilter fa-xl p-2" data-gender="3" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i>
            </div>
        </div>

        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
                <table id="analyticsTable" class="hover table-striped w-100">
                    <thead>
                    <tr>
                        <td style="width: 100px">ID</td>
<!--                        <td style="max-width: 40px">ID</td>-->
                        <td style="max-width: 130px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Item Title Ru</td>
                        <td style="max-width: 130px;">Item Desc. Ru</td>
                        <td style="max-width: 100px;">Item Title Fa</td>
                        <td style="max-width: 100px;">Item Desc. Fa</td>
                        <td style="">Min R.</td>
                        <td style="">Max R.</td>
                        <td style="">Active Range</td>
                        <td style="">L. D. Zone</td>
                        <td style="">U. D. Zone</td>
                        <td style="">D. Zone</td>
                        <td style="">Date</td>
                        <td style=""></td>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="background: white; border-radius: 3px; height: max-content;">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0 buttonsContainer" style="padding-top: 5px!important; padding-left: 30px">
                <div class="justify-content-between d-none filterButtons mt-3 align-items-center">
                    <h6 class="itemTitle m-0 pe-2"></h6>
                    <div class="d-flex">
                        <button type="button" class="btn btn-light p-1 me-2"><img src="/images/favicon.png" alt="" style="width: 30px;cursor: pointer;height: 30px;filter: grayscale(100%);" class="youmeeResult"></button>
                        <button type="button" class="btn btn-light p-1 me-3"><img src="/images/Mizagene_M_46.png" alt="" style="width: 30px;cursor: pointer;filter: grayscale(100%);" class="mizageneResult"></button>
                        <button type="button" class="saveRange btn btn-light">Set Range</button>
                        <button type="button" class="setRange d-none btn btn-info">Save Range</button>
                        <button type="button" class="restoreRange d-none btn btn-danger">Restore</button>
                    </div>
                </div>
                <p class="text-center mt-2 pb-0 mb-0"></p>
                <div class="py-3">
                    <table id="filteredTable" class="hover table-striped w-100">
                        <thead>
                        <tr>
                            <td class="text-start" style="max-width: 15px">ID</td>
                            <td class="text-center" style="max-width: 30px">Photo</td>
                            <td class="text-start" style="max-width: 90px">Name</td>
                            <td class="text-start" style="max-width: 40px">Result</td>
                            <td class="text-start" style="max-width: 50px"></td>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
<script>
    window.addEventListener('load', function () {
        $('.preloader').removeClass('d-none');
        $('.preloader').addClass('d-flex');

        $(document).ready(function() {

            function format(d) {
                return '<span></span>';
            }


             $('#filteredTable').DataTable({
                order: [[3, 'desc']],
                "bLengthChange": false,
                dom: "lrtip",
                 pageLength: 100,
                responsive: true,
                language: {
                    paginate: {
                        previous: '<',
                        next: '>',
                    }
                },
                columns: [
                    { data: 'id' },
                    {
                        data: 'image',
                        orderable: false,
                        render: function(data, type, row) {
                            return '<a target="_blank" href="http://youmee.tech/subject?id=' + data.publicID + '&rep=3"><img src="' + data.img + '" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></a>';
                        }
                    },
                    { data: 'name' },
                    {
                        data: 'result',
                        render: function(data, type, row) {
                            return '<span style="color:' + data.clr + '">' + data.nmb + '</span>';
                        }
                    },
                    {
                        data: null,
                        orderable: false,
                        render: function(data, type, row) {
                            return '<input type="number" class="d-none" data-item="'+ data.item_id +'" data-subject="'+ data.result.nmb +'" style="width: 50px">';
                        }
                    }
                ]
            });

            $('.selectFilterParam').change(function () {
                let param = $(this).val();
                $.post( "/user/filter-subjects", { param: param} )
                    .done(function(response) {
                        var table = $('#filteredTable').DataTable();
                        table.clear();
                        table.rows.add(JSON.parse(response));
                        table.draw();
                    });
            })

            $.fn.dataTable.ext.order['custom-date-sort'] = function(data) {
                // Convert the date string to a sortable format
                var parts = data.split('-');
                return new Date(parts[2], parts[1] - 1, parts[0]);
            };

            var analyticsTable = $('#analyticsTable').DataTable({
                order: [[0, 'desc']],
                responsive: true,
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
                pageLength: 100,
                language: {
                    paginate: {
                        previous: '<',
                        next: '>',
                    }
                },
                //ajax: '<?//= Url::to(['user/analytics-table']) ?>//',
                columnDefs:[{targets:[2,3,4,5],className:"truncate"}],
                createdRow: function(row){
                    $(row).find(".truncate").each(function(){
                        $(this).attr("title", this.innerText);
                    });
                },
                columns: [
                    {
                        className: 'dt-control',
                        data: 'id',
                        defaultContent: '',
                    },
                    // {data: 'id'},
                    {data: 'item_title_ru'},
                    {data: 'item_desc_ru'},
                    {data: 'item_title_fa'},
                    {data: 'item_desc_fa'},
                    {data: 'min_result'},
                    {data: 'max_result'},
                    {data: 'max_min'},
                    {data: 'min_dead_zone'},
                    {data: 'max_dead_zone'},
                    {data: 'total_dead_zone'},
                    {
                        data: 'activated_at',
                        type: 'custom-date-sort', // Custom sorting type
                        render: function(data) {
                            // Convert the date string to Date object
                            var dateObj = new Date(data);
                            // Get day and month parts
                            var day = dateObj.getDate();
                            var month = dateObj.getMonth() + 1; // Month is zero-based
                            // Format the date as 'DD.MM'
                            var formattedDate = day.toString().padStart(2, '0') + '.' + month.toString().padStart(2, '0');
                            // Return the formatted date for display
                            return formattedDate;
                        }
                    },
                    {
                        data: null,
                        orderable: false,
                        render: function(data, type, row) {
                            return '<div class="d-flex"><img class="cat me-2" style="width: 30px; cursor: pointer" data-item="' + data.id + '" src="/images/' + data.cat + '"><img style="width: 30px; cursor: pointer" class="' + data.flash + '" src="/images/flash.png" data-flash="' + data.id + '"></div>';
                        }
                    }
                ],
            });

            $('.saveRange').click(function () {
                $('.setRange').removeClass('d-none');
                $(this).addClass('d-none');
                let inputs = $('.buttonsContainer input');
                $.each(inputs, function (i, e) {
                    $(e).removeClass('d-none')
                })
                $('.buttonsContainer input').removeClass('d-none');

            })

            $('.genderFilter').click(function () {
                $('.preloader').removeClass('d-none');
                $('.preloader').addClass('d-flex');
                let gender = $(this).data('gender');
                document.cookie = "gender=gender"+gender;
                $.get("/user/analytics-table?gender="+gender)
                    .done(function(response) {
                        var table = $('#analyticsTable').DataTable();
                        table.clear();
                        table.rows.add(JSON.parse(response));
                        table.draw();
                        $('.preloader').removeClass('d-flex');
                        $('.preloader').addClass('d-none');
                    });
                $('.genderFilter').css('color', '#003C46');
                $('.genderFilter').removeClass('ac');
                $('.genderFilter').css('background', '#f5f5f5');
                $(this).css('color', 'white');
                $(this).css('background', 'rgb(119, 154, 161)');
                $(this).addClass('ac');
            })

            $.get("/user/analytics-table")
                .done(function(response) {
                    var table = $('#analyticsTable').DataTable();
                    table.clear();
                    table.rows.add(JSON.parse(response));
                    table.draw();
                    $('.preloader').removeClass('d-flex');
                    $('.preloader').addClass('d-none');
                });

            $(document).on('click', '.cat', function() {
                let item = $(this).data('item');
                $.post('/user/put-mark', {id: item})
                    .done((response) => {
                        if ($(this).attr('src') == '/images/animal.png')  {
                            $(this).attr('src', '/images/black-cat.png');
                        } else {
                            $(this).attr('src', '/images/animal.png');
                        }
                    })
            })

            $('.setRange').click(function() {
                let inputs = $('.buttonsContainer input');
                let greaterZero = inputs.filter(function() {
                    return $(this).val() != '';
                });

                let subjects = [];
                let numbers = [];
                let item = 0;

                greaterZero.each(function() {
                    subjects.push($(this).data('subject'));
                    item = $(this).data('item');
                    numbers.push($(this).val());
                });

                $.post('/user/set-range', {item: item, subjects: subjects, numbers: numbers})
                    .done((response) => {

                    })
                $('[data-flash=' + item + ']').removeClass('d-none');
                $('.restoreRange').removeClass('d-none');
                $('.setRange').addClass('d-none');
                $('.youmeeResult').click();
            })

            $('.restoreRange').click(function () {
                let param = $(this).data('param');
                $.post( "/user/restore-range", { item: param} )
                    .done((response) => {
                        $(this).addClass('d-none');
                        $('.saveRange').removeClass('d-none');
                    });
                $('[data-flash=' + param + ']').addClass('d-none');
                $('.mizageneResult').click();
            })

            $('.youmeeResult').click(function () {
                let item = $(this).attr('data-item');
                let gender = '';
                if ($('.ac')) {
                    gender = $('.ac').eq(0).data('gender');
                }
                $.post( "/user/youmee-result", { param: item, gender: gender} )
                    .done((response) => {
                        var table = $('#filteredTable').DataTable();
                        table.clear();
                        table.rows.add(JSON.parse(response).data);
                        table.draw();
                    });
                $('.youmeeResult').css('filter', 'unset');
                $('.mizageneResult').css('filter', 'grayscale(100%)');
            })

            $('.mizageneResult').click(function () {
                let item = $(this).attr('data-item');
                let gender = '';
                if ($('.ac')) {
                    gender = $('.ac').eq(0).data('gender');
                }
                $.post( "/user/filter-analytics-subjects", { param: item, gender: gender} )
                    .done((response) => {
                        var table = $('#filteredTable').DataTable();
                        table.clear();
                        table.rows.add(JSON.parse(response).data);
                        table.draw();
                    });
                $('.mizageneResult').css('filter', 'unset');
                $('.youmeeResult').css('filter', 'grayscale(100%)');
            })

            $('#analyticsTable tbody').on('click', 'td.dt-control', function () {
                var tr = $(this).closest('tr');
                var row = analyticsTable.row(tr);

                if (row.child.isShown()) {
                    // $.post( "/user/filter-analytics-subjects", { param: ''} )
                    //     .done(function(response) {
                    //         var table = $('#filteredTable').DataTable();
                    //         table.clear();
                    //         table.rows.add(JSON.parse(response));
                    //         table.draw();
                    //     });
                    row.child.hide();
                    tr.removeClass('shown');
                } else {
                    analyticsTable.rows().every(function () {
                        if (this.child.isShown()) {
                            this.child.hide();
                            $('tr.shown').removeClass('shown');
                        }
                    });

                    let param = $(this).text();
                    let url = new URL(window.location.href);
                    let gender = '';
                    if ($('.ac')) {
                        gender = $('.ac').eq(0).data('gender');
                    }
                    $.post( "/user/filter-analytics-subjects", { param: param, gender: gender} )
                        .done((response) => {
                            var table = $('#filteredTable').DataTable();
                            table.clear();
                            table.rows.add(JSON.parse(response).data);
                            table.draw();
                            if (JSON.parse(response).restore == 'restore') {
                                $('.restoreRange').removeClass('d-none');
                                $('.setRange').addClass('d-none');
                                $('.saveRange').addClass('d-none');
                            } else {
                                $('.restoreRange').addClass('d-none');
                                $('.saveRange').removeClass('d-none');
                                // $('.setRange').removeClass('d-none');
                                $('.setRange').addClass('d-none');
                            }
                            $('.restoreRange').attr('data-param', param);
                            $(document).find('.youmeeResult').attr('data-item', param);
                            $(document).find('.mizageneResult').attr('data-item', param);
                            $('.mizageneResult').css('filter', 'grayscale(100%)');
                            $('.youmeeResult').css('filter', 'grayscale(100%)');
                        });
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                    $('.filterButtons').removeClass('d-none');
                    $('.filterButtons').addClass('d-flex');
                    $('.itemTitle').text($(this).next().text());
                }
            });

        });

    });

</script>

<?php include('footer.php') ?>
