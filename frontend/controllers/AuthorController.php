<?php

namespace frontend\controllers;

use frontend\models\Author;
use Yii;
use frontend\controllers\behaviors\AccessBehavior;

class AuthorController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            AccessBehavior::className(),
        ];
    }

    public function actionCreate()
    {
        $author = new Author();

        if ($author->load(Yii::$app->request->post()) && $author->save()) {
            Yii::$app->session->setFlash('success', 'Author added!');
            return $this->redirect(['author/index']);
        }

        return $this->render('create', [
            'author' => $author,
        ]);
    }

    public function actionDelete($id)
    {
        $author = Author::findOne($id);
        if ($author->delete())
            Yii::$app->session->setFlash('success', 'Author was deleted!');
        return $this->redirect(['author/index']);
    }

    public function actionIndex()
    {
        $authorsList = Author::find()->all();

        return $this->render('index', [
            'authors' => $authorsList,
        ]);
    }

    public function actionUpdate($id)
    {
        $author = Author::findOne($id);
        if ($author->load(Yii::$app->request->post()) && $author->save()) {
            Yii::$app->session->setFlash('success', 'Author updated!');
            return $this->redirect(['author/index']);
        }

        return $this->render('update', [
            'author' => $author,
        ]);
    }

}
