<?php
include('header.php');
use yii\helpers\Url;
use app\modules\models\Items;
?>
    <style>
        .mobileCol {
            padding-left: 0!important;
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
                                <i class="fa-solid fa-xmark fa-lg d-sm-none d-inlne" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>
                            <div class="d-flex flex-column p-3 pt-sm-3 pt-1 align-items-center">
                                <div style="border-radius: 5px; background-image: url('<?= str_replace("/var/www/html/Mizagene/web/", "", $subject->image) ?>'); background-size: cover; width: 100px; height: 100px"></div>
                                <p class="text-center mt-2"><?= $subject->name ?></p>
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
                                <i class="fa-solid fa-xmark fa-lg d-none d-sm-inline" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>

                            <div class="d-flex flex-column p-3 pt-1 align-items-center">
                                <div style="width: 100px; height: 100px; border: 1px dashed #003C46; border-radius: 5px; display: flex" class="chooseIcon">
                                    <div class="mx-auto my-auto objectImage" style="background-image: url('/images/favicon.png'); background-size: cover; width: 70px; height: 70px; opacity: 0.5"></div>
                                </div>
                                <p class="text-center mt-2 choose" style="cursor:pointer; color: #178fd6">Choose</p>
                                <select name="subject_type" id="objectTypeSelect" style="border: 1px dashed #003C46; border-radius: 5px; padding: 5px">
                                    <option value="">Select Object Type</option>
                                    <option value="1" class="">partner</option>
                                    <option value="2" class="">spouse</option>
                                    <option value="3" class="">child</option>
                                    <option value="4" class="">biological father</option>
                                    <option value="5" class="">biological mother</option>
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
                                <i class="fa-solid fa-xmark fa-lg" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                            <input type="text" style="border-radius: 5px; border: none; background-color: rgb(240, 240, 240); width: 100%">
                        </div>
                        <div class="" style="height: 250px; overflow: scroll;">
                            <div class="d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46" data-subject="4">Aram Sarkisyan</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46" data-subject="4">Aram Sarkisyan</span>
                                </div>
                            </div>
                            <div class="d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                            </div>
                            <div class="d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                            </div>
                            <div class="d-flex col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 d-flex align-items-center">
                                    <div style="width: 50px; height: 50px; background-size: cover; border-radius: 5px; background-image: url('/images/aram.jpg')"></div>
                                    <span class="objectUser mx-auto" style="cursor: pointer; color: #003C46">Aram Sarkisyan</span>
                                </div>
                            </div>
                        </div>

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
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <img src="<?= str_replace("/var/www/html/Mizagene/web/", "", $subject->image) ?>" class="ms-2 zoomable" alt="" style="width: 200px; height: 200px; object-fit: cover; border-radius: 10px;">
                        <div class="d-flex flex-column px-2">
                            <i class="fa-solid fa-pen pb-3" style="cursor: pointer"></i>
                            <?php if ($subject->gender == 1 || $subject->gender == 3): ?>
                                <img src="/images/scan_white_men.png" alt="" width="30px" class="mb-3" style="cursor: pointer; background: rgb(210, 58, 225); border-radius: 5px; padding: 5px">
                                <img src="/images/wscan_men.png" alt="" width="30px" style="cursor: pointer; background: white; border-radius: 5px; padding: 5px">
                            <?php endif; ?>
                            <?php if ($subject->gender == 2 || $subject->gender == 4): ?>
                                <img src="/images/wscan_woman.png" alt="" width="30px" class="mb-3" style="cursor: pointer; background: rgb(210, 58, 225); border-radius: 5px; padding: 5px">
                                <img src="/images/scan_woman.png" alt="" width="30px" style="cursor: pointer; background: white; border-radius: 5px; padding: 5px">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-body px-4">
                        <div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                <p class="mb-0">Height</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                <p class="text-muted mb-0"><?= $subject->height ?> cm</p>
                            </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                <p class="mb-0">Age</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                <p class="text-muted mb-0"><?= date('Y') - $subject->year_of_birth ?></p>
                            </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                <p class="mb-0">Gender</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                <p class="text-muted mb-0"><?= $subject->gender == 1 ? 'Male' : ($subject->gender == 2 ? 'Female' : ($subject->gender == 3 ? 'Other (born as a male)' : ($subject->gender == 4 ? 'Other (born as a female)' : ''))) ?></p>
                            </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-start">
                                <p class="mb-0">Wrist size</p>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 text-end">
                                <p class="text-muted mb-0"><?= $subject->wrist_size ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex my-2 px-2">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                            <span style="background: rgb(243, 194, 67)!important; color: white!important; border: none!important;font-size: 10px; width: 100%; display: block; border-radius: 5px;" class="p-1">15.3%</span>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                            <span style="background: rgb(236, 84, 73)!important; color: white!important; border: none!important;font-size: 10px; width: 100%; display: block; border-radius: 5px;" class="p-1">24.7%</span>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                            <span style="background: rgb(54, 130, 180)!important; color: white!important; border: none!important;font-size: 10px; width: 100%; display: block; border-radius: 5px;" class="p-1">30.5%</span>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 px-1">
                            <span style="background: rgb(208, 174, 101)!important; color: white!important; border: none!important;font-size: 10px; width: 100%; display: block; border-radius: 5px;" class="p-1">48.3%</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4 mb-lg-0 d-none d-sm-block" style="border: none">
                <div class="card-body p-3 mb-3">
                    <div>
                        <h6 class="mb-0 mx-3 mt-3">Meta information</h6>
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
                    <p class=" col-8"><span class="font-italic me-1" style="color: rgb(210, 58, 225)">Available Reports</span></p>
                    <div style="overflow-y: scroll; height: 270px;">
                        <p class="mb-1" style="cursor: pointer; color: #003C46"><b>Character traits</b></p>
                        <p class="mt-1 mb-1" style="cursor: pointer;">Psyche and Communication</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Child report</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Study</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to science</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to sports</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Career guidance</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> HR profile</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Intimate report</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> KYC Casino</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Specialized talent assessment in football</p>
                    </div>
                </div>
            </div>
            <div class="card col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="border: none">
                <div class="card-body">
                    <div class="row mt-2 align-items-baseline">
                        <p class=" col-8"><span class="font-italic me-1" style="color: rgb(234, 51, 61)">Connections</span> </p>
                        <button type="button" class="btn btn-dark p-0 col-3 mx-2" data-bs-toggle="modal" data-bs-target="#addConnection">+ add</button>
                    </div>

                    <div class="row d-flex align-items-center">
                        <div class="col-10 p-0">
                            <select class="form-select my-2 col-10" aria-label="Default select example">
                                <option selected>All</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="col-2 p-0">
                                    <button class="btn btn-outline-secondary search-icon ms-1" type="button" style="border: 1px solid #dee2e6">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                        </div>
                    </div>



                    <div class="card-body px-4" style="overflow-y: scroll; height: 210px!important;">
                        <div class="row mb-3" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="d-flex col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 px-0 text-start">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Mary Doe</p>
                                    <p class="text-muted mb-0">Mother</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 px-0 text-end">
                                <a href="#" class="text-dark ms-auto">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-3" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="d-flex col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 px-0 text-start">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Mary Doe</p>
                                    <p class="text-muted mb-0">Mother</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 px-0 text-end">
                                <a href="#" class="text-dark ms-auto">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-3" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="d-flex col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 px-0 text-start">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Mary Doe</p>
                                    <p class="text-muted mb-0">Mother</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 px-0 text-end">
                                <a href="#" class="text-dark ms-auto">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row mb-3" style="border-bottom: 1px solid lightgrey; padding-bottom: 5px;">
                            <div class="d-flex col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10 px-0 text-start">
                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">Mary Doe</p>
                                    <p class="text-muted mb-0">Mother</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 px-0 text-end">
                                <a href="#" class="text-dark ms-auto">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 card mt-3 d-flex d-lg-none" style="border: none">
                <div class="card-body">
                    <p class=" col-8"><span class="font-italic me-1" style="color: rgb(210, 58, 225)">Available Reports</span></p>
                    <div style="overflow-y: scroll; height: 210px;">
                        <p class="mb-1" style="cursor: pointer; color: #003C46"><b>Character traits</b></p>
                        <p class="mt-1 mb-1" style="cursor: pointer;">Psyche and Communication</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Child report</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Study</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to science</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Talent to sports</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Career guidance</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> HR profile</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Intimate report</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> KYC Casino</p>
                        <p class="mt-1 mb-1" style="color: #464646"><i class="fa-solid fa-lock me-2" style="color: #464646"></i> Specialized talent assessment in football</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 px-lg-0">


            <div class="flex-column d-flex justify-content-between bg-white mx-auto mt-3 mt-lg-0" style="border-radius: 5px;">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <h4 class="mb-0 p-4">Character traits</h4>
                    </div>
                    <div class="d-flex col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 align-items-center px-4">
                        <select class="form-select my-2 " aria-label="Default select example">
                            <option selected>All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <a href="#" class="text-dark text-end px-2">
                            <img src="/images/filter.png" alt="" width="30px">
                        </a>
                    </div>



            </div>
            <div class="row ms-3">
                <div class="row">
                    <span class="my-3" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                        	<i class="fa-solid fa-face-smile" style="color: #003C46"></i> Positive character traits
                    </span>
                    <div class="collapse show px-0" id="collapseExample">
                        <div class="card card-body" style="border: none!important;">

                            <div class="row d-flex parentResult" style="height: 360px; overflow-y: scroll;">
                                <div id="carouselExample" class="carousel slide carousel-dark d-block d-md-none">
                                    <div class="carousel-inner">
                                        <?php
                                            $result = $subject->result;
                                            foreach (json_decode($result['result']) as $k => $res):
                                                if ($k == 1000) break;
                                                $item = Items::findOne($res->item_ID); if ($item): ?>
                                                <div class="carousel-item <?= $k == 1 ? 'active' : '' ?>">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px; height: 330px">
                                                            <div class="mobileResult d-flex justify-content-center mx-auto" style="height: 230px; width: 280px; position:relative; margin-bottom: -35px;" data-result="<?= $res->subject_item_result ?>"></div>
                                                            <div class="px-2 pt-0 pb-4 text-center" style="margin-top: -80px"><?= $item->getTitle(2)->title ?></div>
                                                            <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; height: 100px">
                                                                <i><?= $item->getTitle(2)->description ?></i>
                                                                <br> <b>Result:</b> <?= $res->subject_item_result ?>
                                                            </p>
                                                        </div>
                                                        <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                                            <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                                            <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif; endforeach; ?>

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="left: -28px">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="right: -28px">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <?php
                                $result = $subject->result;
                                foreach (json_decode($result['result']) as $k => $res):
                                if ($k == 1000) break;
                                $item = Items::findOne($res->item_ID); if ($item): ?>
                                    <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">
                                        <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px; height: 330px">
                                            <div class="test desktopResult d-flex justify-content-center" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;" data-result="<?= $res->subject_item_result ?>"></div>
                                            <div class="px-2 pt-0 pb-4 text-center" style="margin-top: -90px"><?= $item->getTitle(2)->title ?></div>
                                            <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; height: 100px">
                                                <i><?= $item->getTitle(2)->description ?></i>
                                               <br> <b>Result:</b> <?= $res->subject_item_result ?>
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                            <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                            <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                        </div>
                                    </div>
                                <?php endif; endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        Group 2
                    </span>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            This is the content that will be shown and hidden when the button is clicked.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        Group 3
                    </span>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            This is the content that will be shown and hidden when the button is clicked.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="cursor: pointer;" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                        Group 4
                    </span>
                    <div class="collapse" id="collapseExample4">
                        <div class="card card-body">
                            This is the content that will be shown and hidden when the button is clicked.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
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

        $('body').on('click', '.objectUser', function (){
            $('.firstStep').removeClass('d-none');
            $('.secondStep').addClass('d-none');
            let image = $(this).prev().css('background-image');
            $('.objectImage').css('background-image', image);
            $('.objectImage').css('opacity', 1);
            $('.choose').text($(this).text());
            $('.addSubject').css('color', '#afe029');
        });
        $('body').on('change', '#subjectTypeSelect', function (){
            if ($(this).val() == 2) {
                // $.each('#objectTypeSelect option', function (i, e) {
                //     console.log($(e));
                //     if ($(e).val() != 1)
                //         $(e).attr('disabled', 'disabled');
                // })
            } else if ($(this).val() == 3) {
                $('#objectTypeSelect').val(2);
            } else if ($(this).val() == 4) {
                $('#objectTypeSelect').val(3);
            } else if ($(this).val() == 6) {
                $('#objectTypeSelect').val(4);
            } else if ($(this).val() == 7) {
                $('#objectTypeSelect').val(5);
            }
        });


    })
</script>

<?php include('footer.php') ?>