<?php require_once "../../autoload.php";
header('Content-Type: application/json');

$filepath = Files::get_correct_filepath(ROOT_DIR . "/public" . $_SERVER['REQUEST_URI']);

if ($filepath && $filepath != ROOT_DIR . "/public/api/index.php") require_once $filepath;
else {
    echo Functions::view_template("404");
}