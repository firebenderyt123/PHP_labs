<?php
$num1 = $_POST['num1'] ?? "";
?>

<form id="numberForm" method="post">
    <label for="num1">Введіть число:</label>
    <input type="text" id="num1" name="num1" value="<?= $num1 ?>" required>

    <input type="submit" value="<?= $button_text ?>">
</form>

