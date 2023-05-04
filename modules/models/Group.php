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
 * @property string|null $region
 * @property int $adult
 * @property resource|null $icon
 * @property string|null $items
 * @property int $pushed
 * @property string|null $datetime
 * @property int|null $created
 * @property int|null $accepted
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
            [['title_russian', 'title_english', 'description_russian', 'description_english'], 'required'],
            [['region', 'items', 'datetime'], 'safe'],
            [['adult', 'pushed', 'created', 'accepted'], 'integer'],
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
            'items' => 'Items',
            'pushed' => 'Pushed',
            'datetime' => 'Datetime',
            'created' => 'Created',
            'accepted' => 'Accepted',
        ];
    }
}
