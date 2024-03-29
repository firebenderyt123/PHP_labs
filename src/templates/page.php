<?php
global $header;
global $sidebar;
global $content;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labs list | Ponomarenko</title>
    <link href="/css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?= $header ?>
<div class="container">
    <?= $sidebar ?>
    <main>
        <?= $content ?>
    </main>
</div>
</body>
</html>