<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $subject_id
 * @property string $result
 * @property int $mizagene_id
 * @property float $safra
 * @property float $soda
 * @property float $dam
 * @property float $balgham
 */
class Tresult extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tresult';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id', 'result'], 'required'],
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
            'result' => 'Result',
            'mizagene_id' => 'Mizagene ID',
            'safra' => 'Safra',
            'soda' => 'Soda',
            'dam' => 'Dam',
            'balgham' => 'Balgham'
        ];
    }

}
