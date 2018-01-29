<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller {

    public function actionIndex() {

        $max = Yii::$app->params['maxNewsInList'];
        $list = News::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);
    }

    public function actionView($id) {
        $item = News::getItem($id);

        return $this->render('view', [
            'item' => $item
        ]);
    }

    public function actionMail() {
        $result = Yii::$app->mailer->compose()
            ->setFrom('yaga.karlo@gmail.com')
            ->setTo('bokoch1995@gmail.com')
            ->setSubject('Тема')
            ->setTextBody('Текст')
            ->send();

        die;
    }

}