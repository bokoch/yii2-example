<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

class TestController extends Controller {

    public function actionIndex() {

        $list = News::getNewsList();

        return $this->render('test', [
            'list' => $list,
        ]);
    }

}