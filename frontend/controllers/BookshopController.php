<?php

namespace frontend\controllers;

use frontend\models\Book;
use yii\web\Controller;
use Yii;

class BookshopController extends Controller
{
    public function actionIndex()
    {
        $bookList = Book::find()->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();

        if (($book->load(Yii::$app->request->post())) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return $this->refresh();
        }


        return $this->render('create', [
            'book' => $book,
        ]);
    }

}
