<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "item_title".
 *
 * @property int $id
 * @property int|null $languageID
 * @property int|null $itemID
 * @property string|null $title
 * @property string|null $description
 * @property string|null $title_temp
 * @property string|null $description_temp
 */
class ItemTitle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_title';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['languageID', 'itemID'], 'integer'],
            [['title', 'description', 'title_temp', 'description_temp'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'languageID' => 'Language ID',
            'itemID' => 'Item ID',
            'title' => 'Title',
            'description' => 'Description',
            'title_temp' => 'Title Temp',
            'description_temp' => 'Description Temp',
        ];
    }
}
