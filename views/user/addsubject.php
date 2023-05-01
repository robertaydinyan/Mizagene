<?php include('header.php');

use yii\helpers\Url;

?>

    <div class="modal modal-xl fade" id="photoRequirementsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Photo Guide</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row my-3">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                            <div class="nav flex-column nav-pills me-3 subject-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-subject1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subject1" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Requirements</button>
                                <button class="nav-link" id="v-pills-subject2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subject2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="border-top: none!important; border-bottom: none!important;">Mistakes</button>
                                <button class="nav-link" id="v-pills-subject3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-subject3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Result</button>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-subject1" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <img src="/images/goodq_wm.jpg" alt="" width="250">
                                            <img src="/images/right.png" alt="" width="40" style="position: absolute; left: 505px; top: 35px;">
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                            <p  class="mb-0" style="font-weight: 500">Head</p>
                                            <p class="mb-0">1.  The face should not be turned towards the camera</p>
                                            <p class="mb-0">2.  The head should not be tilted up or down</p>
                                            <p class="mb-0 mt-2"><span style="color: red">Important!</span> Any slight displacement of the head is not critical, but still affects the accuracy of the analysis.</p>
                                            <p class="mb-0 mt-2" style="font-weight: 500">Eyes and mouth</p>
                                            <p class="mb-0">1.  Eyes should be open and look at the camera</p>
                                            <p class="mb-0">2.  Eyes and mouth should not reflect any emotions</p>
                                            <p class="mb-0">3.  Eyes should be open, mouth should be closed.</p>
                                            <p class="mb-0 mt-2"><span style="color: red">Important!</span> During the analysis we use face control points, the high density of which falls precisely on the areas of the mouth, nose and eyes</p>
                                            <p class="mb-0 mt-2" style="font-weight: 500">Lighting and picture quality</p>
                                            <p class="mb-0">1.  Good lighting is required</p>
                                            <p class="mb-0">2.  Picture quality has to be at list HD (better – HD+)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-subject2" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/faceturn_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Face turned to the side</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/headtern_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Head turned</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/headdown_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Head down</p>
                                        </div><div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/headup_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Head up</p>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/smile_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Emotion on the face</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/joke_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Joking face</p>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/lesslight_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Bad light</p>
                                        </div><div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center">
                                            <img src="/images/badq_wm.jpg" alt="" width="150">
                                            <p class="mb-0">Poor photo quality</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-subject3" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                            <img src="/images/mizagene_dots_ym.png" alt="" width="250">
                                        </div>
                                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                                            <p class="mb-0">The face of every human being on the Earth has more than 460 specific points. The distance between these points, as well as their location relative to each other, are different for everyone.</p>
                                            <p class="mb-0 mt-2">However, despite the fact that everyone's faces are unique, the face map's structure does not change. Nothing changes except of the points' coordinates.</p>
                                            <p class="mb-0 mt-2">Mizagene technology reads the portrait of a person, recognizes these points and the angular distance between them.  After that we process this data and get the reports about personal traits, psyche, behavioral patterns, etc.</p>
                                            <p class="mb-0 mt-2" style="font-weight: 500">That's why it is very important to get the "right" portrait photo of a person you want to analyze.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="mb-3 mx-auto px-0">
    <div class="row mx-auto px-0" style="padding-top: 25px!important">
        <h3>Add New Subject for analysis</h3>
<!--        <h3 class="text-center">Hi <span style="color: rgb(210, 58, 225)">--><?//= 'George' ?><!--</span>! Let's start.</h3>-->
        <div class="d-flex justify-content-start px-0 mb-5 align-items-center" style="margin-left: 12px; margin-top: 12px">
<!--            <p style="font-size: 19px" class="text-center me-3">Whom shall we analyze first?</p>-->
            <ul class="nav nav-pills mb-3 subject-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-me-tab" data-bs-toggle="pill" data-bs-target="#pills-me" type="button" role="tab" aria-controls="pills-me" aria-selected="true">Me</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false" style="border-right: none; border-left: none">Other Subject</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-multiple-tab" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Multiple Subjects</button>
                </li>
            </ul>
        </div>
        <div class="container row mx-auto px-0">
            <div class="tab-content mx-auto px-0" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-me" role="tabpanel" aria-labelledby="pills-me-tab" tabindex="0">
                    <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-0">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-end">
                            <div class="col-12 d-flex flex-column mb-3" style="width: 330px; height: 465px; border: 1px dashed grey; border-radius: 5px;">
                                <div class="d-flex justify-content-start align-items-center ps-3" style="height: 50px;">
                                    <a href="#" style="text-decoration: none; color: black" class="add-subject-icons"><i class="fa-solid fa-arrow-up-from-bracket" style="padding: 10px; font-size: 20px; cursor: pointer; color: #000;"></i>Upload</a>
                                    <a href="#" style="text-decoration: none; color: black" class="add-subject-icons"><i class="fa-solid fa-camera" style="padding: 10px; font-size: 20px; cursor: pointer; color: #000;"></i>Camera</a>
