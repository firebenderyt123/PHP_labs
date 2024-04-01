<?php
$valid_phone_number = "+38 (023) 45-67-890";
$invalid_phone_number = "+3801234567890";

function is_phone_valid($phone_number): string
{
    $res = preg_match('/^\+\d{1,2} \(\d{3}\) \d{2}-\d{2}-\d{3}$/', $phone_number);
    return "Phone " . $phone_number . " is " . ($res ? "valid" : "invalid") . "<br>";
}

echo is_phone_valid($valid_phone_number);
echo is_phone_valid($invalid_phone_number);