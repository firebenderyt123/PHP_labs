<?php
$a = $_POST["num1"] ?? "";
$b = $_POST["num2"] ?? "";
$operation = $_POST["operation"] ?? "";

$disptacher = new Dispatcher();
$operations = array("+", "-", "*", "/", "%", "sqrt", "^");
?>

    <form id="calc" method="post" style="display: inline-block;">
        <input type="number" step="0.01" id="num1" name="num1" value="<?= $a ?>" required style="width: 50px">
        <select id="operation" name="operation">
            <?php foreach ($operations as $oper): ?>
                <option value="<?= $oper ?>" <?= $operation == $oper ? "selected" : "" ?>>
                    <?= $oper ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="number" step="0.01" id="num2" name="num2" <?= $operation === "sqrt"
            ? 'value="0" hidden' : 'value="' . $b . '"' ?> required style="width: 50px">

        <input type="submit" value="Calc">
    </form>
    <script>
        document.getElementById('operation').addEventListener('change', function () {
            let num2Field = document.getElementById('num2');
            if (this.value === 'sqrt') {
                num2Field.setAttribute('hidden', '');
                num2Field.value = '0';
            } else {
                num2Field.removeAttribute('hidden');
            }
        });
    </script>

<?php
$disptacher->dispatch($a, $b, $operation);
$disptacher->display();
