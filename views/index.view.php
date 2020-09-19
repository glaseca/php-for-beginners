<?php require 'partials/head.php'; ?>

<h1>Task For The Day</h1>
<ul>
    <?php foreach($tasks as $task) : ?>
        <li>
            <?php if($task->completed) : ?>
                <strike><?= $task->description; ?></strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'partials/footer.php'; ?>
