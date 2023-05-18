<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "item_rule".
 *
 * @property int $id
 * @property string $name
 * @property int $type
 * @property int $sub_min_age
 * @property int $sub_max_age
 * @property int|null $obj_min_age
 * @property int|null $obj_max_age
 */
class ItemRule extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_rule';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'sub_min_age', 'sub_max_age'], 'required'],
            [['type', 'sub_min_age', 'sub_max_age', 'obj_min_age', 'obj_max_age'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'sub_min_age' => 'Sub Min Age',
            'sub_max_age' => 'Sub Max Age',
            'obj_min_age' => 'Obj Min Age',
            'obj_max_age' => 'Obj Max Age',
        ];
    }
}
