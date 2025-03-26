<?php
// Dados para conexão
$servidor = "localhost"; // Servidor
$bd = "bd_cliente";
// Banco de Dados
$usuario = "root";
// Usuário
$senha = "";
// Senha
// Conectando
$conexao = mysqli_connect($servidor, $usuario, $senha) or die("ERRO NA CONEXÃO");
// Seleciona Banco de Dados a ser utilizado
$db= mysqli_select_db($conexao,$bd) or die("Erro na seleção do banco");
