<table>
    <?php for ($i = 1; $i < 11; $i++): ?>
        <td>
            <?php
            $table = new MultiplicationTable($i);
            $table->calculate();
            echo $table->getTable();
            ?>
        </td>
    <?php endfor; ?>
</table>