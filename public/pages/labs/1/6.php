<?php
$numbers = array(2, 10);
?>

<table class="multiplication-table">
    <tr>
        <th>&times;</th>
        <?php for ($i = $numbers[0]; $i <= $numbers[1]; $i++): ?>
            <th><?= $i ?></th>
        <?php endfor; ?>
    </tr>
    <?php for ($i = $numbers[0]; $i <= $numbers[1]; $i++): ?>
        <tr>
            <td><?= $i ?></td>
            <?php for ($j = $numbers[0]; $j <= $numbers[1]; $j++): ?>
                <td><?= $i * $j ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>