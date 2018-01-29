<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 29.01.2018
 * Time: 17:23
 */

namespace frontend\widgets\newsList;

use Yii;
use yii\base\Widget;
use frontend\models\News;

class NewsList extends Widget
{
    const SIDE_BLOCK_NEWS_LIMIT = 5;
    const MIDDLE_BLOCK_NEWS_LIMIT = 3;
    public $showLimit = null;

    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];

        if ($this->showLimit) {
            $max = $this->showLimit;
        }

        $list = News::getNewsList($max);
        return $this->render('blockNews', [
            'list' => $list,
        ]);
    }

}