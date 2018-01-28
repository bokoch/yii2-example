<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 28.01.2018
 * Time: 15:43
 */

namespace frontend\models;

use Yii;

class News {

    public static function getNewsList($max) {

        $max = intval($max);

        $sql = 'SELECT * FROM news WHERE status = 1 LIMIT '.$max;

        $result =  Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['text'] = Yii::$app->stringHelper->getShort($item['text'], 30);
            }
        }

        return $result;
    }

    public static function getItem($id) {
        $id = intval($id);

        $sql = "SELECT * FROM news WHERE status = 1 AND id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne();
    }

}