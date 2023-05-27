<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "parameter_influence_item".
 *
 * @property int $id
 * @property int $influence_id
 * @property int $item_id
 * @property int $weight
 * @property string $lower_value
 * @property string $upper_value
 * @property string $coefficient
 */
class ParameterInfluenceItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parameter_influence_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['influence_id', 'item_id', 'weight', 'lower_value', 'upper_value', 'coefficient'], 'required'],
            [['influence_id', 'item_id', 'weight'], 'integer'],
            [['lower_value', 'upper_value', 'coefficient'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'influence_id' => 'Influence ID',
            'item_id' => 'Item ID',
            'weight' => 'Weight',
            'lower_value' => 'Lower Value',
            'upper_value' => 'Upper Value',
            'coefficient' => 'Coefficient',
        ];
    }

    public function getItem() {
        return $this->hasOne(Items::class, ['id' => 'item_id']);
    }
}
