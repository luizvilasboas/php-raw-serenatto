<?php

$config = parse_ini_file(dirname(__FILE__) . "/../.env");

$host = $config["DB_HOST"];
$port = $config["DB_PORT"];
$banco_de_dados = $config["DB_DATABASE"];
$usuario = $config["DB_USERNAME"];
$senha = $config["DB_PASSWORD"];

try {
    $pdo = new PDO("mysql:host={$host};port={$port};dbname={$banco_de_dados}", $usuario, $senha);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
