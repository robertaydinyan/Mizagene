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
 * @property resource|null $icon
 * @property string|null $region
 * @property string|null $comment
 * @property int $order
 * @property int $disabled
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
            [['groups', 'datetime', 'region'], 'safe'],
            [['icon', 'comment'], 'string'],
            [['order', 'disabled'], 'integer'],
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
            'icon' => 'Icon',
            'region' => 'Region',
            'comment' => 'Comment',
            'order' => 'Order',
            'disabled' => 'Disabled',
        ];
    }

    public function getGroupsCount() {
        $result = 0;
        if ($this->groups) {
            is_string($this->groups) && $this->groups = array($this->groups);
            foreach ($this->groups as $group_id) {
                $result += 1;
            }
        }
        return $result;
    }

    public function getGroupsNames() {
        $result = [];
        !is_array($this->groups) && $this->groups = array($this->groups);
        foreach ($this->groups as $group_id) {
            $variant = GroupVariants::findOne(['id' => $group_id]);
            $result[] = ($variant ? $variant->group->title_russian . ' ' . $variant->name : '');
        }
        if ($this->id == 7)die();
        return $result;
    }
}
