<?php

namespace app\models;

use Yii;
use http\Message;
use app\models\User;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupcompanyForm extends Model
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
            [['username', 'password', 'password_repeat', 'email', 'phone'], 'required'],
            [['username', 'password', 'password_repeat'], 'string', 'min' => 4, 'max' => 16],
            ['password_repeat', 'compare', 'compareAttribute' => 'password'],
            [['email', 'company_name', 'country', 'position', 'direction', 'employees', 'company_link', 'phone', 'status'], 'string', 'max' => 255],
            [['email'], 'email'],
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
        $company = new User();

        $company->username = $this->username;
        $company->password = \Yii::$app->security->generatePasswordHash($this->password);
        $company->access_token = \Yii::$app->security->generateRandomString();
        $company->auth_key = \Yii::$app->security->generateRandomString();
        $company->email = $this->email;
        $company->company_name = $this->company_name;
        $company->country = $this->country;
        $company->position = $this->position;
        $company->direction = $this->direction;
        $company->employees = $this->employees;
        $company->company_link = $this->company_link;
        $company->phone = $this->phone;
        $company->status = $this->status;
        $company->year_of_birth = $this->year_of_birth;

        if (!$company->save()) {
            if (isset($company->errors['password'])) {
                $this->addError('password', 'Invalid password. Password must contain at least one letter, one number, and one special character.');
            }
            \Yii::error(message:"Company was not saved". VarDumper::dumpAsString($company->errors));
            return false;
        }

        if($company->save()){
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