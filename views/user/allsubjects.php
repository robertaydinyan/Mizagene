<?php
include('header.php');
use yii\helpers\Url;
use app\models\Subject;
use app\modules\models\GroupVariants;
use app\modules\models\Reports;
use app\modules\models\Items;

$subjectLang = isset($_COOKIE['subjectLang']) ? $_COOKIE['subjectLang'] : 2;
$reports = Reports::find()->where(['disabled' => 0])->all();
?>
<style>
    .dataTables_wrapper {
        background: white!important;
        border-radius: 5px!important;
        padding: 15px!important;
    }
</style>

<div class="row d-flex mx-auto px-0">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex align-items-center mb-1 mt-3">
        <h3 class="d-flex align-items-center centeredTitle" style="color: #003C46"><img src="/images/list_1.png" alt="" width="30" class="me-2">Subjects List</h3>
    </div>
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 px-0 px-sm-2">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 10px!important; padding-left: 30px">
                <table id="subjectsTable" class="hover table-striped w-100">
                    <thead>
                    <tr>
                        <td class="text-center" >ID</td>
                        <td class="text-center" >Photo</td>
                        <td class="text-start" >Name/Nickname</td>
                        <td class="text-center" >Date & Time</td>
                        <td class="text-center" >Age</td>
                        <td class="text-center" >Gender</td>
                        <td class="text-center" >Height</td>
                        <td class="text-center" >Wrist size</td>
                        <td class="text-center" >Connections</td>
                        <td class="text-center" >Views</td>
                        <td class="text-center" >Answers</td>
                        <td class="text-center maxTd" >Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach (Yii::$app->user->identity->subjects as $key => $subject): if($subject->deleted_at == null):?>
                            <tr style="<?= isset($subject->deleted_at) ? 'pointer-events: none; background: #ff000052' : '' ?>" class="text-center">
                                <td class="text-start ps-2"><a href="/subject?id=<?= $subject->public_id ?>&rep=3" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"><?= $key+1 ?></a></td>
                                <td class=""><a href="/subject?id=<?= $subject->public_id ?>&rep=3"><img src="<?= str_replace('/var/www/html/Mizagene/web/', '', $subject->image) ?>" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></a></td>
                                <td class="text-start"><a href="/subject?id=<?= $subject->public_id ?>&rep=3" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"><?= $subject->name ?></a></td>
                                <td><?= date('d.m.Y', strtotime($subject->created_at)) ?></td>
                                <td><?= date('Y') - $subject->year_of_birth ?></td>
                                <td><?= $subject->gender == 1 ? '<i class="fa-solid fa-mars" style="color: #000000;"></i>' : ($subject->gender == 2 ? '<i class="fa-solid fa-venus" style="color: #000000;"></i>' : ($subject->gender == 3 ? 'Male <i class="fa-solid fa-transgender" style="color: #000000;"></i>' : ($subject->gender == 4 ? 'Female <i class="fa-solid fa-transgender" style="color: #000000;"></i>' : ''))) ?></td>
                                <td><?= $subject->height ?></td>
                                <td><?= $subject->wrist_size ?></td>
                                <td><?php if (count($subject->connections) > 0) { $sub = Subject::findOne($subject->connections[0]->object_id); ?><img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $sub->image) ?>" alt="" width="30px" height="30px" style="object-fit: cover; border-radius: 100%; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"> <?= count($subject->connections) ?><?php } ?></td>
                                <td>0</td>
                                <td>0</td>
                                <td class="">
                                    <div class="<?= isset($subject->deleted_at) ? 'd-none' : '' ?>">
                                        <img src="/images/truefalse.png" alt="" width="20px" class="mx-sm-0 ms-3">
                                        <img title="Click to copy" src="/images/share.png" alt="" width="20px" class="mx-3 shareLink" style="cursor: pointer" data-link="http://youmee.tech/subject?id=<?= $subject->public_id ?>&rep=3">
                                        <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 deleteSubject" style="cursor: pointer" data-id="<?= $subject->id ?>">
                                    </div>

                                </td>
                            </tr>
                        <?php endif; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12" style="background: white; border-radius: 3px; height: min-content; margin-top: 10px">
<!--        <p class="text-center mt-2 pb-0 mb-0">Quick Parameter Search</p>-->
        <div class="py-3">
            <div class="d-flex">
                <select name="form-select" id="" class="select2 selectFilterParam" >
                    <option value="">Select Parameter</option>
                    <?php
                    $checkItem = [];
                    foreach ($reports as $rep):
                    foreach ($rep->groups as $gr):
                        $group = GroupVariants::findOne($gr);
                        foreach ($group->items as $it):
                            $item = Items::findOne($it);
                        if (!in_array($item->id, $checkItem) && $item->mark == 0) {
                            $checkItem[] = $item->id;
                            ?>
                            <option value="<?= $item->id ?>"><?= $item->getTitle($subjectLang)->title ?></option>
                        <?php } endforeach; endforeach; endforeach; ?>
                </select>
                <div class="dropdown">
                    <a href="#" class="text-dark text-end px-2 py-1 my-2 hideFilter" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                        <img src="/images/filter.png" alt="" width="30px">
                    </a>
