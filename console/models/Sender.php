<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 28.01.2018
 * Time: 20:21
 */

namespace console\models;

use Yii;

class Sender {

    public static function run($subsribers, $news) {

        foreach ($subsribers as $subsriber) {
            $result = Yii::$app->mailer->compose('/mailer/news', [
                    'newsList' => $news
                ])
                ->setFrom('yaga.karlo@gmail.com')
                ->setTo($subsriber['email'])
                ->setSubject('Тема сообщения')
                ->send();
            var_dump($result);
        }

    }

}