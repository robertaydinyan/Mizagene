<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "reports".
 *
 * @property int $id
 * @property string $title_russian
 * @property string $title_english
 * @property string|null $groups
 * @property string $datetime
 * @property string $description_russian
 * @property string $description_english
 */
class Reports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_russian', 'title_english', 'description_russian', 'description_english'], 'required'],
            [['groups', 'datetime'], 'safe'],
            [['title_russian', 'title_english', 'description_russian', 'description_english'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_russian' => 'Title Russian',
            'title_english' => 'Title English',
            'groups' => 'Groups',
            'datetime' => 'Datetime',
            'description_russian' => 'Description Russian',
            'description_english' => 'Description English',
        ];
    }
}