<!--                    <button type="button" class="btn dropdown-toggle" style="padding: 0; margin: 0; margin-left: 15px!important;"><img src="/images/filter.png" alt="" width="30px" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false"></button>-->
                    <div class="dropdown-menu mt-3 subjectFilterContainer" style="width: 250px; padding: 10px">
                        <select class="form-select my-2 subjectFilterType" aria-label="Default select example">
                            <option value="0">Select Filter Type</option>
                            <option value="2">Color</option>
                            <option value="3">Result range</option>
                        </select>

                        <div class="subjectColorSearch subjectSearchFilter px-1 justify-content-between" style="display: none!important;margin-top: 10px;">
                            <input type="radio" value="#EB4228" name="colorSelect" id="accent_red" style="width: 20px; height: 20px">
                            <input type="radio" value="#F3B86B" name="colorSelect" id="accent_orange" style="width: 20px; height: 20px">
                            <input type="radio" value="#F3E5B2" name="colorSelect" id="accent_yellow" style="width: 20px; height: 20px">
                            <input type="radio" value="#D1D690" name="colorSelect" id="accent_green" style="width: 20px; height: 20px">
                            <input type="radio" value="#A0AD63" name="colorSelect" id="accent_dark" style="width: 20px; height: 20px">
                        </div>

                        <div class="input-group mb-3 subjectRangeSearch subjectSearchFilter" style="display: none;margin-top: 10px;">
                            <input type="number" value="0" class="form-control minper" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2" min="0" max="100">
                            <span class="input-group-text" id="basic-addon2">%</span>
                            <input type="number" value="100" class="form-control maxper" placeholder="100" aria-label="Recipient's username" aria-describedby="basic-addon3" min="0" max="100">
                            <span class="input-group-text" id="basic-addon3">%</span>
                        </div>

                        <div class="d-flex justify-content-between subjectSearchButtons px-1" style="display: none!important; margin-top: 10px">
                            <button type="button" class="btn mySubjectSearch" style="background: #003C46!important; color: white!important;width: 100px!important;">Search</button>
                            <button type="button" class="btn mySubjectClear" style="background: rgb(234, 51, 61)!important; color: white!important;width: 100px!important;">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <table id="filteredTable" class="hover table-striped w-100">
                <thead>
                    <tr>
                        <td class="text-center" >Photo</td>
                        <td class="text-start" >Name</td>
                        <td class="text-start" >Result</td>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
        $('body').on('click', '.deleteSubject', function (){
            if (confirm('Are you sure?')) {
                let subject = $(this).data('id');
                $.post( "/user/delete-subject", { subject: subject} )
                    .done(function(data) {
                        window.location.reload();
                    });

            }

        });

        $('#filteredTable').DataTable({
            order: [[2, 'desc']],
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
                },
            ]
        });

        $('.subjectFilterType').change(function () {
            $('.subjectSearchFilter').hide();
            $('.subjectSearchButtons').hide();
            $('.subjectColorSearch').removeClass('d-flex');
            if ($(this).val() == 2) {
                $('.subjectColorSearch').show();
                $('.subjectColorSearch').addClass('d-flex');
                $('.subjectSearchButtons').show();
            } else if ($(this).val() == 3) {
                $('.subjectRangeSearch').show();
                $('.subjectSearchButtons').show();
            } else {
                $('.subjectSearchFilter').hide();
                $('.subjectSearchButtons').hide();
                $('.subjectColorSearch').removeClass('d-flex');
            }
        })

        $(document).find('.select2').select2();

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

        $('.mySubjectClear').click(function () {
            $('.subjectSearchFilter').hide();
            $('.subjectSearchButtons').hide();
            $('.subjectColorSearch').removeClass('d-flex');
            $('.subjectFilterType').val(0);
            $('.subjectFilterType').change();
            $('.selectFilterParam').change();
        })

        $('.mySubjectSearch').click(function () {
            let elem = $(this).closest('.subjectFilterContainer').find('.subjectSearchFilter:visible');
            let color = '';
            let param = $('.selectFilterParam').val();
            let min = 0;
            let max = 0;
            if ($(elem).hasClass('subjectColorSearch')) {
                color = $("input[name='colorSelect']:checked").val();
            } else {
                min = $('.minper').val();
                max = $('.maxper').val();
            }

            $.post( "/user/filter-subjects", { param: param, color: color, min: min, max: max} )
                .done(function(response) {
                    var table = $('#filteredTable').DataTable();
                    table.clear();
                    table.rows.add(JSON.parse(response));
                    table.draw();
                });

        })

        $('body').on('click', '.shareLink', function (){
            var link = $(this).data('link');
            var tempInput = document.createElement('input');
            tempInput.value = link;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
        });
    })
</script>

<?php include('footer.php') ?>
