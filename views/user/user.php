<?php
include('header.php');
use yii\helpers\Url;
use app\modules\models\Items;
use app\modules\models\Group;
use app\models\Subject;
use app\models\ItemReview;
$lastDotPosition = strrpos($subject->image, '.');
$dotImage = substr($subject->image, 0, $lastDotPosition) . '0' . substr($subject->image, $lastDotPosition);
$dotImage = '/landmarks' . DS . str_replace('/var/www/html/Mizagene/web/images/subjects/', '', $dotImage);
$normalImage = str_replace("/var/www/html/Mizagene/web/", "", $subject->image);
$scheme = [
    0 => '#000',
    1 => '#EB4228',
    2 => '#F3B86B',
    3 => '#F3E5B2',
    4 => '#808080',
    5 => '#D1D690',
    6 => '#A0AD63'
];

$reverse = [
    '#000' => 0 ,
    '#EB4228' => 1 ,
    '#F3B86B' => 2 ,
    '#F3E5B2' => 3 ,
    '#808080' => 4 ,
    '#D1D690' => 5 ,
    '#A0AD63' => 6
];

$cons = [
    2 => 'Partner',
    3 => 'Spouse',
    4 => 'Child',
    6 => 'Biological father',
    7 => 'Biological mother',
];

$subjectLang = isset($_COOKIE['subjectLang']) ? $_COOKIE['subjectLang'] : 2;

