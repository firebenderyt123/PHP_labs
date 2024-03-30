<?php require_once "../autoload.php";

$page_path = $_SERVER['REQUEST_URI'];

$page_path_directory = Files::get_folder($page_path);
$tasks = Files::get_lab_files($page_path_directory);

$header = Functions::view_template("header");
$sidebar = Functions::view_template("sidebar", compact('page_path_directory', 'tasks'));
$content = Functions::view_content($page_path);
?>
<?= Functions::view_template("page", compact('header', 'sidebar', 'content')); ?>