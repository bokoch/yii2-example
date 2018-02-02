<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

class NewsSearch
{
    public function simpleSearch($keyword)
    {
        $sql = "SELECT * FROM news WHERE text LIKE '%$keyword%'";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function fulltextSearch($keyword)
    {
        $sql = "SELECT * FROM news WHERE MATCH (text) AGAINST ('%$keyword%') LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function advancedSearch($keyword)
    {
        $sql = "SELECT * FROM idx_text WHERE MATCH ('$keyword') OPTION ranker=WORDCOUNT";
        $data =  Yii::$app->sphinx->createCommand($sql)->queryAll();

        $ids = ArrayHelper::map($data, 'id', 'id');
        $data = News::find()->where(['id' => $ids])->asArray()->all();

        $data = ArrayHelper::index($data, 'id');

        $result = [];
        foreach ($ids as $element) {
            $result[] = [
                'id' => $element,
                'title' => $data[$element]['title'],
                'text' => $data[$element]['text'],
            ];
        }

        return $data;

    }
}