<?php
require_once(dirname(__FILE__) . "/src/conexao-db.php");
require_once(dirname(__FILE__) . "/src/Modelo/Produto.php");
require_once(dirname(__FILE__) . "/src/Repositorio/ProdutoRepositorio.php");

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtoRepositorio->deletar($_POST["id"]);

header("Location: admin.php");
