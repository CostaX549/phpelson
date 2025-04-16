<html> 
<head><title>Consulta de Produtos</title></head> 
<body> 
<h2 align="center">Consulta de Produtos</h2><hr> 
<?php 
require_once "conecta.php"; 
$codigo=$_POST["txtCodigo"]; 
$sql1="SELECT * FROM tbl_cliente where cli_codigo=$codigo";
$res=mysqli_query($conexao, $sql1); 
if(mysqli_num_rows($res)==0) 
{ 
echo "Cliente não encontrado"; 
}
else 
{ 
echo "Cliente encontrado"; 
$registro = mysqli_fetch_row($res); 
$nome = $registro[1]; 
$rg = $registro[2]; 
$cpf = $registro[3]; 
?> 
<p>Código:<b><?php echo $codigo; ?></b><br><br> 
Nome:<input type="text" name="txtNome" size="40" value=" 
<?php echo $nome;?>"><br> 
RG:<input type="text" name="txt_RG" size="10" value=" 
<?php echo $rg;?>"><br> 
CPF:<input type="text" name="txt_CPF" size="10" value=" 
<?php echo $cpf;?>"><br>

<?php 
mysqli_close($conexao); 
} 
?> 
<p align="center"><a href="menu.php">Voltar</a></p> 
</body> 
</html>