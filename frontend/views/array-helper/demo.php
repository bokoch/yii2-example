<?php

/** @var $employees array */
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$emails =  ArrayHelper::getColumn($employees, 'email');
echo 'Our contacts: ' . implode(', ', $emails) . '.<br/><br/>';
echo Html::dropDownList('empEmail', [], $emails);
