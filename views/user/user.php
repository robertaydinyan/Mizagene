<?php
include('header.php');
use yii\helpers\Url;
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
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 px-0 py-3" style="border-right: 1px dashed #003C46;">
                            <div class="d-flex flex-column p-3 align-items-center">
                                <div style="border-radius: 5px; background-image: url('/images/subjects/1683379628chineese.png'); background-size: cover; width: 100px; height: 100px"></div>
                                <p class="text-center mt-2">Janie</p>
                                <select name="subject_type" id="" style="border: 1px dashed #003C46; border-radius: 5px; padding: 5px">
                                    <option value="">Select Subject Type</option>
                                    <option value="1">friend</option>
                                    <option value="2">mother</option>
                                    <option value="3">father</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 pt-1 pb-3">
                            <div class="text-end">
                                <i class="fa-solid fa-check fa-lg me-2 addSubject" style="color: rgb(240, 240, 240);cursor: pointer"></i>
                                <i class="fa-solid fa-xmark fa-lg" data-bs-dismiss="modal" style="color: red; cursor: pointer"></i>
                            </div>

                            <div class="d-flex flex-column p-3 pt-1 align-items-center">
                                <div style="width: 100px; height: 100px; border: 1px dashed #003C46; border-radius: 5px; display: flex">
                                    <div class="mx-auto my-auto objectImage" style="background-image: url('/images/favicon.png'); background-size: cover; width: 70px; height: 70px; opacity: 0.5"></div>
                                </div>
                                <p class="text-center mt-2 choose" style="cursor:pointer; color: #178fd6">Choose</p>
                                <select name="subject_type" id="" style="border: 1px dashed #003C46; border-radius: 5px; padding: 5px">
                                    <option value="">Select Object Type</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="secondStep row d-none d-flex m-3" style="border: 1px dashed #003C46; border-radius: 5px">
                        <div class="d-flex justify-content-between col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-3">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 backwards" style="color: #003C46; cursor: pointer">
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

