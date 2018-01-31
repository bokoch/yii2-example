<?php

namespace frontend\controllers;

use frontend\models\Employee;
use yii\web\Controller;
use Yii;

class EmployeeController extends Controller {

    public function actionRegister() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate() && $model->save())
                Yii::$app->session->setFlash('success', 'Регистрация прошла успешно!');
        }

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionUpdate() {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost) {
            $model->attributes = $formData;
            if ($model->validate() && $model->save())
                Yii::$app->session->setFlash('success', 'Данные успешно обновлены!');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}