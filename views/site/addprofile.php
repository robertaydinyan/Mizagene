<?php include('header.php');

use yii\helpers\Url;

?>

<div class="container-fluid mb-3">
    <div class="container row mx-auto" style="padding-top: 10%">
        <h3 style="font-family: 'Nunito Sans', sans-serif;">New Profile</h3>

        <div class="col-4 d-block justify-content-center">
            <div class="col-12 d-block mb-3 mx-auto" style="width: 250px; height: 250px; background-color: #ececec;">
                <img class="img-fluid" src="/images/icons/facial-recognition.png" alt="">
            </div>
            <div class="d-flex justify-content-center ">
                <button class="btn fillButton bg-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-upload"></i> Upload</button>
                <button class="btn outlineButton " data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions""><i class="fa-solid fa-camera"></i> Webcam</button>
            </div>

        </div>

        <div class="col-4">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: start">
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Name/Nickname</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name/Nickname" required>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput2" class="form-label">Height (cm)</label>
                    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Height (cm)" required>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput3" class="form-label">Wrist size</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Wrist size" required>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput4" class="form-label">Year of birth</label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Year of birth" required>
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlInput4" class="form-label">Gender</label>
                    <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Gender" required>
                </div>
            </div>
        </div>

        <div class="container d-grid gap-2 d-md-block col-4 mx-auto" style="margin: 0!important; margin-top: 4rem!important; padding: 0!important; z-index: 10; position: relative">
            <div class="mb-4">
                <h3 style="font-family: 'Nunito Sans', sans-serif;">Available Reports</h3>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="all-reports">
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

            <div>
                <p >Your photo will be entered into the automatic process for review and approval.
                    So please, check one more time if your photo meets our requirements and get the result.</p>
                <button class="btn fillButton mx-auto bg-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions">Check the Picture</button>
                <button class="btn fillButton mx-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSignUp" aria-controls="offcanvasWithBothOptions"">Get the Reports</button>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>