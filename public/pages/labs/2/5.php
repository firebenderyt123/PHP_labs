<?php
$num1 = $_POST['num1'] ?? "";
$button_text = "Перевіримо число на парність";
echo Functions::view_template("labs/2/form2", compact('button_text'));

if (is_numeric($num1)) {
    if ($num1 % 2 == 0) {
        echo "Число парне";
    } else {
        echo "Число непарне";
    }
} else if (!empty($num1)) {
    echo "Не число";
}
