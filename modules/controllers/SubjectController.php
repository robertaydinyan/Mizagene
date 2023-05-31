<?php

namespace app\modules\controllers;

use app\models\Subject;
use app\models\SubjectSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\View;

/**
 * LanguageController implements the CRUD actions for Language model.
 */
class SubjectController extends Controller {
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    public function beforeAction($action) {
        $this->view->registerJsFile('@web/js/subject.js', ['position' => View::POS_END, 'depends' => [\yii\web\JqueryAsset::className()]]);

        return parent::beforeAction($action);
    }

    /**
     * Lists all Language models.
     *
     * @return string
     */
    public function actionIndex() {
        $searchModel = new SubjectSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel
        ]);
    }

    public function actionGetSubjectsList() {
        $searchModel = new SubjectSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->renderAjax('_subjects-list', [
            'dataProvider' => $dataProvider
        ]);

    }

    public function actionDetails($id) {
        $subject = Subject::findOne($id);

        return $this->render('details', [
            'subject' => $subject,
            'search' => Yii::$app->request->get('search')
        ]);
    }
}
