<?php
$users = array("log1", "log2", "log3", "log4");
$login = $_POST['login'] ?? "";

if (!empty($login)) {
    if (in_array($login, $users)) {
        echo "Доброго дня, Рамський Петре Івановичу";
    } else {
        echo "Вибачте, Ви у нас не зареєстровані!";
    }
}
?>

<form method="post">
    <label for="login">Введіть логін:</label>
    <input type="text" id="login" name="login" value="<?= $login ?>" required>

    <input type="submit" value="Перевіримо...">
</form>