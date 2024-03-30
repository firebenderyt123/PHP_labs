<?php
$login = $_POST['login'] ?? "";
$password = $_POST['password'] ?? "";

function isLoggedIn($username, $password): bool
{
    $users = array();
    for ($i = 1; $i <= 4; $i++) {
        $users[] = array("login" => "log$i", "passwd" => "qwerty");
    }
    foreach ($users as $user) {
        if ($user["login"] == $username) {
            if ($user["passwd"] == $password) {
                return true;
            } else {
                return false;
            }
        }
    }
    return false;
}

if (!empty($login)) {
    if (isLoggedIn($login, $password)) {
        echo "Доброго дня, Рамський Петре Івановичу";
    } else {
        echo "Вибачте, невірний логін або пароль!";
    }
}
?>

<form method="post">
    <label for="login">Введіть логін:</label>
    <input type="text" id="login" name="login" value="<?= $login ?>" required>

    <label for="password">Введіть пароль:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" value="Перевіримо...">
</form>