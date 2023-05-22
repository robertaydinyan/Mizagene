<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 * @property string $phone
 * @property string $email
 */
class Company extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'company_name', 'email', 'password','phone_number','auth_key', 'access_token'], 'required'],
            [['name', 'company_name', 'email', 'password','phone_number','auth_key', 'access_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'company_name' => 'Company Name',
            'email' => 'eMail',
            'password' => 'Password',
            'phone_number' => 'Phone Number',
            'company_residence' => 'Company Residence',
            'position' => 'Position',
            'field_of_activity' => 'Field of activity',
            'employees_quantity' => 'Employees Quantity',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token'


        ];
    }

    public static function findIdentity($id){
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        return self::find()->where(['access_token' => $token])->one();
    }


    public static function findByUsername($name){
        return self::findOne(['name' => $name]);
    }

    public static function findByeMail($email){
        return self::findOne(['email' => $email]);
    }

    public static function findByPhone($phone){
    return self::findOne(['phone_number' => $phone]);
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
