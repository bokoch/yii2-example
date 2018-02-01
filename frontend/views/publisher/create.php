<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Publisher */

$this->title = 'Create Publisher';
$this->params['breadcrumbs'][] = ['label' => 'Publishers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="publisher-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin() ?>

    <?php echo $form->field($model, 'name')?>

    <?php echo $form->field($model, 'date_registered')?>

    <?php echo $form->field($model, 'identity_number')?>

    <?php echo Html::submitButton('Save', ['class' => 'btn btn-primary']); ?>

    <?php $form = ActiveForm::end() ?>

</div>
