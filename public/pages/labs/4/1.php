<?php
$filename = $_POST["filename"] ?? "";
?>
    <p>Підказка: Спробуй file.txt</p>
    <form method="post">
        <label for="filename">Введіть назву файла:</label>
        <input type="text" id="filename" name="filename" value="<?= $filename ?>" required>

        <input type="submit" value="Готово">
    </form>
<?php
if (!empty($filename)) {
    $stat = Files::client_get_file(basename($filename));
    if ($stat) {
        echo "Файл з іменем $filename існує у каталозі файлів";
        echo "<pre>" . print_r($stat, true) . "</pre>";
    } else {
        echo "Файл з іменем $filename не існує у каталозі файлів";
    }
}
?>