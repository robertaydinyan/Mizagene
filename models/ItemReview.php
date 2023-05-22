<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int $item_id
 * @property int $subject_id
 * @property int|null $agree
 * @property int|null $disagree
 * @property int|null $disagree_value
 */
class ItemReview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'subject_id'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'item_id' => 'Item ID',
            'subject_id' => 'Subject ID',
            'agree' => 'Agree',
            'disagree' => 'Disagree',
            'disagree_value' => 'Disagree Value',
        ];
    }
}
