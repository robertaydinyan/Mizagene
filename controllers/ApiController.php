<?php

namespace app\controllers;

use app\models\API;
use app\modules\models\Items;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;

class ApiController extends Controller {
    public $enableCsrfValidation = false;

    public function beforeAction($action) {
        Yii::$app->response->format = Response::FORMAT_JSON;
        error_reporting(0);
        $secret = '2YUmrIyqgY8wyHbcZPoaWw6YsiSQFS';
        $auth_header = $_SERVER['HTTP_AUTHORIZATION'];
        if (preg_match('/Bearer\s(\S+)/', $auth_header, $matches)) {
            $token = $matches[1];
            if ($secret != $token) {
                API::returnError(401, "Wrong token");
            }
        } else {
            API::returnError(401, "Wrong token format");
        }
        return parent::beforeAction($action);
    }


    public function actionGetLandmarks() {
        $api_configs = include(\Yii::getAlias('@webroot') . DS . '..' . DS . 'config' . DS . 'api.php');
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            API::returnError(403, "Wrong request method");
        }

        if (!isset($_FILES['image'])) {
            API::returnError(400, "Missing file");
        }

        $file = $_FILES['image'];
        if (!in_array($file['type'], $api_configs['allowed_file_types']) || $file['size'] > $api_configs['max_file_size']) {
            API::returnError(400, "Something is wrong with file");
        }
        $file_name = strtotime("now");
        $uploadFile = \Yii::getAlias('@webroot') . DS . 'images' . DS . 'face' . DS . $file_name . '.' . explode('/', $file['type'])[1];
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            chmod($uploadFile, 0755);

            $command = 'cd /var/www/html/Mizagene/python/landmarks/ && /usr/bin/python index.py ' . $uploadFile . ' 2>&1';
            exec($command);
            // if ($returnCode !== 0) {
            //     var_dump($outputArray);
            //     var_dump($returnCode);
            // }
            // var_dump($output);

            return json_encode(file_get_contents(\Yii::getAlias('@webroot') . DS . '..' . DS . 'python' . DS . 'landmarks' . DS . 'json' . DS . $file_name . '.json'));
        } else {
            API::returnError(500, "Something is wrong with file");
        }
        return "";
    }

    public function actionGetItems() {
        if ($_SERVER['REQUEST_METHOD'] !== 'GET')
            API::returnError(403, "Wrong request method");

        $start = Yii::$app->request->get('start');
        if (!$start)
            API::returnError(403, "Missing required parameter start");

        $end = Yii::$app->request->get('end');
        if (!$end)
            API::returnError(403, "Missing required parameter end");

        $items =
            Items::find()
                ->select([
                    'id',
                    'item_id',
                    'i_usg_type',
                    'i_type',
                    'i_comb_type_id'
                ])
                ->with([
                    'itemTitles' => function ($query) {
                        $query->select('itemID, title, description, languageID');
                    },
                    'colorSectors' => function ($query) {
                        $query->select('item_id, sector_id, color_id, description_ru, description_en');
                    }
                ], true)
                ->where(['>=', 'activated_at', $start])
                ->andWhere(['<=', 'activated_at', $end])->asArray()->all();

        foreach ($items as &$item) {
            foreach ($item['itemTitles'] as &$title) {
                unset($title['itemID']);
            }

            $item['zones'] = $item['colorSectors'];
            unset($item['colorSectors']);
            foreach ($item['zones'] as &$title) {
                unset($title['item_id']);
            }
        }

        return $items;
    }

    public function actionError() {
        API::returnError(500, "Internal server error");
    }
}