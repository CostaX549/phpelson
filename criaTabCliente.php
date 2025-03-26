<?php
$dbnome = "bd_cliente";

$conexao = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");


$criadb = mysqli_query($conexao, "CREATE DATABASE IF NOT EXISTS $dbnome");


$abre = mysqli_query($conexao, "USE $dbnome");


$tbNome1 = "tbl_cliente";


$elimina = "DROP TABLE IF EXISTS $tbNome1";
$resDrop = mysqli_query($conexao, $elimina);

if ($resDrop) {
    echo "Tabela $tbNome1 eliminada.<br>";
} else {
    echo "Tabela $tbNome1 não existe.<br>";
}


$criacao1 = "CREATE TABLE IF NOT EXISTS $tbNome1 ("
    . "cli_codigo SMALLINT NOT NULL AUTO_INCREMENT, "
    . "cli_nome VARCHAR(80) NOT NULL, "
    . "cli_rg VARCHAR(20) NOT NULL, "
    . "cli_cpf VARCHAR(30) NOT NULL, "
    . "PRIMARY KEY (cli_codigo)"
    . ")";


$resCria1 = mysqli_query($conexao, $criacao1);

if ($resCria1) {
    echo "Tabela $tbNome1 criada.<br>";
} else {
    echo "Tabela $tbNome1 não pode ser criada.<br>";
}

mysqli_close($conexao);
?>
