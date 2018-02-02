<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property int $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'status' => 'Status',
        ];
    }

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
}
