<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach($person as $key => $feature) : ?>
            <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
