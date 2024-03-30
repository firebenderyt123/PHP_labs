<?php
$filepath = Files::get_full_file_path("file.txt");
$tags = 0;
?>

<table>
    <?php $fp = @fopen($filepath, "r"); ?>
    <?php if ($fp): ?>
        <?php while (($buffer = fgets($fp, 4096)) !== false): ?>
            <?php
            $arr = explode("-", htmlentities($buffer));
            $tags++;
            ?>
            <tr>
                <td><?= $arr[0] ?></td>
                <td><?= $arr[1] ?></td>
            </tr>
        <?php endwhile; ?>
        <?php
        if (!feof($fp)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($fp);
        ?>
    <?php endif; ?>
</table>
<p>Всього у файлі описано тегів: <?= $tags ?></p>