<?php

namespace app\models;

use app\modules\models\Items;
use app\modules\models\ItemTitle;
use app\components\Translate;
use app\modules\models\Language;

class Mizagene {
    public $date;
    private $token;

    public function __construct($date, $token) {
        $this->date = $date;
        $this->token = $token;
    }

    public function getItems() {
        $ch = CURL::init(API::getLink(), $this->token, 1);
        $items = json_decode(curl_exec($ch));
        foreach ($items as $item) {
            $i = new Items();
            $i->item_id = $item->item_id;
            $i->source = 1;
            $i->save();

            $languages = Language::find()->all();
            $special_languages = array(
                1 => array('item_ru', 'i_description_ru'),
                2 => array('item_en', 'i_description_en'),
                3 => array('item_ir', 'i_description_ir'),
                null => array('', '')
            );
            foreach ($languages as $language) {
                $lang = $special_languages[$language->id];
                $it = new ItemTitle();
                $it->languageID = $language->id;
                $it->title = $item->{$lang[0]};
                $it->title_temp = Translate::t('fa', $language->short_code, $item->item_ir);
                $it->description = $item->{$lang[1]};
                $it->description_temp = Translate::t('fa', $language->short_code, $item->i_description_ir);
                $it->itemID = $i->id;

                $it->title = $it->title == "undefined" ? null : $it->title;
                $it->description = $it->description == "undefined" ? null : $it->description;
                $it->save();
            }
        }
    }

    public function getSectors() {
        $ch = CURL::init(API::getLink(), $this->token, 1);
        $sectors = json_decode(curl_exec($ch));
        foreach ($sectors as $sector) {
            $item = Items::find()->where(['item_id' => $sector->item_id])->one();
            $item->i_result_sector1_colorid = $sector->i_result_sector1_colorid;
            $item->i_result_sector2_colorid = $sector->i_result_sector2_colorid;
            $item->i_result_sector3_colorid = $sector->i_result_sector3_colorid;
            $item->i_result_sector4_colorid = $sector->i_result_sector4_colorid;
            $item->i_result_sector5_colorid = $sector->i_result_sector5_colorid;
            $item->i_result_sector6_colorid = $sector->i_result_sector6_colorid;
            $item->i_result_sector7_colorid = $sector->i_result_sector7_colorid;
            $item->i_result_sector8_colorid = $sector->i_result_sector8_colorid;
            $item->i_result_sector9_colorid = $sector->i_result_sector9_colorid;
            $item->i_result_sector10_colorid = $sector->i_result_sector10_colorid;
            $item->save();
        }
    }
}