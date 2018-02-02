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

        if ($model->load(Yii::$app->request->post())) {
            $results = $model->search();
        }

        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }

}