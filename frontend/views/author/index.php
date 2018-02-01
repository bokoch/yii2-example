<?php
/* @var $this yii\web\View */
/* @var $authors frontend\models\Author */

use yii\helpers\Url;
?>
<h1>Authors List</h1>

<a href="<?php echo Url::to(['author/create']); ?>" class="btn btn-primary">Add new author</a>
<br><br>
<table class="table table-condensed">
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Edit</th>
    <th>Delete</th>
    <?php foreach ($authors as $author): ?>
        <tr>
            <td><?php echo $author->id; ?></td>
            <td><?php echo $author->first_name; ?></td>
            <td><?php echo $author->last_name; ?></td>
            <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id]); ?>">Edit</a></td>
            <td><a href="<?php echo Url::to(['author/delete', 'id' => $author->id]); ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
