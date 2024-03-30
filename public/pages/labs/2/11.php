<?php
$label1 = "Початкове число бактерій";
$label2 = "Кінцеве число бактерій";
$button_text = "Відгадати";
echo Functions::view_template("labs/2/form", compact(
    'label1', 'label2', 'button_text'
));

$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;

if ($num1 > 0) {
    $hour = 0;
    $bacteries = $num1;

    if ($bacteries >= $num2) return;

    do {
        $bacteries *= 2;
        echo "минуло " . ++$hour . " год. - маємо $bacteries бактерій<br>";
    } while ($bacteries < $num2);
}
