<?php

$dates = array(
    "2024-04-01",
    "15-05-2024",
    "2024-07-23",
    "08-09-2024",
    "2024-10-30",
    "12-12-2024",
    "2025-01-20",
    "05-03-2025",
    "2025-06-18",
    "29-08-2025"
);

foreach ($dates as $date) {
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
        $formatted_date = preg_replace('/(\d{4})-(\d{2})-(\d{2})/', '$2.$3.$1', $date);
    } else {
        $formatted_date = preg_replace('/(\d{2})-(\d{2})-(\d{4})/', '$2.$1.$3', $date);
    }
    echo $formatted_date . "<br>";
}