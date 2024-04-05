<?php

for ($i = 1; $i < 6; $i++) {
    $country = new Country("Country $i", "Capital $i", $i . "000000");
}
echo Country::getTable();