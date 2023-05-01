<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $title_russian
 * @property string $title_english
 * @property string $description_russian
 * @property string $description_english
 * @property string $region
 * @property int $adult
 * @property resource|null $icon
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_russian', 'title_english', 'description_russian', 'description_english', 'region'], 'required'],
            [['region'], 'safe'],
            [['adult'], 'integer'],
            [['icon'], 'string'],
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
            'description_russian' => 'Description Russian',
            'description_english' => 'Description English',
            'region' => 'Region',
            'adult' => 'Adult',
            'icon' => 'Icon',
        ];
    }
}
