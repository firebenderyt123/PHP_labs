<?php
session_start();

$num1 = $_POST['num1'] ?? "";

if (!isset($_SESSION['correct_num'])) {
    $_SESSION['correct_num'] = rand(0, 10);
}
$correct_num = $_SESSION['correct_num'];

echo "Я загадав число від 0 до 10";

$button_text = "Перевірка";
echo Functions::view_template("labs/2/form2", compact('button_text'));

if (is_numeric($num1)) {
    $num1 = (int)$num1;

    if ($num1 == $correct_num) {
        echo "Правильно";
        $_SESSION['correct_num'] = null;
    } else {
        echo "Число $num1 - Неправильно.";
    }
    if ($num1 < $correct_num) {
        echo "Загадане число більше";
    } else if ($num1 > $correct_num) {
        echo "Загадане число меншe";
    }
} else if (!empty($num1)) {
    echo "Не число";
}