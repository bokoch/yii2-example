<?php foreach ($list as $item): ?>

    <h3><?php echo $item['id'].'. '; ?>
        <?php echo $item['title']; ?>
    </h3>
    <p><?php echo $item['text']; ?></p>
    <br /><br />

<?php endforeach; ?>
