<?php
$num1 = $_POST['num1'] ?? "";
$button_text = "Чи ціле число";
echo Functions::view_template("labs/2/form2", compact('button_text'));

if (is_numeric($num1)) {
    if (filter_var($num1, FILTER_VALIDATE_INT) !== false) {
        echo "Число ціле";
    } else {
        echo "Число неціле";
    }
} else if (!empty($num1)) {
    echo "Не число";
}