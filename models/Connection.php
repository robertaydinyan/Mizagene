<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $subject_id
 * @property int $object_id
 * @property int $subject_type
 * @property int $object_type
 */
class Connection extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'connections';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'object_id', 'subject_type', 'object_type'], 'required'],
            [['created_at'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subject_id' => 'Subject ID',
            'object_id' => 'Object ID',
            'subject_type' => 'Subject Type',
            'object_type' => 'Object Type',
            'created_at' => 'Created At',
        ];
    }

    public function getObject()
    {
        return $this->hasOne(Subject::class, ['id' => ['object_id']]);
    }

}
