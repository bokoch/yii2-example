<?php
/** @var $book frontend\models\Book */
/* @var $publishers frontend\models\Publisher */

use dosamigos\datepicker\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($book, 'name'); ?>
    <?php echo $form->field($book, 'isbn'); ?>
    <?= $form->field($book, 'date_published')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'inline' => true,
        // modify template for custom rendering
        'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>
    <?php echo $form->field($book, 'publisher_id')->dropDownList($publishers); ?>

    <?php echo Html::submitButton('Save', [
        'class' => 'btn btn-primary'
    ])?>

<?php $form = ActiveForm::end(); ?>
