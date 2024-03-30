<?php
session_start();

$num1 = $_POST['num1'] ?? "";

if (!isset($_SESSION['correct_num'])) {
    $_SESSION['correct_num'] = rand(0, 10);
}
$correct_num = $_SESSION['correct_num'];

$response = [];

if (is_numeric($num1)) {
    $num1 = (int)$num1;

    if ($num1 == $correct_num) {
        $response['result'] = "Правильно";
        $_SESSION['correct_num'] = null;
    } else {
        $response['result'] = "Число $num1 - Неправильно.";
    }
    if ($num1 < $correct_num) {
        $response['hint'] = "Загадане число більше";
    } else if ($num1 > $correct_num) {
        $response['hint'] = "Загадане число меншe";
    }
} else if (!empty($num1)) {
    $response['result'] = "Не число";
}

echo json_encode($response);