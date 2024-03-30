<?php
$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
$button_text = "Вивести відношення";
echo Functions::view_template("labs/2/form", compact('button_text'));

if (!isset($_POST['num1']) || !isset($_POST['num2'])) return;

$start = $num1;
$end = $num2;
if ($num1 > $num2) {
    $start = $num2;
    $end = $num1;
}

for ($i = $start; $i <= $end; $i++) {
    if ($i == 0) {
        echo "Ділення на нуль неможливе";
        return;
    }
    echo "10 / $i = " . (10 / $i) . "<br>";
}