<!--                                    <i class="add-subject-icons fa-solid fa-triangle-exclamation" style="padding: 10px; font-size: 25px; cursor: pointer; color: #fff;"></i>-->
                                </div>
                                <img class="img-fluid align-self-center my-auto" src="/images/facial-recognition_1.png" alt="" style="" width="300" >
                                <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                                    <button class="btn fillButton mx-auto bg-dark w-100 h-100 d-flex justify-content-center align-items-center" style="border-radius: unset!important;border-bottom-left-radius: 5px!important; border-bottom-right-radius: 5px!important;" data-bs-toggle="modal" data-bs-target="#photoRequirementsModal"><i class="fa-solid fa-triangle-exclamation pe-3" style="font-size: 25px; cursor: pointer; color: #fff;"></i>Photo requirements</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 subjectProps" style="margin: 0 auto">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-column align-items-center" style="text-align: start">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500">Name/Nickname</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name/Nickname" required>
                                </div>
                                <div class="mb-4 d-flex flex-column">
                                    <label for="customRange2" class="form-label" style="font-weight: 500">Height</label>
                                    <input type="range" class="form-range" id="customRange2" min="40" max="230" step="1" oninput="this.nextElementSibling.value = this.value + 'cm' + ' (' + (parseInt(this.value) / 2.54).toFixed(1) + ' inches)'" required>
                                    <output class="text-end" style="width: 72%;">135cm (53.1 inches)</output>
                                </div>
                                <div class="mb-4 d-flex flex-column">
                                    <label for="customRange1" class="form-label" style="font-weight: 500">Wrist size</label>
                                    <input type="range" class="form-range" id="customRange1" min="7" max="30" step="0.5" oninput="this.nextElementSibling.value = this.value + 'cm' + ' (' + (parseInt(this.value) / 2.54).toFixed(1) + ' inches)'" required>
                                    <output class="text-end" style="width: 72%;">18.5cm (7.1 inches)</output>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput4" class="form-label" style="font-weight: 500">Year of birth</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Year of birth</option>
                                        <?php for ($i = 2021; $i >= 1903; $i--): ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput4" class="form-label" style="font-weight: 500">Gender</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other (born as a male)</option>
                                        <option value="4">Other (born as a female)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex flex-column mx-auto px-0 ps-1" style="margin: 0!important;  z-index: 10; position: relative">
                            <div class="mb-4" style="border-radius: 5px; border: 1px dashed grey; width: 330px; padding-bottom: 51%!important;">
                                <div class="d-flex justify-content-center align-items-center" style="background: black; height: 50px; border-top-left-radius: 5px; border-top-right-radius: 5px">
                                    <h6 style="font-family: 'Nunito Sans', sans-serif; color: white; margin: 0"><i class="fa-solid fa-id-card pe-3" style="color: white"></i>Available Reports</h6>
                                </div>

                                <div class="form-check p-3">
                                    <input class="form-check-input mx-3" type="checkbox" value="" id="all-reports">
                                    <label class="form-check-label" for="all-reports">
                                        All reports
                                    </label>
                                    <ul>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="general-reports">
                                                <label class="form-check-label" for="general-reports">
                                                    General report
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="primary-report">
                                                <label class="form-check-label" for="primary-report">
                                                    Primary report
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div style="width: 330px; margin-top: auto; margin-bottom: 20px; text-align: end;">
<!--                                <p >Your photo will be entered into the automatic process for review and approval.-->
<!--                                    So please, check one more time if your photo meets our requirements and get the result.</p>-->
                                <button class="btn fillButton mx-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="padding: 10px 17px!important;" disabled>Get the Reports</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab" tabindex="0">
                    <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mx-0">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-end">
                            <div class="col-12 d-flex flex-column mb-3" style="width: 330px; height: 465px; border: 1px dashed grey; border-radius: 5px;">
                                <div class="d-flex justify-content-start align-items-center ps-3" style="height: 50px;">
                                    <a href="#" style="text-decoration: none; color: black" class="add-subject-icons"><i class="fa-solid fa-arrow-up-from-bracket" style="padding: 10px; font-size: 20px; cursor: pointer; color: #000;"></i>Upload</a>
                                    <a href="#" style="text-decoration: none; color: black" class="add-subject-icons"><i class="fa-solid fa-camera" style="padding: 10px; font-size: 20px; cursor: pointer; color: #000;"></i>Camera</a>
                                    <!--                                    <i class="add-subject-icons fa-solid fa-triangle-exclamation" style="padding: 10px; font-size: 25px; cursor: pointer; color: #fff;"></i>-->
                                </div>
                                <img class="img-fluid align-self-center my-auto" src="/images/facial-recognition_1.png" alt="" style="" width="300" >
                                <div class="d-flex justify-content-center align-items-center" style="height: 50px;">
                                    <button class="btn fillButton mx-auto bg-dark w-100 h-100 d-flex justify-content-center align-items-center" style="border-radius: unset!important;border-bottom-left-radius: 5px!important; border-bottom-right-radius: 5px!important;" data-bs-toggle="modal" data-bs-target="#photoRequirementsModal"><i class="fa-solid fa-triangle-exclamation pe-3" style="font-size: 25px; cursor: pointer; color: #fff;"></i>Photo requirements</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 subjectProps" style="margin: 0 auto">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 d-flex flex-column align-items-center" style="text-align: start">
                                <div class="mb-4">
                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500">Name/Nickname</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name/Nickname" required>
                                </div>
                                <div class="mb-4 d-flex flex-column">
                                    <label for="customRange2" class="form-label" style="font-weight: 500">Height</label>
                                    <input type="range" class="form-range" id="customRange2" min="40" max="230" step="1" oninput="this.nextElementSibling.value = this.value + 'cm' + ' (' + (parseInt(this.value) / 2.54).toFixed(1) + ' inches)'" required>
                                    <output class="text-end" style="width: 72%;">135cm (53.1 inches)</output>
                                </div>
                                <div class="mb-4 d-flex flex-column">
                                    <label for="customRange1" class="form-label" style="font-weight: 500">Wrist size</label>
                                    <input type="range" class="form-range" id="customRange1" min="7" max="30" step="0.5" oninput="this.nextElementSibling.value = this.value + 'cm' + ' (' + (parseInt(this.value) / 2.54).toFixed(1) + ' inches)'" required>
                                    <output class="text-end" style="width: 72%;">18.5cm (7.1 inches)</output>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput4" class="form-label" style="font-weight: 500">Year of birth</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Year of birth</option>
                                        <?php for ($i = 2021; $i >= 1903; $i--): ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label for="exampleFormControlInput4" class="form-label" style="font-weight: 500">Gender</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option value="">Select Gender</option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                        <option value="3">Other (born as a male)</option>
                                        <option value="4">Other (born as a female)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 d-flex flex-column mx-auto px-0 ps-1" style="margin: 0!important;  z-index: 10; position: relative">
                            <div class="mb-4" style="border-radius: 5px; border: 1px dashed grey; width: 330px; padding-bottom: 51%!important;">
                                <div class="d-flex justify-content-center align-items-center" style="background: black; height: 50px; border-top-left-radius: 5px; border-top-right-radius: 5px">
                                    <h6 style="font-family: 'Nunito Sans', sans-serif; color: white; margin: 0"><i class="fa-solid fa-id-card pe-3" style="color: white"></i>Available Reports</h6>
                                </div>

                                <div class="form-check p-3">
                                    <input class="form-check-input mx-3" type="checkbox" value="" id="all-reports">
                                    <label class="form-check-label" for="all-reports">
                                        All reports
                                    </label>
                                    <ul>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="general-reports">
                                                <label class="form-check-label" for="general-reports">
                                                    General report
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="primary-report">
                                                <label class="form-check-label" for="primary-report">
                                                    Primary report
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div style="width: 330px; margin-top: auto; margin-bottom: 20px; text-align: end;">
                                <!--                                <p >Your photo will be entered into the automatic process for review and approval.-->
                                <!--                                    So please, check one more time if your photo meets our requirements and get the result.</p>-->
                                <button class="btn fillButton mx-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions" style="padding: 10px 17px!important;" disabled>Get the Reports</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<?php include('footer.php') ?>