<?php
global $page_path_directory;
global $tasks;

const LABS = "labs";

?>

<aside>
    <div>
        <?php if (str_contains($page_path_directory, LABS)): ?>
            <?php foreach ($tasks as $key => $value): ?>
                <p><a href="<?= "$page_path_directory/$key" ?>"><?= $value ?></a></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</aside>
