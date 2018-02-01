<?php

namespace frontend\controllers;

use frontend\models\Book;
use frontend\models\Publisher;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use Yii;
use yii\web\NotFoundHttpException;

class BookshopController extends Controller
{
    public function actionIndex()
    {
        $bookList = Book::find()->all();

        $dataProvider = new ActiveDataProvider([
            'query' => Book::find(),
        ]);

        return $this->render('index', [
            'bookList' => $bookList,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();
        $publishers = Publisher::getList();

        if (($book->load(Yii::$app->request->post())) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return $this->refresh();
        }

        return $this->render('create', [
            'book' => $book,
            'publishers' => $publishers,
        ]);
    }

    public function actionView($id)
    {
        $model = $this->findModel($id);
        $publisherName = Publisher::getName($model->getPublisherName());

        return $this->render('view', [
            'model' => $model,
            'publisherName' => $publisherName,
        ]);
    }

    /**
     * Deletes an existing Publisher model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionUpdate($id)
    {
        $book = $this->findModel($id);
        $publishers = Publisher::getList();

        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'book' => $book,
            'publishers' => $publishers,
        ]);

    }

    /**
     * Finds the Publisher model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Book
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
