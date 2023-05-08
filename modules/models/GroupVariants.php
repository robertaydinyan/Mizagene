<?php

namespace app\modules\models;

use Yii;

/**
 * This is the model class for table "group_variants".
 *
 * @property int $id
 * @property int $group_id
 * @property string $name
 * @property string $items
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
            [['group_id', 'name', 'items'], 'required'],
            [['group_id'], 'integer'],
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
            'group_id' => 'Group ID',
            'name' => 'Name',
            'items' => 'Items',
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
