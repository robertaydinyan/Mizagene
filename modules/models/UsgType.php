<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "usg_type".
 *
 * @property int $id
 * @property string $name
 * @property int $single
 * @property int $multiple
 */
class UsgType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usg_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['single', 'multiple'], 'integer'],
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
            'single' => 'Single',
            'multiple' => 'Multiple',
        ];
    }
}
