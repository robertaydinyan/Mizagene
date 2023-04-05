<?php

namespace app\modules\models;

use Yii;
use yii\rbac\Item;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property int|null $e2e_item_id
 * @property int|null $item_id
 * @property string|null $i_type
 * @property string|null $i_usg_type
 * @property string|null $i_comb_type_id
 * @property string|null $e2e_item_ru
 * @property string|null $e2e_i_description_ru
 * @property string|null $e2e_item_en
 * @property string|null $e2e_i_description_en
 * @property string|null $e2e_item_ir
 * @property string|null $e2e_i_description_ir
 * @property string|null $i_result_sector1_colorid
 * @property string|null $i_result_sector2_colorid
 * @property string|null $i_result_sector3_colorid
 * @property string|null $i_result_sector4_colorid
 * @property string|null $i_result_sector5_colorid
 * @property string|null $i_result_sector6_colorid
 * @property string|null $i_result_sector7_colorid
 * @property string|null $i_result_sector8_colorid
 * @property string|null $i_result_sector9_colorid
 * @property string|null $i_result_sector10_colorid
 * @property int|null $source
 * @property int|null $check1
 * @property int|null $check2
 * @property int|null $check3
 * @property int|null $check4
 */
class Items extends \yii\db\ActiveRecord
{
    private static $COLOR_RANGE = array(
        0 => '',
        '' => '',
        'critical' => 'critical',
        'bad' => 'bad',
        'notenough' => 'notenough',
        'good' => 'good',
        'verygood' => 'verygood'
    );
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['e2e_item_id', 'item_id', 'source', 'check1', 'check2', 'check3', 'check4'], 'integer'],
            [['i_type', 'i_usg_type', 'i_comb_type_id', 'i_result_sector1_colorid', 'i_result_sector2_colorid', 'i_result_sector3_colorid', 'i_result_sector4_colorid', 'i_result_sector5_colorid', 'i_result_sector6_colorid', 'i_result_sector7_colorid', 'i_result_sector8_colorid', 'i_result_sector9_colorid', 'i_result_sector10_colorid'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'e2e_item_id' => 'E2e Item ID',
            'item_id' => 'Item ID',
            'i_type' => 'I Type',
            'i_usg_type' => 'I Usg Type',
            'i_comb_type_id' => 'I Comb Type ID',
            'i_result_sector1_colorid' => 'I Result Sector1 Colorid',
            'i_result_sector2_colorid' => 'I Result Sector2 Colorid',
            'i_result_sector3_colorid' => 'I Result Sector3 Colorid',
            'i_result_sector4_colorid' => 'I Result Sector4 Colorid',
            'i_result_sector5_colorid' => 'I Result Sector5 Colorid',
            'i_result_sector6_colorid' => 'I Result Sector6 Colorid',
            'i_result_sector7_colorid' => 'I Result Sector7 Colorid',
            'i_result_sector8_colorid' => 'I Result Sector8 Colorid',
            'i_result_sector9_colorid' => 'I Result Sector9 Colorid',
            'i_result_sector10_colorid' => 'I Result Sector10 Colorid',
            'source' => 'Source',
            'check1' => 'check1',
            'check2' => 'check2',
            'check3' => 'check3',
            'check4' => 'check4'
        ];
    }

    public function getTitle($language = '') {
        if (!$language) return '';
        $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $language])->one();
        return $it ?: new ItemTitle();
    }

    public function getDescription($language = '') {
        if (!$language) return '';
        $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $language])->one();
        return $it ?: new ItemTitle();
    }

    public static function saveData($post, $model) {
        if ($model->load($post)) {
            if ($model->save()) {
                foreach ($post['Items']['title'] as $i => $t) {
                    $it = ItemTitle::find()->where(['itemID' => $model->id, 'languageID' => $i])->one() ?: new ItemTitle();
                    if ($it->description != $post['Items']['description'][$i] || $it->title != $t)
                        $model->check4 = 1;
                    $it->description = $post['Items']['description'][$i];
                    $it->title = $t;
                    $it->itemID = $model->id;
                    $it->languageID = $i;
                    $it->save();
                }
                return $model->save();
            }
        }
        return false;
    }

    public function getCheck() {
        return $this->{'check' . Yii::$app->admin->getIdentity()->role};
    }

    public static function getColorRange() {
        return self::$COLOR_RANGE;
    }
}
