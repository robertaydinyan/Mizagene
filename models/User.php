<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $email
 * @property string $company_name
 * @property int $country
 * @property string $position
 * @property int $direction
 * @property int $employees
 * @property string $company_link
 * @property string $phone
 * @property int $status
 * @property int $year_of_birth
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'auth_key', 'access_token', 'email'], 'required'],
            [['username', 'password', 'auth_key', 'access_token', 'company_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'email' => 'Email',
            'company_name' => 'company_name',
            'country' => 'country',
            'position' => 'position',
            'direction' => 'direction',
            'employees' => 'employees',
            'company_link' => 'company_link',
            'phone' => 'phone',
            'status' => 'status',
            'year_of_birth' => 'Year of birth'
        ];
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        return self::find()->where(['access_token' => $token])->one();
    }


    public static function findByUsername($username){
        return self::findOne(['username' => $username]);
    }
    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->auth_key;
    }

    public function validateAuthKey($authKey){
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password,$this->password);
    }
}
