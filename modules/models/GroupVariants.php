<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "group_variants".
 *
 * @property int $id
 * @property int $group_id
 * @property int $depth
 * @property string|null $parent_id
 * @property string $name
 * @property string $items
 * @property string $item_description_ru
 * @property string|null $item_description_en
 */
class GroupVariants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_variants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'depth', 'name', 'items', 'item_description_ru'], 'required'],
            [['group_id', 'depth'], 'integer'],
            [['items', 'item_description_ru', 'item_description_en'], 'safe'],
            [['parent_id', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'depth' => 'Depth',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
            'items' => 'Items',
            'item_description_ru' => 'Item Description Ru',
            'item_description_en' => 'Item Description En',
        ];
    }

    public function getItemsCount() {
        $result = 0;
        if ($this->items) {
            $items = is_array($this->items) ? $this->items : json_decode($this->items);
            foreach ($items as $items_id) {
                $result += 1;
            }
        }
        return $result;
    }

    public function getGroup() {
        return $this->hasOne(Group::class, ['id' => 'group_id']);
    }

    public function getVariantsCount() {
        return GroupVariants::find()->select('max(depth) as max_depth')->where(['parent_id' => $this->id])->asArray()->one()['max_depth'] ?: 0;
    }
}