?>
    <style>
        .arrow::before {
            content: "\25bc";
            display: inline-block;
            margin-right: 5px;
            transform: rotate(0deg);
            transition: transform 0.1s ease-in-out;
        }

        .arrow.collapsed::before {
            transform: rotate(180deg);
        }

        .dots {
            max-height: 93px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            position: relative;
            z-index: 8;
        }

        .dots:hover {
            white-space: normal;
        }
    </style>
    <div class="modal fade" id="addConnection" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="firstStep row d-flex m-3" style="border: 1px dashed #003C46; border-radius: 5px">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 px-0 py-3 rightBorder" style="border-right: 1px dashed #003C46;">
                            <div class="text-end pe-3 d-block">
                                <i class="fa-solid fa-check fa-lg me-2 addSubject d-sm-none d-inlne" style="color: rgb(240, 240, 240);cursor: pointer"></i>
                                <i class="fa-solid fa-xmark fa-lg closeMod d-sm-none d-inlne" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>
                            <div class="d-flex flex-column p-3 pt-sm-3 pt-1 align-items-center">
                                <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $subject->image) ?>" style="border-radius: 5px;  object-fit: cover; width: 100px; height: 100px" alt="">
                                <p class="text-center mt-2"><?= $subject->name ?></p>
                                <input type="hidden" id="subjectID" value="<?= $subject->id ?>">
                                <input type="hidden" id="objectID" value="">
                                <select name="subject_type" id="subjectTypeSelect" style="border: 1px dashed #003C46; border-radius: 5px; padding: 5px">
                                    <option value="">Select Subject Type</option>
                                    <option value="1" class="" disabled>friend</option>
                                    <option value="2" class="">partner</option>
                                    <option value="3" class="">spouse</option>
                                    <option value="4" class="">child</option>
                                    <option value="5" class="" disabled>foster child</option>
                                    <option value="6" class="<?= $subject->gender == 2 ? 'd-none' : '' ?>">biological father</option>
                                    <option value="7" class="<?= $subject->gender == 1 ? 'd-none' : '' ?>">biological mother</option>
                                    <option value="8" class="<?= $subject->gender == 2 ? 'd-none' : '' ?>" disabled>foster father</option>
                                    <option value="9" class="<?= $subject->gender == 1 ? 'd-none' : '' ?>" disabled>foster mother</option>
                                    <option value="10" class="<?= $subject->gender == 2 ? 'd-none' : '' ?>" disabled>father in law</option>
                                    <option value="11" class="<?= $subject->gender == 1 ? 'd-none' : '' ?>" disabled>mother in law</option>
                                    <option value="12" class="" disabled>daughter or son in law</option>
                                    <option value="13" class="<?= $subject->gender == 2 ? 'd-none' : '' ?>" disabled>biological brother</option>
                                    <option value="14" class="<?= $subject->gender == 1 ? 'd-none' : '' ?>" disabled>biological syster</option>
                                    <option value="15" class="<?= $subject->gender == 2 ? 'd-none' : '' ?>" disabled>stepbrother</option>
                                    <option value="16" class="<?= $subject->gender == 1 ? 'd-none' : '' ?>" disabled>stepsister</option>
                                    <option value="17" class="" disabled>relative</option>
                                    <option value="18" class="" disabled>subordinate</option>
                                    <option value="19" class="" disabled>manager</option>
                                    <option value="20" class="" disabled>colleague</option>
                                    <option value="21" class="" disabled>business partner</option>
                                    <option value="22" class="" disabled>customer</option>
                                    <option value="23" class="" disabled>contractor</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 pt-4 pt-sm-1 pb-3">
                            <div class="text-end">
                                <i class="fa-solid fa-check fa-lg me-2 addSubject d-none d-sm-inline" style="color: rgb(240, 240, 240);cursor: pointer"></i>
                                <i class="fa-solid fa-xmark fa-lg closeMod d-none d-sm-inline" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>

                            <div class="d-flex flex-column p-3 pt-1 align-items-center">
                                <div style="width: 100px; height: 100px; border: 1px dashed #003C46; border-radius: 5px; display: flex" class="chooseIcon">
                                    <div class="mx-auto my-auto objectImage" style="background-image: url('/images/favicon.png'); background-size: cover; width: 70px; height: 70px; opacity: 0.5"></div>
                                </div>
                                <p class="text-center mt-2 choose" style="cursor:pointer; color: #178fd6">Choose</p>
                                <select name="subject_type" id="objectTypeSelect" style="border: 1px dashed #003C46; border-radius: 5px; padding: 5px">
                                    <option value="">Select Object Type</option>
                                    <option value="2" class="">partner</option>
                                    <option value="3" class="">spouse</option>
                                    <option value="4" class="">child</option>
                                    <option value="6" class="">biological father</option>
                                    <option value="7" class="">biological mother</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="secondStep row d-none d-flex m-3" style="border: 1px dashed #003C46; border-radius: 5px">
                        <div class="d-flex justify-content-between col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 backwards" style="color: #003C46; cursor: pointer">
                                <i class="fa-solid fa-angles-left" style="color: #003C46"></i> Backwards
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-end">
                                <i class="fa-solid fa-xmark fa-lg closeBackwards" style="color: red; cursor: pointer"></i>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                            <input type="text" style="border-radius: 5px; border: none; background-color: rgb(240, 240, 240); width: 100%">
                        </div>
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <div class="" style="height: 250px; overflow: scroll;">
                            <div class="row mx-auto px-0 d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 py-3">
                                <?php foreach (Yii::$app->user->identity->subjects as $key => $sub): if ($subject->id != $sub->id && !isset($sub->deleted_at)):  ?>
                                    <div class="mb-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                        <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $sub->image) ?>" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;">
                                        <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46" data-subject="<?= $sub->id ?>"><?= $sub->name ?></span>
                                    </div>
                                <?php endif; endforeach;?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 d-block px-3 h-100" style="background-color:#f3f3f3;">
        <h4 class="p-3 ps-0"><?= $subject->name ?></h4>

        <div class="row d-flex pb-4">
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 pe-lg-2">
                <div class="card mb-3 h-70" style="border: none">
                    <div class="card-body pt-3" style="height: 428px;">
                        <div class="d-flex justify-content-between profilePictureContainer">

                            <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $subject->image) ?>" class="ms-2 zoomable profilePicture" alt="" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
                            <div class="d-flex flex-column px-2 text-center">
                                <?php if ($subject->gender == 1 || $subject->gender == 3): ?>
                                    <img src="/images/wscan_white_men.png" alt="" width="40px" class="mb-3 normalFace" style="cursor: pointer; background: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>; border-radius: 3px; padding: 5px">
                                    <img src="/images/scan_men.png" alt="" width="40px" class="mb-3 dotFace" style="cursor: pointer; background: white; border-radius: 3px; padding: 5px">
                                <?php endif; ?>
                                <?php if ($subject->gender == 2 || $subject->gender == 4): ?>
                                    <img src="/images/wscan_white_woman.png" alt="" width="40px" class="mb-3 normalFace" style="cursor: pointer; background: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>; border-radius: 3px; padding: 5px">
                                    <img src="/images/scan_woman.png" alt="" width="40px" class="mb-3 dotFace" style="cursor: pointer; background: white; border-radius: 3px; padding: 5px">
                                <?php endif; ?>
                                <?php if (!Yii::$app->user->isGuest): ?>
                                <i class="fa-solid fa-pen pb-3 editInfo" style="cursor: pointer"></i>
                                <i class="fa-solid fa-check fa-xl pb-3 saveInfo" style="cursor: pointer; display: none; color: #97df2a;" data-subject="<?= $subject->id ?>"></i>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body px-4 text-center">
                            <div class="row align-items-center" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                    <p class="mb-0">Height</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                    <p class="text-muted mb-0 infoTexts" id="heightText"><?= $subject->height ?> cm</p>
                                    <input type="number" id="height" class="editInputs mt-1" style="display: none; width: 100%; border-radius: 5px; border: 1px solid #dee2e6;" value="<?= $subject->height ?>">
                                </div>
                            </div>
                            <div class="row align-items-center" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                    <p class="mb-0">Age</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                    <p class="text-muted mb-0 infoTexts" id="ageText"><?= date('Y') - $subject->year_of_birth ?></p>
                                    <input type="number" id="age" class="editInputs mt-1" style="display: none; width: 100%; border-radius: 5px; border: 1px solid #dee2e6;" value="<?= date('Y') - $subject->year_of_birth ?>">
                                </div>
                            </div>
                            <div class="row align-items-center" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                    <p class="mb-0">Gender</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                    <p class="text-muted infoTexts mb-0" id="genderText"><?= $subject->gender == 1 ? 'Male' : ($subject->gender == 2 ? 'Female' : ($subject->gender == 3 ? 'Other (born as a male)' : ($subject->gender == 4 ? 'Other (born as a female)' : ''))) ?></p>
                                    <select name="" id="gender" class="editInputs mt-1" style="display: none; width: 100%; border-radius: 5px; border: 1px solid #dee2e6;">
                                        <option value="1" <?= $subject->gender == 1 ? 'selected' : '' ?>>Male</option>
                                        <option value="2" <?= $subject->gender == 2 ? 'selected' : '' ?>>Female</option>
                                        <option value="3" <?= $subject->gender == 3 ? 'selected' : '' ?>>Other (born as a male)</option>
                                        <option value="4" <?= $subject->gender == 4 ? 'selected' : '' ?>>Other (born as a female)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                    <p class="mb-0">Wrist size</p>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                    <p class="text-muted mb-0 infoTexts" id="wrist_sizeText"><?= $subject->wrist_size ?></p>
                                    <input type="number" id="wrist_size" class="editInputs mt-1" style="display: none; width: 100%; border-radius: 5px; border: 1px solid #dee2e6;" value="<?= $subject->wrist_size ?>">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex my-2 text-center">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                                <span style="background: rgb(243, 194, 67)!important; color: white!important; border: none!important;font-size: 8px; width: 100%; display: block; border-radius: 5px;" class="p-1">D: 15.3%</span>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                                <span style="background: rgb(236, 84, 73)!important; color: white!important; border: none!important;font-size: 8px; width: 100%; display: block; border-radius: 5px;" class="p-1">S: 24.7%</span>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                                <span style="background: rgb(54, 130, 180)!important; color: white!important; border: none!important;font-size: 8px; width: 100%; display: block; border-radius: 5px;" class="p-1">B: 30.5%</span>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                                <span style="background: rgb(208, 174, 101)!important; color: white!important; border: none!important;font-size: 8px; width: 100%; display: block; border-radius: 5px;" class="p-1">S: 48.3%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 mb-lg-0 d-none" style="border: none">
                    <div class="card-body p-3 mb-3">
                        <div>
                            <h6 class="mb-0 ms-1" style="">Meta information</h6>
                        </div>
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                                <p class="m-0">ID</p>
                                <p class="mb-0"><?= $subject->id ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                                <p class="m-0">Uploaded</p>
                                <p class="mb-0"><?= date('Y-m-d', strtotime($subject->created_at)) ?></p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                                <p class="m-0">By</p>
                                <p class="mb-0"><?= $subject->user->username ?></p>
                            </li>
                            <!--                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">-->
                            <!--                            <p class="m-1" >Mizagene</p>-->
                            <!--                            <p class="mb-0">ver 1.2 (2023-04-22)</p>-->
                            <!--                        </li>-->
                            <!--                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">-->
                            <!--                            <p class="mb-0 px-0 me">Product type</p>-->
                            <!--                            <p class="mb-0">Youmee App</p>-->
                            <!--                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Izumi_group_logo_youme_2015.svg/300px-Izumi_group_logo_youme_2015.svg.png?20180813043019" style="width: 30px;" class="px-0">-->
                            <!--                        </li>-->
                        </ul>
                    </div>
                </div>


            </div>

            <div class="d-flex flex-column col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12 mx-0 ps-md-0 pe-lg-2">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card mb-4 mb-md-3 d-lg-flex d-none" style="border: none; height: 345px">
                    <div class="card-body">
                        <h6 class=" col-12 m-0"><h4 class="font-italic me-1 pb-3">Available Reports</h4></h6>
                        <div style="overflow-y: scroll; height: 270px;">
                            <?php foreach ($reports as $key => $report): ?>
                                <p class="my-1" style="cursor: pointer; <?php if ($report->id == $rep->id)  { ?> color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?> <?php } ?>">
                                    <a href="/subject?id=<?= $subject->public_id ?>&rep=<?= $report->id ?>" style="text-decoration: none; color: unset"><span><?= $subjectLang == 2 ? $report->title_english : $report->title_russian ?></span> <?php if ($report->id == $rep->id) { ?><i class="fa-solid fa-caret-right" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"></i><?php } ?></a>
                                </p>
                            <?php endforeach; ?>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Child report</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Study</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to science</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to sports</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Career guidance</p>
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> HR profile</p>-->
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Intimate report</p>
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> KYC Casino</p>-->
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Specialized talent assessment in football</p>-->
                        </div>
                    </div>
                </div>
                <?php if (!Yii::$app->user->isGuest): ?>
                <div class="card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border: none">
                    <div class="card-body">
                        <div class="row align-items-baseline">
                            <h6 class=" col-8"><span class="font-italic me-1" style="">Connections</span> </h6>
                            <button type="button" class="btn btn-dark p-0 py-1 col-3 mx-2" data-bs-toggle="modal" data-bs-target="#addConnection">+ add</button>
                        </div>

                        <?php if (count($subject->connections) > 0): ?>
                            <div class="row d-flex align-items-center">
                                <div class="col-12">
                                    <select class="form-select my-2 col-10 filterConnections" aria-label="Default select example">
                                        <option selected value="-10">All</option>
                                        <option value="2">Partner</option>
                                        <option value="3">Spouse</option>
                                        <option value="4">Child</option>
                                        <option value="6">Biological Mother</option>
                                        <option value="7">Biological Father</option>
                                    </select>
                                </div>
                            </div>
                        <?php endif; ?>


                        <?php if (count($subject->connections) > 0) { ?>
                        <div class="card-body" style="overflow-y: scroll; <?= count($subject->connections) > 0 ? 'height: 210px!important;' : '' ?>">
                            <?php foreach ($subject->connections as $con):
                                $object = Subject::findOne($con->object_id);?>
                                <div class="row mb-3 conRow" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;" data-con="<?= $con->object_type ?>">
                                    <div class="d-flex col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 px-0 text-start">
                                        <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $object->image) ?>" alt="" style="width: 45px; height: 45px; object-fit: cover" class="rounded-circle"/>
                                        <div class="ms-3">
                                            <p class="fw-bold mb-1"><?= $object->name ?></p>
                                            <p class="text-muted mb-0"><?= $cons[$con->object_type] ?></p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 px-0 text-end">
                                        <a href="#" class="text-dark ms-auto">
                                            <i class="fa-solid fa-pen"></i>
                                            <i class="fa-solid fa-xmark deleteConnection" style="color: red; cursor: pointer" data-con="<?= $con->id ?>"></i>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php } ?>

                    </div>
                </div>
                <?php endif; ?>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card mt-3 d-flex d-lg-none" style="border: none">
                    <div class="card-body">
                        <h6 class=" col-12 m-0"><h4 class="font-italic me-1 pb-3" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>">Available Reports</h4></h6>
                        <div style="overflow-y: scroll; height: 210px;">
                            <?php foreach ($reports as $key => $report): ?>
                                <p class="my-1" style="cursor: pointer; <?php if ($report->id == $rep->id)  { ?> color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?> <?php } ?>">
                                    <a href="/subject?id=<?= $subject->public_id ?>&rep=<?= $report->id ?>" style="text-decoration: none; color: unset"><span><?= $subjectLang == 2 ? $report->title_english : $report->title_russian ?></span> <?php if ($report->id == $rep->id) { ?><i class="fa-solid fa-caret-right" style="color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>"></i><?php } ?></a>
                                </p>
                            <?php endforeach; ?>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Child report</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Study</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to science</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to sports</p>
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Career guidance</p>
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> HR profile</p>-->
                            <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Intimate report</p>
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> KYC Casino</p>-->
                            <!--                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Specialized talent assessment in football</p>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 px-lg-0">

                <div class="flex-column d-flex justify-content-between bg-white mx-auto mt-3 mt-lg-0" style="border-radius: 5px;">
                    <div class="row d-flex">
                        <div class="d-flex col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                            <img class="ms-4 mt-3" src="/images/<?= ($subject->gender == 1 || $subject->gender == 3) ? 'portfolio_b.png' : 'portfolio_g.png' ?>" alt="" width="40" height="40">
                            <div class="ms-2">
                                <h4 class="mb-0 p-0 pt-3" style=""><?= $subjectLang == 2 ? $rep->title_english : $rep->title_russian ?></h4>
                                <p class="mb-0 p-4 pt-3 ps-0"><?= $subjectLang == 2 ? $rep->description_english : $rep->description_russian ?></p>
                            </div>
                        </div>
                        <div class="d-flex col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 align-items-start pt-3 px-4">
                            <a class="nav-link dropdown-toggle my-2 py-2 me-3" style="color: rgb(114, 114, 114);" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-globe" style="color: grey;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/user/change-lang?lang=2">En</a></li>
                                <li><a class="dropdown-item" href="/user/change-lang?lang=1">Ru</a></li>
                            </ul>
                            <select class="form-select my-2 groupFilter" aria-label="Default select example">
                                <option value="-10">All</option>
                                <?php foreach ($rep->groups as $gr): $group = Group::findOne($gr); ?>
                                    <option value="collapseExample<?= $gr ?>" class="" ><?= $subjectLang == 2 ? $group->title_english : $group->title_russian ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="dropdown my-2 py-1">
                                <a href="#" class="text-dark text-end px-2 py-1 my-2" role="button" data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                                    <img src="/images/filter.png" alt="" width="30px">
                                </a>

                                <div class="dropdown-menu mt-3 filterContainer" style="width: 250px; padding: 10px">
                                    <select class="form-select my-2 filterType" aria-label="Default select example">
                                        <option value="">Select Filter Type</option>
                                        <option value="1">Parameter</option>
                                        <option value="2">Color</option>
                                        <option value="3">Result range</option>
                                    </select>

                                    <div class="parameterSearch searchFilter" style="display: none;">
                                        <select name="form-select my-2" id="" class="select2" >
                                            <?php foreach ($rep->groups as $gr):
                                                $group = Group::findOne($gr);
                                                foreach ($group->items as $it):
                                                    $item = Items::findOne($it);
                                                    ?>
                                                    <option value="<?= $item->id ?>"><?= $item->getTitle($subjectLang)->title ?></option>
                                                <?php endforeach; endforeach; ?>
                                        </select>
                                    </div>


                                    <div class="colorSearch searchFilter px-1 justify-content-between" style="display: none!important;margin-top: 10px;">
                                        <input type="radio" value="1" name="colorSelect" id="accent_red" style="width: 20px; height: 20px">
                                        <input type="radio" value="2" name="colorSelect" id="accent_orange" style="width: 20px; height: 20px">
                                        <input type="radio" value="3" name="colorSelect" id="accent_yellow" style="width: 20px; height: 20px">
                                        <input type="radio" value="4" name="colorSelect" id="accent_green" style="width: 20px; height: 20px">
                                        <input type="radio" value="5" name="colorSelect" id="accent_dark" style="width: 20px; height: 20px">
                                    </div>

                                    <div class="input-group mb-3 rangeSearch searchFilter" style="display: none;margin-top: 10px;">
                                        <input type="number" value="0" class="form-control minper" placeholder="0" aria-label="Recipient's username" aria-describedby="basic-addon2" min="0" max="100">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                        <input type="number" value="100" class="form-control maxper" placeholder="100" aria-label="Recipient's username" aria-describedby="basic-addon3" min="0" max="100">
                                        <span class="input-group-text" id="basic-addon3">%</span>
                                    </div>

                                    <div class="d-flex justify-content-between searchButtons px-1" style="display: none!important; margin-top: 10px">
                                        <button type="button" class="btn mySearch" style="background: #003C46!important; color: white!important;width: 100px!important;">Search</button>
                                        <button type="button" class="btn myClear" style="background: rgb(234, 51, 61)!important; color: white!important;width: 100px!important;">Clear</button>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="row ms-3">
                        <?php foreach ($rep->groups as $gr): $group = Group::findOne($gr); ?>
                            <div class="row collapsedResult">
                                <span class="my-3" style="cursor: pointer; color: <?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $gr ?>" aria-expanded="true" aria-controls="collapseExample">
                                        <?= $subjectLang == 2 ? $group->title_english : $group->title_russian ?>
                                    <span class="arrow"></span>
                                </span>
                                <p><?= $subjectLang == 2 ? $group->description_english : $group->description_russian ?></p>
                                <div class="collapse show px-0 collapseExample" id="collapseExample<?= $gr ?>">
                                    <div class="card card-body" style="border: none!important;">

                                        <div class="row d-flex parentResult" style="height: 415px; overflow-y: scroll;">
                                            <div id="carouselExample<?= $gr ?>" class="carousel slide carousel-dark d-block d-md-none">
                                                <div class="carousel-inner">
                                                    <?php
                                                    $result = $subject->result;
                                                    $check = 0;
                                                    foreach (json_decode($result['result']) as $k => $res):
                                                            $item = Items::find()->where(['item_id' => $res->item_ID])->one();
                                                            if ($item && in_array($item->id, $group->items)):

                                                            $colors = [];
                                                            for ($i = 1; $i <= 10; $i++) {
                                                                $colors[] = [''.$i/10 => $scheme[$item->getColorSector($i)->color_id] ];
                                                            }

                                                            $color = null;
                                                            foreach ($colors as $element) {
                                                                if (array_key_exists(''.(floor($res->subject_item_result/10)/10).'', $element)) {
                                                                    $color = $element[''.(floor($res->subject_item_result/10)/10).''];
                                                                    break;
                                                                }
                                                            }
                                                            ?>
                                                            <div class="carousel-item parameterItem opinionContainer <?= $check == 0 ? 'active' : '' ?>" data-res="<?= $res->subject_item_result ?>" data-item="<?= $item->id ?>" data-color="<?= $reverse[$color] ?>">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                                    <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px; height: 330px!important;">
                                                                        <div class="mobileResult d-flex justify-content-center mx-auto" style="height: 230px!important; width: 280px!important; position:relative; margin-bottom: -35px;" data-result="<?= $res->subject_item_result ?>" data-colors='<?= str_replace(':', ',', json_encode($colors)) ?>'></div>
                                                                        <div class="px-2 pt-0 pb-4 text-center" style="margin-top: -80px"><?= $item->getTitle($subjectLang)->title ?></div>
                                                                        <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; height: 100px; z-index: 8; position: relative">
                                                                            <i><?= $item->getTitle($subjectLang)->description ?></i>
                                                                        </p>
                                                                    </div>
                                                                    <?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); if (!$opinion) { ?>
                                                                        <div class="d-flex justify-content-between px-4 align-items-center my-2" style="cursor:pointer;">
                                                                        <?php if (!Yii::$app->user->isGuest): ?>
                                                                            <span class="agree" data-item="<?= $item->id ?>" data-subject="<?= $subject->id ?>"><i class="fa-solid fa-check " style="color: #97df2a;"></i> Agree</span>
                                                                            <span class="disagree"> <i class="fa-solid fa-xmark " style="color: red;"></i> Disagree</span>
                                                                            <span class="d-flex numdisagree align-items-center" style="display: none!important;"><i class="me-2 fa-solid fa-check finalsubmit" style="color: #97df2a;" data-item="<?= $item->id ?>" data-subject="<?= $subject->id ?>"></i> <input type="number" class="disnum" style="border-radius: 5px; border: 1px solid #dee2e6" placeholder="0 - 100"></span>
                                                                        <?php endif; ?>
                                                                        </div>
                                                                    <?php } ?>
                                                                    <div class="<?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); echo (isset($opinion) && $opinion->disagree == 1) ? 'd-flex' : 'd-none' ?> justify-content-between px-4 align-items-center mt-2 mb-4 finalOpinion" style="cursor:pointer;">
                                                                        <span class="d-flex align-items-center"><img src="/images/favicon.png" alt="" width="40" class="me-2"> <span><?= floor($res->subject_item_result) ?></span></span>
                                                                        <span class="d-flex align-items-center"><?php if ($subject->user->me) { ?><img class="me-2" src=" <?= str_replace("/var/www/html/Mizagene/web/", "", $subject->user->me->image) ?>" alt="" class="" style="width: 40px; height: 40px; border-radius: 100%; object-fit: cover; filter: grayscale(100%);"><?php } else { ?> <i class="fa-solid fa-circle-user fa-xl me-2" style="color: #003C46;"></i> <?php } ?> <span class="myopinion"><?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); echo isset($opinion) ? $opinion->disagree_value : '' ?></span></span>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        <?php $check = 1; endif; endforeach; ?>

                                                </div>
                                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample<?= $gr ?>" data-bs-slide="prev" style="left: -28px">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample<?= $gr ?>" data-bs-slide="next" style="right: -28px">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </button>
                                            </div>


                                            <?php
                                            $result = $subject->result;
                                            foreach (json_decode($result['result']) as $k => $res):
                                                $item = Items::find()->where(['item_id' => $res->item_ID])->one();

                                                if ($item && in_array($item->id, $group->items)):
                                                    $colors = [];

                                                    for ($i = 1; $i <= 10; $i++) {
                                                        $colors[] = [''.$i/10 => $scheme[$item->getColorSector($i)->color_id] ];
                                                    }
                                                    $color = null;
                                                    foreach ($colors as $element) {
                                                        if (array_key_exists(''.(floor($res->subject_item_result/10)/10).'', $element)) {
                                                            $color = $element[''.(floor($res->subject_item_result/10)/10).''];
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block" >
                                                        <div class="parameterItem opinionContainer" data-res="<?= $res->subject_item_result ?>" data-item="<?= $item->id ?>" data-color="<?= $reverse[$color] ?>">
                                                            <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px; height: 330px">
                                                                <div class="test desktopResult d-flex justify-content-center" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;" data-result="<?= $res->subject_item_result ?>" data-colors='<?= str_replace(':', ',', json_encode($colors)) ?>'></div>
                                                                <div class="px-2 pt-0 pb-4 text-center dots" style="margin-top: -90px"><?= $item->getTitle($subjectLang)->title ?></div>
                                                                <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; height: 100px; z-index: 8; position: relative" >
                                                                    <i><?= $item->getTitle($subjectLang)->description ?></i>
                                                                </p>
                                                            </div>

                                                            <?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); if (!$opinion) { ?>
                                                            <div class="d-flex justify-content-between px-4 align-items-center mt-2 mb-4" style="cursor:pointer;">
                                                            <?php if (!Yii::$app->user->isGuest): ?>
                                                                <span class="agree" data-item="<?= $item->id ?>" data-subject="<?= $subject->id ?>"><i class="fa-solid fa-check " style="color: #97df2a;"></i> Agree</span>
                                                                <span class="disagree"> <i class="fa-solid fa-xmark " style="color: red;"></i> Disagree</span>
                                                                <span class="d-flex numdisagree align-items-center" style="display: none!important;"><i class="me-2 fa-solid fa-check finalsubmit" style="color: #97df2a;" data-item="<?= $item->id ?>" data-subject="<?= $subject->id ?>"></i> <input type="number" class="disnum" style="border-radius: 5px; border: 1px solid #dee2e6" placeholder="0 - 100"></span>
                                                            <?php endif; ?>
                                                            </div>
                                                            <?php } ?>
                                                            <div class="<?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); echo (isset($opinion) && $opinion->disagree == 1) ? 'd-flex' : 'd-none' ?> justify-content-between px-4 align-items-center mt-2 mb-4 finalOpinion" style="cursor:pointer;">
                                                                <span class="d-flex align-items-center"><img src="/images/favicon.png" alt="" width="40" class="me-2"> <span><?= floor($res->subject_item_result) ?></span></span>
                                                                <span class="d-flex align-items-center"><?php if ($subject->user->me) { ?><img class="me-2" src=" <?= str_replace("/var/www/html/Mizagene/web/", "", $subject->user->me->image) ?>" alt="" class="" style="width: 40px; height: 40px; border-radius: 100%; object-fit: cover; filter: grayscale(100%);"><?php } else { ?> <i class="fa-solid fa-circle-user fa-xl me-2" style="color: #003C46;"></i> <?php } ?> <span class="myopinion"><?php $opinion = ItemReview::find()->where(['item_id' => $item->id])->andWhere(['subject_id' => $subject->id])->one(); echo isset($opinion) ? $opinion->disagree_value : '' ?></span></span>
                                                            </div>

                                                        </div>
                                                    </div>
                                                <?php endif; endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <script>
        window.addEventListener('load', function () {
            $('.dotFace').click(function () {
                $(this).closest('.profilePictureContainer').find('.profilePicture').attr('src', '<?= $dotImage ?>');
                $(this).css('background', '<?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>');
                $(this).attr('src', '<?= ($subject->gender == 1 || $subject->gender == 3) ? '/images/scan_white_men.png' : '/images/scan_white_woman.png' ?>');
                $('.normalFace').attr('src', '<?= ($subject->gender == 1 || $subject->gender == 3) ? '/images/wscan_men.png' : '/images/wscan_woman.png' ?>');
                $('.normalFace').css('background', 'white');
            })

            $('.normalFace').click(function () {
                $(this).closest('.profilePictureContainer').find('.profilePicture').attr('src', '<?= $normalImage ?>');
                $(this).css('background', '<?= ($subject->gender == 1 || $subject->gender == 3) ? 'rgb(75, 173, 233)' : 'rgb(210, 58, 225)' ?>');
                $(this).attr('src', '<?= ($subject->gender == 1 || $subject->gender == 3) ? '/images/wscan_white_men.png' : '/images/wscan_white_woman.png' ?>');
                $('.dotFace').attr('src', '<?= ($subject->gender == 1 || $subject->gender == 3) ? '/images/scan_men.png' : '/images/scan_woman.png' ?>');
                $('.dotFace').css('background', 'white');
            })

            $('.editInfo').click(function () {
                $(this).hide();
                $('.infoTexts').hide();
                $('.saveInfo').show();
                $('.editInputs').show();
            })

            $('.groupFilter').change(function () {
                if ($(this).val() == -10) {
                    $('.collapseExample').closest('.row').show();
                } else {
                    $('.collapseExample').closest('.row').hide();
                    $('#'+$(this).val()).closest('.row').show();
                }
            })

            $('.filterType').change(function () {
                $('.searchFilter').hide();
                $('.searchButtons').hide();
                $('.colorSearch').removeClass('d-flex');
                if ($(this).val() == 1) {
                    $('.parameterSearch').show();
                    $('.searchButtons').show();
                } else if ($(this).val() == 2) {
                    $('.colorSearch').show();
                    $('.colorSearch').addClass('d-flex');
                    $('.searchButtons').show();
                } else if ($(this).val() == 3) {
                    $('.rangeSearch').show();
                    $('.searchButtons').show();
                } else {
                    $('.searchFilter').hide();
                    $('.searchButtons').hide();
                    $('.colorSearch').removeClass('d-flex');

                }
            })

            $('.filterConnections').change(function () {
                $('.conRow').addClass('d-none');
                if ($(this).val() != -10)
                {
                    $('[data-con=' + $(this).val() + ']').removeClass('d-none');
                } else {
                    $('.conRow').removeClass('d-none');
                }
            })

            $(document).find('.select2').select2();

            $('.mySearch').click(function () {
                let elem = $(this).closest('.filterContainer').find('.searchFilter:visible');
                $('.parameterItem').addClass('removeElem');
                $('.parameterItem').parent().removeClass('d-md-block');
                $('.collapsedResult').addClass('d-none')
                if ($(elem).hasClass('parameterSearch')) {
                    let item = $(elem).find('select').val();
                    $('[data-item=' + item + ']').removeClass('removeElem');
                    $('[data-item=' + item + ']').closest('.collapsedResult').removeClass('d-none');
                    $('[data-item=' + item + ']').parent().addClass('d-md-block');
                } else if ($(elem).hasClass('colorSearch')) {
                    let color = $("input[name='colorSelect']:checked").val();
                    $('[data-color=' + color + ']').removeClass('removeElem');
                    $('[data-color=' + color + ']').closest('.collapsedResult').removeClass('d-none');
                    $('[data-color=' + color + ']').parent().addClass('d-md-block');
                } else {
                    $('[data-res]').filter(function() {
                        let result = $(this).data('res');
                       if (result >= $('.minper').val() && result <= $('.maxper').val()) {
                           $('[data-res="' + result + '"]').removeClass('removeElem');
                           $('[data-res="' + result + '"]').closest('.collapsedResult').removeClass('d-none');
                           $('[data-res="' + result + '"]').parent().addClass('d-md-block');
                       }
                    });
                }
            })

            $('.myClear').click(function () {
                $('.parameterItem').removeClass('removeElem');
                $('.collapsedResult').removeClass('d-none');
                $('.parameterItem').parent().addClass('d-md-block');
            })

            $('.saveInfo').click(function () {
                $('.preloader').removeClass('d-none');
                $('.preloader').addClass('d-flex');
                $(this).hide();
                $('.editInputs').hide();
                $('.infoTexts').show();
                $('.editInfo').show();
                let subject = $(this).data('subject');
                let height = $('#height').val();
                let wrist_size = $('#wrist_size').val();
                let age = $('#age').val();
                let gender = $('#gender').val();

                $.post( "/user/update-subject-info", { subject: subject, height: height, wrist_size: wrist_size, age: age, gender: gender} )
                    .done(function(data) {
                        window.location.reload();
                    });
            })

            $('.agree').click(function () {
                let item = $(this).data('item');
                let subject = $(this).data('subject');
                $.post( "/user/agree", { subject: subject, item: item} )
                    .done(function(data) {

                    });
                $(this).parent().css('visibility', 'hidden');
            })

            $('.collapseExample').on('hidden.bs.collapse', function () {
                $(this).parent().find('.arrow').addClass('collapsed');
            });

            $('.collapseExample').on('shown.bs.collapse', function () {
                $(this).parent().find('.arrow').removeClass('collapsed');
            });

            $('.disagree').click(function () {
                $(this).prev().remove();
                $(this).parent().find('.numdisagree').show();
                $(this).remove();
            })

            $('body').on('click', '.choose, .chooseIcon', function (){
                $('.firstStep').addClass('d-none');
                $('.secondStep').removeClass('d-none');
                // $.post( "/user/delete-subject", { subject: subject} )
                //     .done(function(data) {
                //         window.location.reload();
                //     });
            });
            $('body').on('click', '.backwards', function (){
                $('.firstStep').removeClass('d-none');
                $('.secondStep').addClass('d-none');
            });

            $('body').on('click', '.deleteConnection', function (){
                let con = $(this).data('con');
                if (confirm('Are you sure?')) {
                    $.post( "/user/delete-connection", { con: con} )
                        .done(function(data) {
                            window.location.reload();
                        });
                }
            });

            $('body').on('click', '.closeBackwards', function (){
                $('.closeMod').click();
                $('.firstStep').removeClass('d-none');
                $('.secondStep').addClass('d-none');

            });

            $('.finalsubmit').click(function (){
                let item = $(this).data('item');
                let subject = $(this).data('subject');
                let disagree = $(this).parent().find('.disnum').val();
                $.post( "/user/disagree", { subject: subject, item: item, disagree: disagree} )
                    .done(function(data) {

                    });
                $(this).closest('.opinionContainer').find('.finalOpinion').removeClass('d-none');
                $(this).closest('.opinionContainer').find('.finalOpinion').addClass('d-flex');
                $(this).closest('.opinionContainer').find('.myopinion').text(disagree);
                $(this).parent().parent().addClass('d-none');
            })

            $('body').on('click', '.addSubject', function (){
                let subject_type = $('#subjectTypeSelect').val();
                let object_type = $('#objectTypeSelect').val();
                let subject = $('#subjectID').val();
                let object = $('#objectID').val();
                $.post( "/user/add-connection", { subject: subject, object: object, subject_type: subject_type, object_type: object_type} )
                    .done(function(data) {
                        window.location.reload();
                    });
            });

            $('body').on('click', '.objectUser', function (){
                $('.firstStep').removeClass('d-none');
                $('.secondStep').addClass('d-none');
                let image = $(this).prev().attr('src');
                $('.objectImage').css('background-image', 'url("/' + image + '")');
                $('.objectImage').css('opacity', 1);
                $('.objectImage').css('width', '100px');
                $('.objectImage').css('height', '100px');
                $('.choose').text($(this).text());
                $('.addSubject').css('color', '#afe029');
                $('#objectID').val($(this).data('subject'));
            });

            $('body').on('change', '#subjectTypeSelect', function (){
                if ($(this).val() == 2) {
                    $('#objectTypeSelect').val(2);
                } else if ($(this).val() == 3) {
                    $('#objectTypeSelect').val(3);
                } else if ($(this).val() == 4) {
                    $('#objectTypeSelect').val(7);
                } else if ($(this).val() == 6) {
                    $('#objectTypeSelect').val(4);
                } else if ($(this).val() == 7) {
                    $('#objectTypeSelect').val(4);
                }
            });


        })
    </script>

<?php include('footer.php') ?>