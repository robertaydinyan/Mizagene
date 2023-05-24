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
        return 'parameter_influence';
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

    public function getItem() {
        return $this->hasOne(Items::class, ['id' => 'item_id']);
    }

    public function getItems() {
        return $this->hasMany(ParameterInfluenceItem::class, ['influence_id' => 'id']);
    }
}
