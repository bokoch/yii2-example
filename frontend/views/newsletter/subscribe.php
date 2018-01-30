<?php
    /** @var model frontend\models\Subscribe */

    $this->title = "Подпишитесь на новости";
    $this->registerMetaTag([
            'name' => 'description',
            'content' => 'Description of the page',
    ]);

    if ($model->hasErrors()) {
        print_r($model->getErrors());
    }
?>

<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>