<?php
/** @var model frontend\models\Subscribe */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

if ($model->hasErrors()) {
    print_r($model->getErrors());
}
?>

<h1>Register</h1>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'firstName'); ?>

    <?php echo $form->field($model, 'lastName'); ?>

    <?php echo $form->field($model, 'email'); ?>

    <?php echo $form->field($model, 'birthDate'); ?>

    <?php echo $form->field($model, 'hiringDate'); ?>

    <?php echo $form->field($model, 'position'); ?>

    <?php echo $form->field($model, 'idCode'); ?>

    <?php echo $form->field($model, 'city')->dropDownList($model->getCitiesList()); ?>

    <?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>

<?php ActiveForm::end(); ?>

<!--<form method="post">-->
<!--    <p>First name</p>-->
<!--    <input type="text" name="firstName"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>Last name</p>-->
<!--    <input type="text" name="lastName"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>Birth date</p>-->
<!--    <input type="text" name="birthDate"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>Email</p>-->
<!--    <input type="text" name="email"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>Hiring date</p>-->
<!--    <input type="text" name="hiringDate"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>City</p>-->
<!--    <input type="text" name="city"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>Position</p>-->
<!--    <input type="text" name="position"/>-->
<!--    <br><br>-->
<!---->
<!--    <p>ID Code</p>-->
<!--    <input type="text" name="idCode"/>-->
<!--    <br><br>-->
<!---->
<!--    <input type="submit" />-->
<!--</form>-->