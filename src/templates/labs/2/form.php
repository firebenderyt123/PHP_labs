<?php
global $action;
global $button_text;
$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
?>

<form method="post" <?php if ($action): ?>action="<?= $action ?>"<?php endif; ?>>
    <label for="num1">Введіть перше число:</label>
    <input type="text" id="num1" name="num1" value="<?= $num1 ?>" required>

    <label for="num2">Введіть друге число:</label>
    <input type="text" id="num2" name="num2" value="<?= $num2 ?>" required>

    <input type="submit" value="<?= $button_text ?>Вивести дії">
</form>


