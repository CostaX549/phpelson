<html> 
<head><title>Alteração de Clientes</title></head> 
<body> 
<h2 align="center">Alteração de Clientes</h2><hr> 

<?php

require_once "conecta.php"; 
if(!isset($_POST["txtCodigo"])) 
{ 
?> 
<form name="frmAlterar" method="POST" action="alterar.php"> 
<p>Código do Cliente:<input type="text" name="txtCodigo" size="20"> 
<input type="submit" value="Alterar Cliente" name="alterar"></p> 
</form> 
<?php 
} 
elseif(!isset($_POST["enviar"])) //busca dados do produto 
{ 
$codigo = $_POST["txtCodigo"]; 
$sql1="SELECT * FROM tbl_cliente where cli_codigo=$codigo"; 
$res=mysqli_query($conexao, $sql1); 
if(mysqli_num_rows($res)==0) 
echo "Cliente não encontrado"; 
else 
{ 
echo "Cliente encontrado"; 
$registro=mysqli_fetch_row($res); 
$nome=$registro[1]; 
$rg=$registro[2]; 
$cpf=$registro[3];
?>
<form method="POST" action="alterar.php"> 
<p>Código:<b><?php echo $codigo; ?></b><br><br> 
Nome:<input type="text" name="txtNome" size="40" value=" <?php echo $nome;?>"><br> 
RG:<input type="text" name="txtRG" size="10" value=" <?php echo $rg;?>"><br> 
CPF:<input type="text" name="txtCPF" size="40" value=" <?php echo $cpf;?>"><br> 
<input type="hidden" name="txtCodigo" value="<?php echo $codigo;?>"> 
<input type="hidden" name="enviar" value="S"> 
<input type="submit" value="Alterar produto" name="Alterar"></p>
</form>
<?php 
mysqli_close($conexao);
}
}
else //alterar produto 
{ 
$codigo=$_POST["txtCodigo"]; 
$nome=$_POST["txtNome"]; 
$rg=$_POST["txtRG"]; 
$cpf=$_POST["txtCPF"]; 
$sql = "UPDATE tbl_cliente 
        SET cli_nome = '$nome', 
            cli_rg = '$rg', 
            cli_cpf = '$cpf' 
        WHERE cli_codigo = '$codigo'";

$res2 = mysqli_query($conexao, $sql);
if (mysqli_affected_rows($conexao)== 1) 
{ 
echo"<p align='center'> Cliente alterado com sucesso!</p>"; 
}
else 
{ 
$erro=mysqli_error($conexao); 
echo "<p align='center'> Erro:$erro</p>"; 
mysqli_close($conexao); 
} 
}
?> 
<p align="center"><a href="javascript:history.back();">Voltar</a></p> 
</body> 
</html>
