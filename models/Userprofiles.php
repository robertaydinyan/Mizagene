<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\data\ActiveDataProvider;



/**
 * This is the model class for table "user_profiles_list".
 *
 * @property int $id
 * @property string $img
 * @property string|null $name
 * @property int|null $height
 * @property int|null $age
 * @property string $created_at
 * @property int|null $user_id
 * @property string|null $w_size
 * @property string|null $sex
 *
 * @property User $user
 */
class Userprofiles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_profiles_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img'], 'required'],
            [['height', 'age', 'user_id'], 'integer'],
            [['created_at'], 'safe'],
            [['w_size', 'sex'], 'string'],
            [['img', 'name'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'name' => 'Name',
            'height' => 'Height',
            'age' => 'Age',
            'created_at' => 'Created At',
            'user_id' => 'User ID',
            'w_size' => 'Wrist Size',
            'sex' => 'Sex',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function search($params)
    {
        $query = Userprofiles::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
