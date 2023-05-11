<?php
include('header.php');
use yii\helpers\Url;
use app\models\Subject;
?>
<style>
    .dataTables_wrapper {
        background: white!important;
        border-radius: 5px!important;
        padding: 15px!important;
    }
</style>

<div class="row d-flex mx-auto px-0">
    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12 px-0 px-sm-2">
        <div class="mb-3 mx-auto px-0">
            <div class="row mx-auto px-0" style="padding-top: 25px!important; padding-left: 30px">
                <div class="d-flex justify-content-between align-items-center mb-4 mb-sm-0">
                    <h3 class="d-flex align-items-center centeredTitle" style="color: #003C46"><img src="/images/list_1.png" alt="" width="30" class="me-2">Subjects List</h3>
                    <?php if(Yii::$app->user->identity->me) { ?>
                    <a  class="d-sm-none" style="text-decoration: none; color: #003C46;" href="/subject?id=<?php if(Yii::$app->user->identity->me) { echo Yii::$app->user->identity->me->id; } ?>&rep=3">
                        <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", ''. (Yii::$app->user->identity->me ? Yii::$app->user->identity->me->image : '') . '')  ?>" alt="" style="width: 40px; height: 40px; border-radius: 5px; object-fit: cover">
                    </a>
                        <?php } ?>
                </div>
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
                        <?php foreach (Yii::$app->user->identity->subjects as $key => $subject): ?>
                            <tr style="<?= isset($subject->deleted_at) ? 'pointer-events: none; background: #ff000052' : '' ?>" class="text-center">
                                <td class="text-start ps-2"><a href="/subject?id=<?= $subject->id ?>&rep=3" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"><?= $key+1 ?></a></td>
                                <td class=""><a href="/subject?id=<?= $subject->id ?>&rep=3"><img src="<?= str_replace('/var/www/html/Mizagene/web/', '', $subject->image) ?>" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;"></a></td>
                                <td class="text-start"><a href="/subject?id=<?= $subject->id ?>&rep=3" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"><?= $subject->name ?></a></td>
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
                                        <img src="/images/share.png" alt="" width="20px" class="mx-3">
                                        <img src="/images/wrong.png" alt="" width="15px" class="me-sm-2 deleteSubject" style="cursor: pointer" data-id="<?= $subject->id ?>">
                                    </div>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-12" style="background: white; border-radius: 3px; height: auto; margin-top: 3.8%">
        <p class="text-center mt-2 pb-0 mb-0">Quick Parameter Search</p>
        <div class="p-3">
            <div class="d-flex">
                <input type="text" style="width: 100%; border: 1px solid #dee2e6; border-radius: 5px">
                <button type="button" class="btn" style="padding: 0; margin: 0; margin-left: 36px!important;"><img src="/images/filter.png" alt="" width="30px"></button>
            </div>
            <!--            <div class="d-flex">-->
            <!--                <label for="color-black">-->
            <!--                    <input type="radio" id="color-black" name="color" value="black" checked/>-->
            <!--                    <span class="color-radio black"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-red">-->
            <!--                    <input type="radio" id="color-red" name="color" value="red" />-->
            <!--                    <span class="color-radio red"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-green">-->
            <!--                    <input type="radio" id="color-green" name="color" value="green" />-->
            <!--                    <span class="color-radio green"></span>-->
            <!--                </label>-->
            <!---->
            <!--                <label for="color-blue">-->
            <!--                    <input type="radio" id="color-blue" name="color" value="blue" />-->
            <!--                    <span class="color-radio blue"></span>-->
            <!--                </label>-->
            <!---->
            <!--            </div>-->
            <div class="d-flex flex-column mt-3">
<!--                <div class="d-flex align-items-center justify-content-start">-->
<!--                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">-->
<!--                    <span class="mx-2">Aram</span>-->
<!--                    <div class="d-flex ms-auto align-items-center">-->
<!--                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>-->
<!--                        <span class="">43.54%</span>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--                <hr style="margin: 0.5rem 0!important;">-->
<!--                <div class="d-flex align-items-center justify-content-start">-->
<!--                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">-->
<!--                    <span class="mx-2">Aram</span>-->
<!--                    <div class="d-flex ms-auto align-items-center">-->
<!--                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>-->
<!--                        <span class="">43.54%</span>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--                <hr style="margin: 0.5rem 0!important;">-->
<!--                <div class="d-flex align-items-center justify-content-start">-->
<!--                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">-->
<!--                    <span class="mx-2">Aram</span>-->
<!--                    <div class="d-flex ms-auto align-items-center">-->
<!--                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>-->
<!--                        <span class="">43.54%</span>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!--                <hr style="margin: 0.5rem 0!important;">-->
<!--                <div class="d-flex align-items-center justify-content-start">-->
<!--                    <img class="me-2" src="/images/aram.jpg" alt="" width="40px" height="40px" style="object-fit: cover; border-radius: 3px; box-shadow: 0 0 10px rgb(0 0 0 / 10%); cursor: pointer;">-->
<!--                    <span class="mx-2">Aram</span>-->
<!--                    <div class="d-flex ms-auto align-items-center">-->
<!--                        <div class="mx-2" style="width: 10px; height: 10px; background: black; border-radius: 3px"></div>-->
<!--                        <span class="">43.54%</span>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
            </div>
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
    })
</script>

<?php include('footer.php') ?>
