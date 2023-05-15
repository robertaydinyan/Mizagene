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

</style>

<div class="row d-flex mx-auto px-0">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
        <h3 class="d-flex align-items-center centeredTitle" style="color: #003C46"><img src="/images/analysis_1.png" alt="" width="30" class="me-2">Analytics</h3>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="d-flex text-center justify-content-center align-items-center">
            <span class="genderFilter d-flex justify-content-center" style="color: white; width: 45px; background: rgb(119, 154, 161); height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer" data-gender="null">All</span><i class="fa-solid fa-mars genderFilter fa-xl p-2" data-gender="1" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i> <i class="fa-solid fa-venus genderFilter fa-xl p-2" data-gender="2" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i> <i class="fa-solid fa-transgender genderFilter fa-xl p-2" data-gender="3" style="color: #003C46; background: #f5f5f5; height: 35px; align-items: center; display: flex; border-radius: 3px; font-size: x-large; cursor: pointer"></i>
        </div>
    </div>
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
                <table id="analyticsTable" class="hover table-striped w-100">
                    <thead>
                    <tr>
                        <td style="width: 100px">ID</td>
<!--                        <td style="max-width: 40px">ID</td>-->
                        <td style="max-width: 160px;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">Item Title Ru</td>
                        <td style="max-width: 160px;">Item Desc. Ru</td>
                        <td style="max-width: 100px;">Item Title Fa</td>
                        <td style="max-width: 100px;">Item Desc. Fa</td>
                        <td style="">Min R.</td>
                        <td style="">Max R.</td>
                        <td style="">Active Range</td>
                        <td style="">L. D. Zone</td>
                        <td style="">U. D. Zone</td>
                        <td style="">D. Zone</td>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="background: white; border-radius: 3px; height: max-content;">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 5px!important; padding-left: 30px">
                <p class="text-center mt-2 pb-0 mb-0">Quick Parameter Search</p>
                <div class="py-3">
                    <table id="filteredTable" class="hover table-striped w-100">
                        <thead>
                        <tr>
                            <td class="text-start" style="max-width: 15px">ID</td>
                            <td class="text-center" style="max-width: 30px">Photo</td>
                            <td class="text-start" >Name</td>
                            <td class="text-start" style="max-width: 30px">Result</td>
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
                        render: function(data, type, row) {
                            return '<img src="' + data + '" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">';
                        }
                    },
                    { data: 'name' },
                    {
                        data: 'result',
                        render: function(data, type, row) {
                            return '<span style="color:' + data.clr + '">' + data.nmb + '</span>';
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


            var analyticsTable = $('#analyticsTable').DataTable({
                order: [[0, 'desc']],
                responsive: true,
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
                ],
            });

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
                        .done(function(response) {
                            var table = $('#filteredTable').DataTable();
                            table.clear();
                            table.rows.add(JSON.parse(response));
                            table.draw();
                        });
                    row.child(format(row.data())).show();
                    tr.addClass('shown');
                }
            });

        });

    });

</script>

<?php include('footer.php') ?>
