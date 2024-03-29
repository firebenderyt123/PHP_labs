<?php
$colors = array(
    "Red" => "#FF0000",
    "Green" => "#00FF00",
    "Blue" => "#0000FF",
    "Yellow" => "#FFFF00",
    "Cyan" => "#00FFFF",
    "Magenta" => "#FF00FF",
    "Black" => "#000000",
    "White" => "#FFFFFF"
); ?>

    <h2>Color Table</h2>

    <table>
        <tr>
            <th>Color Name</th>
            <th>Hex Code</th>
        </tr>
<?php foreach ($colors as $color => $hex): ?>
    <tr>
        <td><?= $color ?></td>
        <td><?= $hex ?></td>
    </tr>
<?php endforeach; ?>