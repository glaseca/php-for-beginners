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
        <?php foreach($names as $name) : ?>
            <li><?= $name; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
