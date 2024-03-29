<?php
$button_text = "Вивести дії";
echo Functions::view_template("labs/2/form", compact('button_text'));

$num1 = isset($_POST['num1']) ? intval($_POST['num1']) : 0;
$num2 = isset($_POST['num2']) ? intval($_POST['num2']) : 0;
?>

<?php ob_start(); ?>
<p><?= "Сума: $num1 + $num2 = " . ($num1 + $num2) ?></p>
<p><?= "Різниця: $num1 - $num2 = " . ($num1 - $num2) ?></p>
<p><?= "Множення: $num1 * $num2 = " . ($num1 * $num2) ?></p>
<?php if ($num2 != 0): ?>
    <p><?= "Ділення: $num1 / $num2 = " . ($num1 / $num2) ?></p>
    <p><?= "Залишок від ділення: $num1 % $num2 = " . ($num1 % $num2) ?></p>
<?php endif; ?>
<?php
$results = ob_get_contents();
ob_end_clean();
echo $results;
?>
