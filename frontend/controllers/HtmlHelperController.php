<?php

namespace frontend\controllers;

use yii\web\Controller;

class HtmlHelperController extends Controller
{

    public function actionDemo()
    {

        return $this->render('demo');

    }

    public function actionEscapeOutput()
    {

        $comments = [
            [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello',
            ],
            [
                'id' => 11,
                'author' => 'sam',
                'text' => 'How are you?',
            ],
            [
                'id' => 13,
                'author' => 'Cheat',
                'text' => '<b>Hello!</b><script>alert("Alert message");</script>',
            ],
        ];

        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }

}