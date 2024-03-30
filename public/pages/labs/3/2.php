<?php

$countries = array(
    "Україна" => array("population" => 44000000, "capital" => "Київ"),
    "Польща" => array("population" => 38000000, "capital" => "Варшава"),
    "Німеччина" => array("population" => 83000000, "capital" => "Берлін"),
    "Франція" => array("population" => 67000000, "capital" => "Париж"),
    "Великобританія" => array("population" => 66000000, "capital" => "Лондон"),
    "Іспанія" => array("population" => 47000000, "capital" => "Мадрид"),
    "Італія" => array("population" => 60000000, "capital" => "Рим"),
    "Туреччина" => array("population" => 82000000, "capital" => "Анкара"),
    "Португалія" => array("population" => 10300000, "capital" => "Лісабон")
);
?>

<table>
    <th>Країна</th>
    <th>Населення</th>
    <th>Столиця</th>
    <?php foreach ($countries

    as $country => $info): ?>
    <tr>
        <td><?= $country ?></td>
        <td><?= $info["population"] ?></td>
        <td><?= $info["capital"] ?></td>
    <tr>
        <?php endforeach; ?>
</table>
