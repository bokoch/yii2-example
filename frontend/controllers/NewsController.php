<?php

namespace frontend\controllers;

use Faker\Factory;
use frontend\widgets\newsList\NewsList;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{

    public function actionSearch() {

        return $this->render('search', [

        ]);
    }

    public function actionIndex() {
        $dataProvider = new ActiveDataProvider([
            'query' => News::find()->limit(5),
            'pagination' => false,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

//    public function actionGenerate()
//    {
//        ini_set('max_execution_time', 900);
//        $faker = Factory::create();
//        for ($j = 0; $j < 200; $j++) {
//            $news = [];
//            for ($i = 0; $i < 200; $i++) {
//                $news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0, 1)];
//            }
//            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'text', 'status'], $news)
//                ->execute();
//            unset($news);
//        }
//        die('stop');
//    }
}