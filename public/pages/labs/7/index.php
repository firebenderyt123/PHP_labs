<?php
$host = "postgres";
$port = "5432";
$dbname = "docker";
$user = "docker";
$password = "docker";

$conn_string = "pgsql:host=$host;port=$port;dbname=$dbname;";
$conn_string .= "user=$user;password=$password";
$pdo = new PDO($conn_string);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result = $pdo->query("SELECT * FROM Notes")->fetchAll();
?>
<pre><?= print_r($result, true); ?></pre>