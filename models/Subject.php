<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $image
 * @property string $name
 * @property int $year_of_birth
 * @property int $gender
 * @property int $height
 * @property int $wrist_size
 * @property int $is_me
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'year_of_birth', 'gender', 'height', 'wrist_size', 'image'], 'required'],
            [['is_me'], 'number'],
            [['created_at', 'deleted_at'], 'safe']
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
            'name' => 'Name',
            'wrist_size' => 'Wrist Size',
            'gender' => 'Gender',
            'image' => 'Image',
            'year_of_birth' => 'Year of birth',
            'height' => 'Height',
            'is_me' => 'Is Me',
        ];
    }

    public function getResult()
    {
        return $this->hasOne(Tresult::class, ['subject_id' => 'id']);
    }
}
