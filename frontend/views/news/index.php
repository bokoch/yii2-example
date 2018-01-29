<?php foreach ($list as $item): ?>

    <h3>
        <a href="<?php echo Yii::$app->urlManager->createUrl(['news/view', 'id' => $item['id']]); ?>">
            <?php echo $item['title']; ?>
        </a>
    </h3>
    <p><?php echo $item['text']; ?></p>
    <hr />

<?php endforeach; ?>
