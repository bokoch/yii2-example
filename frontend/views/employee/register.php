<?php
/** @var model frontend\models\Subscribe */

//    if (Yii::$app->session->hasFlash('subscribeStatus'))
//        echo Yii::$app->session->getFlash('subscribeStatus');

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>

<h1>Register</h1>

<form method="post">
    <p>First name</p>
    <input type="text" name="firstName" />
    <br><br>

    <p>Last name</p>
    <input type="text" name="lastName" />
    <br><br>

    <p>Middle name</p>
    <input type="text" name="middleName" />
    <br><br>

    <p>Email</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>