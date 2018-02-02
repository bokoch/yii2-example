<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 02.02.2018
 * Time: 14:31
 */

namespace frontend\models;


use yii\base\Model;

class SearchForm extends Model
{

    public $keyword;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3],

        ];
    }

    public function search()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->simpleSearch($this->keyword);
        }
    }

}