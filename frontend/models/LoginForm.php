<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 01.02.2018
 * Time: 16:03
 */

namespace frontend\models;

use Yii;
use common\models\User;
use yii\base\Model;

class LoginForm extends Model
{

    public $username;
    public $password;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['password', 'required'],
            ['password', 'validatePassword'],
        ];
    }

    public function validatePassword($attribute, $params) {
        $user = User::findByUsername($this->username);
        if ($user) {
            if (!$user->validatePassword($this->password))
                $this->addError($attribute, 'Incorrect password!');
        }
    }

    public function login() {
        if ($this->validate()) {
            $user = User::findByUsername($this->username);
            return Yii::$app->user->login($user);
        }
        return false;
    }

}