<?php

namespace app\components;

use \Dejurin\GoogleTranslateForFree;

class Translate {
    public static function t($source, $language, $text) {
        $tr = new GoogleTranslateForFree();

        return $tr->translate($source, $language, $text, 5);
    }
}