<?php

namespace app\models;

use Yii;
use http\Message;
use app\models\User;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;
    public $email;
    public $company_name;
    public $country;
    public $position;
    public $direction;
    public $employees;
    public $company_link;
    public $phone;
    public $status;
    public $year_of_birth;

    public function rules(){

        return [
            [['username', 'password', 'password_repeat', 'email'], 'required'],
            [['username', 'password', 'password_repeat'], 'string', 'min' => 4, 'max' => 16],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            [['email', 'company_name', 'country', 'position', 'direction', 'employees', 'company_link', 'phone', 'status'], 'string', 'max' => 255],
            [['email'], 'email'],
            [['year_of_birth'], 'required'],
            [['year_of_birth'], 'integer', 'min' => 1903, 'max' => date('Y')],

        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Username',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
            'email' => 'email',
            'company_name' => 'company_name',
            'country' => 'country',
            'position' => 'position',
            'direction' => 'direction',
            'employees' => 'employees',
            'company_link' => 'company_link',
            'phone' => 'phone',
            'status' => 'status',
            'year_of_birth' => 'year_of_birth'
        ];
    }

    public function signup(){
        $user = new User();

        $user->username = $this->username;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();
        $user->email = $this->email;
        $user->company_name = $this->company_name;
        $user->country = $this->country;
        $user->position = $this->position;
        $user->direction = $this->direction;
        $user->employees = $this->employees;
        $user->company_link = $this->company_link;
        $user->phone = $this->phone;
        $user->status = $this->status;
        $user->year_of_birth = $this->year_of_birth;





        if (!$user->save()) {
            if (isset($user->errors['password'])) {
                $this->addError('password', 'Invalid password. Password must contain at least one letter, one number, and one special character.');
            }
            \Yii::error(message:"User was not saved". VarDumper::dumpAsString($user->errors));
            return false;
        }

        if($user->save()){
            return true;
        }



    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $passwordStrength = \Yii::$app->security->passwordStrength($this->password);
            if ($passwordStrength < 3) {
                $this->addError($attribute, 'Password is not strong enough.');
            }
        }
    }
}