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

    public static function getNewsList() {

        $sql = 'SELECT * FROM news WHERE status = 1';
        return Yii::$app->db->createCommand($sql)->queryAll();

    }

}