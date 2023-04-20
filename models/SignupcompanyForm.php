<?php

namespace app\models;

use http\Message;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupcompanyForm extends Model
{
    public $name;
    public $password;
    public $password_repeat;


    public function rules(){

        return [
            [['name','password','password_repeat'],'required'],
            [['name','password','password_repeat'],'string','min' => 4, 'max' => 16],
            ['password_repeat', 'compare','compareAttribute' => 'password']
        ];
    }

    public function signupcompany(){
        $company = new Company();
        $company->name = $this->name;
        $company->password = \Yii::$app->security->generatePasswordHash($this->password);
        $company->access_token = \Yii::$app->security->generateRandomString();
        $company->auth_key = \Yii::$app->security->generateRandomString();

        if($company->save()){
            return true;
        }

        \Yii::error(message:"Company was not saved". VarDumper::dumpAsString($company->errors));
        return false;

    }
}