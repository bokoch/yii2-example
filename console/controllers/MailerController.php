<?php

namespace console\controllers;

use Yii;
use console\models\Subscriber;
use console\models\News;
use console\models\Sender;
use yii\base\Controller;

class MailerController extends Controller {

    public function actionSend() {
        $news = News::getList();
        $subscribers = Subscriber::getList();

        $result = Sender::run($subscribers, $news);
    }

}