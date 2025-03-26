<?php
require_once("conecta.php");

$nome = mysqli_real_escape_string($conexao, $_POST["txtNome"]);
$rg = mysqli_real_escape_string($conexao, $_POST["txtRG"]);
$cpf = mysqli_real_escape_string($conexao, $_POST["txtCPF"]);

$sql = "INSERT INTO tbl_cliente (cli_nome, cli_rg, cli_cpf) VALUES ('$nome', '$rg', '$cpf')";
$res2 = mysqli_query($conexao, $sql);

if ($res2) {
    echo "<p align='center'>Cliente incluído com sucesso!</p>";
} else {
    $erro = mysqli_error($conexao);
    echo "<p align='center'>Erro: $erro</p>";
}

mysqli_close($conexao);
?>

<p align="center"><a href="menu.php">Voltar</a></p>
</body>
</html>
