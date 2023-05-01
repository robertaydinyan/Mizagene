<?php

namespace app\models;

use http\Message;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_repeat;


    public function rules(){

        return [
            [['username','password','password_repeat'],'required'],
            [['username','password','password_repeat'],'string','min' => 4, 'max' => 16],
            ['password_repeat', 'compare','compareAttribute' => 'password']
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


        if($user->save()){
            return true;
        }

            \Yii::error(message:"User was not saved". VarDumper::dumpAsString($user->errors));
            return false;

    }
}