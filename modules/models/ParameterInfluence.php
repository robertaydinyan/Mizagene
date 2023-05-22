<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "parameter influence".
 *
 * @property int $id
 * @property int $type
 * @property int $item_id
 */
class ParameterInfluence extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parameter influence';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'item_id'], 'required'],
            [['type', 'item_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'item_id' => 'Item',
        ];
    }
}
