<?php

use yii\helpers\Html;

echo Html::tag('p', 'Some text');

$array = [
    '1' => 'Beirut',
    '2' => 'Berlin',
    '3' => 'Budapest',
    '4' => 'Rome',
];

echo Html::dropDownList('city', [], $array);

echo Html::radioList('city', [], $array);