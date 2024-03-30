<?php
$label1 = $label1 ?? "Введіть перше число:";
$label2 = $label2 ?? "Введіть друге число:";
$button_text = $button_text ?? "";

$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
?>

<form method="post">
    <label for="num1"><?= $label1 ?></label>
    <input type="number" id="num1" name="num1" value="<?= $num1 ?>" required>

    <label for="num2"><?= $label2 ?></label>
    <input type="number" id="num2" name="num2" value="<?= $num2 ?>" required>

    <input type="submit" value="<?= $button_text ?>">
</form>


