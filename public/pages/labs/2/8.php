<?php
$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$button_text = "Покажи таблицю множення";
echo Functions::view_template("labs/2/form2", compact('button_text'));

function generateRandomColor(): string
{
    $red = str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    $green = str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    $blue = str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    return "#$red$green$blue";
}

?>
<?php if (isset($_POST['num1'])): ?>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p style="color: <?= generateRandomColor() ?>"><?= "$num1 * $i = " . ($num1 * $i) ?></p>
    <?php endfor; ?>
<?php endif; ?>
