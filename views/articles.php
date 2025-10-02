<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>

<body>
    <h1>Liste des articles</h1>
    <ul>
        <?php foreach ($articles as $id => $title): ?>
            <li>
                <a href="?action=show&id=<?= $id ?>">
                    <?= htmlspecialchars($title) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>