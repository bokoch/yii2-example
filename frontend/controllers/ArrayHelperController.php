<?php

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;

class ArrayHelperController extends Controller
{

    public function actionDemo()
    {
        $model = new Employee();
        $employees = $model->find();

        return $this->render('demo', [
            'employees' => $employees,
        ]);
    }

}