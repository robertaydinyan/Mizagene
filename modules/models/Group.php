<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string $name
 * @property string|null $items
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
            [['name'], 'required'],
            [['items'], 'safe'],
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
            'items' => 'Items',
        ];
    }
    public function getItems() {
        $itemsList = array();
        if ($this->items) {
            foreach(json_decode($this->items) as $item) {
                array_push($itemsList, Items::findOne($item)->e2e_item_en);
            }
        }
        return $itemsList;
    }
}