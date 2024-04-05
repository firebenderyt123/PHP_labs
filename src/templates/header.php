<header>
    <ul class="menu">
        <?php
        $labs = 8;
        for ($i = 1; $i <= $labs; $i++): ?>
            <li><a href="/labs/<?= $i ?>">Lab <?= $i ?></a></li>
        <?php endfor; ?>
    </ul>
</header>