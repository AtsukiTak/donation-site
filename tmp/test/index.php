<?php
$database = "dev";
$user = "dbuser";
$pass = "YvtUc3IYw";
$host = "docker_db_1";

try {
$pdo = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $pass,
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
}

$stmt = $pdo->query("SELECT * FROM test");
while($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
	print_r($row);
}

print("OK");
