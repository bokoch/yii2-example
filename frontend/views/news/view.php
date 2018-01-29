<?php
    use yii\helpers\Url;
?>

<h3><?php echo $item['id'].'. '; ?>
    <?php echo $item['title']; ?>
</h3>
<p><?php echo $item['text']; ?></p>

<a href="<?php echo Url::to(['news/index']); ?>" class="btn btn-info">Back</a>
