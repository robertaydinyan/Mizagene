<?php
include('header.php');
use yii\helpers\Url;
?>

<div class="w-100 d-block" style="background-color:#f3f3f3;">
<h4 class="p-3">Jane (Janie)</h4>
<div class="d-flex h-100 pb-4" >


    <div class="col-2">

        <div class="card mb-3 h-70">
            <div class="card-body text-center">
                <img src="https://funkylife.in/wp-content/uploads/2023/02/cute-girl-pic-2-1024x1024.jpg" alt="avatar"
                     class=" img-fluid" style="width: 250px;border-radius: 15px;">

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="mb-0">Height</p>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-muted mb-0">165 cm</p>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="mb-0">Age</p>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-muted mb-0">12</p>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="mb-0">Gender</p>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-muted mb-0">Female</p>
                        </div>
                    </div>
                    <hr class="m-2">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="mb-0">Wrist size</p>
                        </div>
                        <div class="col-sm-5">
                            <p class="text-muted mb-0">Small</p>
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
                    <a href="" type="button" class="btn btn-dark col-4">+ add</a>
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

        <div class="row mx-auto">
            <div class="row">
                <span class="my-3" style="width:10rem;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                    Group 1
                </span>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        This is the content that will be shown and hidden when the button is clicked.
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

<?php include('footer.php') ?>