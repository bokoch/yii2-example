<?php
/**
 * Created by PhpStorm.
 * User: Bokoch
 * Date: 01.02.2018
 * Time: 16:05
 */

namespace frontend\controllers;


use frontend\models\LoginForm;
use frontend\models\SignupForm;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->signup()) {

            Yii::$app->session->setFlash('success', 'User is registered');
            return $this->redirect(['site/index']);
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->redirect(['site/index']);
    }

}