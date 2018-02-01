<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 02.02.2018
 * Time: 1:44
 */

namespace frontend\models\events;


use common\component\UserNotificationInterface;
use common\models\User;
use yii\base\Event;

class UserRegisterEvent extends Event implements UserNotificationInterface
{

    /**
     * @var User
     */
    public $user;
    public $subject;

    public function getSubject() {
        return $this->subject;
    }

    public function getEmail() {
        return $this->user->email;
    }

}