<div class="w-100 d-block px-3" style="background-color:#f3f3f3;">
    <h4 class="p-3 ps-0"><?= $subject->name ?></h4>

    <div class="d-flex h-100 pb-4">
        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
            <div class="card mb-3 h-70">
                <div class="card-body text-center">
                    <div class="mx-auto" style="width: 200px; height: 200px; background-size: cover; border-radius: 10px; background-image: url('<?= str_replace("/var/www/html/Mizagene/web/", "", $subject->image) ?>')"></div>

                    <div class="card-body">
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
                                <p class="text-muted mb-0"><?= $subject->gender ?></p>
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

                    <div class="d-flex justify-content-center my-2">
                        <button type="button" class="btn btn-warning p-1">15.3%</button>
                        <button type="button" class="btn btn-danger ms-1 p-1">24.7%</button>
                        <button type="button" class="btn btn-primary ms-1 p-1">30.5%</button>
                        <button type="button" class="btn btn-secondary ms-1 p-1">48.3%</button>
                    </div>
                </div>
            </div>

            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-3 mb-3">
                    <div>
                        <h6 class="mb-0 mx-3 mt-3">Meta information</h6>
                    </div>
                    <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                            <p class="m-1">ID</p>
                            <p class="mb-0">001564</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                            <p class="m-1">Uploaded</p>
                            <p class="mb-0">2023-04-22 19:29</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                            <p class="m-1">By</p>
                            <p class="mb-0">Aram Sarkisyan </p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                            <p class="m-1" >Mizagene</p>
                            <p class="mb-0">ver 1.2 (2023-04-22)</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-1">
                            <p class="mb-0 px-0 me">Product type</p>
                            <p class="mb-0">Youmee App</p>
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Izumi_group_logo_youme_2015.svg/300px-Izumi_group_logo_youme_2015.svg.png?20180813043019" style="width: 30px;" class="px-0">
                        </li>
                    </ul>
                </div>
            </div>


        </div>

        <div class="col-2 px-2">

            <div class="card mb-4 mb-md-3  h-50">
                <div class="card-body">
                    <p class="mb-2"><span class="text-primary font-italic me-1">Personal</span>reports</p>
                    <p class="mb-1" style="font-size: .77rem;">My nature and temperament</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">My attitude towards family</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Me and sports</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Me and my talents</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Me and science</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Me and my parents</p>

                </div>

                <div class="card-body">
                    <p class="mb-2 "><span class="text-primary font-italic me-1">Me</span>and my friends</p>
                    <p class="mb-1" style="font-size: .77rem;">Friends nature and temperament</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">My and friends compatability</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Friendship and buisness with my friends</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Third party influence on my friends</p>
                    <p class="mt-1 mb-1" style="font-size: .77rem;">Conflicts with my friends</p>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row mt-2">
                        <p class=" col-8"><span class="text-primary font-italic me-1">Connections</span> </p>
                        <button type="button" class="btn btn-dark col-4" data-bs-toggle="modal" data-bs-target="#addConnection">+ add</button>
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
                                    <button class="btn btn-outline-secondary search-icon" type="button">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                        </div>
                    </div>

                    <table class="table align-middle mb-0 bg-white">
                        <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>

                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">John Doe</p>
                                        <p class="text-muted mb-0">Father</p>
                                    </div>

                                    <a href="#" class="text-dark ms-auto">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://images.pexels.com/photos/839633/pexels-photo-839633.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" style="width: 45px; height: 45px" class="rounded-circle"/>

                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">Mary Doe</p>
                                        <p class="text-muted mb-0">Mother</p>
                                    </div>

                                    <a href="#" class="text-dark ms-auto">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <div class="col-8 h-50 bg-white" style="border-radius: 5px; border:1px solid #d2d2d2;">


            <div class="flex-column d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <div class="col-3 ms-auto me-2 p-0">
                        <select class="form-select my-2 col-10" aria-label="Default select example">
                            <option selected>All</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                <a href="#" class="text-dark text-end pe-4">
                    <i class="fa-solid fa-filter"></i>
                </a>


            </div>
            <div class="row ms-3">
                <div class="row">
                    <span class="my-3" style="width:10rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                        Group 1
                    </span>
                    <div class="collapse show" id="collapseExample">
                        <div class="card card-body" style="border: none!important;">

                            <div class="row d-flex">
                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px">
                                        <div class="test" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;"></div>
                                        <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; max-height: 160px">
                                            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                           <br> <b>Result:</b> Lorem Ipsum
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                        <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                        <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px">
                                        <div class="test" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;"></div>
                                        <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; max-height: 160px">
                                            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                            <br><b>Result:</b> Lorem Ipsum
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                        <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                        <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px">
                                        <div class="test" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;"></div>
                                        <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; max-height: 160px">
                                            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                            <br><b>Result:</b> Lorem Ipsum
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                        <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                        <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                    </div>
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <div class="" style="border: 1px solid #d2d2d2; border-radius: 5px">
                                        <div class="test" style="height: 230px; width: 100%; position:relative; margin-bottom: -35px;"></div>
                                        <p style="padding-left: 10px; padding-right: 10px; overflow-y: scroll; max-height: 160px">
                                            <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i>
                                           <br> <b>Result:</b> Lorem Ipsum
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-between px-4 align-items-center mt-2">
                                        <i class="fa-solid fa-check" style="color: #97df2a;"></i> Agree
                                        <i class="fa-solid fa-xmark" style="color: red;"></i> Disagree
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="width:10rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        Group 2
                    </span>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            This is the content that will be shown and hidden when the button is clicked.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="width:10rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        Group 3
                    </span>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            This is the content that will be shown and hidden when the button is clicked.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <span class="my-3" style="width:10rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
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

<script>
    window.addEventListener('load', function () {
        $('body').on('click', '.choose', function (){
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
    })
</script>

<?php include('footer.php') ?>