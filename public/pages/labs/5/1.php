<?php
$email = "example@example.com";

if (preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
    echo $email . " is valid email address";
} else {
    echo $email . "is invalid email address";
}