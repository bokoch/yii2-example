<?php

/* @var $model frontend\models\SearchForm  */
/* @var $results frontend\models\NewsSearch */
use frontend\helper\HighlightHelpers;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<h1>Search v2</h1>

<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'keyword') ?>

<?php echo Html::submitButton('Search', ['class' => 'btn btn-primary']); ?>

<?php $form = ActiveForm::end(); ?>
<hr>
<div class="com-md-12">
    <?php if ($results): ?>
        <?php foreach ($results as $item): ?>
            <b><?php echo $item['id'] . '. ' . $item['title']; ?></b>
            <br>
            <?php echo HighlightHelpers::process($model->keyword, $item['text']) ?>
            <hr>
        <?php endforeach;?>
    <?php endif; ?>
</div>
