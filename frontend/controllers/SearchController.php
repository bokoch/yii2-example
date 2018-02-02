<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 02.02.2018
 * Time: 15:17
 */

namespace frontend\controllers;

use Yii;
use frontend\models\SearchForm;
use yii\web\Controller;

class SearchController extends Controller
{

    public function actionIndex()
    {
        $model = new SearchForm();
        $results = array();

        if ($model->load(Yii::$app->request->post())) {
            $results = $model->search();
        }

        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }

    public function actionAdvanced()
    {
        $model = new SearchForm();
        $results = array();
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->searchAdvanced();
        }

        return $this->render('advanced', [
            'model' => $model,
            'results' => $results,
        ]);
    }
}