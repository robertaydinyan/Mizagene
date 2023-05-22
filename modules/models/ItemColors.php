<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "item_colors".
 *
 * @property int $id
 * @property int $item_id
 * @property int|null $sector_id
 * @property string|null $color_id
 * @property string|null $description_ru
 * @property string|null $description_en
 * @property int|null $status
 * @property string|null $comment
 */
class ItemColors extends \yii\db\ActiveRecord
{
    private static $statuses = array(
        0 => ' ',
        1 => 'R',
        2 => 'W'
    );

    private static $COLOR_RANGE = array(
        0 => '',
        1 => 'critical',
        2 => 'bad',
        3 => 'notenough',
        4 => 'neutral',
        5 => 'good',
        6 => 'verygood'
    );

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_colors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id'], 'required'],
            [['item_id', 'sector_id', 'status'], 'integer'],
            [['color_id', 'description_ru', 'description_en', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'sector_id' => 'Sector ID',
            'color_id' => 'Color ID',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }

    public function getStatusT() {
        return self::$statuses[$this->status];
    }

    public static function getColorRange() {
        return self::$COLOR_RANGE;
    }

    public function getColor() {
        return self::$COLOR_RANGE[$this->color_id];
    }
}
