<?php

namespace app\controllers;

use app\models\API;
use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use yii\web\Controller;

class ApiController extends Controller {
    public $enableCsrfValidation = false;

    public function beforeAction($action) {
        header("Content-Type: application/json");
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
        $uploadFile = \Yii::getAlias('@webroot') . '\images\face\\' . $file_name . '.' . explode('/', $file['type'])[1];
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            shell_exec('cd ' . \Yii::getAlias('@webroot') . DS . '..' . DS . 'python' . DS . 'landmarks' . DS . ' && python index.py ' . $uploadFile);
            echo json_encode(file_get_contents(\Yii::getAlias('@webroot') . DS . '..' . DS . 'python' . DS . 'landmarks' . DS . 'json' . DS . $file_name . '.json'));
        } else {
            API::returnError(500, "Something is wrong with file");
        }
    }
}