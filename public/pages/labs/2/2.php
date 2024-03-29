<?php
$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;

$max_num = max($num1, $num2);

$button_text = "Вивести більше число";
echo Functions::view_template("labs/2/form", compact('button_text'));
?>

<?php ob_start(); ?>
    <p>Результат: <?= $num1 != $num2 ? $max_num : 'Числа однакові' ?></p>
<?php
$results = ob_get_contents();
ob_end_clean();
echo $results;
?>