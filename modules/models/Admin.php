<?php

namespace app\modules\models;

use Yii;
use yii\db\ActiveRecord;

class Admin extends ActiveRecord implements \yii\web\IdentityInterface {
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    public static function tableName() {
        return 'admin';
    }

    public function beforeSave($insert) {
        if (!$this->id) {
            $this->setPassword($this->password_hash);
            $this->auth_key = \Yii::$app->security->generateRandomString();
        } else {
            if (!empty($this->password_hash)) {
                $this->setPassword($this->password_hash);
            } else {
                $this->password_hash = (string) $this->getOldAttribute('password_hash');
            }
        }

        return parent::beforeSave($insert);
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'id',
            'email' => 'email',
            'username' => 'username',
            'role' => 'role',
            'password_hash' => 'password_hash',
            'created_at' => 'created_at',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id) {
        return static::findOne(['id' => $id]);
    }



    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return string
     * @throws \yii\base\Exception
     */
    public static function generateAccessToken() {
        return Yii::$app->security->generateRandomString();
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) {
        return static::findOne(['username' => $username]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId() {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey() {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     * @throws \yii\base\Exception
     */
    public function setPassword($password) {

        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password) {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

}
