<?php
require_once __DIR__ . '/../vendor/autoload.php';

header("Content-type: application/json");
$db = new \PDO("mysql:dbname=laravel;host=db;charset=utf8", 'root', 'root');
echo json_encode($db->query('SELECT * FROM tableOne')->fetchAll(PDO::FETCH_ASSOC));