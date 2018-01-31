<?php
/* @var $this yii\web\View */
/* @var $bookList[] frontend\models\Book */
?>
<h1>View books</h1>

<?php foreach ($bookList as $book): ?>
    <div class="col-md-10">
        <h3><?php echo $book->name; ?></h3>
        <p><?php echo $book->getDatePublished(); ?></p>
        <p><?php echo $book->getPublishername(); ?></p>
        <p>Authors:</p>
        <?php foreach ($book->getAuthors() as $author): ?>
            <ul>
                <li><?php echo $author->first_name; ?></li>
            </ul>
        <?php endforeach; ?>
        <hr>
    </div>
<?php endforeach; ?>

