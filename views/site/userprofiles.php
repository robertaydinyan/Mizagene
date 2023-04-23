<?php
/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\Userprofiles $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\ActiveField;

use yii\bootstrap5\Html;
?>

<div class="row justify-content-between">
    <div class="col-2 m-0">
        <h3>Profiles</h3>
    </div>

    <div class="col-2 order-1">
        <button type="button" class="btn btn-dark"> + Add new person</button>
    </div>

    <div class="col-4 ">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
        <?php
//        $model = new \app\models\Userprofiles();
//        $form = ActiveForm::begin([
//        'layout' => 'inline',
//        'action' => ['search'],
//        'method' => 'get',
//        ]);
        ?>

        <?php // $form->field($model, 'search',)->textInput(
//                ['placeholder' => 'Search','name' => 'myParam'])->label(false) ?>

<!--        <button type="submit" class="btn btn-primary">Search</button>-->

        <?php //ActiveForm::end(); ?>
    </div>
</div>



<div class="row">
    <div class="col-8 py-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>ID</th>
                <th>Picture</th>
                <th>Name(Nickname)</th>
                <th>Height(cm)</th>
                <th>Wrist size</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Date/Time of upload</th>
                <th>Points</th>
                <th>Report</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($tableData as $data): ?>
            <tr>
                <td><?= $data->id ?></td>
                <td>
                    <div class="d-flex align-items-center">
                        <img
                                src="<?= $data->img ?>"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                        />
                    </div>
                </td>
                <td>
                    <div class="ms-3 ">
                        <p class="fw-bold mb-1 "> <?= $data->name ?></p>
                    </div>
                </td>
                <td>
                    <div class="ms-3">
                        <p class="fw-normal mb-1"><?= $data->height ?></p>
                    </div>
                </td>
                <td>
                    <div class="ms-3">
                        <p class="fw-normal mb-1"><?= $data->w_size ?></p>
                    </div>
                </td>
                <td><?= $data->age ?></td>
                <td>
                    <div class="ms-3">
                        <p class="fw-normal mb-1"><?= $data->sex ?></p>
                    </div>
                </td>
                <td>
                    <div class="ms-3">
                        <p class="fw-normal mb-1"><?= $data->created_at ?></p>
                    </div>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        <?php
                            echo Html::img('@web/images/icons/facial-recognition.png',
                                ['style' => 'width: 35px;height: 35px']); ?>
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-link btn-sm btn-rounded">
                        <?php
                        echo Html::img('@web/images/icons/statistics.png',
                            ['style' => 'width: 30px;height: 30px']); ?>
                    </button>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class=" col-4">

            <div class="container py-5 ms-3 h-100">
                    <div class="col-8">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-0">
                                <div class="text-black d-block justify-content-between">
                                    <div class="flex-shrink-0 m-2">
                                        <img src="<?= $data->img ?>"
                                             class="img-fluid"
                                             style="width: 250px; border-radius: 10px;">
                                    </div>
                                    <div class="flex-grow-1 ms-1">
                                        <h5 class="mb-1"><?= $data->name ?></h5>
                                        <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                             style="background-color: #efefef;">
                                            <div>
                                                <p class="small text-muted mb-1">Height</p>
                                                <p class="mb-0"><?= $data->height ?></p>
                                            </div>
                                            <div class="px-3">
                                                <p class="small text-muted mb-1">Age</p>
                                                <p class="mb-0"><?= $data->age ?></p>
                                            </div>
                                            <div>
                                                <p class="small text-muted mb-1">Gender</p>
                                                <p class="mb-0"><?= $data->sex ?></p>
                                            </div>
                                            <div class="px-3">
                                                <p class="small text-muted mb-1">Wrist size</p>
                                                <p class="mb-0"><?= $data->w_size ?></p>
                                            </div>
                                        </div>
                                        <div class="d-flex pt-1">
                                            <button type="button" class="btn btn-outline-dark me-1 flex-grow-1">Edit</button>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
</div>