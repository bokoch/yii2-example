<?php
/* @var $this yii\web\View */
/* @var $author frontend\models\Author */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<h1>Update author ID: <?php echo $author->id; ?></h1>

<?php $form = ActiveForm::begin() ?>

<?php echo $form->field($author, 'first_name')?>

<?php echo $form->field($author, 'last_name')?>

<?php echo $form->field($author, 'birthdate')?>

<?php echo $form->field($author, 'rating')?>

<?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>

<?php $form = ActiveForm::end() ?>


