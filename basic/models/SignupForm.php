<?php

namespace app\models;

use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $nick;
    public $password;
    public $password_repeat;

    public function rules()
    {
        return[
            [['nick', 'password', 'password_repeat'], 'required'],
            [['nick', 'password', 'password_repeat'], 'string', 'min' => 4, 'max' => 16],
            ['password_repeat', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->nick = $this->nick;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomKey();
        $user->auth_key = \Yii::$app->security->generateRandomString();

        if ($user->save()){
            return true;
        }

        \Yii::error("Problem with saving user in database." . VarDumper::dumpAsString($user->errors));
        return false;
    }

}
