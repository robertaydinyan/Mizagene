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
 * @property string|null $public_id
 * @property int $status
 * @property int $copied
 */
class Subject extends \yii\db\ActiveRecord {
    private static $genders = array(
        1 => 'Male',
        2 => 'Female',
        3 => 'Other (born as a male)',
        4 => 'Other (born as a female)'
    );
    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'subjects';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['user_id', 'name', 'year_of_birth', 'gender', 'height', 'wrist_size', 'image'], 'required'],
            [['is_me'], 'number'],
            [['created_at', 'deleted_at', 'public_id', 'status', 'copied'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
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
            'public_id' => 'Public ID',
            'status' => 'Status',
            'copied' => 'Copied',
            'created_at' => 'Created At',
            'deleted_at' => 'Deleted At',
        ];
    }

    public function getResult() {
        return $this->hasOne(Tresult::class, ['subject_id' => 'id']);
    }

    public function getUser() {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getConnections() {
        return $this->hasMany(Connection::class, ['subject_id' => 'id']);
    }

    public static function getGenders() {
        return self::$genders;
    }

    public function getGender() {
        return self::$genders[$this->gender];
    }
}
