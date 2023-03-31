<?php

namespace app\models;

use Yii;

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
 * @property int|null $i_result_sector1_colorid
 * @property int|null $i_result_sector2_colorid
 * @property int|null $i_result_sector3_colorid
 * @property int|null $i_result_sector4_colorid
 * @property int|null $i_result_sector5_colorid
 * @property int|null $i_result_sector6_colorid
 * @property int|null $i_result_sector7_colorid
 * @property int|null $i_result_sector8_colorid
 * @property int|null $i_result_sector9_colorid
 * @property int|null $i_result_sector10_colorid
 */
class Items extends \yii\db\ActiveRecord
{
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
            [['e2e_item_id', 'item_id', 'i_result_sector1_colorid', 'i_result_sector2_colorid', 'i_result_sector3_colorid', 'i_result_sector4_colorid', 'i_result_sector5_colorid', 'i_result_sector6_colorid', 'i_result_sector7_colorid', 'i_result_sector8_colorid', 'i_result_sector9_colorid', 'i_result_sector10_colorid'], 'integer'],
            [['i_type', 'i_usg_type', 'i_comb_type_id', 'e2e_item_ru', 'e2e_i_description_ru', 'e2e_item_en', 'e2e_i_description_en', 'e2e_item_ir', 'e2e_i_description_ir'], 'string', 'max' => 255],
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
            'e2e_item_ru' => 'E2e Item Ru',
            'e2e_i_description_ru' => 'E2e I Description Ru',
            'e2e_item_en' => 'E2e Item En',
            'e2e_i_description_en' => 'E2e I Description En',
            'e2e_item_ir' => 'E2e Item Ir',
            'e2e_i_description_ir' => 'E2e I Description Ir',
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
        ];
    }
}
