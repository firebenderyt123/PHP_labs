<?php
$name = $_POST["name"] ?? "";
$surname = $_POST["surname"] ?? "";
$email = $_POST["email"] ?? "";
?>

    <form id="costomerForm" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Send">
    </form>

<?php

if (!empty($name) && !empty($surname) && !empty($email)) {
    $customer = new Customer($name, $surname, $email);

    echo "Дані користувача:<br>";
    echo $customer->getSurname() . " " . $customer->getName() . "<br>";
    echo $customer->getEmail() . "<br>";
}
