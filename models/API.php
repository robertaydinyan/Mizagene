<?php

namespace app\models;

use Yii;

class API {
    private static $links = [
        'items' => 'https://api.mizagene.com/items',
        'sectors' => 'https://api.mizagene.com/Sectors'
    ];

    public static function getToken() {
        $token = file_get_contents(\Yii::getAlias('@webroot') . DS . 'api_token.txt');
        if (!$token) {
            $ch = CURL::init("https://api.mizagene.com/Authentication");

            $configs = require \Yii::getAlias('@webroot') . '/config/cron.php';
            $postData = [
                'email' => $configs['email'],
                'password' => $configs['password']
            ];
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
            $token = json_decode(curl_exec($ch))->value;

            file_put_contents('api_token.txt', $token);
            CURL::close($ch);
        }
        return $token;
    }

    public static function getLink() {
        $link = self::$links[strtolower(substr(debug_backtrace()[1]['function'], 3))];
        return $link ?: new \Exception('missing table');
    }

    public static function returnError($code, $message) {
        http_response_code($code);
        echo json_encode(array(
            "error" => $message
        ));
        die();
    }
}