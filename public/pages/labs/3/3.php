<?php
$firstname = $_POST["firstname"] ?? "";
$surname = $_POST["surname"] ?? "";
$age = $_POST["age"] ?? "";
$email = $_POST["email"] ?? "";

$user_data = null;
if (!empty($firstname) && !empty($surname) &&
    !empty($age) && !empty($email)) {
    $user_data = array(
        "firstname" => $firstname,
        "surname" => $surname,
        "age" => $age,
        "email" => $email
    );
}
?>

<form method="post">
    <label for="firstname">Ім'я</label>
    <input type="text" id="firstname" name="firstname" required>

    <label for="surname">Прізвище</label>
    <input type="text" id="surname" name="surname" required>

    <label for="age">Вік</label>
    <input type="number" id="age" name="age" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <input type="submit" value="Готово">
</form>

<table>
    <?php if ($user_data != null): ?>
        <?php foreach ($user_data as $key => $value): ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</table>