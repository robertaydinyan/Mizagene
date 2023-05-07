<?php

namespace app\models;

class CURL {
    public static function init($link, $token = null, $type = 0) {
        $ch = curl_init();
        $headers  = [
            'Content-Type: application/json'
        ];
        if ($token) {
            $headers[] = 'Authorization: Bearer ' . $token;
        }

        curl_setopt($ch, CURLOPT_URL,$link);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        if (!$type) curl_setopt($ch, CURLOPT_POST, 1);
        else curl_setopt($ch, CURLOPT_HTTPGET, 1);
        return $ch;
    }

    public static function close($ch) {
        curl_close($ch);
    }
}