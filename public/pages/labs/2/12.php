<?php

function multiplication_table($number): void
{
    echo "<table>";
    for ($i = 1; $i <= 9; $i++) {
        $result = $number * $i;
        echo "<tr><td>$number * $i = $result</td></tr>";
    }
    echo "</table>";
}

?>

<table>
    <?php for ($num = 2; $num <= 9; $num++): ?>
        <td><?php multiplication_table($num); ?></td>
    <?php endfor; ?>
</table>