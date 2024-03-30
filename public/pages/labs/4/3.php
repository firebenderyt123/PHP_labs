<?php
$login = $_POST['login'] ?? "";
$passwd = $_POST['password'] ?? "";
$sign_up = $_POST['sign_up'] ?? "";
$sign_in = $_POST['sign_in'] ?? "";

$filepath = "";
if ($login) $filepath = "users/" . $login . ".txt";

if ($sign_in) {
    $path = Files::get_full_file_path($filepath);
    if (!$path) {
        echo "Такий користувач не зареєстрований!";
    } else {
        $data = Files::client_get_file("users/" . $login . ".txt");
        if (!$data || $data['content'] !== $passwd) {
            echo "Пароль не правильний";
        } else {
            echo "Доброго дня, $login!";
        }
    }
} else if ($sign_up) {
    $res = Files::create_file($filepath, $passwd);
    if ($res) echo "Реєстрація успішна";
    else echo "Користувач з таким логіном вже зареєстрований";
}
?>

<form method="post">
    <label for="login">Введіть логін:</label>
    <input type="text" id="login" name="login" value="<?= $login ?>" required>

    <label for="password">Введіть пароль:</label>
    <input type="password" id="password" name="password" required>
    <input type="submit" name="sign_up" value="Реєстрація"/>
    <input type="submit" name="sign_in" value="Вхід"/>
</form>