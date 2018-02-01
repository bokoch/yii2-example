<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 01.02.2018
 * Time: 18:23
 */

namespace common\component;

use common\component\UserNotificationInterface;
use yii\base\Component;
use Yii;

class EmailService extends Component
{

     public function notifyUser($event)
     {
         return Yii::$app->mailer->compose()
             ->setFrom('yaga.karlo@gmail.com')
             ->setTo($event->getEmail())
             ->setSubject($event->getSubject())
             ->send();
     }

}